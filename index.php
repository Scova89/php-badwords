<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php
    $paragrafo = 'Le strade a Roma sono davvero fatte a culo.';

    $paragrafoCensurato = str_replace($_GET['parola'], '***', $paragrafo);


    $lista = [
        'pane',
        'latte',
        'marmellata'
    ];
    var_dump($lista);
    $_GET['cibo'];

    if(in_array('cibo', $lista)){
        echo 'ciao'
    }else{
        echo 'no'
    };
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Frase non censurata</h2>
    <p><?php echo $paragrafo; ?></p>
    <h3>La lunghezza della frase è di <?php echo strlen($paragrafo); ?> caratteri</h3>

    <h2>Frase censurata</h2>
    <p><?php echo $paragrafoCensurato; ?></p>
    <h3>La lunghezza della frase è di <?php echo strlen($paragrafoCensurato); ?> caratteri</h3>
    
    <ul>
        <?php for($i = 0; $i < count($lista); $i++){
            echo "$lista[$i]\n";
        }
        ?>
    </ul>

    <script>
        if()
    </script>
    
</body>
</html>