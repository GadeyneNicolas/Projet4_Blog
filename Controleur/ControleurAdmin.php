<?php

require_once 'Modele/Admin.php';
require_once 'Vue/Vue.php';

class ControleurAdmin {

private $admin;

public function __construct() {
    $this->admin = new Admin();
}

public function connexion($pseudo, $mdp) {
    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = $this->admin->connexionAdmin($pseudo, $mdp);

    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $this->admin->getId($pseudo);
        $_SESSION['pseudo'] = $pseudo;

        header('Location: index.php?action=Admin');
    
    } else {
        header('Location: index.php');
    }   
 }
}

