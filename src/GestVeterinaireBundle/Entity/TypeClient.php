<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeClient
 *
 * @ORM\Table(name="type_client")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\TypeClientRepository")
 */
class TypeClient
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
     * @ORM\Column(name="libelleClient", type="string", length=255)
     */
    private $libelleClient;

    /**
     * Un TypeClient peut avoir plusieurs Veterinaire et vice versa.
     * @ORM\ManyToMany(targetEntity="GestVeterinaireBundle\Entity\Veterinaire", inversedBy="lesTypeClients", cascade={"persist"})
     * @ORM\JoinTable(name="typeClient_veterinaire")
     */
    private $lesVeterinaires;


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
     * Set libelleClient
     *
     * @param string $libelleClient
     *
     * @return TypeClient
     */
    public function setLibelleClient($libelleClient)
    {
        $this->libelleClient = $libelleClient;

        return $this;
    }

    /**
     * Get libelleClient
     *
     * @return string
     */
    public function getLibelleClient()
    {
        return $this->libelleClient;
    }

    public function __construct() {
        $this->lesVeterinaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add unVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\Veterinaire $unVeterinaire
     *
     * @return TypeClient
     */
    public function addUnVeterinaire(\GestVeterinaireBundle\Entity\Veterinaire $unVeterinaire)
    {
        $this->lesVeterinaires[] = $unVeterinaire;
    }

    /**
     * Remove unVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\Veterinaire $unVeterinaire
     */
    public function removeUnVeterinaire(\GestVeterinaireBundle\Entity\Veterinaire $unVeterinaire)
    {
        $this->lesVeterinaires->removeElement($unVeterinaire);
    }

    /**
     * Get lesVeterinaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesVeterinaires()
    {
        return $this->lesVeterinaires;
    }
}

