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
     * @ORM\ManyToOne(targetEntity="auteur")
     * @ORM\JoinColumn(name="auteur_id", referencedColumnName="auteur_id",onDelete="SET NULL")
     */
    public auteur $auteur_id;

    /**
     * @ORM\ManyToOne(targetEntity="editeur")
     * @ORM\JoinColumn(name="id_editeur", referencedColumnName="id_editeur",onDelete="SET NULL")
     */
    public editeur $id_editeur;

    public function __construct($isbn, $titre, $resume, auteur $auteur_id, editeur $id_editeur)
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
     * Get the value of auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of editeur
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set the value of editeur
     *
     * @return  self
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }
}
