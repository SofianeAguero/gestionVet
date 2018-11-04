<?php

namespace GestVeterinaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnvoiEchantillon
 *
 * @ORM\Table(name="envoi_echantillon")
 * @ORM\Entity(repositoryClass="GestVeterinaireBundle\Repository\EnvoiEchantillonRepository")
 */
class EnvoiEchantillon
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
     * @ORM\Column(name="dateDemande", type="datetime", nullable=true)
     */
    private $dateDemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="datetime", nullable=true)
     */
    private $dateLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="qteLivree", type="integer", nullable=true)
     */
    private $qteLivree;

    // Clé étrangère en référence à ProduitVeterinaire(id)
    /**
     * @ORM\ManyToOne(targetEntity="GestVeterinaireBundle\Entity\ProduitVeterinaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
    */
    private $leProduitVeterinaire;

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
     * Set dateDemande
     *
     * @param \DateTime $dateDemande
     *
     * @return EnvoiEchantillon
     */
    public function setDateDemande($dateDemande)
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    /**
     * Get dateDemande
     *
     * @return \DateTime
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return EnvoiEchantillon
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set qteLivree
     *
     * @param integer $qteLivree
     *
     * @return EnvoiEchantillon
     */
    public function setQteLivree($qteLivree)
    {
        $this->qteLivree = $qteLivree;

        return $this;
    }

    /**
     * Get qteLivree
     *
     * @return int
     */
    public function getQteLivree()
    {
        return $this->qteLivree;
    }

    public function __construct()
    {
        // Par défaut, la date de la demande est la date d'aujourd'hui
        $this->dateDemande = new \DateTime();
    }

    /**
     * Set leProduitVeterinaire
     *
     * @param \GestVeterinaireBundle\Entity\ProduitVeterinaire $leProduitVeterinaire
     *
     * @return EnvoiEchantillon
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

