<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\Veterinaire;

use GestVeterinaireBundle\Entity\Commande;

use GestVeterinaireBundle\Entity\EnvoiEchantillon;

class VeterinaireController extends Controller
{
	// LA METHODE listeVeterinaireAction(Request $request) N'EST PAS MON TAFFE
	// J'ETAIS OBLIGE DE LA FAIRE (partiellement) POUR POUVOIR AVANCER
    public function listeVeterinaireAction(Request $request)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$veterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:Veterinaire');

		// Equivalent du SELECT *
		$lesVeterinaires = $veterinaireRepository->findAll();

		// ----------------------------------
		// On demande à la vue d'afficher la liste des pharmacies
		// ----------------------------------
		return $this->render('@GestVeterinaire/Veterinaire/listeVeterinaire.html.twig', array('lesVeterinaires' => $lesVeterinaires)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function listeCommandeVeterinaireAction(Request $request, $id)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$veterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:Veterinaire');

		// Variable qui contient le Repository
		$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:Commande');

		// Variable qui contient le Repository
		$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

		$lesCommandes = $commandeRepository->commandesVeterinaire($id);

		$lesEE = $envoiEchantillonRepository->envoisEchantillonVeterinaire($id);

		$leVeterinaire = $veterinaireRepository->find($id);

		// ----------------------------------
		// On demande à la vue d'afficher la liste des pharmacies
		// ----------------------------------
		return $this->render('@GestVeterinaire/Veterinaire/listeCommandeVeterinaire.html.twig', array('leVeterinaire' => $leVeterinaire, 'lesCommandes' => $lesCommandes, 'lesEE' => $lesEE)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}
}

?>