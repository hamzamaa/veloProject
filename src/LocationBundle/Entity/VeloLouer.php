<?php

namespace LocationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VeloLouer
 *
 * @ORM\Table(name="velo_louer")
 * @ORM\Entity(repositoryClass="LocationBundle\Repository\VeloLouerRepository")
 */
class VeloLouer
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="PointDistribution")
     * @ORM\JoinColumn(name="id_PointDistribution",referencedColumnName="id",onDelete="CASCADE")
     */
    private $PointDistribution;









    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=255)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifParHeure", type="float")
     */
    private $tarifParHeure;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="PointDistribution")
     * @ORM\JoinColumn(name="Destination",referencedColumnName="id",onDelete="CASCADE")
     */
    private $Destination;

    /**
     * @var string
     *
     * @ORM\Column(name="Marque", type="string", length=255)
     */
    private $Marque;


    /**
     * @var int
     *
     * @ORM\Column(name="NombreVitesse", type="integer")
     */
    private $nombreVitesse;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return VeloLouer
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return VeloLouer
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return VeloLouer
     */
    public function setModele($modele)
    {
        $this->type = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return VeloLouer
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set tarifParHeure
     *
     * @param float $tarifParHeure
     *
     * @return VeloLouer
     */
    public function setTarifParHeure($tarifParHeure)
    {
        $this->tarifParHeure = $tarifParHeure;

        return $this;
    }

    /**
     * Get tarifParHeure
     *
     * @return float
     */
    public function getTarifParHeure()
    {
        return $this->tarifParHeure;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return VeloLouer
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set Destination
     *
     * @param integer $Destination
     *
     * @return VeloLouer
     */
    public function setDestination($destination)
    {
        $this->Destination = $destination;

        return $this;
    }

    /**
     * Get Destination
     *
     * @return integer
     */
    public function getDestination()
    {
        return $this->Destination;
    }

    /**
     * Set nombreVitesse
     *
     * @param integer $nombreVitesse
     *
     * @return VeloLouer
     */
    public function setNombreVitesse($nombreVitesse)
    {
        $this->nombreVitesse = $nombreVitesse;

        return $this;
    }

    /**
     * Get nombreVitesse
     *
     * @return int
     */
    public function getNombreVitesse()
    {
        return $this->nombreVitesse;
    }
}

