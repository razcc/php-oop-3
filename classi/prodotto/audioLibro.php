<?php

include_once __DIR__ . '/product.php';

class audioLibro extends Prodotto{
  public $durata;
  public $piattaforma;
  public $link;

  public function __construct(
    // Info padre
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,
    
    // Info AudioLibro
    Int $durata,
    String $piattaforma,
    String $link
    ) {
    $this->durata = $durata;
    $this->piattaforma = $piattaforma;
    $this->link = $link;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }


}
