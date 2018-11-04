<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitVeterinaire
 *
 * @ORM\Table(name="produit_veterinaire")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\ProduitVeterinaireRepository")
 */
class ProduitVeterinaire
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
     * @ORM\Column(name="libelleProduit", type="string", length=255)
     */
    private $libelleProduit;

    // Clé étrangère en référence à CategorieEspeces(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\CategorieEspeces", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $laCategorieEspece;

    // Clé étrangère en référence à CategorieProduit(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\CategorieProduit", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $laCategorieProduit;

    // Clé étrangère en référence à Conditionnement(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\Conditionnement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leConditionnement;


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
     * Set libelleProduit
     *
     * @param string $libelleProduit
     *
     * @return ProduitVeterinaire
     */
    public function setLibelleProduit($libelleProduit)
    {
        $this->libelleProduit = $libelleProduit;

        return $this;
    }

    /**
     * Get libelleProduit
     *
     * @return string
     */
    public function getLibelleProduit()
    {
        return $this->libelleProduit;
    }

    /**
     * Set laCategorieEspece
     *
     * @param \GestVeterinaireBundle\Entity\CategorieEspeces $laCategorieEspece
     *
     * @return ProduitVeterinaire
     */
    public function setLaCategorieEspece(\GestVeterinaireBundle\Entity\CategorieEspeces $laCategorieEspece = null)
    {
        $this->laCategorieEspece = $laCategorieEspece;

        return $this;
    }

    /**
     * Get laCategorieEspece
     *
     * @return \GestVeterinaireBundle\Entity\CategorieEspeces
     */
    public function getLaCategorieEspece()
    {
        return $this->laCategorieEspece;
    }

    /**
     * Set leConditionnement
     *
     * @param \GestVeterinaireBundle\Entity\Conditionnement $leConditionnement
     *
     * @return ProduitVeterinaire
     */
    public function setLeConditionnement(\GestVeterinaireBundle\Entity\Conditionnement $leConditionnement = null)
    {
        $this->leConditionnement = $leConditionnement;

        return $this;
    }

    /**
     * Get leConditionnement
     *
     * @return \GestVeterinaireBundle\Entity\Conditionnement
     */
    public function getLeConditionnement()
    {
        return $this->leConditionnement;
    }
}

