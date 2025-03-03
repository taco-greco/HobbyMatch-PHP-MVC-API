<?php

namespace src\Controller;

use Mpdf\Mpdf;
use src\Model\BDD;
use src\Model\Hobby;
use Mpdf\Output\Destination;
use Faker\Factory;

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
        $faker = Factory::create();
        $dateDuJour = new \DateTime();

        // Generate a list of 20 unique titles
        $uniqueTitles = [
            'Lecture',
            'Jardinage',
            'Peinture',
            'Cuisine',
            'Voyage',
            'Photographie',
            'Cyclisme',
            'Randonnée',
            'Pêche',
            'Tricot',
            'Travail du bois',
            'Observation des oiseaux',
            'Danse',
            'Écriture',
            'Yoga',
            'Méditation',
            'Jeux vidéo',
            'Collection',
            'Dessin',
            'Couture'
        ];

        // Rouen coordinates
        $rouenLat = 49.4431;
        $rouenLon = 1.0993;

        for ($i = 0; $i < 200; $i++) {
            $dateDuJour->modify('+1 day');
            $hobby = new Hobby();
            $hobby->setTitre($uniqueTitles[$i % 20]) // Use one of the 20 unique titles
                ->setAuteur($faker->firstName)
                ->setDate($dateDuJour)
                ->setDescription("Ceci est une description générale pour le hobby " . $uniqueTitles[$i % 20])
                ->setImageRepository("fixtures")
                ->setImageFileName(strtolower(str_replace(' ', '_', $uniqueTitles[$i % 20])) . '.jpg') // Use the title as the image file namenamed image0.jpg, image1.jpg, ..., image19.jpg
                ->setEmailContact($faker->email)
                ->setLatitude($rouenLat + $faker->randomFloat(6, -0.01, 0.01)) // Latitude within a small range around Rouen
                ->setLongitude($rouenLon + $faker->randomFloat(6, -0.01, 0.01)) // Longitude within a small range around Rouen
                ->setPrix($faker->randomFloat(2, 10, 100)); // Random price between 10 and 100
            Hobby::SqlAdd($hobby);
        }
        header('location: /');
    }

    public function pdf(int $id)
    {
        $hobby = Hobby::SqlGetById($id);
        $mpdf = new Mpdf([
            "tempDir" => $_SERVER["DOCUMENT_ROOT"] . "/../var/cache/pdf"
        ]);
        $mpdf->WriteHTML($this->twig->render('Hobby/pdf.html.twig', [
            'hobby' => $hobby
        ]));
        $mpdf->Output($_SERVER["DOCUMENT_ROOT"] . "/uploads/pdf/hobby-" . $hobby->getId() . ".pdf", dest: Destination::DOWNLOAD);
    }
}
