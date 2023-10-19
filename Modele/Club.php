<?php
class Club
{
    private int $id_club;
    private string $nom_club;
    private string $ville_club;


    public function __construct(int $id_club, string $nom_club, string $ville_club)
    {
        $this->id_club = $id_club;
        $this->nom_club = $nom_club;
        $this->ville_club = $ville_club;
    }
    public function getId_club(): int
    {
        return $this->id_club;
    }

    public function getNom_club(): string
    {
        return $this->nom_club;
    }

    public function getVille_club(): string
    {
        return $this->ville_club;
    }

    public function setId_club(int $id_club): void
    {
        $this->id_club = $id_club;
    }

    public function setNom_club(string $nom_club): void
    {
        $this->nom_club = $nom_club;
    }

    public function setVille_club(string $ville_club): void
    {
        $this->ville_club = $ville_club;
    }
}
