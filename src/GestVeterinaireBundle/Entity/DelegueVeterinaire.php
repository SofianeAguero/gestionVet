<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DelegueVeterinaire
 *
 * @ORM\Table(name="delegue_veterinaire")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\DelegueVeterinaireRepository")
 */
class DelegueVeterinaire
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
     * @ORM\Column(name="nomDelegue", type="string", length=255, nullable=true)
     */
    private $nomDelegue;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomDelegue", type="string", length=255, nullable=true)
     */
    private $prenomDelegue;

    /**
     * @var string
     *
     * @ORM\Column(name="telDelegue", type="string", length=14, nullable=true)
     */
    private $telDelegue;

    /**
     * @var string
     *
     * @ORM\Column(name="mailDelegue", type="string", length=255, nullable=true)
     */
    private $mailDelegue;

    /**
     * Une DelegueVeterinaire peut avoir plusieurs CategorieEspeces et vice versa.
     * @ORM\ManyToMany(targetEntity="GestVeterinaireBundle\Entity\CategorieEspeces", inversedBy="lesDelegueVeterinaires")
     */
    private $lesCategorieEspeces;

    // Clé étrangère en référence à Region(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\Region", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $laRegion;


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
     * Set nomDelegue
     *
     * @param string $nomDelegue
     *
     * @return DelegueVeterinaire
     */
    public function setNomDelegue($nomDelegue)
    {
        $this->nomDelegue = $nomDelegue;

        return $this;
    }

    /**
     * Get nomDelegue
     *
     * @return string
     */
    public function getNomDelegue()
    {
        return $this->nomDelegue;
    }

    /**
     * Set prenomDelegue
     *
     * @param string $prenomDelegue
     *
     * @return DelegueVeterinaire
     */
    public function setPrenomDelegue($prenomDelegue)
    {
        $this->prenomDelegue = $prenomDelegue;

        return $this;
    }

    /**
     * Get prenomDelegue
     *
     * @return string
     */
    public function getPrenomDelegue()
    {
        return $this->prenomDelegue;
    }

    /**
     * Set telDelegue
     *
     * @param string $telDelegue
     *
     * @return DelegueVeterinaire
     */
    public function setTelDelegue($telDelegue)
    {
        $this->telDelegue = $telDelegue;

        return $this;
    }

    /**
     * Get telDelegue
     *
     * @return string
     */
    public function getTelDelegue()
    {
        return $this->telDelegue;
    }

    /**
     * Set mailDelegue
     *
     * @param string $mailDelegue
     *
     * @return DelegueVeterinaire
     */
    public function setMailDelegue($mailDelegue)
    {
        $this->mailDelegue = $mailDelegue;

        return $this;
    }

    /**
     * Get mailDelegue
     *
     * @return string
     */
    public function getMailDelegue()
    {
        return $this->mailDelegue;
    }

    public function __construct() {
        $this->lesCategorieEspeces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add uneCategorieEspece
     *
     * @param \GestVeterinaireBundle\Entity\CategorieEspeces $uneCategorieEspece
     *
     * @return DelegueVeterinaire
     */
    public function addUneCategorieEspece(\GestVeterinaireBundle\Entity\CategorieEspeces $uneCategorieEspece)
    {
        $this->lesCategorieEspeces[] = $uneCategorieEspece;
    }

    /**
     * Remove uneCategorieEspece
     *
     * @param \GestVeterinaireBundle\Entity\CategorieEspeces $uneCategorieEspece
     */
    public function removeUneCategorieEspece(\GestVeterinaireBundle\Entity\CategorieEspeces $uneCategorieEspece)
    {
        $this->lesCategorieEspeces->removeElement($uneCategorieEspece);
    }

    /**
     * Get lesCategorieEspeces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesCategorieEspeces()
    {
        return $this->lesCategorieEspeces;
    }

    /**
     * Set laRegion
     *
     * @param \GestVeterinaireBundle\Entity\Region $laRegion
     *
     * @return DelegueVeterinaire
     */
    public function setLaRegion(\GestVeterinaireBundle\Entity\Region $laRegion = null)
    {
        $this->laRegion = $laRegion;

        return $this;
    }

    /**
     * Get laRegion
     *
     * @return \GestVeterinaireBundle\Entity\Region
     */
    public function getLaRegion()
    {
        return $this->laRegion;
    }
}

