<?php

require_once 'Controleur/ControleurPage.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Controleur/ControleurAdmin.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlPage;
    private $ctrlBillet;
    private $ctrlAdmin;

    public function __construct() {
        $this->ctrlPage = new ControleurPage();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlAdmin = new ControleurAdmin();
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
                } else if ($_GET['action'] == 'supprimerBillet') {
                    $id = $this->getParametre($_GET, 'id');
                    $this->ctrlBillet->supprimerBillet($id);
                    $this->ctrlPage->Admin(); 
                }  else if ($_GET['action'] == 'modifierBillet') {
                    $titre = $this->getParametre($_POST, 'titre');
                    $contenuBillet = $this->getParametre($_POST, 'contenu');
                    $id = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->modifierBillet($titre, $contenuBillet, $id);
                    $this->ctrlPage->Admin();  
                } else if ($_GET['action'] == 'signaler') {
                    $id = $this->getParametre($_GET, 'id');
                    $this->ctrlBillet->signaler($id);
                    $this->ctrlPage->Accueil();  
                } else if ($_GET['action'] == 'supprimerCommentaire') {
                    $id = $this->getParametre($_GET, 'id');
                    $this->ctrlBillet->supprimerCommentaire($id);
                    $this->ctrlPage->Admin(); 
                }  else if ($_GET['action'] == 'connexion') {
                    $pseudo = $this->getParametre($_POST, 'pseudo');
                    $mdp = $this->getParametre($_POST, 'mot_de_passe');
                    $this->ctrlAdmin->connexion($pseudo, $mdp);
                }  else if (($_GET['action'] == 'APropos')) {
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
                } else if (($_GET['action'] == 'Ajouter')) {
                    $this->ctrlPage->Ajouter();
                } else if (($_GET['action'] == 'Modifier')) {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlPage->Modifier($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                    // $this->ctrlPage->Modifier();
                }  else if (($_GET['action'] == 'Login')) {
                    $this->ctrlPage->Login();
                } else if (($_GET['action'] == 'Deconnexion')) {
                    $this->ctrlPage->Deconnexion();
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
