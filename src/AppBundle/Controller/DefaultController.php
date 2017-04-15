<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    /**
     * @Route( "/", name="home" )
     */
    public function portadaAction()
    {
        return $this->render('home.html.twig');
    }
    
    /**
    * @Route("/{nombrePagina}/",
     * name="pagina",
     * requirements={ "nombrePagina"="tarifas|tour|ayuda" }
     * )
    */
    public function paginaAction($nombrePagina)
    {
        return $this->render($nombrePagina.'.html.twig');
    }
}
