<?php

include_once __DIR__ . '/classi/prodotto/generi.php';
include_once __DIR__ . '/classi/prodotto/libro.php';
include_once __DIR__ . '/classi/prodotto/audiolibro.php';
include_once __DIR__ . '/classi/personale/personale.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile', 2005),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com', 2000),
];

$personale = [
    new Personale('Bob', 19028379, 'Responsabile', 1995)
];

var_dump( $prodotti );

var_dump($personale);
// 
// foreach( $prodotti as $elem ){
//   echo get_class($elem);
//   echo "<br>";
// }
?>