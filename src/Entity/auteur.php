<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity   
 */
class auteur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $auteur_id;

        /**
     * @ORM\Column(length="100")
     */
    private string $name;



    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * Get the value of auteur_id
     */ 
    public function getAuteur_id()
    {
        return $this->auteur_id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


}
