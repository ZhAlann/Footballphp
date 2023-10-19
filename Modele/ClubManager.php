<?php

class ClubManager
{

    private PDO $cnx;

    public function __construct(PDO $cnx)
    {
        $this->cnx = $cnx;
    }

    function getListClub(): array
    {
        $res = $this->cnx->query("SELECT FROM club");
        $tableResult = [];
        while ($ligne = $res->fetch()) {
            $tableResult[] = new Club($ligne[0], $ligne[1], $ligne[2]);
        }
        return $tableResult;
    }

    function getListClubByName(): array
    {
        $res = $this->cnx->query("SELECT * FROM club ORDER BY nom_club");
        $tableResult = [];
        while ($ligne = $res->fetch()) {
            $tableResult[] = new Club($ligne[0], $ligne[1], $ligne[2]);
        }

        return $tableResult;
    }
    function getClubuser(int $id_club)
    {
        $res = $this->cnx->query("SELECT club.nom_club FROM club where id_club =" . $id_club);
        $equipe = $res->fetchColumn();

        return $equipe;
    }
}
