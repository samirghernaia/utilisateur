<?php

class Redacteur extends Utilisateur
{




    public function posterrArticle()
    {
        echo "poster article";
    }
    public function afficherProfil()
    {

        echo $this->nom . " " . $this->prenom . $this->email;
    }
}
