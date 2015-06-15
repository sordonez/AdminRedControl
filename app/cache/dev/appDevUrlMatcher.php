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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

            if (0 === strpos($pathinfo, '/usuario/register')) {
                // account_register
                if ($pathinfo === '/usuario/register') {
                    return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\AccountController::registerAction',  '_route' => 'account_register',);
                }

                // account_create
                if ($pathinfo === '/usuario/register/create') {
                    return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\AccountController::createAction',  '_route' => 'account_create',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_route
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Registronetbook\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/detalleMovimiento')) {
                // admin_detalleMovimiento
                if (rtrim($pathinfo, '/') === '/admin/detalleMovimiento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_detalleMovimiento');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::indexAction',  '_route' => 'admin_detalleMovimiento',);
                }

                // admin_detalleMovimiento_show
                if (preg_match('#^/admin/detalleMovimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_detalleMovimiento_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::showAction',));
                }

                // admin_detalleMovimiento_new
                if ($pathinfo === '/admin/detalleMovimiento/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::newAction',  '_route' => 'admin_detalleMovimiento_new',);
                }

                // admin_detalleMovimiento_create
                if ($pathinfo === '/admin/detalleMovimiento/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_detalleMovimiento_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::createAction',  '_route' => 'admin_detalleMovimiento_create',);
                }
                not_admin_detalleMovimiento_create:

                // admin_detalleMovimiento_edit
                if (preg_match('#^/admin/detalleMovimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_detalleMovimiento_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::editAction',));
                }

                // admin_detalleMovimiento_update
                if (preg_match('#^/admin/detalleMovimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_detalleMovimiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_detalleMovimiento_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::updateAction',));
                }
                not_admin_detalleMovimiento_update:

                // admin_detalleMovimiento_delete
                if (preg_match('#^/admin/detalleMovimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_detalleMovimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_detalleMovimiento_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\DetalleMovimientoController::deleteAction',));
                }
                not_admin_detalleMovimiento_delete:

            }

            if (0 === strpos($pathinfo, '/admin/orden')) {
                // admin_orden
                if (rtrim($pathinfo, '/') === '/admin/orden') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_orden');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::indexAction',  '_route' => 'admin_orden',);
                }

                // admin_orden_show
                if (preg_match('#^/admin/orden/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orden_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::showAction',));
                }

                // admin_orden_new
                if ($pathinfo === '/admin/orden/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::newAction',  '_route' => 'admin_orden_new',);
                }

                // admin_orden_create
                if ($pathinfo === '/admin/orden/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_orden_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::createAction',  '_route' => 'admin_orden_create',);
                }
                not_admin_orden_create:

                // admin_orden_edit
                if (preg_match('#^/admin/orden/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orden_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::editAction',));
                }

                // admin_orden_update
                if (preg_match('#^/admin/orden/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_orden_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orden_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::updateAction',));
                }
                not_admin_orden_update:

                // admin_orden_delete
                if (preg_match('#^/admin/orden/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_orden_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_orden_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\OrdenController::deleteAction',));
                }
                not_admin_orden_delete:

            }

            if (0 === strpos($pathinfo, '/admin/Curso')) {
                // admin_Curso
                if (rtrim($pathinfo, '/') === '/admin/Curso') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_Curso');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::indexAction',  '_route' => 'admin_Curso',);
                }

                // admin_Curso_show
                if (preg_match('#^/admin/Curso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Curso_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::showAction',));
                }

                // admin_Curso_new
                if ($pathinfo === '/admin/Curso/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::newAction',  '_route' => 'admin_Curso_new',);
                }

                // admin_Curso_create
                if ($pathinfo === '/admin/Curso/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_Curso_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::createAction',  '_route' => 'admin_Curso_create',);
                }
                not_admin_Curso_create:

                // admin_Curso_edit
                if (preg_match('#^/admin/Curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Curso_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::editAction',));
                }

                // admin_Curso_update
                if (preg_match('#^/admin/Curso/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_Curso_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Curso_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::updateAction',));
                }
                not_admin_Curso_update:

                // admin_Curso_delete
                if (preg_match('#^/admin/Curso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_Curso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_Curso_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\CursoController::deleteAction',));
                }
                not_admin_Curso_delete:

            }

            if (0 === strpos($pathinfo, '/admin/ubicacion')) {
                // admin_ubicacion
                if (rtrim($pathinfo, '/') === '/admin/ubicacion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_ubicacion');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::indexAction',  '_route' => 'admin_ubicacion',);
                }

                // admin_ubicacion_show
                if (preg_match('#^/admin/ubicacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ubicacion_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::showAction',));
                }

                // admin_ubicacion_new
                if ($pathinfo === '/admin/ubicacion/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::newAction',  '_route' => 'admin_ubicacion_new',);
                }

                // admin_ubicacion_create
                if ($pathinfo === '/admin/ubicacion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_ubicacion_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::createAction',  '_route' => 'admin_ubicacion_create',);
                }
                not_admin_ubicacion_create:

                // admin_ubicacion_edit
                if (preg_match('#^/admin/ubicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ubicacion_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::editAction',));
                }

                // admin_ubicacion_update
                if (preg_match('#^/admin/ubicacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_ubicacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ubicacion_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::updateAction',));
                }
                not_admin_ubicacion_update:

                // admin_ubicacion_delete
                if (preg_match('#^/admin/ubicacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_ubicacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ubicacion_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UbicacionController::deleteAction',));
                }
                not_admin_ubicacion_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tipoMovimiento')) {
                // admin_tipoMovimiento
                if (rtrim($pathinfo, '/') === '/admin/tipoMovimiento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_tipoMovimiento');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::indexAction',  '_route' => 'admin_tipoMovimiento',);
                }

                // admin_tipoMovimiento_show
                if (preg_match('#^/admin/tipoMovimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoMovimiento_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::showAction',));
                }

                // admin_tipoMovimiento_new
                if ($pathinfo === '/admin/tipoMovimiento/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::newAction',  '_route' => 'admin_tipoMovimiento_new',);
                }

                // admin_tipoMovimiento_create
                if ($pathinfo === '/admin/tipoMovimiento/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tipoMovimiento_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::createAction',  '_route' => 'admin_tipoMovimiento_create',);
                }
                not_admin_tipoMovimiento_create:

                // admin_tipoMovimiento_edit
                if (preg_match('#^/admin/tipoMovimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoMovimiento_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::editAction',));
                }

                // admin_tipoMovimiento_update
                if (preg_match('#^/admin/tipoMovimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_tipoMovimiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoMovimiento_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::updateAction',));
                }
                not_admin_tipoMovimiento_update:

                // admin_tipoMovimiento_delete
                if (preg_match('#^/admin/tipoMovimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_tipoMovimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoMovimiento_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\TipoMovimientoController::deleteAction',));
                }
                not_admin_tipoMovimiento_delete:

            }

            if (0 === strpos($pathinfo, '/admin/problema')) {
                // admin_problema
                if (rtrim($pathinfo, '/') === '/admin/problema') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_problema');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::indexAction',  '_route' => 'admin_problema',);
                }

                // admin_problema_show
                if (preg_match('#^/admin/problema/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_problema_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::showAction',));
                }

                // admin_problema_new
                if ($pathinfo === '/admin/problema/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::newAction',  '_route' => 'admin_problema_new',);
                }

                // admin_problema_create
                if ($pathinfo === '/admin/problema/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_problema_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::createAction',  '_route' => 'admin_problema_create',);
                }
                not_admin_problema_create:

                // admin_problema_edit
                if (preg_match('#^/admin/problema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_problema_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::editAction',));
                }

                // admin_problema_update
                if (preg_match('#^/admin/problema/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_problema_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_problema_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::updateAction',));
                }
                not_admin_problema_update:

                // admin_problema_delete
                if (preg_match('#^/admin/problema/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_problema_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_problema_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\ProblemaController::deleteAction',));
                }
                not_admin_problema_delete:

            }

            if (0 === strpos($pathinfo, '/admin/movimiento')) {
                // admin_movimiento
                if (rtrim($pathinfo, '/') === '/admin/movimiento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_movimiento');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::indexAction',  '_route' => 'admin_movimiento',);
                }

                // admin_movimiento_show
                if (preg_match('#^/admin/movimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_movimiento_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::showAction',));
                }

                // admin_movimiento_new
                if ($pathinfo === '/admin/movimiento/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::newAction',  '_route' => 'admin_movimiento_new',);
                }

                // admin_movimiento_create
                if ($pathinfo === '/admin/movimiento/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_movimiento_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::createAction',  '_route' => 'admin_movimiento_create',);
                }
                not_admin_movimiento_create:

                // admin_movimiento_edit
                if (preg_match('#^/admin/movimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_movimiento_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::editAction',));
                }

                // admin_movimiento_update
                if (preg_match('#^/admin/movimiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_movimiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_movimiento_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::updateAction',));
                }
                not_admin_movimiento_update:

                // admin_movimiento_delete
                if (preg_match('#^/admin/movimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_movimiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_movimiento_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoController::deleteAction',));
                }
                not_admin_movimiento_delete:

            }

            if (0 === strpos($pathinfo, '/admin/estado')) {
                // admin_estado
                if (rtrim($pathinfo, '/') === '/admin/estado') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_estado');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::indexAction',  '_route' => 'admin_estado',);
                }

                // admin_estado_show
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::showAction',));
                }

                // admin_estado_new
                if ($pathinfo === '/admin/estado/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::newAction',  '_route' => 'admin_estado_new',);
                }

                // admin_estado_create
                if ($pathinfo === '/admin/estado/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_estado_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::createAction',  '_route' => 'admin_estado_create',);
                }
                not_admin_estado_create:

                // admin_estado_edit
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::editAction',));
                }

                // admin_estado_update
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_estado_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::updateAction',));
                }
                not_admin_estado_update:

                // admin_estado_delete
                if (preg_match('#^/admin/estado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_estado_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_estado_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\EstadoController::deleteAction',));
                }
                not_admin_estado_delete:

            }

            if (0 === strpos($pathinfo, '/admin/usuario')) {
                // admin_usuario
                if (rtrim($pathinfo, '/') === '/admin/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_usuario');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'admin_usuario',);
                }

                // admin_usuario_show
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::showAction',));
                }

                // admin_usuario_new
                if ($pathinfo === '/admin/usuario/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::newAction',  '_route' => 'admin_usuario_new',);
                }

                // admin_usuario_create
                if ($pathinfo === '/admin/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_usuario_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::createAction',  '_route' => 'admin_usuario_create',);
                }
                not_admin_usuario_create:

                // admin_usuario_edit
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::editAction',));
                }

                // admin_usuario_update
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_admin_usuario_update:

                // admin_usuario_delete
                if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_admin_usuario_delete:

            }

            if (0 === strpos($pathinfo, '/admin/maquina')) {
                // admin_maquina
                if (rtrim($pathinfo, '/') === '/admin/maquina') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_maquina');
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::indexAction',  '_route' => 'admin_maquina',);
                }

                // admin_maquina_show
                if (preg_match('#^/admin/maquina/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maquina_show')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::showAction',));
                }

                // admin_maquina_new
                if ($pathinfo === '/admin/maquina/new') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::newAction',  '_route' => 'admin_maquina_new',);
                }

                // admin_maquina_create
                if ($pathinfo === '/admin/maquina/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_maquina_create;
                    }

                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::createAction',  '_route' => 'admin_maquina_create',);
                }
                not_admin_maquina_create:

                // admin_maquina_edit
                if (preg_match('#^/admin/maquina/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maquina_edit')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::editAction',));
                }

                // admin_maquina_update
                if (preg_match('#^/admin/maquina/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_maquina_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maquina_update')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::updateAction',));
                }
                not_admin_maquina_update:

                // admin_maquina_delete
                if (preg_match('#^/admin/maquina/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_maquina_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maquina_delete')), array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MaquinaController::deleteAction',));
                }
                not_admin_maquina_delete:

            }

            if (0 === strpos($pathinfo, '/admin/se')) {
                // control_admin_select_usuario
                if ($pathinfo === '/admin/select_usuario') {
                    return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\AjaxController::indexAction',  '_route' => 'control_admin_select_usuario',);
                }

                if (0 === strpos($pathinfo, '/admin/search')) {
                    // searchMovimiento
                    if ($pathinfo === '/admin/searchMovimiento') {
                        return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\MovimientoQueryController::searchAction',  '_route' => 'searchMovimiento',);
                    }

                    // searchUsuario
                    if ($pathinfo === '/admin/searchUser') {
                        return array (  '_controller' => 'Registronetbook\\ControlBundle\\Controller\\UsuarioqueryController::searchAction',  '_route' => 'searchUsuario',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login
            if ($pathinfo === '/login') {
                return array('_route' => 'login');
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
