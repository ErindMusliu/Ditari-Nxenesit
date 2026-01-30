<?php

include('header.php');
include('classes/Nota.php');

$id = $_GET['id'];

$nota = new Nota();
$notat = $nota->find($id);

?>

<div class="container text-center mt-5 justify-content-center" style="min-height: 90vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lenda</th>
                        <th>Data</th>
                        <th>Mesatarja</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($notat as $n){ ?>
                        <tr>
                        <td><?php echo $n['id'] ?></td>
                        <td><?php echo $n['lenda'] ?></td>
                        <td><?php echo $n['data'] ?></td>
                        <td><?php echo round($n['mesatarja'],2) ?></td>
                        <td><?php echo $n['created_at'] ?></td>
                        <td><a class="btn btn-danger" href="nota_fshi.php?id=<?php echo $n['id']; ?>">Delete</a></td>
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