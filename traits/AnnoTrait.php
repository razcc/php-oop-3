<?php 

    trait Anno {
        public $anno;

        public function __construct(
            Int $anno
        ){
            $this -> anno = $anno;
        }
    }

?>