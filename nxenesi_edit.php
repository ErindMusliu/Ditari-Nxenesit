<?php

include("header.php");
include('classes/Database.php');

$database = new Database();

$id = $_GET['id'];

$sql = "select * from nxenesit where id='$id'";

$result = $database->conn->query($sql);

if($result){
    $nxenesit = $result->fetch_assoc();
}

else{
    echo "Error";
}

?>

<div class="container" style="min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <form action="edit-nxenesi.php" method="post" class="shadow-lg p-3 rounded-4">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <!-- Emri -->

                <div class="mb-3">
                    <label for="emri" class="form-label">Emri:</label>
                    <input type="text" name="emri" class="form-control" value="<?php echo $nxenesit['emri'] ?>">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <label for="mbiemri" class="form-label">Mbiemri:</label>
                    <input type="text" name="mbiemri" class="form-control" value="<?php echo $nxenesit['mbiemri'] ?>">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <label for="klasa" class="form-label">Klasa:</label>
                    <input type="text" name="klasa" class="form-control" value="<?php echo $nxenesit['klasa'] ?>">
                </div>

                <!-- Button -->

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>