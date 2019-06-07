<?php

require_once 'Modele/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Commentaire extends Modele {

// Renvoie la liste des commentaires associés à un billet
    public function getCommentaires($idBillet) {
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
                . ' where BIL_ID=?';
        $commentaires = $this->executerRequete($sql, array($idBillet));
        return $commentaires;
    }

    public function getCommentaire() {
        
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_SIGNALER as signaler, COM_CONTENU as contenu from T_COMMENTAIRE'
                . ' order by COM_ID desc';
                $commentaireAffichage = $this->executerRequete($sql);
                return $commentaireAffichage;
    }

    public function enleverCommentaire($id) {
        $sql = 'DELETE FROM T_COMMENTAIRE WHERE COM_ID= ?';
        $this->executerRequete($sql, array($id));
    }

    public function signalerCommentaire($id) {
        $sql = 'UPDATE T_COMMENTAIRE SET COM_SIGNALER = :signaler WHERE COM_ID = :id';
        $this->executerRequete($sql, array(
        'signaler' => 'Oui',
	    'id' => $id
	));
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(?, ?, ?, ?)';
        $date = date('Y-m-d H:i:s');  // Récupère la date courante
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    }
}