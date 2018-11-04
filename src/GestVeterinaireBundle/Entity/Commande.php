<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime", nullable=true)
     */
    private $dateCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraisonSouhaitee", type="datetime", nullable=true)
     */
    private $dateLivraisonSouhaitee;

    // Clé étrangère en référence à Veterinaire(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\Veterinaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leVeterinaire;


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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set dateLivraisonSouhaitee
     *
     * @param \DateTime $dateLivraisonSouhaitee
     *
     * @return Commande
     */
    public function setDateLivraisonSouhaitee($dateLivraisonSouhaitee)
    {
        $this->dateLivraisonSouhaitee = $dateLivraisonSouhaitee;

        return $this;
    }

    /**
     * Get dateLivraisonSouhaitee
     *
     * @return \DateTime
     */
    public function getDateLivraisonSouhaitee()
    {
        return $this->dateLivraisonSouhaitee;
    }

    public function __construct()
    {
        // Par défaut, la date de la commande est la date d'aujourd'hui
        $this->dateCommande = new \DateTime();
    }

    /**
     * Set leVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\Veterinaire $leVeterinaire
     *
     * @return Commande
     */
    public function setLeVeterinaire(\GestVeterinaireBundle\Entity\Veterinaire $leVeterinaire = null)
    {
        $this->leVeterinaire = $leVeterinaire;

        return $this;
    }

    /**
     * Get leVeterinaire
     *
     * @return \GestVeterinaireBundle\Entity\Veterinaire
     */
    public function getLeVeterinaire()
    {
        return $this->leVeterinaire;
    }
}

