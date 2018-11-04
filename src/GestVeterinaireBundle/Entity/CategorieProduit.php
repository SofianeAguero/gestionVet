<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProduit
 *
 * @ORM\Table(name="categorie_produit")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\CategorieProduitRepository")
 */
class CategorieProduit
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
     * @ORM\Column(name="nomCategProduit", type="string", length=255)
     */
    private $nomCategProduit;


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
     * Set nomCategProduit
     *
     * @param string $nomCategProduit
     *
     * @return CategorieProduit
     */
    public function setNomCategProduit($nomCategProduit)
    {
        $this->nomCategProduit = $nomCategProduit;

        return $this;
    }

    /**
     * Get nomCategProduit
     *
     * @return string
     */
    public function getNomCategProduit()
    {
        return $this->nomCategProduit;
    }
}

