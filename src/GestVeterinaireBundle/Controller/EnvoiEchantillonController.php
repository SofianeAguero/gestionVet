<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\EnvoiEchantillon;

use GestVeterinaireBundle\Entity\Veterinaire;

use GestVeterinaireBundle\Entity\ProduitVeterinaire;

class EnvoiEchantillonController extends Controller
{
    public function ajoutEnvoiEchantillonAction(Request $request)
    {
        if ($request->isMethod('POST'))
		{
			// Convertion string vers datetime
			$dateLStringFormat = $this->get('request_stack')->getCurrentRequest()->get('dateLivraison');
			$dateLDatetimeFormat = \DateTime::createFromFormat('Y-m-d', $dateLStringFormat);

			// Quantité d'échantillion livrée
			$qteLivree = $this->get('request_stack')->getCurrentRequest()->get('qteLivree');

			// Id du Veterinaire
			$idVet = $this->get('request_stack')->getCurrentRequest()->get('choixVeterinaire');

			// Id du produit
			$idProd = $this->get('request_stack')->getCurrentRequest()->get('choixProduit');

			// Appel de Doctrine
			$insertInDB = $this->getDoctrine()->getManager();

			// Récupération des informations saisies dans le formulaire et création de la pharmacie dans la BD
			// -----------------------------------------
			// -----------------------------------------

			// On crée un objet, instance de EnvoiEchantillon
			$nvEnvoiEchantillon = new EnvoiEchantillon();

			// On crée un objet, instance de Veterinaire
			$nvVetAssocieEE = new Veterinaire();

			// On crée un objet, instance de ProduitVeterinaire
			$nvProdAssocieEE = new ProduitVeterinaire();

			// On insert dans l'objet $nvVetAssocieEE toutes les coordonnées du Veterinaire passé en paramètre find($idVet)
			$nvVetAssocieEE = $insertInDB->getRepository('GestVeterinaireBundle:Veterinaire')->find($idVet);

			// On insert dans l'objet $nvProdAssocieEE toutes les coordonnées du produit passé en paramètre find($idProd)
			$nvProdAssocieEE = $insertInDB->getRepository('GestVeterinaireBundle:ProduitVeterinaire')->find($idProd);

			// On récupère les valeurs saisies dans le formulaire pour les affecter à l'objet
			// ------------------------------------------
			// Récupération et affectation de la date de livraison, saisie (venant du formulaire), dans l'objet $nvEnvoiEchantillon
			$nvEnvoiEchantillon->setDateLivraison($dateLDatetimeFormat);

			// Récupération et affectation de la quantité d'échantillion livrée, saisi (venant du formulaire), dans l'objet $nvEnvoiEchantillon
			$nvEnvoiEchantillon->setQteLivree($qteLivree);

			// Récupération de l'id se trouvant dans l'objet $nvVetAssocieEE
			$nvVetAssocieEE->getId();

			// Récupération de l'id se trouvant dans l'objet $nvProdAssocieEE
			$nvProdAssocieEE->getId();

			// On associe l'objet $nvVetAssocieEE (où il n'y a que l'id donc) à l'objet $nvEnvoiEchantillon
			$nvEnvoiEchantillon->setLeVeterinaire($nvVetAssocieEE);

			// On associe l'objet $nvProdAssocieEE (où il n'y a que l'id donc) à l'objet $nvEnvoiEchantillon
			$nvEnvoiEchantillon->setLeProduitVeterinaire($nvProdAssocieEE);

			// On donne l'autorisation à Doctrine pour l'exécution
			$insertInDB->persist($nvEnvoiEchantillon);

			// Execution
			$insertInDB->flush();

			// ---- BONUS ----
			// ----- Récupération de l'id de l'envoi d'échantillion créée ---------
			$insertInDB->refresh($nvEnvoiEchantillon);
			// Affichage d'un message flash pour indiquer que l'envoi d'échantillon a bien été ajoutée
			$request->getSession()->getFlashBag()->add('info','Envoi d\'échantillon n° '.$nvEnvoiEchantillon->getId().' ajouté');
			// ----------------

			// Génération de l'URL correspondant à la route qui s'appelle gest_veterinaire_aff_listeEnvoiEchantillon
			// Donc génération de l'URL de la page listeEE.html.twig
			$url = $this->get('router')->generate('gest_veterinaire_aff_listeEnvoiEchantillon'); // On affecte la valeur de l'id à l'url

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
			return $this->render('@GestVeterinaire/EnvoiEchantillon/ajoutEE.html.twig', array('lesVeterinaires' => $lesVeterinaires, 'lesProduits' => $lesProduits)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
    }

    public function listeEnvoiEchantillonAction(Request $request)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

		// Equivalent du SELECT *
		$lesEE = $envoiEchantillonRepository->findAll();

		// ----------------------------------
		// On demande à la vue d'afficher la liste des envois d'échantillon
		// ----------------------------------
		return $this->render('@GestVeterinaire/EnvoiEchantillon/listeEE.html.twig', array('lesEE' => $lesEE)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function lEnvoiEchantillonAction($id)
	{
		// Appel de Doctrine
		$affiche = $this->getDoctrine()->getManager();

		// Variable qui contient le Repository
		$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

		// Equivalent du SELECT * where id=(paramètre)
		$lEE = $envoiEchantillonRepository->find($id);

		return $this->render('@GestVeterinaire/EnvoiEchantillon/lEE.html.twig', array('unEE' => $lEE)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
	}

	public function modifierEnvoiEchantillonAction($id, Request $request)
	{
		if ($request->isMethod('POST'))
		{
			// Convertion string vers datetime
			$dateLStringFormat = $this->get('request_stack')->getCurrentRequest()->get('dateLivraison');
			$dateLDatetimeFormat = \DateTime::createFromFormat('Y-m-d', $dateLStringFormat);

			// Quantité d'échantillion livrée
			$qteLivree = $this->get('request_stack')->getCurrentRequest()->get('qteLivree');

			// Id du Veterinaire
			$idVet = $this->get('request_stack')->getCurrentRequest()->get('choixVeterinaire');

			// Id du produit
			$idProd = $this->get('request_stack')->getCurrentRequest()->get('choixProduit');

			// Appel de Doctrine
			$updateInDB = $this->getDoctrine()->getManager();

			// On crée un objet, instance de EnvoiEchantillon
			$modifEE = new EnvoiEchantillon();

			// On crée un objet, instance de Veterinaire
			$vetAssocieCom = new Veterinaire();

			// On crée un objet, instance de ProduitVeterinaire
			$prodAssocieEE = new ProduitVeterinaire();

			// On récupère la commande (ayant l'id qui qui se trouve dans l'url) dans l'objet modifEE avec la méthode find()
			// Ca sera un UPDATE
			$modifEE = $updateInDB->getRepository('GestVeterinaireBundle:EnvoiEchantillon')->find($id); // getRepository(puis notre Repository)

			// On insert dans l'objet $vetAssocieCom toutes les coordonnées du Veterinaire passé en paramètre find($idVet)
			$vetAssocieCom = $updateInDB->getRepository('GestVeterinaireBundle:Veterinaire')->find($idVet);

			// On insert dans l'objet $prodAssocieEE toutes les coordonnées du Produit passé en paramètre find($idProd)
			$prodAssocieEE = $updateInDB->getRepository('GestVeterinaireBundle:ProduitVeterinaire')->find($idProd);

			// Modification de l'envoi d'échantillon
			// ------------------------------------------
			// ------------------------------------------

			// On récupère les valeurs saisies dans le formulaire pour les affecter à l'objet
			// ------------------------------------------
			// Récupération et affectation de la date de livraison, saisie (venant du formulaire), dans l'objet $modifEE
			$modifEE->setDateLivraison($dateLDatetimeFormat);

			// Récupération et affectation de la quantité d'échantillion livrée, saisi (venant du formulaire), dans l'objet $modifEE
			$modifEE->setQteLivree($qteLivree);

			// Récupération de l'id se trouvant dans l'objet $vetAssocieCom
			$vetAssocieCom->getId();

			// Récupération de l'id se trouvant dans l'objet $prodAssocieEE
			$prodAssocieEE->getId();

			// On associe l'objet $vetAssocieCom (où il n'y a que l'id donc) à l'objet $modifEE
			$modifEE->setLeVeterinaire($vetAssocieCom);

			// On associe l'objet $prodAssocieEE (où il n'y a que l'id donc) à l'objet $modifEE
			$modifEE->setLeProduitVeterinaire($prodAssocieEE);

			// Inutile de faire un persist() sur $modifEE car comme on a récup des valeurs via Doctrine
			// Doctrine possède déjà l'autorisation

			$updateInDB->flush(); // S'il existe, dans la BD, une commande avec l'id=$id ca sera un UPDATE, sinon un INSERT

			// Affichage d'un message flash pour indiquer que l'envoi d'échantillion a bien été modifiée
			$request->getSession()->getFlashBag()->add('info','Envoi d\'échantillon n° '.$id.' modifié');

			// Génération de l'URL correspondant à la route qui s'appelle gest_veterinaire_aff_unEnvoiEchantillon
			// Donc génération de l'URL de la page lEE.html.twig
			$url = $this->get('router')->generate('gest_veterinaire_aff_unEnvoiEchantillon', array('id' => $id)); // On affecte la valeur de $id(parametre) à l'url

			// Création et retour d'une réponse de redirection qui contient l'URL générée
			// Donc redirection vers cette URL
			return new RedirectResponse($url);
		}
		else
		{
			// Appel de Doctrine
			$affiche = $this->getDoctrine()->getManager();

			// Variable qui contient le Repository
			$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

			// Variable qui contient le Repository
			$veterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:Veterinaire');

			// Variable qui contient le Repository
			$produitVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:ProduitVeterinaire');

			// Equivalent du SELECT * where id=(paramètre)
			$lEE = $envoiEchantillonRepository->find($id);

			// Equivalent du SELECT *
			$lesVeterinaires = $veterinaireRepository->findAll();

			// Equivalent du SELECT *
			$lesProduits = $produitVeterinaireRepository->findAll();

			return $this->render('@GestVeterinaire/EnvoiEchantillon/modifEE.html.twig', array('unEE' => $lEE, 'lesVeterinaires' => $lesVeterinaires, 'lesProduits' => $lesProduits)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
	}

	public function supprimerEnvoiEchantillonAction($id, Request $request)
	{
		if ($request->isMethod('POST'))
		{
			// Appel de Doctrine
			$suppInDB = $this->getDoctrine()->getManager();

			// On crée un objet, instance de EnvoiEchantillon
			$suppEE = new EnvoiEchantillon();

			// On récupère l'envoi d'échantillon (ayant l'id qui qui se trouve dans l'url) dans l'objet suppEE avec la méthode find()
			// Ca sera un DELETE
			$suppEE = $suppInDB->getRepository('GestVeterinaireBundle:EnvoiEchantillon')->find($id); // getRepository(puis notre Repository)

			// Supression de l'envoi d'échantillon
			$suppInDB->remove($suppEE);

			// Inutile de faire un persist() sur $suppEE car comme on a récup des valeurs via Doctrine
			// Doctrine possède déjà l'autorisation

			// Execution
			$suppInDB->flush();

			// Affichage d'un message flash pour indiquer que l'envoi d'échantillon a bien été supprimée
			$request->getSession()->getFlashBag()->add('info','Envoi d\'échantillon n° '.$id.' supprimé');

			// On redirige sur la page contenant la liste des envois d'échantillon
			$url = $this->get('router')->generate('gest_veterinaire_aff_listeEnvoiEchantillon');

			// Création et retour d'une réponse de redirection qui contient l'URL générée
			// Donc redirection vers cette URL
			return new RedirectResponse($url);
		}
		else
		{
			// Appel de Doctrine
			$affiche = $this->getDoctrine()->getManager();

			// Variable qui contient le Repository
			$envoiEchantillonRepository = $affiche->getRepository('GestVeterinaireBundle:EnvoiEchantillon');

			// Equivalent du SELECT * where id=(paramètre)
			$lEE = $envoiEchantillonRepository->find($id);

			return $this->render('@GestVeterinaire/EnvoiEchantillon/suppEE.html.twig', array('unEE' => $lEE)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
		}
	}
}

?>