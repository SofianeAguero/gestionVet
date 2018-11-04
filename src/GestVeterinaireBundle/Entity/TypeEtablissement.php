<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeEtablissement
 *
 * @ORM\Table(name="type_etablissement")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\TypeEtablissementRepository")
 */
class TypeEtablissement
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
     * @ORM\Column(name="libelleEta", type="string", length=255)
     */
    private $libelleEta;


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
     * Set libelleEta
     *
     * @param string $libelleEta
     *
     * @return TypeEtablissement
     */
    public function setLibelleEta($libelleEta)
    {
        $this->libelleEta = $libelleEta;

        return $this;
    }

    /**
     * Get libelleEta
     *
     * @return string
     */
    public function getLibelleEta()
    {
        return $this->libelleEta;
    }
}

