<?php
    class immeuble extends batiment
    {
        private $ascenceur;
        private $nbApartement;
        private $garage;
        public function __construct($nom, $superficie, $type, $nbEtage, $ascenceur, $nbApartement, $garage)
        {
            parent::__construct($nom, $superficie, $type, $nbEtage);
            
            $this->garage = $garage;
            $this->ascenceur = $ascenceur;
            $this->nbApartement = $nbApartement;

        }
        
            public function getGarage(): ?bool
            {
                return $this->garage;
            }
            public function getAscenceur(): ?bool
            {
                return $this->ascenceur;
            }
            public function getNbApartement(): ?int
            {
                return $this->nbApartement;
            }
            public function setGarage(bool $garage): self
             {
                 $this->garage = $garage;

                return $this;
            }
    }

?>