<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/ajout')) {
            // gest_veterinaire_ajou_com
            if ('/ajoutCommande' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\CommandeController::ajoutCommandeAction',  '_route' => 'gest_veterinaire_ajou_com',);
            }

            // gest_veterinaire_ajou_envoiEchantillon
            if ('/ajoutEnvoiEnvoiEchantillon' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\EnvoiEchantillonController::ajoutEnvoiEchantillonAction',  '_route' => 'gest_veterinaire_ajou_envoiEchantillon',);
            }

            // gest_veterinaire_ajout_Delegueveto
            if ('/ajoutDelegueVeterinaire' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\DelegueVeterinaireController::ajouterAction',  '_route' => 'gest_veterinaire_ajout_Delegueveto',);
            }

            // gest_veterinaire_ajout_Region
            if ('/ajoutRegion' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\RegionController::ajouterAction',  '_route' => 'gest_veterinaire_ajout_Region',);
            }

        }

        elseif (0 === strpos($pathinfo, '/liste')) {
            // gest_veterinaire_aff_listeCommande
            if ('/listeCommande' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\CommandeController::listeCommandeAction',  '_route' => 'gest_veterinaire_aff_listeCommande',);
            }

            if (0 === strpos($pathinfo, '/listeCommande/laCommande')) {
                // gest_veterinaire_aff_unecommande
                if (preg_match('#^/listeCommande/laCommande(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_unecommande')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\CommandeController::laCommandeAction',  'id' => 1,));
                }

                // gest_veterinaire_modifiercommande
                if (0 === strpos($pathinfo, '/listeCommande/laCommande/modif') && preg_match('#^/listeCommande/laCommande/modif(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_modifiercommande')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\CommandeController::modifierAction',  'id' => 1,));
                }

                // gest_veterinaire_supprimercommande
                if (0 === strpos($pathinfo, '/listeCommande/laCommande/suppres') && preg_match('#^/listeCommande/laCommande/suppres(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_supprimercommande')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\CommandeController::supprimerAction',  'id' => 1,));
                }

            }

            // gest_veterinaire_aff_listeVeterinaire
            if ('/listeVeterinaire' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\VeterinaireController::listeVeterinaireAction',  '_route' => 'gest_veterinaire_aff_listeVeterinaire',);
            }

            // gest_veterinaire_aff_listecommandeEEVeterinaire
            if (0 === strpos($pathinfo, '/listeVet/listeComEE') && preg_match('#^/listeVet/listeComEE(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_listecommandeEEVeterinaire')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\VeterinaireController::listeCommandeVeterinaireAction',  'id' => 1,));
            }

            // gest_veterinaire_aff_listeProduit
            if ('/listeProduit' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\ProduitVeterinaireController::listeProduitAction',  '_route' => 'gest_veterinaire_aff_listeProduit',);
            }

            // gest_veterinaire_aff_listecommandeEEProduit
            if (0 === strpos($pathinfo, '/listeProd/listeComEE') && preg_match('#^/listeProd/listeComEE(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_listecommandeEEProduit')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\ProduitVeterinaireController::listeCommandeProduitAction',  'id' => 1,));
            }

            if (0 === strpos($pathinfo, '/listeEnvoiEchantillon')) {
                // gest_veterinaire_aff_listeEnvoiEchantillon
                if ('/listeEnvoiEchantillon' === $pathinfo) {
                    return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\EnvoiEchantillonController::listeEnvoiEchantillonAction',  '_route' => 'gest_veterinaire_aff_listeEnvoiEchantillon',);
                }

                if (0 === strpos($pathinfo, '/listeEnvoiEchantillon/lEnvoiEchantillon')) {
                    // gest_veterinaire_aff_unEnvoiEchantillon
                    if (preg_match('#^/listeEnvoiEchantillon/lEnvoiEchantillon(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_unEnvoiEchantillon')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\EnvoiEchantillonController::lEnvoiEchantillonAction',  'id' => 1,));
                    }

                    // gest_veterinaire_supprimerEnvoiEchantillon
                    if (0 === strpos($pathinfo, '/listeEnvoiEchantillon/lEnvoiEchantillon/suppres') && preg_match('#^/listeEnvoiEchantillon/lEnvoiEchantillon/suppres(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_supprimerEnvoiEchantillon')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\EnvoiEchantillonController::supprimerEnvoiEchantillonAction',  'id' => 1,));
                    }

                }

                // gest_veterinaire_modifierEnvoiEchantillon
                if (0 === strpos($pathinfo, '/listeEnvoiEchantillon/lEchantillon/modif') && preg_match('#^/listeEnvoiEchantillon/lEchantillon/modif(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_modifierEnvoiEchantillon')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\EnvoiEchantillonController::modifierEnvoiEchantillonAction',  'id' => 1,));
                }

            }

            // gest_veterinaire_aff_listeDelegueVeto
            if ('/listeDelegueVeterinaire' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\DelegueVeterinaireController::listeVeterinaireAction',  '_route' => 'gest_veterinaire_aff_listeDelegueVeto',);
            }

            if (0 === strpos($pathinfo, '/listeDelegueVeterinaire/leDelegueVeterinaire')) {
                // gest_veterinaire_aff_unDelegueVeterinaire
                if (preg_match('#^/listeDelegueVeterinaire/leDelegueVeterinaire(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_unDelegueVeterinaire')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\DelegueVeterinaireController::leVeterinaireAction',  'id' => 1,));
                }

                // gest_veterinaire_modifierDelegueVeterinaire
                if (0 === strpos($pathinfo, '/listeDelegueVeterinaire/leDelegueVeterinaire/modif') && preg_match('#^/listeDelegueVeterinaire/leDelegueVeterinaire/modif(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_modifierDelegueVeterinaire')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\DelegueVeterinaireController::modifierAction',  'id' => 1,));
                }

                // gest_veterinaire_supprimerDelegueVeterinaire
                if (0 === strpos($pathinfo, '/listeDelegueVeterinaire/leDelegueVeterinaire/suppres') && preg_match('#^/listeDelegueVeterinaire/leDelegueVeterinaire/suppres(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_supprimerDelegueVeterinaire')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\DelegueVeterinaireController::supprimerAction',  'id' => 1,));
                }

            }

            // gest_veterinaire_aff_listeRegion
            if ('/listeRegion' === $pathinfo) {
                return array (  '_controller' => 'GestVeterinaireBundle\\Controller\\RegionController::listeRegionAction',  '_route' => 'gest_veterinaire_aff_listeRegion',);
            }

            if (0 === strpos($pathinfo, '/listeRegion/laRegion')) {
                // gest_veterinaire_aff_uneRegion
                if (preg_match('#^/listeRegion/laRegion(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_aff_uneRegion')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\RegionController::laRegionAction',  'id' => 1,));
                }

                // gest_veterinaire_modifierRegion
                if (0 === strpos($pathinfo, '/listeRegion/laRegion/modif') && preg_match('#^/listeRegion/laRegion/modif(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_modifierRegion')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\RegionController::modifierAction',  'id' => 1,));
                }

                // gest_veterinaire_supprimerRegion
                if (0 === strpos($pathinfo, '/listeRegion/laRegion/suppres') && preg_match('#^/listeRegion/laRegion/suppres(?:/(?P<id>\\d+))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gest_veterinaire_supprimerRegion')), array (  '_controller' => 'GestVeterinaireBundle\\Controller\\RegionController::supprimerAction',  'id' => 1,));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
