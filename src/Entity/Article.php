<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity   
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $article_id;

    private int $isbn;

    /**
     * @ORM\Column(length="100")
     */
    private string $titre;

    /**
     * @ORM\Column(length="255")
     */
    private string $resume;

    /**
     * @ORM\ManyToOne(targetEntity="Auteur")
     * @ORM\JoinColumn(name="auteur_id", referencedColumnName="auteur_id",onDelete="SET NULL")
     */
    public Auteur $auteur_id;

    /**
     * @ORM\ManyToOne(targetEntity="Editeur")
     * @ORM\JoinColumn(name="id_editeur", referencedColumnName="id_editeur",onDelete="SET NULL")
     */
    public Editeur $id_editeur;

    public function __construct($isbn, $titre, $resume, Auteur $auteur_id, Editeur $id_editeur)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->resume = $resume;
        $this->auteur_id = $auteur_id;
        $this->id_editeur = $id_editeur;
    }







    // GETTER SETTER EXCLUSION ZONE




    /**
     * Get the value of article_id
     */
    public function getArticle_id()
    {
        return $this->article_id;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of resume
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of Auteur
     */
    public function getAuteur()
    {
        return $this->Auteur;
    }

    /**
     * Set the value of Auteur
     *
     * @return  self
     */
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    /**
     * Get the value of Editeur
     */
    public function getEditeur()
    {
        return $this->Editeur;
    }

    /**
     * Set the value of Editeur
     *
     * @return  self
     */
    public function setEditeur($Editeur)
    {
        $this->Editeur = $Editeur;

        return $this;
    }
}
