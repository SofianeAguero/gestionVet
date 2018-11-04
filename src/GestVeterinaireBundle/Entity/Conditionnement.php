<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditionnement
 *
 * @ORM\Table(name="conditionnement")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\ConditionnementRepository")
 */
class Conditionnement
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
     * @ORM\Column(name="libelleCondit", type="string", length=255)
     */
    private $libelleCondit;


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
     * Set libelleCondit
     *
     * @param string $libelleCondit
     *
     * @return Conditionnement
     */
    public function setLibelleCondit($libelleCondit)
    {
        $this->libelleCondit = $libelleCondit;

        return $this;
    }

    /**
     * Get libelleCondit
     *
     * @return string
     */
    public function getLibelleCondit()
    {
        return $this->libelleCondit;
    }
}

