<?php

class User {
    private int $id_uti;
    private int $id_club;    
    private string $nom_uti;
    private string $prenom_uti;
    private string $sexe_uti;
    private string $password_uti;
    private string $date_inscription;
    private string $image_uti;
    private string $mail_uti;
    
    public function __construct(int $id_uti, int $id_club, string $nom_uti, string $prenom_uti, string $sexe_uti, string $password_uti, string $date_inscription, string $image_uti, string $mail_uti) {
        $this->id_uti = $id_uti;
        $this->id_club = $id_club;
        $this->nom_uti = $nom_uti;
        $this->prenom_uti = $prenom_uti;
        $this->sexe_uti = $sexe_uti;
        $this->password_uti = $password_uti;
        $this->date_inscription = $date_inscription;
        $this->image_uti = $image_uti;
        $this->mail_uti = $mail_uti;
    }
    public function getId_uti(): int {
        return $this->id_uti;
    }

    public function getId_club(): int {
        return $this->id_club;
    }

    public function getNom_uti(): string {
        return $this->nom_uti;
    }

    public function getPrenom_uti(): string {
        return $this->prenom_uti;
    }

    public function getSexe_uti(): string {
        return $this->sexe_uti;
    }

    public function getPassword_uti(): string {
        return $this->password_uti;
    }

    public function getDate_inscription(): string {
        return $this->date_inscription;
    }

    public function getImage_uti(): string {
        return $this->image_uti;
    }

    public function getMail_uti(): string {
        return $this->mail_uti;
    }

    public function setId_uti(int $id_uti): void {
        $this->id_uti = $id_uti;
    }

    public function setId_club(int $id_club): void {
        $this->id_club = $id_club;
    }

    public function setNom_uti(string $nom_uti): void {
        $this->nom_uti = $nom_uti;
    }

    public function setPrenom_uti(string $prenom_uti): void {
        $this->prenom_uti = $prenom_uti;
    }

    public function setSexe_uti(string $sexe_uti): void {
        $this->sexe_uti = $sexe_uti;
    }

    public function setPassword_uti(string $password_uti): void {
        $this->password_uti = $password_uti;
    }

    public function setDate_inscription(string $date_inscription): void {
        $this->date_inscription = $date_inscription;
    }

    public function setImage_uti(string $image_uti): void {
        $this->image_uti = $image_uti;
    }

    public function setMail_uti(string $mail_uti): void {
        $this->mail_uti = $mail_uti;
    }


}
