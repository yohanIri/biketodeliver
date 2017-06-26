<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Accesorio;

class Accesorios extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder()
    {
        return 10;
    }
    
    public function load(ObjectManager $manager)
    {
        $accesorios = array(
            array('nombre' => 'sillita nene roja', 'tipo' => 'sillita', 'precio' => '5', 'restriccion' => '22', 'precioCompra' => '45', 'precioVenta' => ' '),
            array('nombre' => 'sillita nene verde', 'tipo' => 'sillita', 'precio' => '5', 'restriccion' => '22', 'precioCompra' => '45', 'precioVenta' => ' '),
            array('nombre' => 'sillita nene morada', 'tipo' => 'sillita', 'precio' => '5', 'restriccion' => '22', 'precioCompra' => '45', 'precioVenta' => '25'),
            array('nombre' => 'soporte para movil', 'tipo' => 'soporte', 'precio' => '3', 'restriccion' => '5', 'precioCompra' => '20', 'precioVenta' => ' '),
            array('nombre' => 'soporte para movil', 'tipo' => 'soporte', 'precio' => '3', 'restriccion' => '5', 'precioCompra' => '20', 'precioVenta' => ' '),
            array('nombre' => 'soporte para movil', 'tipo' => 'soporte', 'precio' => '3', 'restriccion' => '5', 'precioCompra' => '20', 'precioVenta' => '10'),
        );
        
        foreach( $accesorios as $accesorio){
            $entidad = new Accesorio();
            $entidad->setFechaAlta(new \DateTime()); 
            $entidad->setNombre($accesorio['nombre']);
            $entidad->setTipo($accesorio['tipo']);
            $entidad->setPrecio($accesorio['precio']);
            $entidad->setRestricciones($accesorio['restriccion']);
            $entidad->setPrecioCompra($accesorio['precioCompra']);
            if($accesorio['precioVenta'] != ' '){
                $entidad->setPrecioVenta($accesorio['precioVenta']);                
            }
            $manager->persist($entidad);
        }
        $manager->flush();
    }
}
