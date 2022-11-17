<!-- DB -->
<?php include '../db/db.php' ?>

<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $stuff = $_POST['stuff'];
    $delivery = $_POST['delivery'];
    $capacity = $_POST['capacity'];
    $description = $_POST['description'];
    $query = "UPDATE shop SET name = " . "'" .$name."'" . ", stuff = "."'".$stuff."'". ", delivery = "."'".$delivery."'". ", capacity = "."'".$capacity."'". ", description = "."'".$description."'". " WHERE id = ".$id;
    mysqli_query($connection, $query);
    header("Location: ../index.php");
    ?>