<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity   
 */
class editeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id_editeur;

    /**
     * @ORM\Column(length="100")
     */
    private string $nom_editeur;

    /**
     * Get the value of id_editeur
     */ 
    public function getId_editeur()
    {
        return $this->id_editeur;
    }

    /**
     * Get the value of nom_editeur
     */ 
    public function getNom_editeur()
    {
        return $this->nom_editeur;
    }

    /**
     * Set the value of nom_editeur
     *
     * @return  self
     */ 
    public function setNom_editeur($nom_editeur)
    {
        $this->nom_editeur = $nom_editeur;

        return $this;
    }
}
