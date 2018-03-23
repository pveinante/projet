<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // follow_the_rhythm_bienvenue
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'follow_the_rhythm_bienvenue');
            }

            return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::indexAction',  '_route' => 'follow_the_rhythm_bienvenue',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // follow_the_rhythm_accueil
            if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil/(?P<page>[^/]++)/(?P<sens>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_accueil')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::indexAction',));
            }

            // follow_the_rhythm_artiste
            if ($pathinfo === '/artiste') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::artisteAction',  '_route' => 'follow_the_rhythm_artiste',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/con')) {
                // follow_the_rhythm_concert
                if ($pathinfo === '/concert') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::concertAction',  '_route' => 'follow_the_rhythm_concert',);
                }

                // follow_the_rhythm_contacts
                if ($pathinfo === '/contacts') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::contactsAction',  '_route' => 'follow_the_rhythm_contacts',);
                }

            }

            // follow_the_rhythm_credits
            if ($pathinfo === '/credits') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::creditsAction',  '_route' => 'follow_the_rhythm_credits',);
            }

        }

        // follow_the_rhythm_soumettreActualite
        if ($pathinfo === '/soumettreActualite') {
            return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreActualiteAction',  '_route' => 'follow_the_rhythm_soumettreActualite',);
        }

        if (0 === strpos($pathinfo, '/page')) {
            // follow_the_rhythm_pageArtiste
            if (0 === strpos($pathinfo, '/pageArtiste') && preg_match('#^/pageArtiste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_pageArtiste')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::pageArtisteAction',));
            }

            // follow_the_rhythm_pageUtilisateur
            if (0 === strpos($pathinfo, '/pageUtilisateur') && preg_match('#^/pageUtilisateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_pageUtilisateur')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::pageUtilisateurAction',));
            }

            // follow_the_rhythm_pageConcert
            if (0 === strpos($pathinfo, '/pageConcert') && preg_match('#^/pageConcert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_pageConcert')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::pageConcertAction',));
            }

        }

        if (0 === strpos($pathinfo, '/accueil')) {
            // follow_the_rhythm_accueilForum
            if ($pathinfo === '/accueilForum') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::accueilForumAction',  '_route' => 'follow_the_rhythm_accueilForum',);
            }

            // follow_the_rhythm_accueilArtistesUniquement
            if (0 === strpos($pathinfo, '/accueilArtistesUniquement') && preg_match('#^/accueilArtistesUniquement/(?P<page>[^/]++)/(?P<sens>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_accueilArtistesUniquement')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::accueilArtistesUniquementAction',));
            }

        }

        if (0 === strpos($pathinfo, '/modifier')) {
            // follow_the_rhythm_modifierSupprimerActualite
            if ($pathinfo === '/modifierSupprimerActualite') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::modifierSupprimerActualiteAction',  '_route' => 'follow_the_rhythm_modifierSupprimerActualite',);
            }

            // follow_the_rhythm_modifierActualite
            if (0 === strpos($pathinfo, '/modifierActualite') && preg_match('#^/modifierActualite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_modifierActualite')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::modifierActualiteAction',));
            }

        }

        // follow_the_rhythm_aide
        if ($pathinfo === '/aide') {
            return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::aideAction',  '_route' => 'follow_the_rhythm_aide',);
        }

        if (0 === strpos($pathinfo, '/forum')) {
            // follow_the_rhythm_categorieNews
            if ($pathinfo === '/forum/news') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::categorieNewsAction',  '_route' => 'follow_the_rhythm_categorieNews',);
            }

            // follow_the_rhythm_categorieEspacePrive
            if ($pathinfo === '/forum/espacePrive') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::categorieEspacePriveAction',  '_route' => 'follow_the_rhythm_categorieEspacePrive',);
            }

            // follow_the_rhythm_categorieConcert
            if ($pathinfo === '/forum/concert') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::categorieConcertAction',  '_route' => 'follow_the_rhythm_categorieConcert',);
            }

            // follow_the_rhythm_categoriePromotions
            if ($pathinfo === '/forum/promotion') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::categoriePromotionAction',  '_route' => 'follow_the_rhythm_categoriePromotions',);
            }

        }

        // follow_the_rhythm_news
        if ($pathinfo === '/API/news') {
            return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::newsAction',  '_route' => 'follow_the_rhythm_news',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
