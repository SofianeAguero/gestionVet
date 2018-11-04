<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\ProduitVeterinaire;

use GestVeterinaireBundle\Entity\CommandeProduitVeterinaire;

use GestVeterinaireBundle\Entity\Commande;

use GestVeterinaireBundle\Entity\EnvoiEchantillon;

class ProduitVeterinaireController extends Controller
{
	// LA METHODE listeProduitAction(Request $request) N'EST PAS MON TAFFE
	// J'ETAIS OBLIGE DE LA FAIRE (partiellement) POUR POUVOIR AVANCER
    public function listeProduitAction(Request $request)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$produitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:ProduitVeterinaire');

		// Equivalent du SELECT *
		$lesProduits = $produitVeterinaireRepository->findAll();

		// ----------------------------------
		// On demande à la vue d'afficher la liste des pharmacies
		// ----------------------------------
		return $this->render('@GestVeterinaire/ProduitVeterinaire/listeProduit.html.twig', array('lesProduits' => $lesProduits)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function listeCommandeProduitAction(Request $request, $id)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$produitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:ProduitVeterinaire');

		// Variable qui contient le Repository
		$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:CommandeProduitVeterinaire');

		// Variable qui contient le Repository
		$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

		$lesCommandes = $commandeRepository->commandesProduit($id);

		$lesEE = $envoiEchantillonRepository->envoisEchantillonProduit($id);

		$leProduit = $produitVeterinaireRepository->find($id);

		// ----------------------------------
		// On demande à la vue d'afficher la liste des pharmacies
		// ----------------------------------
		return $this->render('@GestVeterinaire/ProduitVeterinaire/listeCommandeProduit.html.twig', array('leProduit' => $leProduit, 'lesCommandes' => $lesCommandes, 'lesEE' => $lesEE)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}
}

?>