<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reserva;
use AppBundle\Entity\EstadoReserva;
use AppBundle\Entity\ReservaEstadoReserva;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class ReservaController extends Controller
{
    
    /**
     * @Route( "/reserva", name="datosReserva" )
     */
    public function datosReservaAction(Request $request)
    {
//        $reserva = new Reserva();
        $session = $this->get('session');
        $formulario = $this->createForm('AppBundle\Form\ReservaType');
        
        $formulario->handleRequest($request);
        
        if($formulario->isValid()){
            $reserva = $formulario->getData();
//            var_dump($reserva);
            $session->set('reserva', $reserva);
            return $this->redirectToRoute('datosPersonales');
        }
        
        return $this->render('datosReserva.html.twig', array(
            'formulario' => $formulario->CreateView()
        ));
    }
    
    /**
     * @Route( "/reserva/datos_personales", name="datosPersonales" )
     */
    public function datosPersonalesAction(Request $request)
    {
        $formulario = $this->createForm('AppBundle\Form\UsuarioType');
        
        $formulario->handleRequest($request);
        $session = $this->get('session');
        $datosReserva = $session->get('reserva');
        var_dump($datosReserva);
        if($formulario->isValid()){
            $usuario = $formulario->getData();
//            var_dump($reserva);
            $session->set('usuario', $usuario);
            return $this->redirectToRoute('resumenReserva');
        }
        
        return $this->render('datosUsuario.html.twig', array(
            'formulario' => $formulario->CreateView()
        ));
    }
    
    /**
     * @Route( "/reserva/resumen_reserva", name="resumenReserva" )
     */
    public function resumenReservaAction(Request $request)
    {
        $formulario = $this->createForm('AppBundle\Form\MetodoPagoType');
        
        $formulario->handleRequest($request);
        $session = $this->get('session');
        if($formulario->isValid()){
            
            $metodoPago = $formulario->getData();
            $session->set('metodoPago', $metodoPago);
//            var_dump($metodoPago);
            return $this->redirectToRoute('confirmacionReserva');           
        }
        
        return $this->render('resumenReserva.html.twig', array(
            'formulario' => $formulario->CreateView()
        ));
    }
    
    /**
     * @Route( "/reserva/confirmacion_reserva", name="confirmacionReserva" )
     */
    public function confirmarReservaAction(Request $request)
    {
        $session = $this->get('session');
        $datosReserva = $session->get('reserva');
        $datosUsuario = $session->get('usuario');
        $metodoPago = $session->get('metodoPago');
        $numeroBicis = $datosReserva['clasicBike'] + $datosReserva['ebike'] + $datosReserva['biciDe110A125Cm'] + $datosReserva['biciDe125A135Cm'] + $datosReserva['biciDe135A150Cm'];
        var_dump($datosReserva);
        var_dump($datosUsuario);
        var_dump($metodoPago);
        $em = $this->getDoctrine()->getManager();
        $reserva = new Reserva();
        $reserva->setFechaEntrega($datosReserva['fechaEntrega']);
        $reserva->setFechaRecogida($datosReserva['fechaRecogida']);
        $reserva->setDireccionDeEntrega($datosReserva['direccionDeEntrega']);
        $reserva->setDireccionDeRecogida($datosReserva['direccionDeRecogida']);
        $reserva->setNumeroBicis($numeroBicis);
        $reserva->setAceptarContratDeUso($metodoPago['aceptarContratoDeUso']);
        $reserva->setTipoDePago($metodoPago['metodoPago']);
        $reserva->setPrecioTotal(30);
        $estadoReserva = new ReservaEstadoReserva();
        $comoEstaReserva = $em->getRepository('AppBundle:EstadoReserva')->findOneById(1);
        $estadoReserva->setEstadoReserva($comoEstaReserva);
        $reserva->addReservaEstado($estadoReserva);
        $em->persist($reserva);
        $em->flush();
        
        echo $numeroBicis;
        return $this->render('confirmacionReserva.html.twig');
    }
    
}
