<?php
    include '../db/db.php';

    $delete_id = $_POST['delete_id'];
    $query = "DELETE FROM shop WHERE `shop`.`id` = $delete_id";
    mysqli_query($connection, $query);

    header("Location: ../index.php");
    ?>