<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="formation")
 */
class Formation {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */ 
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */ 
    public $name;
    
    /**
     * @ORM\Column(type="date")
     */ 
    public $dateDebut;
    
    /**
     * @ORM\Column(type="date")
     */ 
    public $dateFin;
    
    /**
     * @ORM\Column(type="string")
     */ 
    public $lieu;
}