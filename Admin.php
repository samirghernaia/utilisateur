<?php

class Admin extends Utilisateur implements IBan
{
   

    public function supprimerArticle(){
        echo "supp article";
    }

    public function seConnecter(){
        echo "connexion securise";
    }

public function afficherProfil(){

    echo $this->nom;
}

public function BannUser()
{
    
}

public function WarnUser()
{
    
}

}