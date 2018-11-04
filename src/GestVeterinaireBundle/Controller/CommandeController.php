<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\Commande;

use GestVeterinaireBundle\Entity\Veterinaire;

use GestVeterinaireBundle\Entity\ProduitVeterinaire;

use GestVeterinaireBundle\Entity\CommandeProduitVeterinaire;

class CommandeController extends Controller
{
    public function ajoutCommandeAction(Request $request)
    {
        if ($request->isMethod('POST'))
		{
			// Convertion string vers datetime
			$dateStringFormat = $this->get('request_stack')->getCurrentRequest()->get('dateLivraisonSouhaitee');
			$dateDatetimeFormat = \DateTime::createFromFormat('Y-m-d', $dateStringFormat);

			// Id du Veterinaire
			$idVet = $this->get('request_stack')->getCurrentRequest()->get('choixVeterinaire');

			// Id du ProduitVeterinaire
			$idProd = $this->get('request_stack')->getCurrentRequest()->get('choixProduit');

			// Quantié de produit commandée
			$qteCommandee = $this->get('request_stack')->getCurrentRequest()->get('qteCommandee');

			// Appel de Doctrine
			$insertInDB = $this->getDoctrine()->getManager();

			// Récupération des informations saisies dans le formulaire et création de la pharmacie dans la BD
			// -----------------------------------------
			// -----------------------------------------

			// On crée un objet, instance de Commande
			$nvlCommande = new Commande();

			// On crée un objet, instance de Veterinaire
			$nvVetAssocieCom = new Veterinaire();

			// On crée un objet, instance de ProduitVeterinaire
			$nvProdAssocieCom = new ProduitVeterinaire();

			// On crée un objet, instance de CommandeProduitVeterinaire
			$nvCPV = new CommandeProduitVeterinaire();

			// On insert dans l'objet $nvVetAssocieCom toutes les coordonnées du Veterinaire passé en paramètre find($idVet)
			$nvVetAssocieCom = $insertInDB->getRepository('GestVeterinaireBundle:Veterinaire')->find($idVet);

			// On insert dans l'objet $nvProdAssocieCom toutes les coordonnées du Produit passé en paramètre find($idProd)
			$nvProdAssocieCom = $insertInDB->getRepository('GestVeterinaireBundle:ProduitVeterinaire')->find($idProd);

			// On récupère les valeurs saisies dans le formulaire pour les affecter à l'objet $nvlCommande
			// ------------------------------------------
			// Récupération et affectation de la date de livraison souhaitée, saisie (venant du formulaire), dans l'objet $nvlCommande
			$nvlCommande->setDateLivraisonSouhaitee($dateDatetimeFormat);

			
			// Récupération de l'id se trouvant dans l'objet $nvVetAssocieCom
			$nvVetAssocieCom->getId();

			// On associe l'objet $nvVetAssocieCom (où il n'y a que l'id donc) à l'objet $nvlCommande
			$nvlCommande->setLeVeterinaire($nvVetAssocieCom);

			// On donne l'autorisation à Doctrine pour l'exécution
			$insertInDB->persist($nvlCommande);

			// Execution
			$insertInDB->flush();

			



			// Récupération de l'id de la commande créée
			$insertInDB->refresh($nvlCommande);
			$nvlCommande->getId();

			// Récupération de l'id se trouvant dans l'objet $nvProdAssocieCom
			$nvProdAssocieCom->getId();

			// On inser l'id de la commande créée à l'objet $nvCPV
			$nvCPV->setLaCommande($nvlCommande);

			// On associe l'objet $nvProdAssocieCom (où il n'y a que l'id donc) à l'objet $nvCPV
			$nvCPV->setLeProduitVeterinaire($nvProdAssocieCom);

			// Récupération et affectation de la quantié de produit commandée, saisie (venant du formulaire), dans l'objet $nvCPV
			$nvCPV->setQteCommandee($qteCommandee);

			// On donne l'autorisation à Doctrine pour l'exécution
			$insertInDB->persist($nvCPV);

			// Execution
			$insertInDB->flush();

			




			// Affichage d'un message flash pour indiquer que la commande a bien été ajoutée
			$request->getSession()->getFlashBag()->add('info','Commande numero '.$nvlCommande->getId().' ajoutee');
			// Génération de l'URL correspondant à la route qui s'appelle gest_veterinaire_aff_listeCommande
			// Donc génération de l'URL de la page listeCommande.html.twig
			$url = $this->get('router')->generate('gest_veterinaire_aff_listeCommande'); // On affecte la valeur de l'id à l'url

			// Création et retour d'une réponse de redirection qui contient l'URL générée
			// Donc redirection vers cette URL
			return new RedirectResponse($url);
		}

		else
		{
			// Appel de Doctrine
			$affiche = $this->getDoctrine()->getManager();

			// Lister tous les produits de la BD
			$produitRepository = $affiche->getRepository('GestVeterinaireBundle:ProduitVeterinaire');
			$lesProduits = $produitRepository->findAll();

			//  Lister tous les vétérinaires de la BD
			$veterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:Veterinaire');
			$lesVeterinaires = $veterinaireRepository->findAll();

			// ----------------------------------
			// On demande à la vue d'afficher la liste des vétérinaires et des produits
			// ----------------------------------
			return $this->render('@GestVeterinaire/Commande/ajoutCommande.html.twig', array('lesVeterinaires' => $lesVeterinaires, 'lesProduits' => $lesProduits)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
    }

    public function listeCommandeAction(Request $request)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:Commande');

		// Equivalent du SELECT *
		$lesCommandes = $commandeRepository->findAll();

		// ----------------------------------
		// On demande à la vue d'afficher la liste des commandes
		// ----------------------------------
		return $this->render('@GestVeterinaire/Commande/listeCommande.html.twig', array('lesCommandes' => $lesCommandes)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function laCommandeAction($id)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:Commande');

		$commandeProduitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:CommandeProduitVeterinaire');

		// Equivalent du SELECT * where id=(paramètre)
		$laCommande = $commandeRepository->find($id);

		$commandeProduit = $commandeProduitVeterinaireRepository->findByLaCommande($laCommande->getId()); // La méthode findByX() est pareil que la méthode find() sauf qu'elle affiche tous les résultat tandis que la méthode find() n'affiche que le premier résultat

		// ----------------------------------
		// On demande à la vue d'afficher la commande plus tous ses produits
		// ----------------------------------
		return $this->render('@GestVeterinaire/Commande/laCommande.html.twig', array('uneCom' => $laCommande, 'commandeProduit' => $commandeProduit)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function modifierAction($id, Request $request)
	{
		if ($request->isMethod('POST'))
		{
			// Convertion string vers datetime
			$dateCommandeStringFormat = $this->get('request_stack')->getCurrentRequest()->get('dateCommande');
			$dateCommandeDatetimeFormat = \DateTime::createFromFormat('Y-m-d', $dateCommandeStringFormat);

			$dateLivSouhaiteeStringFormat = $this->get('request_stack')->getCurrentRequest()->get('dateLivraisonSouhaitee');
			$dateLivSouhaiteeDatetimeFormat = \DateTime::createFromFormat('Y-m-d', $dateLivSouhaiteeStringFormat);

			// Quantié de produit commandée
			$qteCommandee = $this->get('request_stack')->getCurrentRequest()->get('qteCommandee');

			// Id du produit
			$idProd = $this->get('request_stack')->getCurrentRequest()->get('choixProduit');

			// Id du Veterinaire
			$idVet = $this->get('request_stack')->getCurrentRequest()->get('choixVeterinaire');

			// Appel de Doctrine
			$updateInDB = $this->getDoctrine()->getManager();

			// On crée un objet, instance de Commande
			$modifCommande = new Commande();

			// On crée un objet, instance de Veterinaire
			$vetAssocieCom = new Veterinaire();

			// On crée un objet, instance de ProduitVeterinaire
			$prodAssocieCom = new ProduitVeterinaire();

			// On crée un objet, instance de CommandeProduitVeterinaire
			$nvCPV = new CommandeProduitVeterinaire();

			// On récupère la commande (ayant l'id qui se trouve dans l'url) dans l'objet modifCommande avec la méthode find()

			$modifCommande = $updateInDB->getRepository('GestVeterinaireBundle:Commande')->find($id); // getRepository(puis notre Repository)

			// On insert dans l'objet $vetAssocieCom toutes les coordonnées du Veterinaire passé en paramètre find($idVet)
			$vetAssocieCom = $updateInDB->getRepository('GestVeterinaireBundle:Veterinaire')->find($idVet);

			// On insert dans l'objet $prodAssocieCom toutes les coordonnées du produit passé en paramètre find($idProd)
			$prodAssocieCom = $updateInDB->getRepository('GestVeterinaireBundle:ProduitVeterinaire')->find($idProd);

			// Modification de la commande
			// ------------------------------------------
			// ------------------------------------------

			// On récupère les valeurs saisies dans le formulaire pour les affecter à l'objet
			// ------------------------------------------
			// Récupération et affectation de la date de la commande, saisie (venant du formulaire), dans l'objet $modifCommande
			$modifCommande->setDateCommande($dateCommandeDatetimeFormat);

			// Récupération et affectation de la date de livraison souhaitée, saisie (venant du formulaire), dans l'objet $modifCommande
			$modifCommande->setDateLivraisonSouhaitee($dateLivSouhaiteeDatetimeFormat);

			// Récupération de l'id se trouvant dans l'objet $vetAssocieCom
			$vetAssocieCom->getId();

			// On associe l'objet $vetAssocieCom (où il n'y a que l'id donc) à l'objet $modifCommande
			$modifCommande->setLeVeterinaire($vetAssocieCom);

			// Inutile de faire un persist() sur $modifCommande car comme on a récup des valeurs via Doctrine
			// Doctrine possède déjà l'autorisation

			$updateInDB->flush();



			// Récupération de l'id de la commande
			$modifCommande->getId();

			// Récupération de l'id se trouvant dans l'objet $prodAssocieCom
			$prodAssocieCom->getId();

			// On inser l'id de la commande créée à l'objet $nvCPV
			$nvCPV->setLaCommande($modifCommande);

			// On associe l'objet $prodAssocieCom (où il n'y a que l'id donc) à l'objet $nvCPV
			$nvCPV->setLeProduitVeterinaire($prodAssocieCom);

			// Récupération et affectation de la quantié de produit commandée, saisie (venant du formulaire), dans l'objet $nvCPV
			$nvCPV->setQteCommandee($qteCommandee);

			// On donne l'autorisation à Doctrine pour l'exécution
			$updateInDB->persist($nvCPV);

			// Execution
			$updateInDB->flush();




			// Affichage d'un message flash pour indiquer que la commande a bien été modifiée
			$request->getSession()->getFlashBag()->add('info','Commande numero '.$id.' modifiee');

			// Génération de l'URL correspondant à la route qui s'appelle gest_veterinaire_aff_unecommande
			// Donc génération de l'URL de la page laCommande.html.twig
			$url = $this->get('router')->generate('gest_veterinaire_aff_unecommande', array('id' => $id)); // On affecte la valeur de $id(parametre) à l'url

			// Création et retour d'une réponse de redirection qui contient l'URL générée
			// Donc redirection vers cette URL
			return new RedirectResponse($url);
		}
		else
		{
			// Appel de Doctrine
			$affiche = $this->getDoctrine()->getManager();

			// Variable qui contient le Repository
			$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:Commande');

			// Variable qui contient le Repository
			$veterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:Veterinaire');

			// Variable qui contient le Repository
			$produitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:ProduitVeterinaire');

			// Variable qui contient le Repository
			$commandeProduitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:CommandeProduitVeterinaire');

			// Equivalent du SELECT * where id=(paramètre)
			$laCommande = $commandeRepository->find($id);

			// Equivalent du SELECT *
			$lesVeterinaires = $veterinaireRepository->findAll();

			// Equivalent du SELECT *
			$lesProduits = $produitVeterinaireRepository->findAll();

			$commandeProduit = $commandeProduitVeterinaireRepository->findByLaCommande($laCommande->getId()); // La méthode findByX() est pareil que la méthode find() sauf qu'elle affiche tous les résultat tandis que la méthode find() n'affiche que le premier résultat


			return $this->render('@GestVeterinaire/Commande/modifCommande.html.twig', array('uneCom' => $laCommande, 'lesVeterinaires' => $lesVeterinaires, 'lesProduits' => $lesProduits, 'commandeProduit' => $commandeProduit)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
	}

	public function supprimerAction($id, Request $request)
	{
		if ($request->isMethod('POST'))
		{
			// Appel de Doctrine
			$suppInDB = $this->getDoctrine()->getManager();

			// On crée un objet, instance de Commande
			$suppCommande = new Commande();

			// On crée un objet, instance de CommandeProduitVeterinaire
			$suppCPV = new CommandeProduitVeterinaire();

			// On récupère la commande (ayant l'id qui qui se trouve dans l'url) dans l'objet suppCommande avec la méthode find()
			// Ca sera un DELETE
			$suppCommande = $suppInDB->getRepository('GestVeterinaireBundle:Commande')->find($id); // getRepository(puis notre Repository)

			$suppCPV = $suppInDB->getRepository('GestVeterinaireBundle:CommandeProduitVeterinaire')->findByLaCommande($suppCommande->getId()); // La méthode findByX() est pareil que la méthode find() sauf qu'elle affiche tous les résultat tandis que la méthode find() n'affiche que le premier résultat

			/* ------ Supression de la commande ------ */
			// On supprime toutes les données de la commande  avant de supprimer la commande
			// Afin d'éviter les problème de contrainte de clé étrangère
			foreach ($suppCPV as $suppression) {
			    $suppInDB->remove($suppression);
			}
			// On supprime la commande
			$suppInDB->remove($suppCommande);

			// Inutile de faire un persist() sur $suppCommande car comme on a récup des valeurs via Doctrine
			// Doctrine possède déjà l'autorisation

			// Execution
			$suppInDB->flush();

			// Affichage d'un message flash pour indiquer que la commande a bien été supprimée
			$request->getSession()->getFlashBag()->add('info','Commande numero '.$id.' supprimee');

			// On redirige sur la page contenant la liste des pharmacies
			$url = $this->get('router')->generate('gest_veterinaire_aff_listeCommande');

			// Création et retour d'une réponse de redirection qui contient l'URL générée
			// Donc redirection vers cette URL
			return new RedirectResponse($url);
		}
		else
		{
			// Appel de Doctrine
			$affiche = $this->getDoctrine()->getManager();

			// Variable qui contient le Repository
			$commandeRepository = $affiche->getRepository('GestVeterinaireBundle:Commande');

			// Equivalent du SELECT * where id=(paramètre)
			$laCommande = $commandeRepository->find($id);

			// ----------------------------------
			// On demande à la vue d'afficher la commande
			// ----------------------------------
			return $this->render('@GestVeterinaire/Commande/suppCommande.html.twig', array('uneCom' => $laCommande)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
	}
}

?>