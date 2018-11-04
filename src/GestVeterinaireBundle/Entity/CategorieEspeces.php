<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEspeces
 *
 * @ORM\Table(name="categorie_especes")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\CategorieEspecesRepository")
 */
class CategorieEspeces
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
     * @ORM\Column(name="libelleEspece", type="string", length=255)
     */
    private $libelleEspece;

    /**
     * Une CategorieEspeces peut avoir plusieurs DelegueVeterinaire et vice versa.
     * @ORM\ManyToMany(targetEntity="GestVeterinaireBundle\Entity\DelegueVeterinaire", mappedBy="lesCategorieEspeces")
     */
    private $lesDelegueVeterinaires;


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
     * Set libelleEspece
     *
     * @param string $libelleEspece
     *
     * @return CategorieEspeces
     */
    public function setLibelleEspece($libelleEspece)
    {
        $this->libelleEspece = $libelleEspece;

        return $this;
    }

    /**
     * Get libelleEspece
     *
     * @return string
     */
    public function getLibelleEspece()
    {
        return $this->libelleEspece;
    }

    public function __construct() {
        $this->lesDelegueVeterinaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add unDelegueVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\DelegueVeterinaire $unDelegueVeterinaire
     *
     * @return CategorieEspeces
     */
    public function addUnDelegueVeterinaire(\GestVeterinaireBundle\Entity\DelegueVeterinaire $unDelegueVeterinaire)
    {
        $this->lesDelegueVeterinaires[] = $unDelegueVeterinaire;
    }

    /**
     * Remove unDelegueVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\DelegueVeterinaire $unDelegueVeterinaire
     */
    public function removeUnDelegueVeterinaire(\GestVeterinaireBundle\Entity\DelegueVeterinaire $unDelegueVeterinaire)
    {
        $this->lesDelegueVeterinaires->removeElement($unDelegueVeterinaire);
    }

    /**
     * Get lesDelegueVeterinaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesDelegueVeterinaires()
    {
        return $this->lesDelegueVeterinaires;
    }
}

