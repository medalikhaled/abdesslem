<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Double;

class Projet extends Model
{
    use HasFactory;

    /*attributs avec encapsulation */
    private $titre;
    private $prix;
    private $description;
    private $delaiLivraison;

    /*Constructeur */
    public function __construct($titre, $prix, $description, $delaiLivraison)
    {
        $this->titre = $titre;
        $this->prix = $prix;
        $this->description = $description;
        $this->delaiLivraison = $delaiLivraison;
    }


    /* Getters et setters */

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getDelaiLivraison()
    {
        return $this->delaiLivraison;
    }

    public function setDelaiLivraison($delaiLivraison)
    {
        $this->delaiLivraison = $delaiLivraison;
    }
}
