<?php

require_once 'Modele/Billet.php';
require_once 'Modele/Commentaire.php';
require_once 'Vue/Vue.php';

class ControleurBillet {

    private $billet;
    private $commentaire;
    

    public function __construct() {
        $this->billet = new Billet();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un billet
    public function billet($idBillet) {
        $billet = $this->billet->getBillet($idBillet);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $vue = new Vue("Billet");
        $vue->generer(array('billet' => $billet, 'commentaires' => $commentaires));
    }

    // Ajoute un commentaire à un billet
    public function commenter($auteur, $contenu, $idBillet) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
        // Actualisation de l'affichage du billet
        $this->billet($idBillet);
    }

      // Ajoute un billet
      public function creerBillet($titre, $contenuBillet) {
    
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
        
        $nom = "Contenu/Images/{$titre}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
        if ($resultat) echo "Transfert réussi";
        $lien = $nom;
      
        // Sauvegarde du billet
        $this->billet->AjouterBillet($titre, $lien, $contenuBillet);
    }

     // Supprime un billet
     public function supprimerBillet($id) {
        if (isset($_SESSION['pseudo'])) {
            $this->billet->enleverBillet($id);
            } else {
                header("Location: index.php?action=Login");
            }
    }

    // modifier un billet
    public function modifierBillet($titre, $contenuBillet, $id) {

        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
        
        $nom = "Contenu/Images/{$titre}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
        if ($resultat) echo "Transfert réussi";
        $lien = $nom;
        // modifier le billet
        $this->billet->corrigerBillet($titre, $lien, $contenuBillet, $id);
    }

    public function signaler($id) {
        $this->commentaire->signalerCommentaire($id);
    }

     // Supprime un commentaire
     public function supprimerCommentaire($id) {
        if (isset($_SESSION['pseudo'])) {
            $this->commentaire->enleverCommentaire($id);
            } else {
                header("Location: index.php?action=Login");
            }
    }




}

