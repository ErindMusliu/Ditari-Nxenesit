<?php

include('header.php');

include('classes/Mungesa.php');
include('classes/Nota.php');

$mungesa = new Mungesa();

?>

<div class="container text-center mt-5 justify-content-center" style="min-height: 90vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nxenesi</th>
                        <th>Klasa</th>
                        <th>Mesatarja</th>
                        <th>Totali i Oreve</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($mungesat as $m){ ?>
                        <tr>
                        <td><?php echo $m['id'] ?></td>
                        <td><?php echo $m['emri']." ".$m['mbiemri'] ?></td>
                        <td><?php echo $m['klasa'] ?></td>
                        <td><?php echo $m['mesatarja'] ?></td>
                        <td><?php echo $m['total'] ?></td>
                        <td><?php echo $m['created_at'] ?></td>
                        <td><a class="btn btn-info" href="notat.php?id=<?php echo $n['id']; ?>">Notat</a> <a class="btn btn-light" href="notat.php?id=<?php echo $n['id']; ?>">Mungesat</a> <a class="btn btn-success" href="notat.php?id=<?php echo $n['id']; ?>">Raporti</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php

include('footer.php');

?>