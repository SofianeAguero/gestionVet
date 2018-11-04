<?php

namespace GestVeterinaireBundle\Controller;

use GestVeterinaireBundle\Entity\CategorieEspeces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\Veterinaire;

use GestVeterinaireBundle\Entity\Region;

use GestVeterinaireBundle\Entity\DelegueVeterinaire;


class DelegueVeterinaireController extends Controller
{

	public function listeVeterinaireAction()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:DelegueVeterinaire');
        $listeDele =$repository->findAll();
        // ----------------------------------
        // On demande à la vue d'afficher la liste des pharmacies
        // ----------------------------------
        return $this->render('@GestVeterinaire/Delegue/consulterListe.html.twig', array('lesDeles' => $listeDele));
    }

    public function leVeterinaireAction($id)
    {

        $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:DelegueVeterinaire');
        $leDele =$repository->find($id);
		return $this->render('@GestVeterinaire/Delegue/afficherDelegue.html.twig', array('unDele' => $leDele));
	}


		 public function ajouterAction(Request $request)
	    {
	        if ($request->isMethod('POST'))
        {
            $unDele = new DelegueVeterinaire();
            $unDele->setNomDelegue($request->get('nomDelegue'));
            $unDele->setPrenomDelegue($request->get('prenomDelegue'));
            $unDele->setTelDelegue($request->get('telDelegue'));
            $unDele->setMailDelegue($request->get('mailDelegue'));
            //$unDele->setLaRegion($this->getRequest()->request->get('region'));
            $repository = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
            $laRegion = $request->get('idRegion');
            $result = $repository->find($laRegion[0]);
            $unDele->setLaRegion($result);

            $repository2 = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:CategorieEspeces');
            $laEspece = $request->get('espece');
            for ($i=0; $i < count($laEspece); $i++) { 
                $result2 = $repository2->find($laEspece[$i]);
                $unDele->addUneCategorieEspece($result2);
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($unDele);
            $em->flush();

           // $request->getSession()->getFlashBag()->add('info','Delegue n°'.$id.'ajouté');

            $url = $this->get('router')->generate('gest_veterinaire_aff_listeDelegueVeto'/*, array('id' => $id)*/);
            return new RedirectResponse($url);
        }
        else
        {
        	$lesRegions = $this->obtenirListeRegions();
        	$lesEspeces = $this->obtenirListeEspeces();
            return $this->render('@GestVeterinaire/Delegue/ajoutDelegue.html.twig', array('lesRegions'=>$lesRegions, 'lesEspeces'=>$lesEspeces)); 
          }
    }

    public function obtenirListeRegions()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
        $listRegion = $repository->findAll();

        // ----------------------------------
        // On demande à la vue d'afficher la liste des pharmacies
        // ----------------------------------
        return $listRegion;
    }

    public function obtenirListeEspeces()
    {
        $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:CategorieEspeces');
        $listEspece =$repository->findAll();

        // ----------------------------------
        // On demande à la vue d'afficher la liste des pharmacies
        // ----------------------------------
        return $listEspece;
    }


    public function modifierAction($id, Request $request)
    {
        if ($request->isMethod('POST'))
        {
            // faut pas oublier aussi de faire la commande suivante : php bin/console doctrine:schema:update --force
            //$unDele = new DelegueVeterinaire();
            $em = $this->getDoctrine()->getManager();
            $unDele = $em->getRepository('GestVeterinaireBundle:DelegueVeterinaire')->find($id);
            $unDele->setNomDelegue($request->get('nomDelegue'));
            $unDele->setPrenomDelegue($request->get('prenomDelegue'));
            $unDele->setTelDelegue($request->get('telDelegue'));
            $unDele->setMailDelegue($request->get('mailDelegue'));
            $repository = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
            $laRegion = $request->get('idRegion');
            $region = $this->getDoctrine()->getRepository(Region::class)->find($laRegion);
//            $result = $repository->idRegion($laRegion);
//            print_r($result);
            $unDele->setLaRegion($region);
            $espece = $unDele->getLesCategorieEspeces();
            foreach ($espece as $item){
                $unDele->removeUneCategorieEspece($item);
            }
            $repository2 = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:CategorieEspeces');
            $laEspece = $request->get('espece');
            if($laEspece != null){
                foreach ($laEspece as $item){
                    $esp = $this->getDoctrine()->getRepository(CategorieEspeces::class)->find($item);
                    $unDele->addUneCategorieEspece($esp);
                }
            }

//            $result2 = $repository2->idEspece($laEspece);
//            $unDele->addUneCategorieEspece($result2[0]);


            //$em->persist($unDele);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info','Suivi n°'.$id.'modifer');
            $url = $this->get('router')->generate('gest_veterinaire_aff_listeDelegueVeto', array('id' => $id));

            return new RedirectResponse($url);
        }
        else
        {
            // Pour l'instant on récupère les dele depuis notre tableau créé en dur
            $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:DelegueVeterinaire');
            $leDele =$repository->find($id);
            $lesRegions = $this->obtenirListeRegions();
            $lesEspeces = $this->obtenirListeEspeces();

            $espece = $leDele->getLesCategorieEspeces();
            $especearr = array();
            foreach ($espece as $item){
                array_push($especearr,$item);
            }
            return $this->render('@GestVeterinaire/Delegue/modifier.html.twig', array('unDele' => $leDele, 'lesRegions'=>$lesRegions, 'lesEspeces'=>$lesEspeces,'espece' => $espece));
		
        }
    }

    public function supprimerAction($id, Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $unDele = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:DelegueVeterinaire')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($unDele);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'delegue n°' . $id . ' supprimée');

            $url = $this->get('router')->generate('gest_veterinaire_aff_listeDelegueVeto', array('id' => $id));

            return new RedirectResponse($url);
        }
        else
        {
              // Appel de Doctrine
            $affiche = $this->getDoctrine()->getManager();

            // Variable qui contient le Repository
            $delegueVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:DelegueVeterinaire')->find($id);

            // Variable qui contient le Repository
//            $categorieEspecesRepository = $affiche->getRepository('GestVeterinaireBundle:CategorieEspeces');
            $laCategorie = $delegueVeterinaireRepository->getLesCategorieEspeces();
//            $laCategorie = $categorieEspecesRepository ->findByLesDelegueVeterinaires($id);
            $spec = false;
            foreach ($laCategorie as $key => $item){
                $spec = true;
            }

            if ($spec) {

                return $this->render('@GestVeterinaire/Delegue/supprimer.html.twig', array('uneCateg' => $laCategorie)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
            }
            else
            {
                $leDele = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:DelegueVeterinaire')->find($id);
                return $this->render('@GestVeterinaire/Delegue/supprimer.html.twig', array(('unDele') => $leDele));
            }
        }
    }
}

?>