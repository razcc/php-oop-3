<?php

include_once __DIR__ . '/classi/prodotto/generi.php';
include_once __DIR__ . '/classi/prodotto/libro.php';
include_once __DIR__ . '/classi/prodotto/audiolibro.php';
include_once __DIR__ . '/classi/personale/personale.php';


$generi = [
    'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
    'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
// var_dump($generi);

$prodotti = [
    new Libro(
        'La scelta di Natan',
        'Antonio Puccio',
        23.40,
        $generi['giallo'],
        true,
        'https://media.licdn.com/dms/image/C4D22AQEwiuD3JKj_pQ/feedshare-shrink_2048_1536/0/1669472935369?e=2147483647&v=beta&t=ueMUeBNUC476C6b-dptFP_Pzxqt-ZxL-53ChVYFOY48',
        250,
        'flessibile',
        2005
    ),
    new audioLibro(
        'Il Signore degli anelli-AudioLibro',
        'Pinco Pallino',
        23.40,
        $generi['giallo'],
        true,
        'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg',
        120,
        'spotify',
        'https://spotify-libri.com',
        2000
    )
];

$personale = [
    new Personale('Bob', 19028379, 'Responsabile', 1995)
];

// var_dump($prodotti);
// 
// var_dump($personale);
// 
// foreach( $prodotti as $elem ){
//   echo get_class($elem);
//   echo "<br>";
// }
?>


<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <title>titolo</title>

    <!-- FontAwesome 6.2 -->
    <link rel='stylesheet' href='https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">





</head>


<body>

    <div id='app' class="w-75 mx-auto container-fluid">
        <h1 class="text-center">Php Traits & Classi</h1>

        <h4 class="mt-5">I nostri prodotti</h4>
        <!-- card Prodotti -->
        <div class="row">
            <?php foreach ($prodotti as $elem) { ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src=" <?php echo $elem->immagine ?> " class="card-img-top" alt="Copertina">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $elem->nome ?></h4>
                            <div>Autore:<?php echo $elem->autore ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <!-- Il Personale -->

    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



</body>

</html>