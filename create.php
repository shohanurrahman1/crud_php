<?php include "header.php"; ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <h2 class="py-5 text-center">Register Students Information</h2>

        <!-- Form Start -->
        <form action="" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Full Name</label>
            <input type="text" name="fname" class="form-control" required autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Phone No.</label>
            <input type="tel" name="phone" class="form-control" required autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Present Address</label>
            <textarea name="address" class="form-control" id="" cols="30" rows="5" required autocomplete="off"></textarea>
          </div>

          <div class="d-grid gap-2">
            <input type="submit" name="register" class="btn btn-success d-block" value="Register Students">
          </div>
        </form>
        <!-- Form End -->

        <?php  
          if (isset($_POST['register'])) {
            $fname      = $_POST['fname'];
            $email      = $_POST['email'];
            $phone      = $_POST['phone'];
            $address    = $_POST['address'];

            $create = "INSERT INTO students (name, email, phone, address) VALUES('$fname', '$email', '$phone', '$address')";
            $addQuery = mysqli_query($db, $create);

            if ($addQuery) {
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