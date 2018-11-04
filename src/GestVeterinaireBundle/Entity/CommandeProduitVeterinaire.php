<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProduitVeterinaire
 *
 * @ORM\Table(name="commande_produit_veterinaire")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\CommandeProduitVeterinaireRepository")
 */
class CommandeProduitVeterinaire
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
     * @ORM\Column(name="qteCommandee", type="integer")
     */
    private $qteCommandee;

    // Clé étrangère en référence à Commande(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\Commande", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $laCommande;

    // Clé étrangère en référence à ProduitVeterinaire(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\ProduitVeterinaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leProduitVeterinaire;


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
     * Set qteCommandee
     *
     * @param integer $qteCommandee
     *
     * @return CommandeProduitVeterinaire
     */
    public function setQteCommandee($qteCommandee)
    {
        $this->qteCommandee = $qteCommandee;

        return $this;
    }

    /**
     * Get qteCommandee
     *
     * @return int
     */
    public function getQteCommandee()
    {
        return $this->qteCommandee;
    }

    /**
     * Set laCommande
     *
     * @param \GestVeterinaireBundle\Entity\Commande $laCommande
     *
     * @return CommandeProduitVeterinaire
     */
    public function setLaCommande(\GestVeterinaireBundle\Entity\Commande $laCommande = null)
    {
        $this->laCommande = $laCommande;

        return $this;
    }

    /**
     * Get laCommande
     *
     * @return \GestVeterinaireBundle\Entity\Commande
     */
    public function getLaCommande()
    {
        return $this->laCommande;
    }

    /**
     * Set leProduitVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\ProduitVeterinaire $leProduitVeterinaire
     *
     * @return CommandeProduitVeterinaire
     */
    public function setLeProduitVeterinaire(\GestVeterinaireBundle\Entity\ProduitVeterinaire $leProduitVeterinaire = null)
    {
        $this->leProduitVeterinaire = $leProduitVeterinaire;

        return $this;
    }

    /**
     * Get leProduitVeterinaire
     *
     * @return \GestVeterinaireBundle\Entity\ProduitVeterinaire
     */
    public function getLeProduitVeterinaire()
    {
        return $this->leProduitVeterinaire;
    }
}

