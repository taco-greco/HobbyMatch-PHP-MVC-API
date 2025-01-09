<?php

namespace src\Controller;

use src\Model\Hobby;
use src\Model\BDD;


class HobbyController
{
    public function index()
    {
        $html = '<h1>bonjour voici la liste des 20 derniers hobbies</h1>';
        $hobbies = Hobby::SqlGetLast(20);
        foreach ($hobbies as $hobby) {
            $html .= "<p>{$hobby->getTitre()}</p>";
        }
        return $html;
    }

    public function fixtures()
    {
        $requette = BDD::getInstance()->prepare("TRUNCATE TABLE hobbies")->execute();
        $arrayTitre = [
            'Lecture',
            'Jardinage',
            'Peinture',
            'Cuisine',
            'Voyage',
            'Photographie'
        ];
        $arrayAuteurs = [
            'Jean',
            'Paul',
            'Jacques',
            'Marie',
            'Pierre',
            'Julie'
        ];
        $dateDuJour = new \DateTime();

        for ($i = 0; $i < 200; $i++) {
            $dateDuJour->modify('+1 day');
            shuffle($arrayTitre);
            shuffle($arrayAuteurs);
            $hobby = new Hobby();
            $hobby->setTitre($arrayTitre[0])
                ->setAuteur($arrayAuteurs[0])
                ->setDate($dateDuJour)
                ->setDescription("Description de l'article ")
                ->setDescription("Ceci est une description générale pour le hobby " . $arrayTitre[0])
                ->setImageRepository("images")
                ->setImageFileName("image.jpg");
            Hobby::SqlAdd($hobby);
        }
    }
}
