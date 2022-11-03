<?php

class Visiteur extends Utilisateur
{

    public string $pseudo;


    public function __construct(string $nom, string $prenom, string $email, string $passeword, string $pseudo)
    {

        parent::__construct($nom, $prenom, $email, $passeword);
        $this->pseudo = $pseudo;
    }

    public function posterCommentaire()
    {
        echo "posterCommentaire";
    }
    public function afficherProfil()
    {

        echo $this->pseudo;
    }
}
