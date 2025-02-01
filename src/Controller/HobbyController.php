<?php

namespace src\Controller;

use Mpdf\Mpdf;
use src\Model\BDD;
use src\Model\Hobby;
use Mpdf\Output\Destination;


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

    public function pdf(int $id)
    {
        $hobby = Hobby::SqlGetById($id);
        $mpdf = new Mpdf([
            "tempDir" => $_SERVER["DOCUMENT_ROOT"]."/../var/cache/pdf"
            ]);
            $mpdf->WriteHTML($this->twig->render('Hobby/pdf.html.twig',[
                'hobby' => $hobby
                ]));
                $mpdf->Output($_SERVER["DOCUMENT_ROOT"]."/uploads/pdf/hobby-".$hobby->getId().".pdf", dest: Destination::DOWNLOAD);
    }
}
