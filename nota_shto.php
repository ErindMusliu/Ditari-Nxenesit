<?php

include("header.php");
include("classes/Nxenesi.php");

$nxenesi = new Nxenesi();
$nxenesit = $nxenesi->index();

?>

<div class="container" style="min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <form action="save-nota.php" method="post" class="shadow-lg p-3 rounded-4">
                <!-- Lenda -->

                <div class="mb-3">
                    <label for="lenda" class="form-label">Lenda:</label>
                    <input type="text" class="form-control" name="lenda">
                </div>

                <!-- Nota -->

                <div class="mb-3">
                    <label for="nota" class="form-label">Nota:</label>
                    <input type="number" class="form-control" name="nota">
                </div>

                <!-- Data -->

                <div class="mb-3">
                    <label for="data" class="form-label">Data:</label>
                    <input type="date" class="form-control" name="data">
                </div>

                <!-- Nxenesi -->
                 
                <div class="mb-3">
                    <label for="nxenesi" class="form-label">Nxenesi:</label>
                    <select name="nxenesi" id="nxenesi" class="form-select">
                        <?php foreach($nxenesit as $n){ ?>
                            <option value="<?php echo $n['id'] ?>"><?php echo $n['emri']." ".$n['mbiemri'] ?></option>
                        <?php } ?>
                    </select>
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