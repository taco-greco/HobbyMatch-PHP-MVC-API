<?php

namespace src\Controller;

use src\Model\Hobby;
use src\Service\JwtService;

class ApiHobbyController
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function delete(int $id)
    {
        if ($_SERVER['REQUEST_METHOD'] != "DELETE") {
            header("HTTP/1.1 405 Method Not Allowed");
            return json_encode([
                "code" => 1,
                "Message" => "Get Attendu"
            ]);
        }

        // JWT check
        $jwtresult = JwtService::checkToken();
        if ($jwtresult["status"] == "error") {
            return json_encode($jwtresult["message"]);
        }

        if (!in_array("Administrateur", $jwtresult["data"]->roles)) {
            return json_encode([
                "status" => "error",
                "message" => "Vous n'avez pas le role Administrateur"
            ]);
        }

        $hobby = Hobby::SqlGetById($id);
        if (!$hobby) {
            header("HTTP/1.1 404 Not Found");
            return json_encode([
                "code" => 1,
                "Message" => "Hobby non trouvé"
            ]);
        }

        Hobby::SqlDelete($id);
        return json_encode([
            "code" => 0,
            "Message" => "Hobby supprimé avec succès"
        ]);
    }

    // public function getAll()
    // {
    //     if ($_SERVER["REQUEST_METHOD"] != "GET") {
    //         header("HTTP/1.1 405 Method Not Allowed");
    //         return json_encode([
    //             "code" => 1,
    //             "Message" => "Get Attendu"
    //         ]);
    //     }

    //     $hobbies = Hobby::SqlGetAll();
    //     return json_encode($hobbies);
    // }

    public function getAll($page = 1)
    {
        if ($_SERVER["REQUEST_METHOD"] != "GET") {
            header("HTTP/1.1 405 Method Not Allowed");
            echo json_encode([
                "code" => 1,
                "Message" => "GET Attendu"
            ]);
            return;
        }

        $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 30;
        $page = is_numeric($page) ? (int)$page : 1;

        $hobbies = Hobby::FlutterGetAll($limit, $page);
        echo json_encode($hobbies);
    }


    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            header("HTTP/1.1 405 Method Not Allowed");
            return json_encode([
                "code" => 1,
                "Message" => "POST Attendu"
            ]);
        }

        // JWT check
        // $jwtresult = JwtService::checkToken();
        // if ($jwtresult["status"] == "error") {
        //     return json_encode($jwtresult["message"]);
        // }

        // if (!in_array("Administrateur", $jwtresult["data"]->roles)) {
        //     return json_encode([
        //         "status" => "error",
        //         "message" => "Vous n'avez pas le role Administrateur"
        //     ]);
        // }

        //Récupération du body en String
        $data = file_get_contents("php://input");
        //Conversion du string en JSON
        $json = json_decode($data);

        if (empty($json)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode([
                "code" => 1,
                "Message" => "Il faut des données"
            ]);
        }

        if (!isset($json->Titre) || !isset($json->Description)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode(
                [
                    "status" => "error",
                    "message" => "Il faut des données"
                ]
            );
        }

        //Gestion de l'image
        $sqlRepository = null;
        $nomImage = null;

        if (isset($json->Image)) {
            $nomImage = uniqid() . ".jpg";
            //Fabriquer le répertoire d'accueil
            $dateNow = new \DateTime();
            $sqlRepository = $dateNow->format('Y/m');
            $repository = './uploads/images/' . $dateNow->format('Y/m');
            if (!is_dir($repository)) {
                mkdir($repository, 0777, true);
            }
            //Fabriquer l'image
            $ifp = fopen($repository . "/" . $nomImage, "wb");
            fwrite($ifp, base64_decode($json->Image));
            fclose($ifp);
        }

        $hobby = new Hobby();
        $hobby->setTitre($json->Titre)
            ->setDescription($json->Description)
            ->setDate(new \DateTime($json->DatePublication))
            ->setAuteur($json->Auteur)
            ->setImageRepository($sqlRepository)
            ->setImageFileName($nomImage)
            ->setPrix($json->Prix)
            ->setEmailContact($json->EmailContact)
            ->setLatitude($json->Latitude)
            ->setLongitude($json->Longitude);
        $id = Hobby::SqlAdd($hobby);
        return json_encode([
            "code" => 0,
            "Message" => "Hobby ajouté avec succès",
            "Id" => $id
        ]);
    }

    public function update(int $id)
    {
        if ($_SERVER["REQUEST_METHOD"] != "PUT") {
            header("HTTP/1.1 405 Method Not Allowed");
            return json_encode([
                "code" => 1,
                "Message" => "PUT Attendu"
            ]);
        }

        // JWT check
        $jwtresult = JwtService::checkToken();
        if ($jwtresult["status"] == "error") {
            return json_encode($jwtresult["message"]);
        }

        if (!in_array("Administrateur", $jwtresult["data"]->roles)) {
            return json_encode([
                "status" => "error",
                "message" => "Vous n'avez pas le role Administrateur"
            ]);
        }

        //Récupération du body en String
        $data = file_get_contents("php://input");
        //Conversion du string en JSON
        $json = json_decode($data);

        if (empty($json)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode([
                "code" => 1,
                "Message" => "Il faut des données"
            ]);
        }

        if (!isset($json->Titre) || !isset($json->Description)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode(
                [
                    "status" => "error",
                    "message" => "Il faut des données"
                ]
            );
        }

        $hobby = Hobby::SqlGetById($id);
        if (!$hobby) {
            header("HTTP/1.1 404 Not Found");
            return json_encode([
                "code" => 1,
                "Message" => "Hobby non trouvé"
            ]);
        }

        //Gestion de l'image
        $sqlRepository = $hobby->getImageRepository();
        $nomImage = $hobby->getImageFileName();

        if (isset($json->Image) && !empty($json->Image)) {
            $nomImage = uniqid() . ".jpg";
            //Fabriquer le répertoire d'accueil
            $dateNow = new \DateTime();
            $sqlRepository = $dateNow->format('Y/m');
            $repository = './uploads/images/' . $sqlRepository;
            if (!is_dir($repository)) {
                mkdir($repository, 0777, true);
            }
            //Fabriquer l'image
            $ifp = fopen($repository . "/" . $nomImage, "wb");
            fwrite($ifp, base64_decode($json->Image));
            fclose($ifp);

            //Si il y'avait une image déjà en place on la vire :
            if ($hobby->getImageFileName() && file_exists("{$_SERVER["DOCUMENT_ROOT"]}/uploads/images/{$hobby->getImageRepository()}/{$hobby->getImageFileName()}")) {
                unlink("{$_SERVER["DOCUMENT_ROOT"]}/uploads/images/{$hobby->getImageRepository()}/{$hobby->getImageFileName()}");
            }
        }

        $hobby->setTitre($json->Titre)
            ->setDescription($json->Description)
            ->setDate(new \DateTime($json->DatePublication))
            ->setAuteur($json->Auteur)
            ->setImageRepository($sqlRepository)
            ->setImageFileName($nomImage)
            ->setPrix($json->Prix)
            ->setEmailContact($json->EmailContact)
            ->setLatitude($json->Latitude)
            ->setLongitude($json->Longitude);
        Hobby::SqlUpdate($hobby);
        return json_encode([
            "code" => 0,
            "Message" => "Hobby mis à jour avec succès"
        ]);
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            header("HTTP/1.1 405 Method Not Allowed");
            return json_encode(
                [
                    "status" => "error",
                    "message" => "Post Attendu"
                ]
            );
        }

        // Récupération du Body en String
        $data  = file_get_contents("php://input");
        //Conversion du String en JSON
        $json = json_decode($data);

        if (empty($json)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode(
                [
                    "status" => "error",
                    "message" => "Il faut des données"
                ]
            );
        }

        if (!isset($json->keyword)) {
            header("HTTP/1.1 400 Bad Request");
            return json_encode(
                [
                    "status" => "error",
                    "message" => "Il faut des données"
                ]
            );
        }
        $hobbies = Hobby::SqlSearch($json->keyword);
        return json_encode($hobbies);
    }
}
