<?php

include('header.php');
include('classes/Nxenesi.php');
include('classes/Mungesa.php');
include('classes/Nota.php');

$id = $_GET['id'];

$nxenesi = new Nxenesi();
$nxenesit = $nxenesi->find($id);

$mungesa = new Mungesa();
$mungesat = $mungesa->totalOreMungese($id);

$nota = new Nota();
$notat = $nota->mesatarjaENxenesit($id);

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            <table class="table table-dark table-hover">
                <tbody>
                    <?php foreach($nxenesit as $n){ ?>
                        <h1 class="display-3 mb-5">Raporti per <?php echo $n['emri']." ".$n['mbiemri'] ?></h1>
                        <tr>
                            <td>Emri</td>
                            <td><?php echo $n['emri'] ?></td>
                        </tr>
                        
                        <tr>
                            <td>Mbiemri</td>
                            <td><?php echo $n['mbiemri'] ?></td>
                        </tr>

                        <tr>
                            <td>Klasa</td>
                            <td><?php echo $n['klasa'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php foreach($mungesat as $m){ ?>
                    <tr>
                        <td>Totali i Mungesave</td>
                        <td><?php echo $m['total'] ?></td>
                    </tr>
                    <?php } ?>
                    <?php foreach($notat as $n){ ?>
                    <tr>
                        <td>Nota Mesatare</td>
                        <td><?php echo round($n['mesatarja'],2) ?></td>
                    </tr>
                    <?php } ?>

                    <tr>
                        <td>Actions</td>
                        <td><a class="btn btn-info" href="notat-id.php?id=<?php echo $id; ?>">Notat</a> <a class="btn btn-light" href="mungesat-id.php?id=<?php echo $id; ?>">Mungesat</a> <a class="btn btn-success" href="index.php">Kthehu</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php

include('footer.php');

?>