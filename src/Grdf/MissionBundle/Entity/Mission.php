<?php

namespace Grdf\MissionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 * @ORM\Entity
 * @ORM\Table(name="mission")
 * @ORM\HasLifecycleCallbacks()
 */
class Mission
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $descriptif;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var \DateTime
     *@ORM\Column(name="dateDeCreation", type="datetime")
     */
    private $dateDeCreation=null;

    /**
     * @var string
     */
    private $representantTerritorial;

    /**
     * @var string
     */
    private $managerEnCharge;

    /**
     * @var string
     */
    private $etat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Mission
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Mission
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Mission
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Mission
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Mission
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Mission
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set dateDeCreation
     *
     * @param \DateTime $dateDeCreation
     * @ORM\PrePersist
     * @return Mission
     */
    public function setDateDeCreation($dateDeCreation)
    {
        if(!isset($this->dateDeCreation))
            $this->dateDeCreation = new \DateTime();

        return $this;
    }

    /**
     * Get dateDeCreation
     *
     * @return \DateTime
     */
    public function getDateDeCreation()
    {
        return $this->dateDeCreation;
    }

    /**
     * Set representantTerritorial
     *
     * @param string $representantTerritorial
     *
     * @return Mission
     */
    public function setRepresentantTerritorial($representantTerritorial)
    {
        $this->representantTerritorial = $representantTerritorial;

        return $this;
    }

    /**
     * Get representantTerritorial
     *
     * @return string
     */
    public function getRepresentantTerritorial()
    {
        return $this->representantTerritorial;
    }

    /**
     * Set managerEnCharge
     *
     * @param string $managerEnCharge
     *
     * @return Mission
     */
    public function setManagerEnCharge($managerEnCharge)
    {
        $this->managerEnCharge = $managerEnCharge;

        return $this;
    }

    /**
     * Get managerEnCharge
     *
     * @return string
     */
    public function getManagerEnCharge()
    {
        return $this->managerEnCharge;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Mission
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}

