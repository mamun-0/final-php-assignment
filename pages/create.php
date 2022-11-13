<!-- Head -->
<?php include '../partials/head.php';?>
    <!-- Nav -->
    <?php include '../partials/navbar.php';?>

    <form action="/mamun/post_action/create.php" method="POST" class="create-form">
      <div>
        <label for="name">Shop Name : </label>
        <br />
        <input type="text" id="name" name="name" required />
      </div>
      <div>
        <label for="stuff">Stuff : </label>
        <br />
        <input type="number" id="stuff" name="stuff" required />
      </div>
      <div>
        <label for="delivery">Home delivery facility : </label>
        <br />
        <input type="text" id="delivery" name="delivery" required />
      </div>
      <div>
        <label for="capacity">Customer capacity :</label>
        <br />
        <input type="number" name="capacity" id="capacity" required />
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
        ></textarea>
      </div>
      <button>Submit</button>
    </form>
    <a href="/mamun/index.php" class="back-to-home">Back to home</a>
  </body>
</html>
