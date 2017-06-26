<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Bicicleta;

class Bicicletas extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder()
    {
        return 30;
    }

    public function load(ObjectManager $manager)
    {
        $bicicletas = array(
            array('tipo' => 'normal', 'precioCompra' => '150', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '654a6s5465s'),
            array('tipo' => 'normal', 'precioCompra' => '150', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '654a6s55s'),
            array('tipo' => 'normal', 'precioCompra' => '150', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '6a6s5465s'),
            array('tipo' => 'normal', 'precioCompra' => '150', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '654a6s5465s'),
            array('tipo' => 'electrica', 'precioCompra' => '1200', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '65444465s'),
            array('tipo' => 'electrica', 'precioCompra' => '1200', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '656s5465s'),
            array('tipo' => 'electrica', 'precioCompra' => '1200', 'alturaMaxima' => '200', 'alturaMinima' => '150', 'numeroBastidor' => '654a5465s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '110', 'alturaMinima' => '125', 'numeroBastidor' => '6465s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '125', 'alturaMinima' => '135', 'numeroBastidor' => '65885465s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '135', 'alturaMinima' => '150', 'numeroBastidor' => '654a6s5465s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '110', 'alturaMinima' => '125', 'numeroBastidor' => '654522465s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '125', 'alturaMinima' => '135', 'numeroBastidor' => '654asd65s'),
            array('tipo' => 'nene', 'precioCompra' => '100', 'alturaMaxima' => '135', 'alturaMinima' => '150', 'numeroBastidor' => '654a5s'),
        );
        
        foreach( $bicicletas as $bicicleta){
            $entidad = new Bicicleta();
            $entidad->setFechaAlta(new \DateTime());
            $entidad->setTipo($bicicleta['tipo']);
            $entidad->setPrecioCompra($bicicleta['precioCompra']);
            $entidad->setAlturaMaxima($bicicleta['alturaMaxima']);
            $entidad->setAlturaMinima($bicicleta['alturaMinima']);
            $entidad->setNumeroBastidor($bicicleta['numeroBastidor']);
            $manager->persist($entidad);
        }
        $manager->flush();
    }
}
