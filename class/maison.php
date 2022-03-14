<?php
//require_once 'batiHome.php'; 
    class maison extends batiment implements batiHome
    {
        private $garage;
        private $cheminee;
        public function __construct($nom, $superficie, $type, $nbEtage, $garage, $cheminee)
        {
            parent::__construct($nom, $superficie, $type, $nbEtage);
            $this->garage = $garage;
            $this->cheminee = $cheminee;
        }
        
            public function getGarage(): ?bool
            {
                return $this->garage;
            }
            public function getCheminee(): ?bool
            {
                return $this->cheminee;
            }
    }

?>