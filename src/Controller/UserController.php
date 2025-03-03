<?php

namespace src\Controller;

use src\Model\User;
use src\Service\JwtService;

class UserController extends AbstractController
{
    public function create()
    {

        if (isset($_POST["mail"]) && isset($_POST["password"]) && isset($_POST["roles"])) {
            // Validate email
        if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception("Invalid email format");
        }

        // Validate password (minimum 8 characters, at least one letter and one number)
        if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $_POST["password"])) {
            throw new \Exception("Password must be at least 8 characters long and contain at least one letter and one number");
        }

        // Validate roles (assuming roles are predefined and stored in an array)
        $validRoles = ["Verificateur", "Administrateur", "Redacteur"];
        foreach ($_POST["roles"] as $role) {
            if (!in_array($role, $validRoles)) {
                throw new \Exception("Invalid role: $role");
            }
        }
            $user = new User();
            $hashpass = password_hash($_POST["password"], PASSWORD_BCRYPT, ["cost" => 12]);
            $user->setEMail($_POST["mail"])
                ->setPassword($hashpass)
                ->setRoles($_POST["roles"]);
            $id = User::SqlAdd($user);
            header("Location:/User/login");
            exit();
        } else {
            return $this->twig->render("User/create.html.twig");
        }
    }

    public function login()
    {
        if (isset($_POST["mail"]) && isset($_POST["password"])) {
            //Requete SQL qui va cherches les info du User avec le mail
            $user = User::SqlGetByMail($_POST["mail"]);
            if ($user != null) {
                //Comparer le mdp hasché avec celui saisi dans le formulaire
                if (password_verify($_POST["password"], $user->getPassword())) {
                    //Créer les sessions sinon Lever une Exception
                    // Et rediriger vers /AdminHobby/list
                    $_SESSION["login"] = [
                        "Email" => $user->getEMail(),
                        "Roles" => $user->getRoles()
                    ];
                    header("Location:/AdminHobby/list");
                } else {
                    throw new \Exception("Mot de passe incorrect pour {$_POST["mail"]}");
                }
            } else {
                throw new \Exception("Aucun user avec ce mail en base");
            }
        } else {
            return $this->twig->render("User/login.html.twig");
        }
    }

    public static function haveGoodRole(array $rolesCompatibles)
    {
        if (!isset($_SESSION["login"])) {
            throw new \Exception("Vous devez vous authentifier pour accéder à cette page");
        }
        // Comparaison role par role
        $roleFound = false;
        foreach ($_SESSION["login"]["Roles"] as $role) {
            if (in_array($role, $rolesCompatibles)) {
                $roleFound = true;
                break;
            }
        }
        if (!$roleFound) {
            throw new \Exception("Vous dn'avez pas le bon role pour accéder à cette page");
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        header("Location:/");
    }

    //Rote qu'on va appeler par API
    public function loginjwt()
    {
        header("Content-Type: application/json; charset=utf-8");

        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            header("HTTP/1.1 405 Method Not Allowed");
            echo json_encode([
                "code" => 1,
                "Message" => "Post Attendu"
            ]);
            exit;
        }

        $data = file_get_contents("php://input");
        $json = json_decode($data);

        if (empty($json)) {
            header("HTTP/1.1 403 Forbidden");
            echo json_encode([
                "code" => 1,
                "Message" => "Il faut des données"
            ]);
            exit;
        }

        if (!isset($json->mail) || !isset($json->password)) {
            header("HTTP/1.1 403 Forbidden");
            echo json_encode([
                "code" => 1,
                "Message" => "Il manque le mail ou le password"
            ]);
            exit;
        }

        $user = User::SqlGetByMail($json->mail);
        if ($user == null) {
            header("HTTP/1.1 403 Forbidden");
            echo json_encode([
                "code" => 1,
                "Message" => "User inexistant"
            ]);
            exit;
        }

        if (!password_verify($json->password, $user->getPassword())) {
            header("HTTP/1.1 403 Forbidden");
            echo json_encode([
                "code" => 1,
                "Message" => "Mot de passe invalid"
            ]);
            exit;
        }

        $token = JwtService::createToken([
            "mail" => $user->getEmail(),
            "roles" => $user->getRoles()
        ]);

        echo json_encode([
            "code" => 0,
            "token" => $token
        ]);
        exit;
    }
}
