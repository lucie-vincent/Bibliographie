<?php

class Auteur {
    // déclarer les attributs
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    // construct
    public function __construct(string $nom, string $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }


    // accesseur/getters
    public function getNom(): string {
        return $this->_nom;
    }

    public function getPrenom(): string {
        return $this->_prenom;
    }

    public function getLivres(): array {
        return $this->_livres;
    }

    // mutateurs
    public function setNom(string $nom) {
        $this->_nom = $nom;

    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;

    }

    public function setLivres(array $livres) {
        $this->_livres = $livres;

    }

    // méthodes

    public function addLivre(Livre $livre) {
        $this->_livres[] = $livre;
    }

    public function afficherBibliographie() {
        $resultat = "<h1>Livres de $this</h1>";

        foreach ($this->livres as $livre) {
            $resultat .= $livre . "<br>";
        }

        return $resultat;
    }

    public function __toString() {
        return "$this->_prenom $this->_nom";
    }
}