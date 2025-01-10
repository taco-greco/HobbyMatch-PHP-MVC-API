<?php

namespace src\Controller;

use src\Model\Hobby;

class AdminHobbyController extends AbstractController
{
    public function list()
    {
        $hobbies = Hobby::SqlGetAll();
        return $this->twig->render('Admin/Hobby/list.html.twig', [
            'hobbies' => $hobbies
        ]);
    }
    public function delete(int $id){
        Hobby::SqlDelete($id);
        header("Location:/?controller=AdminHobby&action=list");
    }

    public function add() {
        if(isset($_POST['Titre']) && isset($_POST['Description']))
        {
            //1. Upload Fichier
            $sqlRepository = null; // On ne fera pas X requetes SQL différentes donc on déclare les variables dès le début pour les utiliser dans la requete SQL
            $nomImage = null;

            if(!empty($_FILES['Image']['name']) ) {
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
            //2. Créer un objet Article
            $hobby = new Hobby();
            $hobby->setTitre($_POST['Titre']);
            $hobby->setDescription($_POST['Description']);
            $hobby->setAuteur($_POST['Auteur']);
            $hobby->setImageRepository($sqlRepository);
            $hobby->setImageFileName($nomImage);
            $hobby->setDate(new \DateTime($_POST['DatePublication']));

            //3. Exécuter la requete SQL d'ajout (model)
            $id = Hobby::SqlAdd($hobby);

            //4. Rédiriger l'internaute sur la page liste
            header("location: /?controller=AdminHobby&action=show&param={$id}");
            exit();

        }
        return $this->twig->render('Admin/Hobby/add.html.twig');
    }

    public function show(int $id)
    {
        $hobby = Hobby::SqlGetById($id);
        if ($hobby == null) {
            header("Location: /?controller=Hobby&action=all");
        }
        return $this->twig->render("Hobby/show.html.twig", [
            "hobby" => $hobby
        ]);
    }
}
