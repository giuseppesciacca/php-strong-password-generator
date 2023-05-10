<!-- start HTML -->
<?php
include __DIR__ . '/views/layout/head.php';

include __DIR__ . '/views/partials/header.php';
?>
<!--head + /#app_header -->

<main id="app_main">
    <div class="container">
        <form action="./showPassword.php" method="get" class="p-3 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <label for="length" class="mb-3 pt-1"> Lunghezza password:</label>

                        <p class="pt-2">Consenti ripetizioni di uno o più caratteri:</p>
                    </div>

                    <div class="col-4">
                        <input type="number" class="form-control mb-3" name="length" id="">

                        <div class="form-check mb-3">
                            <input class="form-check-input" name="repeat" id="" type="radio" value="yes"> <label for="repeat">Si</label> <br>
                            <input class="form-check-input" name="repeat" id="" type="radio" value="no" checked="checked"> <label for="repeat">No</label>
                        </div>

                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" name="letters" id="" value="letters" checked="checked">
                            <label class="form-check-label" for="letters">Lettere</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" name="numbers" type="checkbox" id="" value="numbers" checked="checked">
                            <label class="form-check-label" for="numbers">Numeri</label>
                        </div>
                        <div class="form-check form-check">
                            <input class="form-check-input" name="symbols" type="checkbox" id="" value="symbols">
                            <label class="form-check-label" for="symbols">Simboli</label>
                        </div>

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>
                </div>
            </div>
        </form>


    </div>
</main>
<!-- /#app_main -->

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>