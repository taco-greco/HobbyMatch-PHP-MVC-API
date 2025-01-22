<?php

namespace src\Controller;

use src\Model\Hobby;

class ApiHobbyController
{
    public function __construct()
    {
        header('Content-Type: application/json; charset=utf-8');
    }

    public function getAll()
    {
        if ($_SERVER["REQUEST_METHOD"] != "GET") {
            header("HTTP/1.1 405 Method Not Allowed");
            return json_encode([
                "code" => 1,
                "Message" => "Get Attendu"
            ]);
        }
        $hobbies = Hobby::SqlGetAll();
        return json_encode($hobbies);
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
}
