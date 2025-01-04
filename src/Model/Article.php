<?php
namespace src\Model;

class Article
{

    private ?int $Id = null;

    private ?String $Titre = null;

    private ?String $Description = null;

    private ?String $Auteur = null;

    private ?String $Date = null;

    private ?String $ImageRepository = null;

    private ?String $ImageFileName = null;




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
    public function getDate(): ?String
    {
        return $this->Date;
    }

    /**
     * Set the value of Date
     */
    public function setDate(?String $Date): self
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
}
