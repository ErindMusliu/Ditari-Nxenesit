<?php

include('header.php');

include('classes/Nxenesi.php');

$nxenesi = new Nxenesi();
$nxenesit = $nxenesi->index();

?>

<div class="container text-center mt-5 justify-content-center" style="min-height: 90vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Klasa</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($nxenesit as $n){ ?>
                        <tr>
                        <td><?php echo $n['id'] ?></td>
                        <td><?php echo $n['emri'] ?></td>
                        <td><?php echo $n['mbiemri'] ?></td>
                        <td><?php echo $n['klasa'] ?></td>
                        <td><?php echo $n['created_at'] ?></td>
                        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $n['id']; ?>">Delete</a> <a class="btn btn-warning" href="edit-form.php?id=<?php echo $n['id']; ?>">Edit</a> <a class="btn btn-info" href="notat.php?id=<?php echo $n['id']; ?>">Notat</a> <a class="btn btn-light" href="notat.php?id=<?php echo $n['id']; ?>">Mungesat</a> <a class="btn btn-success" href="notat.php?id=<?php echo $n['id']; ?>">Raporti</a></td>
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