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
      <h3><em><strong>Shop Name :</strong> <?php echo $row['name']?></em></h3>
      <ul>
        <li><em><strong>Stuff :</strong></em><?php echo $row['stuff']?></li>
        <li><em><strong>Home Delivery facility :</strong></em><?php echo $row['delivery'] ?></li>
        <li><em><strong>Customer Capacity : </strong></em><?php echo $row['capacity']?></li>
      </ul>
      <p>
        <em><strong>Description : </strong></em> <?php echo $row['description']?>
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
