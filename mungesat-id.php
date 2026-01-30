<?php

include('header.php');
include('classes/Mungesa.php');

$id = $_GET['id'];

$mungesa = new Mungesa();
$mungesat = $mungesa->find($id);

?>

<div class="container text-center mt-5 justify-content-center" style="min-height: 90vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Total</th>
                        <th>Data</th>
                        <th>Arsye</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($mungesat as $m){ ?>
                        <tr>
                        <td><?php echo $m['id'] ?></td>
                        <td><?php echo $m['total'] ?></td>
                        <td><?php echo $m['data'] ?></td>
                        <td><?php echo $m['arsye'] ?></td>
                        <td><?php echo $m['created_at'] ?></td>
                        <td><a class="btn btn-danger" href="nota_fshi.php?id=<?php echo $m['id']; ?>">Delete</a></td>
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