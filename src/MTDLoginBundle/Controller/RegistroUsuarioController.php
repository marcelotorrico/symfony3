<?php

namespace MTDLoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTDLoginBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;

class RegistroUsuarioController extends Controller
{
    public function mostrarFormularioAction()
    {
        return $this->render('MTDLoginBundle:Registro:formularioRegistro.html.twig');
    }
    
    public function registrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $nombre   = $request->request->get('name');
        $password = $request->request->get('password');
        $passHash = password_hash($password, PASSWORD_BCRYPT);
        
        $usuario = new Usuario();
        $usuario->setNombre($nombre);
        $usuario->setPassword($passHash);
        $em->persist($usuario);
        $em->flush();
        $this->addFlash(
            'notice',
            'El usuario fue registrado correctamente'
        );
        return $this->redirect($this->generateUrl('mtd_formulario_registro'));
    }
    
    public function inicioAction()
    {
        return $this->render('MTDLoginBundle:Registro:inicio.html.twig');
    }
}
