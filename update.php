<?php include "header.php"; ?>
<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h2 class="pb-5 text-center">Update Students Information</h2>

        <?php  
          if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $query = "SELECT * FROM students WHERE id='$s_id'";
            $read = mysqli_query($db, $query);

            while ($row = mysqli_fetch_assoc($read)) {
              $name       = $row['name'];
              $email      = $row['email'];
              $phone      = $row['phone'];
              $address    = $row['address'];
              ?>
                <!-- Form Start -->
                <form action="" method="POST">
                  <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $name; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Phone No.</label>
                    <input type="tel" name="phone" class="form-control" value="<?php echo $phone; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Present Address</label>
                    <textarea name="address" class="form-control" id="" cols="30" rows="3"><?php echo $address; ?></textarea>
                  </div>
                  <div class="d-grid gap-2">
                    <input type="submit" name="register" class="btn btn-success d-block" value="Update Student">            
                  </div>
                  <div class="mb-3 pt-2">
                    <a href="index.php">Go Manage Page</a>
                  </div>
                </form>
                <!-- Form End -->
            <?php }
          }
        ?>

        

        <?php  
          if (isset($_POST['register'])) {
            $fname      = $_POST['fname'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $address    = $_POST['address'];

            $update = "UPDATE students SET name='$fname', email='$email', phone='$phone', address='$address' WHERE id='$s_id'";
            $updateQuery = mysqli_query($db, $update);

            if ($updateQuery) {
              header("Location: index.php");
            }
            else {
              echo "Something Went Wrong";
            }
          }
        ?>

      </div>
    </div>
  </div>
</section>
<?php include "footer.php"; ?>