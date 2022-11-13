<!-- Database -->
<?php include '../db/db.php';?>
<?php
    
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $stuff = mysqli_real_escape_string($connection, $_POST['stuff']);
    $delivery = mysqli_real_escape_string($connection, $_POST['delivery']);
    $capacity = mysqli_real_escape_string($connection, $_POST['capacity']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    $query = "INSERT INTO shop (name,stuff,delivery,capacity, description) VALUES (?, ?, ?, ?,?);";

    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "<h2>SQL Error!</h2>";
    }else{
        mysqli_stmt_bind_param($stmt, "sssss", $name, $stuff, $delivery, $capacity,$description);
        mysqli_stmt_execute($stmt);
        header("Location: /mamun/index.php");
    }
    ?>