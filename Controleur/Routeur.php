<?php

require_once 'Controleur/ControleurPage.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlPage;
    private $ctrlBillet;

    public function __construct() {
        $this->ctrlPage = new ControleurPage();
        $this->ctrlBillet = new ControleurBillet();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'billet') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBillet->billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                } else if ($_GET['action'] == 'creerBillet') {
                    $titre = $this->getParametre($_POST, 'titre');
                    $contenuBillet = $this->getParametre($_POST, 'contenu');
                    $this->ctrlBillet->creerBillet($titre, $contenuBillet);
                    $this->ctrlPage->Admin();
                }  else if ($_GET['action'] == 'supprimerBillet') {
                    $id = $this->getParametre($_GET, 'id');
                    $this->ctrlBillet->supprimerBillet($id);
                    $this->ctrlPage->Admin();
                }
                else if (($_GET['action'] == 'APropos')) {
                    $this->ctrlPage->APropos();
                }    else if (($_GET['action'] == 'MesLivres')) {
                    $this->ctrlPage->MesLivres();
                }  else if (($_GET['action'] == 'Contact')) {
                    $this->ctrlPage->Contact();
                }  else if (($_GET['action'] == 'Confidentialite')) {
                    $this->ctrlPage->Confidentialite();
                }  else if (($_GET['action'] == 'Mentions')) {
                    $this->ctrlPage->Mentions();
                } else if (($_GET['action'] == 'Admin')) {
                    $this->ctrlPage->Admin();
                }  else if (($_GET['action'] == 'Login')) {
                    $this->ctrlPage->Login();
                } else 
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlPage->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}
