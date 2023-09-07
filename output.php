<?php

    $par = $_POST['paragraph'];
    $hide_word = $_POST['badword'];

    // La funzione strLen() si usa per trovare la lunghezza del testo
    $par_lenght = strlen($par);

    // La funzione str_replace() sostituisce tutte le occorrenze della parola data da "kiwi" con "***"
    $new_text = str_replace($hide_word,"***", $par);

    $new_par_lenght = strlen($new_text);      

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Crea un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare">
    <title>PHP Badwords</title>

    <!-- Framework bootstrap css  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Custom css  -->

    <link rel="stylesheet" href="css/style.css">

</head>

</head>

<body>

    <div class="text-center">
        <h1 class="mt-5">PHP Output</h1>
    </div>

    <div class="container mt-5">

        <p>Il paragrafo scritto dall'utente è il seguente:<strong><?php echo $par?></strong></p>
        <p>La lunghezza di questo paragrafo è pari a <span><strong><?php echo $par_lenght?></strong></span> caratteri</p>
    
        <p class="mt-5">La parola inserita dall'utente per essere censurata è:<span><strong><?php echo $hide_word?></strong></span></p>
    
        <p>Il paragrafo con le censure applicate è:<span><strong><?php echo $new_text?></strong></span></p>
    
        <p>Infine, la lunghezza di questo testo e di <span><strong><?php echo $new_par_lenght?></strong></span> caratteri</p>

    </div>






</body>

</html>