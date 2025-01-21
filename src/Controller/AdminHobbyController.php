<?php

namespace src\Controller;

use src\Model\Hobby;

class AdminHobbyController extends AbstractController
{
    public function list()
    {
        UserController::haveGoodRole(["Verificateur", "Administrateur", "Redacteur"]);
        $hobbies = Hobby::SqlGetAll();
        return $this->twig->render('Admin/Hobby/list.html.twig', [
            'hobbies' => $hobbies
        ]);
    }
    public function delete(int $id)
    {
        UserController::haveGoodRole(["Administrateur"]);
        Hobby::SqlDelete($id);
        header("Location:/AdminHobby/list");
    }

    public function add()
    {
        UserController::haveGoodRole(["Administrateur", "Redacteur"]);
        if (isset($_POST['Titre']) && isset($_POST['Description'])) {
            //1. Upload Fichier
            $sqlRepository = null; // On ne fera pas X requetes SQL différentes donc on déclare les variables dès le début pour les utiliser dans la requete SQL
            $nomImage = null;

            if (!empty($_FILES['Image']['name'])) {
                $tabExt = ['jpg', 'gif', 'png', 'jpeg'];    // Extensions autorisees
                $extension = pathinfo($_FILES['Image']['name'], PATHINFO_EXTENSION);
                // strtolower = on compare ce qui est comparage (JPEG =! jpeg)
                if (in_array(strtolower($extension), $tabExt)) {
                    // Fabrication du répertoire d'accueil façon "Wordpress" (YYYY/MM)
                    $dateNow = new \DateTime();
                    $sqlRepository = $dateNow->format('Y/m');
                    $repository = './uploads/images/' . $dateNow->format('Y/m');
                    if (!is_dir($repository)) {
                        mkdir($repository, 0777, true);
                    }
                    // Renommage du fichier (d'où l'intéret d'avoir isolé l'extension
                    $nomImage = md5(uniqid()) . '.' . $extension;

                    //Upload du fichier, voilà c'est fini !
                    move_uploaded_file($_FILES['Image']['tmp_name'], $repository . '/' . $nomImage);
                }
            }
            //2. Créer un objet Hobby
            $hobby = new Hobby();
            $hobby->setTitre($_POST['Titre']);
            $hobby->setDescription($_POST['Description']);
            $hobby->setAuteur($_POST['Auteur']);
            $hobby->setImageRepository($sqlRepository);
            $hobby->setImageFileName($nomImage);
            $hobby->setDate(new \DateTime($_POST['DatePublication']));
            $hobby->setLatitude($_POST['Latitude']);
            $hobby->setLongitude($_POST['Longitude']);

            //3. Exécuter la requete SQL d'ajout (model)
            $id = Hobby::SqlAdd($hobby);

            //4. Rédiriger l'internaute sur la page liste
            header("location: /AdminHobby/show/{$id}");
            exit();
        }
        return $this->twig->render('Admin/Hobby/add.html.twig');
    }

    public function show(int $id)
    {
        $hobby = Hobby::SqlGetById($id);
        if ($hobby == null) {
            header("Location: /Hobby/all");
        }
        return $this->twig->render("Hobby/show.html.twig", [
            "hobby" => $hobby
        ]);
    }

    public function update(int $id)
    {
        UserController::haveGoodRole(["Administrateur", "Verificateur"]);

        $hobby = Hobby::SqlGetById($id);

        if (isset($_POST["Titre"])) {
            $sqlRepository = (isset($_POST["ImageRepository"])) ? $_POST["ImageRepository"]
                : null; // Si champ image actuelle alors on prend la valeur sinon null
            $nomImage = (isset($_POST["ImageFileName"])) ? $_POST["ImageFileName"] : null;
            if (isset($_FILES["Image"]["name"])) {
                $extensionsAutorisee = ["jpg", "jpeg", "png"];
                $extension = pathinfo($_FILES["Image"]["name"], PATHINFO_EXTENSION);
                if (in_array($extension, $extensionsAutorisee)) {
                    // Créer réperoire date "2023/12"
                    $dateNow = new \DateTime();
                    $sqlRepository = $dateNow->format("Y/m");
                    $repository = "./uploads/images/{$sqlRepository}";
                    if (!is_dir($repository)) {
                        mkdir($repository, 0777, true);
                    }
                    // Renommer le fichier image
                    $nomImage = uniqid() . "." . $extension;
                    //Envoyer le fichier dans le bon répetoire
                    move_uploaded_file(
                        $_FILES["Image"]["tmp_name"],
                        $repository . "/" . $nomImage
                    );
                }
                //Si il y'avait une image déjà en place on la vire :
                if (
                    isset($_POST["ImageFileName"]) && $_POST["ImageFileName"] != '' &&
                    file_exists("{$_SERVER["DOCUMENT_ROOT"]}/uploads/images/{$_POST["ImageRepository"]}/{$_POST["ImageFileName"]}")
                ) {
                    unlink("{$_SERVER["DOCUMENT_ROOT"]}/uploads/images/{$_POST["ImageRepository"]}/{$_POST["Imag
            eFileName"]}");
                }
            }
            $date = new \DateTime($_POST["DatePublication"]);
            $hobby->setTitre($_POST["Titre"])
                ->setDescription($_POST["Description"])
                ->setDate($date)
                ->setAuteur($_POST["Auteur"])
                ->setImageRepository($sqlRepository)
                ->setImageFileName($nomImage);
            Hobby::SqlUpdate($hobby);
            header("Location:/AdminHobby/show/{$id}");
            exit();
        } else {
            return $this->twig->render("Admin/Hobby/update.html.twig", [
                "hobby" => $hobby
            ]);
        }
    }
}
