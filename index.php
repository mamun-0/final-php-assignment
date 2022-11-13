<!-- DB -->
<?php include './db/db.php';?>
<!-- Head -->
<?php include './partials/head.php';?>
    <!-- Nav -->
    <?php include './partials/navbar.php';?>
    <div class="hero-section">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum, fuga
        fugit minus iusto blanditiis suscipit id fugiat dignissimos, distinctio
      </p>
      <span><a href="">Order Now!</a></span>
    </div>
    <h2 class="shop-head">Shops</h2>
    <div class="card-container">
      <?php 
      $query = "SELECT * FROM shop;";
                $shop_s = mysqli_query($connection, $query);
                $result = mysqli_num_rows($shop_s);
                if($result > 0){
                   while($row = mysqli_fetch_assoc($shop_s)){?>
      <div class="shop-card">
        <h3>Shop Name : <?php echo $row['name'];?></h3>
        <ul>
          <li>Stuff : <?php echo $row['stuff'];?></li>
          <li>Delivery facility :<?php echo $row['delivery'];?></li>
          <li>Customer Capacity :<?php echo $row['capacity'];?></li>
        </ul>
        <p><?php echo $row['description']?></p>
        <form action="/mamun/pages/details.php" method="POST">
          <input class="hidden-input" type="text" name="s_id" value="<?php echo $row['id'];?>">
          <button>Details</button>
        </form>
      </div>
      <?php
    }
  };?>
    </div>
  </body>
</html>
