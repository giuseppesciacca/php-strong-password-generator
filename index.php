<?php
$password_length = $_GET['length'];
var_dump($password_length);

$alphabetUp = range('A', 'Z');
$alphabetLw = range('a', 'z');
$numbers = range('1', '9');
$charachter = array_merge($alphabetUp, $alphabetLw, $numbers);
shuffle($charachter); //mischio l'array

//prendo casualmente degli indici dall'array
array_rand($charachter, 1);
$random_index_charachter = array_rand($alphabetUp, $password_length);

$password_for_user = '';
foreach ($random_index_charachter as $key => $value) {
    $password_for_user .= $charachter[$value];
}
//var_dump($password_for_user);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <header id="app_header">
        <h1>Strong Password Generator</h1>
        <h2>Genera una passoword sicura</h2>
    </header>
    <!-- /#app_header -->

    <main id="app_main">
        <div class="container">
            <form action="" method="get">
                <label for="length"> Lunghezza password:</label>
                <input type="number" name="length">
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </form>


            <div class="result_password">
                Password =
                <?= $password_for_user ?>
            </div>
        </div>
    </main>
    <!-- /#app_main -->
</body>

</html>