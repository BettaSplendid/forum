<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity   
 */
class Visitor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $visitor_id;

    /**
     * @ORM\Column(length="100")
     */
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of visitor_id
     */
    public function getVisitor_id()
    {
        return $this->visitor_id;
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
