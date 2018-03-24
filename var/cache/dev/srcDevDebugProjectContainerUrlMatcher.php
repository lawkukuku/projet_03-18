<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\PrimaireController::index',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        // index1
        if ('/index.php' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PrimaireController::index1',  '_route' => 'index1',);
        }

        // categorie
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie')), array (  '_controller' => 'App\\Controller\\PrimaireController::pageCategorie',));
        }

        // recherche
        if ('/recherche' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PrimaireController::recherche',  '_route' => 'recherche',);
        }

        // registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegistrationController::registerAction',  '_route' => 'registration',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // produit
            if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit')), array (  '_controller' => 'App\\Controller\\PrimaireController::pageProduit',));
            }

            // panier
            if ('/panier' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PrimaireController::panier',  '_route' => 'panier',);
            }

            // parametre
            if ('/parametre' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PrimaireController::parametre',  '_route' => 'parametre',);
            }

        }

        // facture
        if (0 === strpos($pathinfo, '/facture') && preg_match('#^/facture/(?P<iduser>[^/\\-]++)\\-(?P<idpanier>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture')), array (  '_controller' => 'App\\Controller\\PrimaireController::pdfAction',));
        }

        if (0 === strpos($pathinfo, '/forum')) {
            // forum
            if ('/forum' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PrimaireController::forum',  '_route' => 'forum',);
            }

            // ajout_sujet
            if ('/forum/ajouter' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PrimaireController::ajoutSujet',  '_route' => 'ajout_sujet',);
            }

            // consulter_sujet
            if (0 === strpos($pathinfo, '/forum/consulter') && preg_match('#^/forum/consulter/(?P<id_user>[^/\\-]++)\\-(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter_sujet')), array (  '_controller' => 'App\\Controller\\PrimaireController::consulterSujet',));
            }

        }

        // derniere-facture
        if ('/derniere-facture' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PrimaireController::derniereFacture',  '_route' => 'derniere-facture',);
        }

        // nouveau_produit
        if ('/administation/ajout_produit' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\PrimaireController::nouveauProduit',  '_route' => 'nouveau_produit',);
        }

        if (0 === strpos($pathinfo, '/administration')) {
            // administration
            if ('/administration' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\PrimaireController::administration',  '_route' => 'administration',);
            }

            // suppr_produit
            if (0 === strpos($pathinfo, '/administration/suppr') && preg_match('#^/administration/suppr/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppr_produit')), array (  '_controller' => 'App\\Controller\\PrimaireController::supprimerProduit',));
            }

            // modif_produit
            if (0 === strpos($pathinfo, '/administration/modifier') && preg_match('#^/administration/modifier/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif_produit')), array (  '_controller' => 'App\\Controller\\PrimaireController::modifProduit',));
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
