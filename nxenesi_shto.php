<?php

include("header.php");

?>

<div class="container" style="min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <form action="save-nxenesi.php" method="post" class="shadow-lg p-3 rounded-4">
                <!-- Emri -->

                <div class="mb-3">
                    <label for="emri" class="form-label">Emri:</label>
                    <input type="text" name="emri" class="form-control">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <label for="mbiemri" class="form-label">Mbiemri:</label>
                    <input type="text" name="mbiemri" class="form-control">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <label for="klasa" class="form-label">Klasa:</label>
                    <input type="text" name="klasa" class="form-control">
                </div>

                <!-- Button -->

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Shto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>