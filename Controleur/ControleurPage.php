<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurPage {

    private $billet;

    public function __construct() {
        $this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = $this->billet->getBillets();
        $vue = new Vue("Accueil");
        $vue->generer(array('billets' => $billets));
    }

    public function APropos() {
        $vue = new Vue("APropos");
        $vue->generer([]);
    }

    public function MesLivres() {
        $vue = new Vue("MesLivres");
        $vue->generer([]);
    }

    public function Contact() {
        $vue = new Vue("Contact");
        $vue->generer([]);
    }

    public function Confidentialite() {
        $vue = new Vue("Confidentialite");
        $vue->generer([]);
    }

    public function Mentions() {
        $vue = new Vue("Mentions");
        $vue->generer([]);
    }

    public function Admin() {
        $billets = $this->billet->getBillets();
        $vue = new Vue("Admin");
        $vue->generer(array('billets' => $billets));
    }

    public function Login() {
        $vue = new Vue("Login");
        $vue->generer([]);
    }
}

