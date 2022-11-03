<?php

class Moderateur extends Utilisateur
{





    public function supprimerCommentaire()
    {
        echo "supp commentaire";
    }

    public function afficherProfil()
    {

        echo $this->nom . " " . $this->prenom;
    }
}
