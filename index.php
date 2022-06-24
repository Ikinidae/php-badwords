<?php
    // assegno il testo ad una variabile
    $text = "Cantami, o Diva, del Pelìde Achille
    l'ira funesta che infiniti addusse
    lutti agli Achei, molte anzi tempo all'Orco
    generose travolse alme d'eroi,
    e di cani e d'augelli orrido pasto
    lor salme abbandonò (così di Giove
    l'alto consiglio s'adempía), da quando
    primamente disgiunse aspra contesa
    il re de' prodi Atride e il divo Achille.
    E qual de' numi inimicolli? Il figlio
    di Latona e di Giove. Irato al Sire
    destò quel Dio nel campo un feral morbo,
    e la gente pería: colpa d'Atride
    che fece a Crise sacerdote oltraggio.";

    // creo una variabile con la parola inserita dall'utente nel form
    $word = $_GET["word"];

    // creo una variabile con il testo precedente ma in cui la parola inserita dall'utente viene sostituita da ***
    $replaced_text = str_replace($word, "***", $text);
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
    <h1>Testo originale</h1>
    <!-- stampo il testo originale con un var_dump che dà anche la lunghezza del testo -->
    <p><?= var_dump($text)?> </p>
    <br>

    <form action="" method="get">
        <label for="word">Inserire una parola del testo</label>
        <!-- nell'input bisogna indicare che "name =" ciò che è in parentesi quadre nel php -->
        <input type="text" name="word">
        <button>Invia</button>
    </form>
    <br>

    <h1>Testo corretto</h1>
    <!-- stampo il testo corretto -->
    <p> <?= $replaced_text?> </p>
    <!-- stampo la lunghezza del testo mediante la funzione strlen -->
    <p> Lunghezza testo: <?= strlen($replaced_text);?> </p>
</body>

</html>