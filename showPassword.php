<?php
session_start();
include __DIR__ . '/helpers/functions.php';
?>

<!-- start HTML -->
<?php include __DIR__ . '/views/layout/head.php'; ?>

<body>
    <?php include __DIR__ . '/views/partials/header.php'; ?>
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