<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/soumettre')) {
            // follow_the_rhythm_soumettreActualite
            if ($pathinfo === '/soumettreActualite') {
                return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreActualiteAction',  '_route' => 'follow_the_rhythm_soumettreActualite',);
            }

            if (0 === strpos($pathinfo, '/soumettreTopic')) {
                // follow_the_rhythm_soumettreTopicPromotions
                if ($pathinfo === '/soumettreTopicPromotions') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreTopicPromotionsAction',  '_route' => 'follow_the_rhythm_soumettreTopicPromotions',);
                }

                // follow_the_rhythm_soumettreTopicNews
                if ($pathinfo === '/soumettreTopicNews') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreTopicNewsAction',  '_route' => 'follow_the_rhythm_soumettreTopicNews',);
                }

                // follow_the_rhythm_soumettreTopicEspacePrive
                if ($pathinfo === '/soumettreTopicEspacePrive') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreTopicEspacePriveAction',  '_route' => 'follow_the_rhythm_soumettreTopicEspacePrive',);
                }

                // follow_the_rhythm_soumettreTopicConcerts
                if ($pathinfo === '/soumettreTopicConcerts') {
                    return array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::soumettreTopicConcertsAction',  '_route' => 'follow_the_rhythm_soumettreTopicConcerts',);
                }

            }

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

            // follow_the_rhythm_messages
            if (0 === strpos($pathinfo, '/forum/topic') && preg_match('#^/forum/topic/(?P<topicId>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'follow_the_rhythm_messages')), array (  '_controller' => 'follow_the_rhythm\\SymfonyBundle\\Controller\\SymfonyController::messagesAction',));
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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
