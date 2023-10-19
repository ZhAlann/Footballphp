<?php

class UserManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    function insertUser(User $user)
    {
        $sql = "INSERT INTO utilisateur VALUES (default, " . $user->getId_club() . ",'"  . $user->getNom_uti() . "', '" . $user->getPrenom_uti() . "', '" . $user->getSexe_uti() . "', '" . $user->getPassword_uti() . "', 'now', '" . $user->getImage_uti() . "', '" . $user->getMail_uti() . "')";
        $this->cnx->exec($sql);
    }
    function existUser(String $mail, &$utilisateur)
    {
        $res = $this->cnx->query("select * from utilisateur where mail_uti = '" . $mail . "'");
        if ($res->rowCount() == 1) {
            $tab = $res->fetch();
            $utilisateur = new User($tab[0], $tab[1], $tab[2], $tab[3], $tab[4], $tab[5], $tab[6], $tab[7], $tab[8]);
            return true;
        } else {
            $utilisateur = null;
            return false;
        }
    }
}
