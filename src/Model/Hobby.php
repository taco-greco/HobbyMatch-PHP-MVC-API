<?php

namespace src\Model;

use src\Model\BDD;
use JsonSerializable;

class Hobby implements JsonSerializable
{

    private ?int $Id = null;

    private ?String $Titre = null;

    private ?String $Description = null;

    private ?String $Auteur = null;

    private ?\DateTime $Date = null;

    private ?String $ImageRepository = null;

    private ?String $ImageFileName = null;

    private ?string $Latitude = null;

    private ?string $Longitude = null;

    private ?String $Prix = null;

    private ?String $EmailContact = null;




    /**
     * Get the value of Id
     */
    public function getId(): ?int
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     */
    public function setId(?int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * Get the value of Titre
     */
    public function getTitre(): ?String
    {
        return $this->Titre;
    }

    /**
     * Set the value of Titre
     */
    public function setTitre(?String $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    /**
     * Get the value of Description
     */
    public function getDescription(): ?String
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     */
    public function setDescription(?String $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of Auteur
     */
    public function getAuteur(): ?String
    {
        return $this->Auteur;
    }

    /**
     * Set the value of Auteur
     */
    public function setAuteur(?String $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    /**
     * Get the value of Date
     */
    public function getDate(): ?\DateTime
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     */
    public function setDate(?\DateTime $Date): Hobby
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Get the value of ImageRepository
     */
    public function getImageRepository(): ?String
    {
        return $this->ImageRepository;
    }

    /**
     * Set the value of ImageRepository
     */
    public function setImageRepository(?String $ImageRepository): self
    {
        $this->ImageRepository = $ImageRepository;

        return $this;
    }

    /**
     * Get the value of ImageFileName
     */
    public function getImageFileName(): ?String
    {
        return $this->ImageFileName;
    }

    /**
     * Set the value of ImageFileName
     */
    public function setImageFileName(?String $ImageFileName): self
    {
        $this->ImageFileName = $ImageFileName;

        return $this;
    }

    public function getLatitude(): ?String
    {
        return $this->Latitude;
    }

    public function setLatitude(?String $Latitude): self
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    public function getLongitude(): ?String
    {
        return $this->Longitude;
    }

    public function setLongitude(?String $Longitude): self
    {
        $this->Longitude = $Longitude;
        return $this;
    }

    public function getPrix(): ?String
    {
        return $this->Prix;
    }

    public function setPrix(?String $Prix): self
    {
        $this->Prix = $Prix;
        return $this;
    }

    public function getEmailContact(): ?String
    {
        return $this->EmailContact;
    }

    public function setEmailContact(?String $EmailContact): self
    {
        $this->EmailContact = $EmailContact;
        return $this;
    }

    public static function SqlAdd(Hobby $hobby)
    {
        try {
            $requete = BDD::getInstance()->prepare("INSERT INTO hobbies (Titre,Description,DatePublication,Auteur, ImageRepository, ImageFileName,Latitude,Longitude,Prix, EmailContact) VALUES (:Titre,:Description,:DatePublication,:Auteur, :ImageRepository, :ImageFileName, :Latitude, :Longitude, :Prix, :EmailContact)");
            $requete->bindValue(':Titre', $hobby->getTitre());
            $requete->bindValue(':Description', $hobby->getDescription());
            $requete->bindValue(':DatePublication', $hobby->getDate()->format('Y-m-d'));
            $requete->bindValue(':Auteur', $hobby->getAuteur());
            $requete->bindValue(':ImageRepository', $hobby->getImageRepository());
            $requete->bindValue(':ImageFileName', $hobby->getImageFileName());
            $requete->bindValue(':Latitude', $hobby->getLatitude());
            $requete->bindValue(':Longitude', $hobby->getLongitude());
            $requete->bindValue(':Prix', $hobby->getPrix());
            $requete->bindValue(':EmailContact', $hobby->getEmailContact());
            $requete->execute([
                'Titre' => $hobby->getTitre(),
                'Description' => $hobby->getDescription(),
                'DatePublication' => $hobby->getDate()->format('Y-m-d'),
                'Auteur' => $hobby->getAuteur(),
                'ImageRepository' => $hobby->getImageRepository(),
                'ImageFileName' => $hobby->getImageFileName(),
                'Latitude' => $hobby->getLatitude(),
                'Longitude' => $hobby->getLongitude(),
                'Prix' => $hobby->getPrix(),
                'EmailContact' => $hobby->getEmailContact(),
            ]);

            return array("0", "[OK] Insertion", BDD::getInstance()->lastInsertId());
        } catch (\Exception $e) {
            return array("1", "[ERREUR] " . $e->getMessage());
        }

        // return BDD::getInstance()->lastInsertId();
    }

    public static function SqlGetLast(int $nb)
    {
        $requete = BDD::getInstance()->prepare('SELECT * FROM hobbies ORDER BY Id DESC
LIMIT :limit');
        $requete->bindValue("limit", $nb, \PDO::PARAM_INT);
        $requete->execute();
        $hobbiesSql = $requete->fetchAll(\PDO::FETCH_ASSOC);
        $hobbiesObjet = [];
        foreach ($hobbiesSql as $hobbySql) {
            $hobby = new Hobby();
            $hobby->setId($hobbySql["Id"])
                ->setTitre($hobbySql["Titre"])
                ->setDescription($hobbySql["Description"])
                ->setDate(new \DateTime($hobbySql["DatePublication"]))
                ->setAuteur($hobbySql["Auteur"])
                ->setImageRepository($hobbySql["ImageRepository"])
                ->setImageFileName($hobbySql["ImageFileName"]);
            $hobbiesObjet[] = $hobby;
        }
        return $hobbiesObjet;
    }

    public static function SqlGetAll()
    {
        $bdd = BDD::getInstance();
        $requete = $bdd->prepare('SELECT * FROM hobbies ORDER BY Id DESC');
        $requete->execute();
        $hobbiesSQL = $requete->fetchAll(\PDO::FETCH_ASSOC);
        $hobbiesObjet = [];
        foreach ($hobbiesSQL as $hobbySQL) {
            $hobby = new Hobby();
            $date = new \DateTime($hobbySQL["DatePublication"]);
            $hobby->setTitre($hobbySQL["Titre"])
                ->setId($hobbySQL["Id"])
                ->setDescription($hobbySQL["Description"])
                ->setDate($date)
                ->setAuteur($hobbySQL["Auteur"])
                ->setImageRepository($hobbySQL["ImageRepository"])
                ->setImageFileName($hobbySQL["ImageFileName"])
                ->setPrix($hobbySQL['Prix'])
                ->setEmailContact($hobbySQL['EmailContact'])
                ->setLatitude($hobbySQL['Latitude'])
                ->setLongitude($hobbySQL['Longitude']);

            $hobbiesObjet[] = $hobby;
        }
        return $hobbiesObjet;
    }
    public static function SqlDelete(int $Id)
    {
        $requete = BDD::getInstance()->prepare("DELETE FROM hobbies WHERE Id=:Id");
        $execute = $requete->execute([
            'Id' => $Id
        ]);
    }

    public static function SqlGetById($Id): ?Hobby
    {
        $bdd = BDD::getInstance();
        $requete = $bdd->prepare('SELECT * FROM hobbies WHERE Id=:Id');
        $requete->execute([
            "Id" => $Id
        ]);
        $hobbySQL = $requete->fetch(\PDO::FETCH_ASSOC);
        if ($hobbySQL != false) {
            $hobby = new Hobby();
            $date = new \DateTime($hobbySQL["DatePublication"]);
            $hobby->setTitre($hobbySQL["Titre"])
                ->setId($hobbySQL["Id"])
                ->setDescription($hobbySQL["Description"])
                ->setDate($date)
                ->setAuteur($hobbySQL["Auteur"])
                ->setImageRepository($hobbySQL["ImageRepository"])
                ->setId($hobbySQL["Id"])
                ->setImageFileName($hobbySQL["ImageFileName"])
                ->setLatitude($hobbySQL["Latitude"])
                ->setLongitude($hobbySQL['Longitude'])
                ->setPrix($hobbySQL['Prix'])
                ->setEmailContact($hobbySQL["EmailContact"]);
            return $hobby;
        }
        return null;
    }

    public static function SqlUpdate(Hobby $hobby)
    {
        $requete = BDD::getInstance()->prepare("UPDATE hobbies SET Titre=:Titre,
Description=:Description, DatePublication=:DatePublication, Auteur=:Auteur,
ImageRepository=:ImageRepository, ImageFileName=:ImageFileName, Latitude=:Latitude, Longitude=:Longitude, Prix=:Prix, EmailContact=:EmailContact WHERE Id=:Id");
        $bool = $requete->execute([
            "Titre" => $hobby->getTitre(),
            "Description" => $hobby->getDescription(),
            "DatePublication" => $hobby->getDate()->format("Y-m-d"),
            "Auteur" => $hobby->getAuteur(),
            "ImageRepository" => $hobby->getImageRepository(),
            "ImageFileName" => $hobby->getImageFileName(),
            "Latitude" => $hobby->getLatitude(),
            "Longitude" => $hobby->getLongitude(),
            "Prix" => $hobby->getPrix(),
            "EmailContact" => $hobby->getEmailContact(),
            "Id" => $hobby->getId()
        ]);
    }

    public static function SqlSearch(string $keyword): array
    {
        $requete = BDD::getInstance()->prepare('SELECT * FROM hobbies WHERE Titre LIKE :keyword OR Description LIKE :keyword ORDER BY Id DESC');
        $requete->bindValue(':keyword', '%' . $keyword . '%');
        $requete->execute();
        $hobbiessSql = $requete->fetchAll(\PDO::FETCH_ASSOC);
        $hobbiesObjet = [];
        foreach ($hobbiessSql as $hobbySql) {
            $hobby = new Hobby();
            $hobby->setId($hobbySql["Id"]);
            $hobby->setTitre($hobbySql["Titre"]);
            $hobby->setDescription($hobbySql["Description"]);
            $hobby->setDate(new \DateTime($hobbySql["DatePublication"]));
            $hobby->setAuteur($hobbySql["Auteur"]);
            $hobby->setImageRepository($hobbySql["ImageRepository"]);
            $hobby->setImageFileName($hobbySql["ImageFileName"]);
            $hobbiesObjet[] = $hobby;
        }
        return $hobbiesObjet;
    }

    public function jsonSerialize(): mixed
    {
        return
            [
                'Id' => $this->getId(),
                'Titre' => $this->getTitre(),
                'Auteur' => $this->getAuteur(),
                'Description' => $this->getDescription(),
                'DatePublication' => $this->getDate()->format('Y-m-d'),
                'ImageRepository' => $this->getImageRepository(),
                'ImageFileName' => $this->getImageFileName(),
                'Prix' => $this->getPrix(),
                'EmailContact' => $this->getEmailContact(),
                'Latitude' => $this->getLatitude(),
                'Longitude' => $this->getLongitude()
            ];
    }
}
