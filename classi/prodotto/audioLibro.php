<?php

include_once __DIR__ . '/product.php';
include_once __DIR__ . '/../../traits/AnnoTrait.php';


class audioLibro extends Prodotto{
  use Anno;

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
    String $link,

    Int $anno

    ) {
    $this->durata = $durata;
    $this->piattaforma = $piattaforma;
    $this->link = $link;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );

    $this -> anno = $anno;

  }


}
