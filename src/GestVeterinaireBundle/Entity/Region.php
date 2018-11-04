<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\RegionRepository")
 */
class Region
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
     * @ORM\Column(name="libelleRegion", type="string", length=255)
     */
    private $libelleRegion;


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
     * Set libelleRegion
     *
     * @param string $libelleRegion
     *
     * @return Region
     */
    public function setLibelleRegion($libelleRegion)
    {
        $this->libelleRegion = $libelleRegion;

        return $this;
    }

    /**
     * Get libelleRegion
     *
     * @return string
     */
    public function getLibelleRegion()
    {
        return $this->libelleRegion;
    }
}

