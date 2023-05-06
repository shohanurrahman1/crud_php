<?php include "header.php"; ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="py-5 text-center">Manage All Students</h2>

        <!-- Table Start -->
        <table class="table table-striped table-hover table-bordered">
          <thead class="table-dark">
            <tr>
              <th scope="col">#Sl</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email Address</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Present Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php  
              $query = "SELECT * FROM students";
              $read = mysqli_query($db, $query);
              $i = 0;

              while ($row = mysqli_fetch_assoc($read)) {
                $name       = $row['name'];
                $email      = $row['email'];
                $phone      = $row['phone'];
                $address    = $row['address'];
                $i++;
                ?>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $address; ?></td>
                  </tr>
             <?php }            
            ?>            
          </tbody>
        </table>
        <!-- Table End -->

        <div class="d-grid gap-2">
          <a href="create.php" class="btn btn-primary text-white">Add New Students</a>
        </div>

      </div>
    </div>
  </div>
</section>
<?php include "footer.php"; ?>