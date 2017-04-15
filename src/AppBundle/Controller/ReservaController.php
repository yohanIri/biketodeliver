<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reserva;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservaController extends Controller
{
    
    /**
     * @Route( "/reserva", name="reservaDatos" )
     */
    public function reservaDatosAction(Request $request)
    {
        $reserva = new Reserva();
        
        $formulario = $this->createForm('AppBundle\Form\ReservaType', $reserva);
        
        $formulario->handleRequest($request);
        
        if($formulario->isValid()){
            
        }
        
        return $this->render('datosReserva.html.twig', array(
            'formulario' => $formulario->CreateView()
        ));
    }
    
}
