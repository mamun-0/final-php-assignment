<!-- Database -->
<?php include '../db/db.php';?>
<?php
    
    $name = $_POST['name'];
    $stuff = $_POST['stuff'];
    $delivery = $_POST['delivery'];
    $capacity = $_POST['capacity'];
    $description = $_POST['description'];

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