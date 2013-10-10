<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/css/905c18b')) {
                // _assetic_905c18b
                if ($pathinfo === '/css/905c18b.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_905c18b',);
                }

                if (0 === strpos($pathinfo, '/css/905c18b_part_')) {
                    if (0 === strpos($pathinfo, '/css/905c18b_part_1_')) {
                        if (0 === strpos($pathinfo, '/css/905c18b_part_1_fo')) {
                            // _assetic_905c18b_0
                            if ($pathinfo === '/css/905c18b_part_1_footer_1.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_905c18b_0',);
                            }

                            // _assetic_905c18b_1
                            if ($pathinfo === '/css/905c18b_part_1_form_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_905c18b_1',);
                            }

                        }

                        // _assetic_905c18b_2
                        if ($pathinfo === '/css/905c18b_part_1_home_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_905c18b_2',);
                        }

                        // _assetic_905c18b_3
                        if ($pathinfo === '/css/905c18b_part_1_menu_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_905c18b_3',);
                        }

                        // _assetic_905c18b_4
                        if ($pathinfo === '/css/905c18b_part_1_normalize_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_905c18b_4',);
                        }

                        // _assetic_905c18b_5
                        if ($pathinfo === '/css/905c18b_part_1_style_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_905c18b_5',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/905c18b_part_2_bootstrap')) {
                        // _assetic_905c18b_6
                        if ($pathinfo === '/css/905c18b_part_2_bootstrap-responsive.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_905c18b_6',);
                        }

                        // _assetic_905c18b_7
                        if ($pathinfo === '/css/905c18b_part_2_bootstrap.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '905c18b',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_905c18b_7',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/compiled/compiled')) {
                // _assetic_f93eecd
                if ($pathinfo === '/compiled/compiled.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f93eecd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f93eecd',);
                }

                if (0 === strpos($pathinfo, '/compiled/compiled_part_1_')) {
                    // _assetic_f93eecd_0
                    if ($pathinfo === '/compiled/compiled_part_1_ajquery-2.0.3.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f93eecd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f93eecd_0',);
                    }

                    // _assetic_f93eecd_1
                    if ($pathinfo === '/compiled/compiled_part_1_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f93eecd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f93eecd_1',);
                    }

                    // _assetic_f93eecd_2
                    if ($pathinfo === '/compiled/compiled_part_1_menu_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f93eecd',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f93eecd_2',);
                    }

                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // cls_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cls_home');
            }

            return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\HomeController::indexAction',  '_route' => 'cls_home',);
        }

        if (0 === strpos($pathinfo, '/orcamento')) {
            // cls_estimate
            if ($pathinfo === '/orcamento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cls_estimate;
                }

                return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\EstimateController::indexAction',  '_route' => 'cls_estimate',);
            }
            not_cls_estimate:

            // cls_estimate_create
            if ($pathinfo === '/orcamento') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cls_estimate_create;
                }

                return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\EstimateController::createAction',  '_route' => 'cls_estimate_create',);
            }
            not_cls_estimate_create:

        }

        // cls_institutional
        if ($pathinfo === '/empresa') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_cls_institutional;
            }

            return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\InstitutionalController::indexAction',  '_route' => 'cls_institutional',);
        }
        not_cls_institutional:

        // cls_services
        if ($pathinfo === '/servicos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_cls_services;
            }

            return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\ServicesController::indexAction',  '_route' => 'cls_services',);
        }
        not_cls_services:

        if (0 === strpos($pathinfo, '/fale-conosco')) {
            // cls_contact
            if ($pathinfo === '/fale-conosco') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cls_contact;
                }

                return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\ContactController::indexAction',  '_route' => 'cls_contact',);
            }
            not_cls_contact:

            // cls_contact_send
            if ($pathinfo === '/fale-conosco') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cls_contact_send;
                }

                return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\ContactController::sendAction',  '_route' => 'cls_contact_send',);
            }
            not_cls_contact_send:

        }

        // cls_equipment_list
        if ($pathinfo === '/equipamentos') {
            return array (  '_controller' => 'Cls\\SiteBundle\\Controller\\EquipmentController::listAction',  '_route' => 'cls_equipment_list',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileController::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

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
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/media/pixlr')) {
            // sonata_media_pixlr_edit
            if (0 === strpos($pathinfo, '/admin/media/pixlr/edit') && preg_match('#^/admin/media/pixlr/edit/(?P<id>[^/]++)/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_pixlr_edit')), array (  '_controller' => 'sonata.media.extra.pixlr:editAction',));
            }

            // sonata_media_pixlr_target
            if (0 === strpos($pathinfo, '/admin/media/pixlr/target') && preg_match('#^/admin/media/pixlr/target/(?P<hash>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_pixlr_target')), array (  '_controller' => 'sonata.media.extra.pixlr:targetAction',));
            }

            // sonata_media_pixlr_exit
            if (0 === strpos($pathinfo, '/admin/media/pixlr/exit') && preg_match('#^/admin/media/pixlr/exit/(?P<hash>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_pixlr_exit')), array (  '_controller' => 'sonata.media.extra.pixlr:exitAction',));
            }

            // sonata_media_pixlr_open_editor
            if (0 === strpos($pathinfo, '/admin/media/pixlr/open') && preg_match('#^/admin/media/pixlr/open/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_pixlr_open_editor')), array (  '_controller' => 'sonata.media.extra.pixlr:openEditorAction',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/a')) {
                // sonata_news_add_comment
                if (0 === strpos($pathinfo, '/blog/add-comment') && preg_match('#^/blog/add\\-comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_add_comment')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::addCommentAction',));
                }

                // sonata_news_archive_monthly
                if (0 === strpos($pathinfo, '/blog/archive') && preg_match('#^/blog/archive/(?P<year>\\d+)/(?P<month>\\d+)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_archive_monthly')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::archiveMonthlyAction',  '_format' => 'html',));
                }

            }

            // sonata_news_tag
            if (0 === strpos($pathinfo, '/blog/tag') && preg_match('#^/blog/tag/(?P<tag>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_tag')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::tagAction',  '_format' => 'html',));
            }

            // sonata_news_category
            if (0 === strpos($pathinfo, '/blog/category') && preg_match('#^/blog/category/(?P<category>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_category')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::categoryAction',  '_format' => 'html',));
            }

            if (0 === strpos($pathinfo, '/blog/archive')) {
                // sonata_news_archive_yearly
                if (preg_match('#^/blog/archive/(?P<year>\\d+)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_archive_yearly')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::archiveYearlyAction',  '_format' => 'html',));
                }

                // sonata_news_archive
                if (preg_match('#^/blog/archive(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_archive')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::archiveAction',  '_format' => 'html',));
                }

            }

            // sonata_news_comment_moderation
            if (0 === strpos($pathinfo, '/blog/comment/moderation') && preg_match('#^/blog/comment/moderation/(?P<commentId>[^/]++)/(?P<hash>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_comment_moderation')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::commentModerationAction',));
            }

            // sonata_news_view
            if (preg_match('#^/blog/(?P<permalink>.+?)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_news_view')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::viewAction',  '_format' => 'html',));
            }

            // sonata_news_home
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_news_home');
                }

                return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\PostController::homeAction',  '_route' => 'sonata_news_home',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                        // admin_sonata_user_user_history
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_history',));
                        }

                        // admin_sonata_user_user_history_view_revision
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                        // admin_sonata_user_group_history
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_history',));
                        }

                        // admin_sonata_user_group_history_view_revision
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_history_view_revision',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/news')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/news/post')) {
                        // admin_sonata_news_post_list
                        if ($pathinfo === '/admin/sonata/news/post/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_list',  '_route' => 'admin_sonata_news_post_list',);
                        }

                        // admin_sonata_news_post_create
                        if ($pathinfo === '/admin/sonata/news/post/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_create',  '_route' => 'admin_sonata_news_post_create',);
                        }

                        // admin_sonata_news_post_batch
                        if ($pathinfo === '/admin/sonata/news/post/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_batch',  '_route' => 'admin_sonata_news_post_batch',);
                        }

                        // admin_sonata_news_post_edit
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_edit',));
                        }

                        // admin_sonata_news_post_delete
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_delete',));
                        }

                        // admin_sonata_news_post_show
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_show',));
                        }

                        // admin_sonata_news_post_export
                        if ($pathinfo === '/admin/sonata/news/post/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_export',  '_route' => 'admin_sonata_news_post_export',);
                        }

                        // admin_sonata_news_post_history
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_history',));
                        }

                        // admin_sonata_news_post_history_view_revision
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.news.admin.post',  '_sonata_name' => 'admin_sonata_news_post_history_view_revision',));
                        }

                        // admin_sonata_news_post_comment_list
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/list$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_list')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_list',));
                        }

                        // admin_sonata_news_post_comment_create
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/create$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_create')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_create',));
                        }

                        // admin_sonata_news_post_comment_batch
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/batch$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_batch')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_batch',));
                        }

                        // admin_sonata_news_post_comment_edit
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_edit')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_edit',));
                        }

                        // admin_sonata_news_post_comment_delete
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_delete')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_delete',));
                        }

                        // admin_sonata_news_post_comment_show
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_show')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::showAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_show',));
                        }

                        // admin_sonata_news_post_comment_export
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/export$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_export')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::exportAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_export',));
                        }

                        // admin_sonata_news_post_comment_history
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_history')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::historyAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_history',));
                        }

                        // admin_sonata_news_post_comment_history_view_revision
                        if (preg_match('#^/admin/sonata/news/post/(?P<id>[^/]++)/comment/(?P<childId>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_post_comment_history_view_revision')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.news.admin.post|sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_post_comment_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/news/c')) {
                        if (0 === strpos($pathinfo, '/admin/sonata/news/comment')) {
                            // admin_sonata_news_comment_list
                            if ($pathinfo === '/admin/sonata/news/comment/list') {
                                return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::listAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_list',  '_route' => 'admin_sonata_news_comment_list',);
                            }

                            // admin_sonata_news_comment_create
                            if ($pathinfo === '/admin/sonata/news/comment/create') {
                                return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::createAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_create',  '_route' => 'admin_sonata_news_comment_create',);
                            }

                            // admin_sonata_news_comment_batch
                            if ($pathinfo === '/admin/sonata/news/comment/batch') {
                                return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::batchAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_batch',  '_route' => 'admin_sonata_news_comment_batch',);
                            }

                            // admin_sonata_news_comment_edit
                            if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_comment_edit')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::editAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_edit',));
                            }

                            // admin_sonata_news_comment_delete
                            if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_comment_delete')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_delete',));
                            }

                            // admin_sonata_news_comment_show
                            if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_comment_show')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::showAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_show',));
                            }

                            // admin_sonata_news_comment_export
                            if ($pathinfo === '/admin/sonata/news/comment/export') {
                                return array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::exportAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_export',  '_route' => 'admin_sonata_news_comment_export',);
                            }

                            // admin_sonata_news_comment_history
                            if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_comment_history')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::historyAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_history',));
                            }

                            // admin_sonata_news_comment_history_view_revision
                            if (preg_match('#^/admin/sonata/news/comment/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_comment_history_view_revision')), array (  '_controller' => 'Sonata\\NewsBundle\\Controller\\CommentAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.news.admin.comment',  '_sonata_name' => 'admin_sonata_news_comment_history_view_revision',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/news/category')) {
                            // admin_sonata_news_category_list
                            if ($pathinfo === '/admin/sonata/news/category/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_list',  '_route' => 'admin_sonata_news_category_list',);
                            }

                            // admin_sonata_news_category_create
                            if ($pathinfo === '/admin/sonata/news/category/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_create',  '_route' => 'admin_sonata_news_category_create',);
                            }

                            // admin_sonata_news_category_batch
                            if ($pathinfo === '/admin/sonata/news/category/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_batch',  '_route' => 'admin_sonata_news_category_batch',);
                            }

                            // admin_sonata_news_category_edit
                            if (preg_match('#^/admin/sonata/news/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_edit',));
                            }

                            // admin_sonata_news_category_delete
                            if (preg_match('#^/admin/sonata/news/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_delete',));
                            }

                            // admin_sonata_news_category_show
                            if (preg_match('#^/admin/sonata/news/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_show',));
                            }

                            // admin_sonata_news_category_export
                            if ($pathinfo === '/admin/sonata/news/category/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_export',  '_route' => 'admin_sonata_news_category_export',);
                            }

                            // admin_sonata_news_category_history
                            if (preg_match('#^/admin/sonata/news/category/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_category_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_history',));
                            }

                            // admin_sonata_news_category_history_view_revision
                            if (preg_match('#^/admin/sonata/news/category/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_category_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.news.admin.category',  '_sonata_name' => 'admin_sonata_news_category_history_view_revision',));
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/news/tag')) {
                        // admin_sonata_news_tag_list
                        if ($pathinfo === '/admin/sonata/news/tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_list',  '_route' => 'admin_sonata_news_tag_list',);
                        }

                        // admin_sonata_news_tag_create
                        if ($pathinfo === '/admin/sonata/news/tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_create',  '_route' => 'admin_sonata_news_tag_create',);
                        }

                        // admin_sonata_news_tag_batch
                        if ($pathinfo === '/admin/sonata/news/tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_batch',  '_route' => 'admin_sonata_news_tag_batch',);
                        }

                        // admin_sonata_news_tag_edit
                        if (preg_match('#^/admin/sonata/news/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_edit',));
                        }

                        // admin_sonata_news_tag_delete
                        if (preg_match('#^/admin/sonata/news/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_delete',));
                        }

                        // admin_sonata_news_tag_show
                        if (preg_match('#^/admin/sonata/news/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_show',));
                        }

                        // admin_sonata_news_tag_export
                        if ($pathinfo === '/admin/sonata/news/tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_export',  '_route' => 'admin_sonata_news_tag_export',);
                        }

                        // admin_sonata_news_tag_history
                        if (preg_match('#^/admin/sonata/news/tag/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_tag_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_history',));
                        }

                        // admin_sonata_news_tag_history_view_revision
                        if (preg_match('#^/admin/sonata/news/tag/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_news_tag_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.news.admin.tag',  '_sonata_name' => 'admin_sonata_news_tag_history_view_revision',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        // admin_sonata_media_media_history
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_history')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::historyAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_history',));
                        }

                        // admin_sonata_media_media_history_view_revision
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_history_view_revision')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        // admin_sonata_media_gallery_history
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_history')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::historyAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_history',));
                        }

                        // admin_sonata_media_gallery_history_view_revision
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_history_view_revision')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_history_view_revision',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                            // admin_sonata_media_galleryhasmedia_history
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_history',));
                            }

                            // admin_sonata_media_galleryhasmedia_history_view_revision
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_history_view_revision',));
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/cls/site/equipment')) {
                // admin_cls_site_equipment_list
                if ($pathinfo === '/admin/cls/site/equipment/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_list',  '_route' => 'admin_cls_site_equipment_list',);
                }

                // admin_cls_site_equipment_create
                if ($pathinfo === '/admin/cls/site/equipment/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_create',  '_route' => 'admin_cls_site_equipment_create',);
                }

                // admin_cls_site_equipment_batch
                if ($pathinfo === '/admin/cls/site/equipment/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_batch',  '_route' => 'admin_cls_site_equipment_batch',);
                }

                // admin_cls_site_equipment_edit
                if (preg_match('#^/admin/cls/site/equipment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cls_site_equipment_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_edit',));
                }

                // admin_cls_site_equipment_delete
                if (preg_match('#^/admin/cls/site/equipment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cls_site_equipment_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_delete',));
                }

                // admin_cls_site_equipment_show
                if (preg_match('#^/admin/cls/site/equipment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cls_site_equipment_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_show',));
                }

                // admin_cls_site_equipment_export
                if ($pathinfo === '/admin/cls/site/equipment/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_export',  '_route' => 'admin_cls_site_equipment_export',);
                }

                // admin_cls_site_equipment_history
                if (preg_match('#^/admin/cls/site/equipment/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cls_site_equipment_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_history',));
                }

                // admin_cls_site_equipment_history_view_revision
                if (preg_match('#^/admin/cls/site/equipment/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cls_site_equipment_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'cls.admin.equipment',  '_sonata_name' => 'admin_cls_site_equipment_history_view_revision',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
