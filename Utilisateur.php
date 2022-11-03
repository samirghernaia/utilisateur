<?php

abstract class Utilisateur
{
    public string $nom;
    public string $prenom;
    public string $email;
    public string $passeword;
    private bool $isConnected;

    public function __construct(string $nom, string $prenom, string $email, string $passeword)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->passeword = $passeword;
    }


    public function seConnecter()
    {
        $this->isConnected = true;
        echo "connecter";
    }


    public abstract function afficherProfil();
}
