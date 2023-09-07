<!-- Imposto il codice php con il tag apposito -->

<?php

// Controllo dell'output del form: echo isset($_POST['paragraph']) ? $_POST['paragraph'] : ""; , echo isset($_POST['badword']) ? $_POST['badword'] : "";

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
        <h1 class="mt-5">PHP Badwords</h1>
    </div>

    <div class="container mt-5">

        <div class="card border border-primary">

            <!-- Utilizzo il method "POST" per non far vedere nell'url il contenuto inserito nel form dall'utente e anche perchè il method "GET" possiede delle restrizioni sulla lunghezza dei dati -->

            <form action="output.php" method="POST">

                <div class="card-body">

                    <div class="mb-3">

                        <label for="Paragraph">Inserisci paragrafo:</label>

                        <!-- Quando si lavora con i form in php è essenziale dare il "name" all'input, in quanto verranno utilizzato nell'url -->

                        <input type="text" class="form-control" name="paragraph">

                    </div>

                    <div class="mb-3">

                        <label for="Badword">Inserisci parola da censurare</label>

                        <!-- Quando si lavora con i form in php è essenziale dare il "name" all'input, in quanto verranno utilizzato nell'url -->

                        <input type="text" class="form-control" name="badword">

                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Invia</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</body>

</html>