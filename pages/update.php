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

    <form action="/mamun/post_action/update.php" method="POST" class="create-form">
    <div>
        <label for="name">Shop ID :</label>
        <br />
        <input type="text" id="name" name="id" required value="<?php echo $row['id']?>"/>
      </div>
    <div>
        <label for="name">Shop Name :</label>
        <br />
        <input type="text" id="name" name="name" required value="<?php echo $row['name']?>" />
      </div>
      <div>
        <label for="stuff">Stuff : </label>
        <br />
        <input type="number" id="stuff" name="stuff" required value="<?php echo $row['stuff']?>" />
      </div>
      <div>
        <label for="delivery">Home delivery facility : </label>
        <br />
        <input
          type="text"
          id="delivery"
          name="delivery"
          required
          value="<?php echo $row['delivery']?>"
        />
      </div>
      <div>
        <label for="capacity">Customer capacity :</label>
        <br />
        <input type="number" name="capacity" id="capacity" required value="<?php echo $row['capacity']?>" />
      </div>
      <div>
        <label for="description">Description : </label>
        <br />
        <textarea
          name="description"
          id="description"
          cols="30"
          rows="5"
          required
        ><?php echo $row['description']?></textarea
        >
      </div>
      <button>Submit</button>
    </form>
    <?php 
        }
      }
              
    ?>
    <a href="/mamun/index.php" class="back-to-home">Back to home</a>
  </body>
</html>
