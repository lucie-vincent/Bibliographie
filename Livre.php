<?php

class Livre {
    // déclarer propriétés/attributs
    private string $_titre;
    private int $_anneeParution;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;

    // conctruct
    public function __construct(string $titre, int $anneeParution, int $nbPages, float $prix, Auteur $auteur) {
        // affectation des attributs paramétrables
        $this->_titre = $titre;
        $this->_anneeParution = $anneeParution;
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_livre->addLivre($this);
    }

    // accesseurs
    public function getTitre() : string {
        return $this->_titre;
    }

    public function getAnneeParution() : int {
        return $this->_anneeParution;
    }

    public function getNbPages() : int {
        return $this->_nbPages;
    }

    public function getPrix() : float {
        return $this->_prix;
    }

    public function getAuteur() : Auteur {
        return $this->_auteur;
    }

    // mutateurs
    public function setTitre(string $titre) {
        $this->_titre = $titre;
    }

    public function setAnneeParution(int $anneeParution) {
        $this->_anneeParution = $anneeParution;
    }

    public function setNbPages(int $nbPages) {
        $this->_nbPages = $nbPages;
    }

    public function setPrix(float $prix) {
        $this->_prix = $prix;
    }

    public function setAuteur(Auteur $auteur) {
        $this->_auteur = $auteur;
    }

    //méthodes
    
    public function __toString() {
        return "$this->_titre ($this->_anneeParution) : $this->_nbPages / $this->_prix  €";
    }
}