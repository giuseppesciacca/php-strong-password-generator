<?php
session_start();
include __DIR__ . '/helpers/functions.php';
?>

<!-- start HTML -->
<?php
include __DIR__ . '/views/layout/head.php';

include __DIR__ . '/views/partials/header.php';
?>
<!--head + /#app_header -->

<main>
    <div class="container">
        <div class="result_password">
            <?php if ($_GET['length'] == null): ?>
                Nessun parametro valido inserito
            <?php elseif ($_GET['length'] < 6): ?>
                Inserire almeno un numero pari a 6 per avere una password più sicura
            <?php else: ?>
                Password =
                <?= $_GET['length'] ?>
            <?php endif ?>
        </div>
    </div>
</main>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>