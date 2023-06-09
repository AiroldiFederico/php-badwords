<?php

//registro il parametro
// $phraseparam = $_GET['phrase'];

?>

<!doctype html>
<html lang="en">
    <head>

        <title>PHP BADWORDS</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Style CSS -->
        <link rel="stylesheet" href="./asset/css/reset.css">
        <link rel="stylesheet" href="./asset/css/style.css">
        <!-- <link rel="stylesheet" href="./asset/css/media-queries.css"> -->

        <!-- Font style -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

        <!-- Icon style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/x-icon" href="./asset/img/favicon.ico"> -->

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous" defer></script>

    </head>


    <body>

        <main>
            <form class="col-4 m-auto p-4" action="output.php" method="GET">

                <div class="mb-3">
                    <!-- text input -->
                    <label for="text" class="form-label">INSERT TEXT HERE</label>
                    <input type="text" class="form-control" id="text" aria-describedby="text" name="phrase">
                    <div id="TextHelp" class="form-text">Bad words will be censored</div>

                    <!-- censor input -->
                    <label for="text" class="form-label mt-4">INSERT TEXT HERE</label>
                    <input type="text" class="form-control" id="text2" aria-describedby="text" name="censoredword">
                    <div id="CensHelp" class="form-text">What word should I censor?</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>

    </body>
    </html>