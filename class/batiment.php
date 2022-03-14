
<?php

class batiment{
    private $nom;
    private $superficie;
    private $type;
    private $nbEtage;



    public function __construct($nom, $superficie, $type, $nbEtage)
    {
        $this->nom = $nom;
        $this->superficie = $superficie;
        $this->type = $type;
        $this->nbEtage = $nbEtage;

    }
    public function getNom(): ?string
    {
    return $this->nom;
    }

    public function getSuperficie(): ?int
    {
    return $this->superficie;
    }
    public function getType(): ?string
    {
    return $this->type;
    }
    public function getNbEtage(): ?int
    {
    return $this->nbEtage;
    }
}

?>