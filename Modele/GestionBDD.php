<?php

class GestionBDD
{
    private string $user;
    private string $pass;
    private string $dns;
    private string $db;

    private PDO $cnx;
    function __construct(string $db, string $user = 'postgres', string $pass = 'root')
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->dns = 'pgsql:host=localhost;dbname=DB_Ligue;';
    }

    /**
     * 
     * @return PDO
     */
    function connect(): PDO
    {
        try {
            $this->cnx = new PDO($this->dns, $this->user, $this->pass);
            return $this->cnx;
        } catch (PDOException $e) {
            print "Erreur de connexion à la base !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    function getClubIntoSelect($cnx)
    {
        $res = $cnx->query('select * from club');
        while ($ligne = $res->fetch()) {
            echo ("<option value=$ligne[0]> $ligne[1] </option>");
        }
    }
}
