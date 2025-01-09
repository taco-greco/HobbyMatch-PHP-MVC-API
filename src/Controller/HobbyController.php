<?php

namespace src\Controller;

use src\Model\Hobby;
use src\Model\BDD;


class HobbyController extends AbstractController
{
    public function index()
    {
        $hobbies = Hobby::SqlGetLast(20);
        return $this->twig->render('Hobby/index.html.twig', [
            'hobbies' => $hobbies
        ]);
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
