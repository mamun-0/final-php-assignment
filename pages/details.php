<!-- DB -->
<?php include '../db/db.php';?>
<!-- Head -->
<?php include '../partials/head.php';?>
    <!-- Nav -->
    <?php include '../partials/navbar.php';?>

    <?php
    $s_id = mysqli_real_escape_string($connection, $_POST['s_id']);
    $query = "SELECT * FROM shop WHERE id = $s_id;";
                $shop_s = mysqli_query($connection, $query);
                $result = mysqli_num_rows($shop_s);
                if($result > 0){
                   while($row = mysqli_fetch_assoc($shop_s)){?>

    <div class="details-shop-card">
      <div class="img-area"></div>
      <h3><em>Shop Name : <?php echo $row['name']?></em></h3>
      <ul>
        <li><em>Stuff :</em><?php echo $row['stuff']?></li>
        <li><em>Home Delivery facility :</em><?php echo $row['delivery'] ?></li>
        <li><em>Customer Capacity : </em><?php echo $row['capacity']?></li>
      </ul>
      <p>
        <em>Description : </em> <?php echo $row['description']?>
      </p>
      <form action="/mamun/pages/update.php" method="POST">
        <input class="hidden-input" type="text" name="s_id" value="<?php echo $row['id'];?>">
        <button>Update</button>
      </form>
      <form action="/mamun/post_action/delete.php" method = "POST">
        <input class="hidden-input" type="text" name="delete_id" value="<?php echo $row['id'];?>">
        <button>Delete</button>
      </form>
    </div>
    <?php
      }
        }
    ?>
  </body>
</html>
