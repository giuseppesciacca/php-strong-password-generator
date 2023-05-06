<?php
include __DIR__ . '/helpers/functions.php';
?>

<!-- start HTML -->
<?php include __DIR__ . '/views/layout/head.php'; ?>

<body>
    <?php include __DIR__ . '/views/partials/header.php'; ?>
    <!-- /#app_header -->

    <main id="app_main">
        <div class="container">
            <form action="showPassword.php" method="get">
                <label for="length"> Lunghezza password:</label>
                <input type="number" name="length">
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </form>
        </div>
    </main>
    <!-- /#app_main -->
</body>

</html>