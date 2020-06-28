<?php

namespace LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointDistribution
 *
 * @ORM\Table(name="point_distribution")
 * @ORM\Entity(repositoryClass="LocationBundle\Repository\PointDistributionRepository")
 */
class PointDistribution
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;



    /**
     * @var string
     *
     * @ORM\Column(name="ouverture", type="string", length=255)
     */
    private $ouverture;

    /**
     * @var string
     *
     * @ORM\Column(name="capacite", type="string", length=255)
     */
    private $capacite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return PointDistribution
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
     * Set capacite
     *
     * @param string $capacite
     *
     * @return PointDistribution
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return string
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return PointDistribution
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }







    /**
     * Set ouverture
     *
     * @param string $ouverture
     *
     * @return PointDistribution
     */
    public function setOuverture($ouverture)
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    /**
     * Get ouverture
     *
     * @return string
     */
    public function getOuverture()
    {
        return $this->ouverture;
    }











}

