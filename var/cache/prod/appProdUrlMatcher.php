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

        // mtd_login_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mtd_login_homepage');
            }

            return array (  '_controller' => 'MTDLoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mtd_login_homepage',);
        }

        // mtd_formulario_registro
        if ($pathinfo === '/formulario') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\RegistroUsuarioController::mostrarFormularioAction',  '_route' => 'mtd_formulario_registro',);
        }

        // mtd_registro_usuario
        if ($pathinfo === '/registroUsuario') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\RegistroUsuarioController::registrarAction',  '_route' => 'mtd_registro_usuario',);
        }

        // mtd_formulario_ingreso
        if ($pathinfo === '/formulario/ingreso') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\LoginController::mostrarFormularioAction',  '_route' => 'mtd_formulario_ingreso',);
        }

        // mtd_validacion_login
        if ($pathinfo === '/validacion/login') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\LoginController::validarFormularioAction',  '_route' => 'mtd_validacion_login',);
        }

        // mtd_inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\LoginController::inicioAction',  '_route' => 'mtd_inicio',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MTDLoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
