<?php

namespace GestVeterinaireBundle\Repository;

/**
 * EnvoiEchantillonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnvoiEchantillonRepository extends \Doctrine\ORM\EntityRepository
{
	// Liste tous les envois d'échantillon d'un vétérinaire (qui sera choisi au préalable par l'utilisateur)
	public function envoisEchantillonVeterinaire($idVetUrl)
	{
		$requete = $this->createQueryBuilder('EER');
		$requete->where('EER.leVeterinaire = :idEnParam')->setParameter('idEnParam', $idVetUrl);

		return $requete->getQuery()->getResult();
	}

	// Liste tous les envois d'échantillon d'un produit (qui sera choisi au préalable par l'utilisateur)
	public function envoisEchantillonProduit($idProdUrl)
	{
		$requete = $this->createQueryBuilder('EER');
		$requete->where('EER.leProduitVeterinaire = :idEnParam')->setParameter('idEnParam', $idProdUrl);

		return $requete->getQuery()->getResult();
	}
}
