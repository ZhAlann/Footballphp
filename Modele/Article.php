<?php

class Article
{
    private int $id_article;
    private string $titre_article;
    private string $desc_article;


    public function __construct(int $id_article, string $titre_article, string $desc_article)
    {
        $this->id_article = $id_article;
        $this->titre_article = $titre_article;
        $this->desc_article = $desc_article;
    }


    /**
     * Get the value of id_article
     */
    public function getId_article()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @return  self
     */
    public function setId_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get the value of titre_article
     */
    public function getTitre_article()
    {
        return $this->titre_article;
    }

    /**
     * Set the value of titre_article
     *
     * @return  self
     */
    public function setTitre_article($titre_article)
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    /**
     * Get the value of desc_article
     */
    public function getDesc_article()
    {
        return $this->desc_article;
    }

    /**
     * Set the value of desc_article
     *
     * @return  self
     */
    public function setDesc_article($desc_article)
    {
        $this->desc_article = $desc_article;

        return $this;
    }
}
