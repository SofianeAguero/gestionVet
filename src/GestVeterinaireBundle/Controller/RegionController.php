<?php

namespace GestVeterinaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\Common\Collections\ArrayCollection;

use GestVeterinaireBundle\Entity\Veterinaire;

use GestVeterinaireBundle\Entity\Region;

use GestVeterinaireBundle\Entity\DelegueVeterinaire;

class RegionController extends Controller
{

     public function listeRegionAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            // Libellé de la catégorie produit
            $deleRegion = $this->get('request_stack')->getCurrentRequest()->get('choix');

            // Appel de Doctrine
            $affiche = $this->getDoctrine()->getManager();

            // Variable qui contient le Repository
            $regionRepository = $affiche->getRepository('GestVeterinaireBundle:Region');

            // Variable qui contient le Repository
            $delegueVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:DelegueVeterinaire');

            $lesDelegues = $delegueVeterinaireRepository ->findByLaRegion($deleRegion);

            // Equivalent du SELECT * where id=(paramètre)
            $laRegion = $regionRepository->find($deleRegion);

            return $this->render('@GestVeterinaire/Region/selectRegionDele.html.twig', array('uneRegion' => $laRegion, 'unDele' => $lesDelegues)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue        
        }
        else
        {
            // Appel de Doctrine
            $affiche = $this->getDoctrine()->getManager();

            // Variable qui contient le Repository
            $regionRepository = $affiche->getRepository('GestVeterinaireBundle:Region');

            // Equivalent du SELECT *
            $lesDeleRegions = $regionRepository->findAll();

            // ----------------------------------
            // On demande à la vue d'afficher la liste des conditionnements
            // ----------------------------------
            return $this->render('@GestVeterinaire/Region/consulterListe.html.twig', array('lesDeleRegions' => $lesDeleRegions)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue

        }
    }


	/*public function listeRegionAction(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
            $listeRegion =$repository->findAll();
        // ----------------------------------
        // On demande à la vue d'afficher la liste des pharmacies
        // ----------------------------------
            return $this->render('@GestVeterinaire/Region/consulterListe.html.twig', array('lesRegions' => $listeRegion));
        }
        else
        {
            // Appel de Doctrine
            $affiche = $this->getDoctrine()->getManager();

            // Variable qui contient le Repository
            $regionRepository = $affiche->getRepository('GestVeterinaireBundle:Region');

            // Equivalent du SELECT *
            $lesDeleRegions = $regionRepository->findAll();

            // ----------------------------------
            // On demande à la vue d'afficher la liste des conditionnements
            // ----------------------------------
            return $this->render('@GestVeterinaire/Region/consulterListe.html.twig', array('lesDeleRegions' => $lesDeleRegions)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue

        }
    }*/

    public function laRegionAction($id)
    {

        $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
        $listeRegion =$repository->find($id);
		return $this->render('@GestVeterinaire/Region/afficherRegion.html.twig', array('uneRegion' => $listeRegion));
	}


	public function ajouterAction(Request $request)
	{
	    if ($request->isMethod('POST'))
    {
        $uneRegion = new Region();
        $uneRegion->setLibelleRegion($request->get('libelleRegion'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($uneRegion);
        $em->flush();
           

         // $request->getSession()->getFlashBag()->add('info','Delegue n°'.$id.'ajouté');
        $url = $this->get('router')->generate('gest_veterinaire_aff_listeRegion'/*, array('id' => $id)*/);
        return new RedirectResponse($url);
    }
        else
        {
            return $this->render('@GestVeterinaire/Region/ajoutRegion.html.twig'); 
        }
    }

    public function modifierAction($id, Request $request)
    {
        if ($request->isMethod('POST'))
        {
            //$uneRegion = new Region();
            $em = $this->getDoctrine()->getManager();
            $uneRegion= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region')->find($id);
            $uneRegion->setLibelleRegion($request->get('libelleRegion'));
            
            //$em->persist($uneRegion);
            $em->flush();


            $request->getSession()->getFlashBag()->add('info','Region n°'.$id.'modifer');
            $url = $this->get('router')->generate('gest_veterinaire_aff_listeRegion', array('id' => $id));

            return new RedirectResponse($url);
        }
        else
        {
            // Pour l'instant on récupère les dele depuis notre tableau créé en dur
            $repository= $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region');
            $laRegion =$repository->find($id);

            return $this->render('@GestVeterinaire/Region/modifier.html.twig', array('uneRegion' => $laRegion)); 
        }
    }

    public function supprimerAction($id, Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $uneRegion = new Region();
            $uneRegion = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region')->find($id);
            $em = $this->getDoctrine()->getManager();
            $em->remove($uneRegion);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Region n°' . $id . ' supprimée');
            $url = $this->get('router')->generate('gest_veterinaire_aff_listeRegion', array('id' => $id));

            return new RedirectResponse($url);
        }
        else
        {
            // Appel de Doctrine
            $affiche = $this->getDoctrine()->getManager();

            // Variable qui contient le Repository
            $regionRepository = $affiche->getRepository('GestVeterinaireBundle:Region');

            // Variable qui contient le Repository
            $delegueVeterinaireRepository = $affiche->getRepository('GestVeterinaireBundle:DelegueVeterinaire');

            $lesDelegues = $delegueVeterinaireRepository ->findByLaRegion($id);

            if (!empty($lesDelegues)) {

                return $this->render('@GestVeterinaire/Region/supprimer.html.twig', array('unDele' => $lesDelegues)); // On affecte notre tableau contenant la(les) valeur(s) de la variable à la vue
            }
            else
            {
                $laRegion = $this->getDoctrine()->getManager()->getRepository('GestVeterinaireBundle:Region')->find($id);
                return $this->render('@GestVeterinaire/Region/supprimer.html.twig', array(('uneRegion') => $laRegion));
            }
        }
    }
}

?>