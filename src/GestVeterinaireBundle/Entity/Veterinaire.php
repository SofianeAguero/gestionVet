<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veterinaire
 *
 * @ORM\Table(name="veterinaire")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\VeterinaireRepository")
 */
class Veterinaire
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
     * @ORM\Column(name="numOrdreNatio", type="integer", nullable=true)
     */
    private $numOrdreNatio;

    /**
     * @var string
     *
     * @ORM\Column(name="telVete", type="string", length=14, nullable=true)
     */
    private $telVete;

    /**
     * @var string
     *
     * @ORM\Column(name="mailVete", type="string", length=255, nullable=true)
     */
    private $mailVete;

    // Clé étrangère en référence à DelegueVeterinaire(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\DelegueVeterinaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leDelegueVeterinaire;

    // Clé étrangère en référence à TypeEtablissement(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\TypeEtablissement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leTypeEtablissement;

    /**
     * Un Veterinaire peut avoir plusieurs TypeClient et vice versa.
     * @ORM\ManyToMany(targetEntity="GestVeterinaireBundle\Entity\TypeClient", inversedBy="lesVeterinaires", cascade={"persist"})
     */
    private $lesTypeClients;


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
     * Set numOrdreNatio
     *
     * @param integer $numOrdreNatio
     *
     * @return Veterinaire
     */
    public function setNumOrdreNatio($numOrdreNatio)
    {
        $this->numOrdreNatio = $numOrdreNatio;

        return $this;
    }

    /**
     * Get numOrdreNatio
     *
     * @return int
     */
    public function getNumOrdreNatio()
    {
        return $this->numOrdreNatio;
    }

    /**
     * Set telVete
     *
     * @param string $telVete
     *
     * @return Veterinaire
     */
    public function setTelVete($telVete)
    {
        $this->telVete = $telVete;

        return $this;
    }

    /**
     * Get telVete
     *
     * @return string
     */
    public function getTelVete()
    {
        return $this->telVete;
    }

    /**
     * Set mailVete
     *
     * @param string $mailVete
     *
     * @return Veterinaire
     */
    public function setMailVete($mailVete)
    {
        $this->mailVete = $mailVete;

        return $this;
    }

    /**
     * Get mailVete
     *
     * @return string
     */
    public function getMailVete()
    {
        return $this->mailVete;
    }

    public function __construct() {
        $this->lesTypeClients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set leDelegueVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\DelegueVeterinaire $leDelegueVeterinaire
     *
     * @return Veterinaire
     */
    public function setLeDelegueVeterinaire(\GestVeterinaireBundle\Entity\DelegueVeterinaire $leDelegueVeterinaire = null)
    {
        $this->leDelegueVeterinaire = $leDelegueVeterinaire;

        return $this;
    }

    /**
     * Get leDelegueVeterinaire
     *
     * @return \GestVeterinaireBundle\Entity\DelegueVeterinaire
     */
    public function getLeDelegueVeterinaire()
    {
        return $this->leDelegueVeterinaire;
    }

    /**
     * Set leTypeEtablissement
     *
     * @param \GestVeterinaireBundle\Entity\TypeEtablissement $leTypeEtablissement
     *
     * @return Veterinaire
     */
    public function setLeTypeEtablissement(\GestVeterinaireBundle\Entity\TypeEtablissement $leTypeEtablissement = null)
    {
        $this->leTypeEtablissement = $leTypeEtablissement;

        return $this;
    }

    /**
     * Get leTypeEtablissement
     *
     * @return \GestVeterinaireBundle\Entity\TypeEtablissement
     */
    public function getLeTypeEtablissement()
    {
        return $this->leTypeEtablissement;
    }

    /**
     * Add unTypeClient
     *
     * @param \GestVeterinaireBundle\Entity\TypeClient $unTypeClient
     *
     * @return Veterinaire
     */
    public function addUnTypeClient(\GestVeterinaireBundle\Entity\TypeClient $unTypeClient)
    {
        $this->lesTypeClients[] = $unTypeClient;
    }

    /**
     * Remove unTypeClient
     *
     * @param \GestVeterinaireBundle\Entity\TypeClient $unTypeClient
     */
    public function removeUnTypeClient(\GestVeterinaireBundle\Entity\TypeClient $unTypeClient)
    {
        $this->lesTypeClients->removeElement($unTypeClient);
    }

    /**
     * Get lesTypeClients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesTypeClients()
    {
        return $this->lesTypeClients;
    }
}

