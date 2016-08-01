<?php

namespace MTDLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'MTDLoginBundle:Registro:formularioLogin.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    public function mostrarFormularioAction()
    {
        return $this->render('MTDLoginBundle:Registro:formularioLogin.html.twig');
    }
    
    public function validarFormularioAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $nombre   = $request->request->get('name');
        $password = $request->request->get('password');
        
        $usuario  = $em->getRepository('MTDLoginBundle:Usuario')->findOneBy(array('nombre'=>$nombre));
        if($usuario){
            $passwordUser = $usuario->getPassword();
            if(password_verify($password, $passwordUser)){
                $this->addFlash(
                    'notice',
                    'Bienvenido!'
                );
                return $this->redirect($this->generateUrl('mtd_inicio'));
            }else{
                $this->addFlash(
                    'notice',
                    'Password Incorrecto'
                );
                return $this->render('MTDLoginBundle:Registro:formularioLogin.html.twig');
            }
        }else{
            $this->addFlash(
                    'notice',
                    'Usuario incorrecto'
                );
            return $this->render('MTDLoginBundle:Registro:formularioLogin.html.twig');
        }
    }
    public function inicioAction()
    {
        return $this->render('MTDLoginBundle:Registro:inicio.html.twig');
    }
}
