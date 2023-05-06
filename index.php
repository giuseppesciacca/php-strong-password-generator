<!-- start HTML -->
<?php
include __DIR__ . '/views/layout/head.php';

include __DIR__ . '/views/partials/header.php';
?>
<!--head + /#app_header -->

<main id="app_main">
    <div class="container">
        <form action="./showPassword.php" method="get">
            <div class="d-flex align-items-center justify-content-between me-5">
                <label for="length"> Lunghezza password:</label>
                <div class="mb-3">
                    <input type="number" class="form-control" name="length" id="">
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
    </div>
</main>
<!-- /#app_main -->

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>