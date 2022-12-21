<?php 
include_once __DIR__ . '/../../traits/AnnoTrait.php';

    class Personale {

        use Anno;
        
        public $nome;
        public $badgeNumber;
        public $ruolo;

        public function __construct(
            String $nome,
            Int $badgeNumber,
            String $ruolo
        )
        {
            $this -> nome = $nome;
            $this -> badgeNumber = $badgeNumber;
            $this -> ruolo = $ruolo;


        }
    }

?>