<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Tarifa;

class Tarifas extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder()
    {
        return 20;
    }

    public function load(ObjectManager $manager)
    {
        $tarifas = array(
            array('duracion' => '24', 'precio' => '16', 'descripcion' => 'precio standar por dia completo', 'tipo' => 'standar'),
            array('duracion' => '24', 'precio' => '14', 'descripcion' => 'precio vip por dia completo', 'tipo' => 'vip'),
            array('duracion' => '12', 'precio' => '14', 'descripcion' => 'precio standar por 1/2 dia', 'tipo' => 'standar'),
            array('duracion' => '4', 'precio' => '12', 'descripcion' => 'precio standar por  1/6     dia', 'tipo' => 'standar'),
        );
        
        foreach( $tarifas as $tarifa){
            $entidad = new Tarifa();
            $entidad->setDuracion($tarifa['duracion']); 
            $entidad->setPrecio($tarifa['precio']); 
            $entidad->setDescripcion($tarifa['descripcion']); 
            $entidad->setTipo($tarifa['tipo']); 
            $manager->persist($entidad);
        }
        $manager->flush();
    }
}
