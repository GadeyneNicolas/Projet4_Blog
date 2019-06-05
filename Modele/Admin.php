<?php

require_once 'Modele/Modele.php';

class Admin extends Modele {

    public function connexionAdmin($pseudo, $mdp)
    {
        $sql = 'SELECT AD_MOTDEPASSE FROM t_admin WHERE AD_PSEUDO = :pseudo';

        $requete = $this->executerRequete($sql, array('pseudo' => $pseudo));
        $hash = $requete->fetch()['AD_MOTDEPASSE'];

        return password_verify($mdp, $hash);
    }

    public function getId($pseudo)
    {
        $sql = 'SELECT AD_ID FROM t_admin WHERE AD_PSEUDO = :pseudo';
        $requete = $this->executerRequete($sql, array('pseudo' => $pseudo));
    }
}