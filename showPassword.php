<?php
session_start();
include __DIR__ . '/helpers/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header id="app_header">
        <h1>Strong Password Generator</h1>
        <h2>Genera una passoword sicura</h2>
    </header>
    <!-- /#app_header -->

    <main>
        <div class="container">
            <div class="result_password">
                <?php if ($_SESSION['password'] == null): ?>
                    Nessun parametro valido inserito
                <?php elseif ($_SESSION['password'] < 6): ?>
                    Inserire almeno un numero pari a 6 per avere una password più sicura
                <?php else: ?>
                    Password =
                    <?= $_SESSION['password'] ?>
                <?php endif ?>
            </div>
        </div>
    </main>
</body>

</html>