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

        if (0 === strpos($pathinfo, '/hello')) {
            // certificacion_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'certificacion_homepage')), array (  '_controller' => 'BecasMds\\CertificacionBundle\\Controller\\DefaultController::indexAction',));
            }

            // beca_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'beca_homepage')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tipo')) {
            if (0 === strpos($pathinfo, '/tipofuncion')) {
                // tipofuncion
                if (rtrim($pathinfo, '/') === '/tipofuncion') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipofuncion');
                    }

                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::indexAction',  '_route' => 'tipofuncion',);
                }

                // tipofuncion_show
                if (preg_match('#^/tipofuncion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipofuncion_show')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::showAction',));
                }

                // tipofuncion_new
                if ($pathinfo === '/tipofuncion/new') {
                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::newAction',  '_route' => 'tipofuncion_new',);
                }

                // tipofuncion_create
                if ($pathinfo === '/tipofuncion/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipofuncion_create;
                    }

                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::createAction',  '_route' => 'tipofuncion_create',);
                }
                not_tipofuncion_create:

                // tipofuncion_edit
                if (preg_match('#^/tipofuncion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipofuncion_edit')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::editAction',));
                }

                // tipofuncion_update
                if (preg_match('#^/tipofuncion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipofuncion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipofuncion_update')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::updateAction',));
                }
                not_tipofuncion_update:

                // tipofuncion_delete
                if (preg_match('#^/tipofuncion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipofuncion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipofuncion_delete')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoFuncionController::deleteAction',));
                }
                not_tipofuncion_delete:

            }

            if (0 === strpos($pathinfo, '/tipobeca')) {
                // tipobeca
                if (rtrim($pathinfo, '/') === '/tipobeca') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tipobeca');
                    }

                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::indexAction',  '_route' => 'tipobeca',);
                }

                // tipobeca_show
                if (preg_match('#^/tipobeca/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipobeca_show')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::showAction',));
                }

                // tipobeca_new
                if ($pathinfo === '/tipobeca/new') {
                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::newAction',  '_route' => 'tipobeca_new',);
                }

                // tipobeca_create
                if ($pathinfo === '/tipobeca/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipobeca_create;
                    }

                    return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::createAction',  '_route' => 'tipobeca_create',);
                }
                not_tipobeca_create:

                // tipobeca_edit
                if (preg_match('#^/tipobeca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipobeca_edit')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::editAction',));
                }

                // tipobeca_update
                if (preg_match('#^/tipobeca/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipobeca_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipobeca_update')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::updateAction',));
                }
                not_tipobeca_update:

                // tipobeca_delete
                if (preg_match('#^/tipobeca/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipobeca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipobeca_delete')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\TipoBecaController::deleteAction',));
                }
                not_tipobeca_delete:

            }

        }

        if (0 === strpos($pathinfo, '/beca')) {
            // beca
            if (rtrim($pathinfo, '/') === '/beca') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'beca');
                }

                return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::indexAction',  '_route' => 'beca',);
            }

            // beca_show
            if (preg_match('#^/beca/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'beca_show')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::showAction',));
            }

            // beca_new
            if ($pathinfo === '/beca/new') {
                return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::newAction',  '_route' => 'beca_new',);
            }

            // beca_create
            if ($pathinfo === '/beca/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_beca_create;
                }

                return array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::createAction',  '_route' => 'beca_create',);
            }
            not_beca_create:

            // beca_edit
            if (preg_match('#^/beca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'beca_edit')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::editAction',));
            }

            // beca_update
            if (preg_match('#^/beca/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_beca_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'beca_update')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::updateAction',));
            }
            not_beca_update:

            // beca_delete
            if (preg_match('#^/beca/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_beca_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'beca_delete')), array (  '_controller' => 'BecasMds\\BecaBundle\\Controller\\BecaController::deleteAction',));
            }
            not_beca_delete:

        }

        // formacion_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacion_homepage')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/primario')) {
            // primario
            if (rtrim($pathinfo, '/') === '/primario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'primario');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::indexAction',  '_route' => 'primario',);
            }

            // primario_show
            if (preg_match('#^/primario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'primario_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::showAction',));
            }

            // primario_new
            if ($pathinfo === '/primario/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::newAction',  '_route' => 'primario_new',);
            }

            // primario_create
            if ($pathinfo === '/primario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_primario_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::createAction',  '_route' => 'primario_create',);
            }
            not_primario_create:

            // primario_edit
            if (preg_match('#^/primario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'primario_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::editAction',));
            }

            // primario_update
            if (preg_match('#^/primario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_primario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'primario_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::updateAction',));
            }
            not_primario_update:

            // primario_delete
            if (preg_match('#^/primario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_primario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'primario_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PrimarioController::deleteAction',));
            }
            not_primario_delete:

        }

        if (0 === strpos($pathinfo, '/secundario')) {
            // secundario
            if (rtrim($pathinfo, '/') === '/secundario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'secundario');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::indexAction',  '_route' => 'secundario',);
            }

            // secundario_show
            if (preg_match('#^/secundario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secundario_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::showAction',));
            }

            // secundario_new
            if ($pathinfo === '/secundario/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::newAction',  '_route' => 'secundario_new',);
            }

            // secundario_create
            if ($pathinfo === '/secundario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_secundario_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::createAction',  '_route' => 'secundario_create',);
            }
            not_secundario_create:

            // secundario_edit
            if (preg_match('#^/secundario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secundario_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::editAction',));
            }

            // secundario_update
            if (preg_match('#^/secundario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_secundario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secundario_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::updateAction',));
            }
            not_secundario_update:

            // secundario_delete
            if (preg_match('#^/secundario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_secundario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secundario_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\SecundarioController::deleteAction',));
            }
            not_secundario_delete:

        }

        if (0 === strpos($pathinfo, '/terciario')) {
            // terciario
            if (rtrim($pathinfo, '/') === '/terciario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'terciario');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::indexAction',  '_route' => 'terciario',);
            }

            // terciario_show
            if (preg_match('#^/terciario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terciario_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::showAction',));
            }

            // terciario_new
            if ($pathinfo === '/terciario/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::newAction',  '_route' => 'terciario_new',);
            }

            // terciario_create
            if ($pathinfo === '/terciario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_terciario_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::createAction',  '_route' => 'terciario_create',);
            }
            not_terciario_create:

            // terciario_edit
            if (preg_match('#^/terciario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terciario_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::editAction',));
            }

            // terciario_update
            if (preg_match('#^/terciario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_terciario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terciario_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::updateAction',));
            }
            not_terciario_update:

            // terciario_delete
            if (preg_match('#^/terciario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_terciario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'terciario_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\TerciarioController::deleteAction',));
            }
            not_terciario_delete:

        }

        if (0 === strpos($pathinfo, '/universidad')) {
            // universidad
            if (rtrim($pathinfo, '/') === '/universidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'universidad');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::indexAction',  '_route' => 'universidad',);
            }

            // universidad_show
            if (preg_match('#^/universidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'universidad_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::showAction',));
            }

            // universidad_new
            if ($pathinfo === '/universidad/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::newAction',  '_route' => 'universidad_new',);
            }

            // universidad_create
            if ($pathinfo === '/universidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_universidad_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::createAction',  '_route' => 'universidad_create',);
            }
            not_universidad_create:

            // universidad_edit
            if (preg_match('#^/universidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'universidad_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::editAction',));
            }

            // universidad_update
            if (preg_match('#^/universidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_universidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'universidad_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::updateAction',));
            }
            not_universidad_update:

            // universidad_delete
            if (preg_match('#^/universidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_universidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'universidad_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\UniversidadController::deleteAction',));
            }
            not_universidad_delete:

        }

        if (0 === strpos($pathinfo, '/formacion')) {
            // formacion
            if (rtrim($pathinfo, '/') === '/formacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'formacion');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::indexAction',  '_route' => 'formacion',);
            }

            // formacion_show
            if (preg_match('#^/formacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacion_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::showAction',));
            }

            // formacion_new
            if ($pathinfo === '/formacion/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::newAction',  '_route' => 'formacion_new',);
            }

            // formacion_create
            if ($pathinfo === '/formacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_formacion_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::createAction',  '_route' => 'formacion_create',);
            }
            not_formacion_create:

            // formacion_edit
            if (preg_match('#^/formacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacion_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::editAction',));
            }

            // formacion_update
            if (preg_match('#^/formacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_formacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacion_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::updateAction',));
            }
            not_formacion_update:

            // formacion_delete
            if (preg_match('#^/formacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_formacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formacion_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\FormacionController::deleteAction',));
            }
            not_formacion_delete:

        }

        if (0 === strpos($pathinfo, '/profesion')) {
            // profesion
            if (rtrim($pathinfo, '/') === '/profesion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profesion');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::indexAction',  '_route' => 'profesion',);
            }

            // profesion_show
            if (preg_match('#^/profesion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::showAction',));
            }

            // profesion_new
            if ($pathinfo === '/profesion/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::newAction',  '_route' => 'profesion_new',);
            }

            // profesion_create
            if ($pathinfo === '/profesion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_profesion_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::createAction',  '_route' => 'profesion_create',);
            }
            not_profesion_create:

            // profesion_edit
            if (preg_match('#^/profesion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::editAction',));
            }

            // profesion_update
            if (preg_match('#^/profesion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_profesion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::updateAction',));
            }
            not_profesion_update:

            // profesion_delete
            if (preg_match('#^/profesion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_profesion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesion_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\ProfesionController::deleteAction',));
            }
            not_profesion_delete:

        }

        if (0 === strpos($pathinfo, '/niveleducativo')) {
            // niveleducativo
            if (rtrim($pathinfo, '/') === '/niveleducativo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'niveleducativo');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::indexAction',  '_route' => 'niveleducativo',);
            }

            // niveleducativo_show
            if (preg_match('#^/niveleducativo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveleducativo_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::showAction',));
            }

            // niveleducativo_new
            if ($pathinfo === '/niveleducativo/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::newAction',  '_route' => 'niveleducativo_new',);
            }

            // niveleducativo_create
            if ($pathinfo === '/niveleducativo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_niveleducativo_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::createAction',  '_route' => 'niveleducativo_create',);
            }
            not_niveleducativo_create:

            // niveleducativo_edit
            if (preg_match('#^/niveleducativo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveleducativo_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::editAction',));
            }

            // niveleducativo_update
            if (preg_match('#^/niveleducativo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_niveleducativo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveleducativo_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::updateAction',));
            }
            not_niveleducativo_update:

            // niveleducativo_delete
            if (preg_match('#^/niveleducativo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_niveleducativo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveleducativo_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\NivelEducativoController::deleteAction',));
            }
            not_niveleducativo_delete:

        }

        if (0 === strpos($pathinfo, '/institucion')) {
            // institucion
            if (rtrim($pathinfo, '/') === '/institucion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'institucion');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::indexAction',  '_route' => 'institucion',);
            }

            // institucion_show
            if (preg_match('#^/institucion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'institucion_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::showAction',));
            }

            // institucion_new
            if ($pathinfo === '/institucion/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::newAction',  '_route' => 'institucion_new',);
            }

            // institucion_create
            if ($pathinfo === '/institucion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_institucion_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::createAction',  '_route' => 'institucion_create',);
            }
            not_institucion_create:

            // institucion_edit
            if (preg_match('#^/institucion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'institucion_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::editAction',));
            }

            // institucion_update
            if (preg_match('#^/institucion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_institucion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'institucion_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::updateAction',));
            }
            not_institucion_update:

            // institucion_delete
            if (preg_match('#^/institucion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_institucion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'institucion_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\InstitucionController::deleteAction',));
            }
            not_institucion_delete:

        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // perfil
            if (rtrim($pathinfo, '/') === '/perfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'perfil');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::indexAction',  '_route' => 'perfil',);
            }

            // perfil_show
            if (preg_match('#^/perfil/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::showAction',));
            }

            // perfil_new
            if ($pathinfo === '/perfil/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::newAction',  '_route' => 'perfil_new',);
            }

            // perfil_create
            if ($pathinfo === '/perfil/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_perfil_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::createAction',  '_route' => 'perfil_create',);
            }
            not_perfil_create:

            // perfil_edit
            if (preg_match('#^/perfil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::editAction',));
            }

            // perfil_update
            if (preg_match('#^/perfil/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_perfil_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::updateAction',));
            }
            not_perfil_update:

            // perfil_delete
            if (preg_match('#^/perfil/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_perfil_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\PerfilController::deleteAction',));
            }
            not_perfil_delete:

        }

        if (0 === strpos($pathinfo, '/oficio')) {
            // oficio
            if (rtrim($pathinfo, '/') === '/oficio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oficio');
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::indexAction',  '_route' => 'oficio',);
            }

            // oficio_show
            if (preg_match('#^/oficio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oficio_show')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::showAction',));
            }

            // oficio_new
            if ($pathinfo === '/oficio/new') {
                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::newAction',  '_route' => 'oficio_new',);
            }

            // oficio_create
            if ($pathinfo === '/oficio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oficio_create;
                }

                return array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::createAction',  '_route' => 'oficio_create',);
            }
            not_oficio_create:

            // oficio_edit
            if (preg_match('#^/oficio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oficio_edit')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::editAction',));
            }

            // oficio_update
            if (preg_match('#^/oficio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_oficio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oficio_update')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::updateAction',));
            }
            not_oficio_update:

            // oficio_delete
            if (preg_match('#^/oficio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_oficio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oficio_delete')), array (  '_controller' => 'BecasMds\\FormacionBundle\\Controller\\OficioController::deleteAction',));
            }
            not_oficio_delete:

        }

        // persona_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_homepage')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/calle')) {
            // calle
            if (rtrim($pathinfo, '/') === '/calle') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'calle');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::indexAction',  '_route' => 'calle',);
            }

            // calle_show
            if (preg_match('#^/calle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::showAction',));
            }

            // calle_new
            if ($pathinfo === '/calle/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::newAction',  '_route' => 'calle_new',);
            }

            // calle_create
            if ($pathinfo === '/calle/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_calle_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::createAction',  '_route' => 'calle_create',);
            }
            not_calle_create:

            // calle_edit
            if (preg_match('#^/calle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::editAction',));
            }

            // calle_update
            if (preg_match('#^/calle/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_calle_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::updateAction',));
            }
            not_calle_update:

            // calle_delete
            if (preg_match('#^/calle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_calle_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calle_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\CalleController::deleteAction',));
            }
            not_calle_delete:

        }

        if (0 === strpos($pathinfo, '/barrio')) {
            // barrio
            if (rtrim($pathinfo, '/') === '/barrio') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'barrio');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::indexAction',  '_route' => 'barrio',);
            }

            // barrio_show
            if (preg_match('#^/barrio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'barrio_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::showAction',));
            }

            // barrio_new
            if ($pathinfo === '/barrio/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::newAction',  '_route' => 'barrio_new',);
            }

            // barrio_create
            if ($pathinfo === '/barrio/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_barrio_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::createAction',  '_route' => 'barrio_create',);
            }
            not_barrio_create:

            // barrio_edit
            if (preg_match('#^/barrio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'barrio_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::editAction',));
            }

            // barrio_update
            if (preg_match('#^/barrio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_barrio_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'barrio_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::updateAction',));
            }
            not_barrio_update:

            // barrio_delete
            if (preg_match('#^/barrio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_barrio_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'barrio_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\BarrioController::deleteAction',));
            }
            not_barrio_delete:

        }

        if (0 === strpos($pathinfo, '/localidad')) {
            // localidad
            if (rtrim($pathinfo, '/') === '/localidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'localidad');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::indexAction',  '_route' => 'localidad',);
            }

            // localidad_show
            if (preg_match('#^/localidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localidad_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::showAction',));
            }

            // localidad_new
            if ($pathinfo === '/localidad/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::newAction',  '_route' => 'localidad_new',);
            }

            // localidad_create
            if ($pathinfo === '/localidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_localidad_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::createAction',  '_route' => 'localidad_create',);
            }
            not_localidad_create:

            // localidad_edit
            if (preg_match('#^/localidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localidad_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::editAction',));
            }

            // localidad_update
            if (preg_match('#^/localidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_localidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localidad_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::updateAction',));
            }
            not_localidad_update:

            // localidad_delete
            if (preg_match('#^/localidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_localidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'localidad_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\LocalidadController::deleteAction',));
            }
            not_localidad_delete:

        }

        if (0 === strpos($pathinfo, '/departamento')) {
            // departamento
            if (rtrim($pathinfo, '/') === '/departamento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'departamento');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::indexAction',  '_route' => 'departamento',);
            }

            // departamento_show
            if (preg_match('#^/departamento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::showAction',));
            }

            // departamento_new
            if ($pathinfo === '/departamento/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::newAction',  '_route' => 'departamento_new',);
            }

            // departamento_create
            if ($pathinfo === '/departamento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_departamento_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::createAction',  '_route' => 'departamento_create',);
            }
            not_departamento_create:

            // departamento_edit
            if (preg_match('#^/departamento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::editAction',));
            }

            // departamento_update
            if (preg_match('#^/departamento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_departamento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::updateAction',));
            }
            not_departamento_update:

            // departamento_delete
            if (preg_match('#^/departamento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_departamento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'departamento_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DepartamentoController::deleteAction',));
            }
            not_departamento_delete:

        }

        if (0 === strpos($pathinfo, '/referente')) {
            // referente
            if (rtrim($pathinfo, '/') === '/referente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'referente');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::indexAction',  '_route' => 'referente',);
            }

            // referente_show
            if (preg_match('#^/referente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'referente_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::showAction',));
            }

            // referente_new
            if ($pathinfo === '/referente/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::newAction',  '_route' => 'referente_new',);
            }

            // referente_create
            if ($pathinfo === '/referente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_referente_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::createAction',  '_route' => 'referente_create',);
            }
            not_referente_create:

            // referente_edit
            if (preg_match('#^/referente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'referente_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::editAction',));
            }

            // referente_update
            if (preg_match('#^/referente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_referente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'referente_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::updateAction',));
            }
            not_referente_update:

            // referente_delete
            if (preg_match('#^/referente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_referente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'referente_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::deleteAction',));
            }
            not_referente_delete:

            // referente_encontrar_nombre
            if (rtrim($pathinfo, '/') === '/referente/referente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'referente_encontrar_nombre');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ReferenteController::encontrarReferenteAction',  '_route' => 'referente_encontrar_nombre',);
            }

        }

        if (0 === strpos($pathinfo, '/movimientosocial')) {
            // movimientosocial
            if (rtrim($pathinfo, '/') === '/movimientosocial') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'movimientosocial');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::indexAction',  '_route' => 'movimientosocial',);
            }

            // movimientosocial_show
            if (preg_match('#^/movimientosocial/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientosocial_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::showAction',));
            }

            // movimientosocial_new
            if ($pathinfo === '/movimientosocial/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::newAction',  '_route' => 'movimientosocial_new',);
            }

            // movimientosocial_create
            if ($pathinfo === '/movimientosocial/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_movimientosocial_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::createAction',  '_route' => 'movimientosocial_create',);
            }
            not_movimientosocial_create:

            // movimientosocial_edit
            if (preg_match('#^/movimientosocial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientosocial_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::editAction',));
            }

            // movimientosocial_update
            if (preg_match('#^/movimientosocial/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_movimientosocial_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientosocial_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::updateAction',));
            }
            not_movimientosocial_update:

            // movimientosocial_delete
            if (preg_match('#^/movimientosocial/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_movimientosocial_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movimientosocial_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\MovimientoSocialController::deleteAction',));
            }
            not_movimientosocial_delete:

        }

        if (0 === strpos($pathinfo, '/responsable')) {
            // responsable
            if (rtrim($pathinfo, '/') === '/responsable') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'responsable');
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::indexAction',  '_route' => 'responsable',);
            }

            // responsable_show
            if (preg_match('#^/responsable/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::showAction',));
            }

            // responsable_new
            if ($pathinfo === '/responsable/new') {
                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::newAction',  '_route' => 'responsable_new',);
            }

            // responsable_create
            if ($pathinfo === '/responsable/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_responsable_create;
                }

                return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::createAction',  '_route' => 'responsable_create',);
            }
            not_responsable_create:

            // responsable_edit
            if (preg_match('#^/responsable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::editAction',));
            }

            // responsable_update
            if (preg_match('#^/responsable/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_responsable_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::updateAction',));
            }
            not_responsable_update:

            // responsable_delete
            if (preg_match('#^/responsable/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_responsable_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'responsable_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\ResponsableController::deleteAction',));
            }
            not_responsable_delete:

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/dependencia')) {
                // dependencia
                if (rtrim($pathinfo, '/') === '/dependencia') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dependencia');
                    }

                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::indexAction',  '_route' => 'dependencia',);
                }

                // dependencia_show
                if (preg_match('#^/dependencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dependencia_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::showAction',));
                }

                // dependencia_new
                if ($pathinfo === '/dependencia/new') {
                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::newAction',  '_route' => 'dependencia_new',);
                }

                // dependencia_create
                if ($pathinfo === '/dependencia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dependencia_create;
                    }

                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::createAction',  '_route' => 'dependencia_create',);
                }
                not_dependencia_create:

                // dependencia_edit
                if (preg_match('#^/dependencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dependencia_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::editAction',));
                }

                // dependencia_update
                if (preg_match('#^/dependencia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_dependencia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dependencia_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::updateAction',));
                }
                not_dependencia_update:

                // dependencia_delete
                if (preg_match('#^/dependencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_dependencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dependencia_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DependenciaController::deleteAction',));
                }
                not_dependencia_delete:

            }

            if (0 === strpos($pathinfo, '/domicilio')) {
                // domicilio
                if (rtrim($pathinfo, '/') === '/domicilio') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'domicilio');
                    }

                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::indexAction',  '_route' => 'domicilio',);
                }

                // domicilio_show
                if (preg_match('#^/domicilio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domicilio_show')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::showAction',));
                }

                // domicilio_new
                if ($pathinfo === '/domicilio/new') {
                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::newAction',  '_route' => 'domicilio_new',);
                }

                // domicilio_create
                if ($pathinfo === '/domicilio/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_domicilio_create;
                    }

                    return array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::createAction',  '_route' => 'domicilio_create',);
                }
                not_domicilio_create:

                // domicilio_edit
                if (preg_match('#^/domicilio/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domicilio_edit')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::editAction',));
                }

                // domicilio_update
                if (preg_match('#^/domicilio/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_domicilio_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domicilio_update')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::updateAction',));
                }
                not_domicilio_update:

                // domicilio_delete
                if (preg_match('#^/domicilio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_domicilio_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'domicilio_delete')), array (  '_controller' => 'BecasMds\\PersonaBundle\\Controller\\DomicilioController::deleteAction',));
                }
                not_domicilio_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
