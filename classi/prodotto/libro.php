<?php

include_once __DIR__ . '/product.php';
include_once __DIR__ . '/../../traits/AnnoTrait.php';

class Libro extends Prodotto {
  use Anno;

  public $pagine;
  public $copertina;

  public function __construct(
    // Info padre
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    // Info Libro
    Int $pagine,
    String $copertina
    ) {
    $this->pagine = $pagine;
    $this->copertina = $copertina;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}
