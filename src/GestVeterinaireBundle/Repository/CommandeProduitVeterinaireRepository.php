<?php

namespace GestVeterinaireBundle\Repository;

/**
 * CommandeProduitVeterinaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeProduitVeterinaireRepository extends \Doctrine\ORM\EntityRepository
{
	// Liste toutes les commandes d'un produit (qui sera choisi au préalable par l'utilisateur)
	public function commandesProduit($idProdUrl)
	{
		$requete = $this->createQueryBuilder('CPVR');
		$requete->where('CPVR.leProduitVeterinaire = :idEnParam')->setParameter('idEnParam', $idProdUrl);

		return $requete->getQuery()->getResult();
	}
}
