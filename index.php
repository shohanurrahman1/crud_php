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
                $id         = $row['id'];
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
                    <td>
                      <div class="action-btn">
                        <ul>
                          <li>
                            <a href="update.php?id=<?php echo $id;?>"><i class="fa-regular fa-pen-to-square edit"></i></a>
                          </li>
                          <li>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-trash-can trush"></i></a>
                          </li>
                        </ul>
                      </div>

                      <!-- Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure?? To Delete <i class="fa-regular fa-face-frown"></i><br> <?php echo $name; ?>!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-btn">
          <button type="button" class="btn btn-danger me-3">Save changes</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>          
        </div>
      </div>
    </div>
  </div>
</div>
                      <!-- Modal End -->

                    </td>
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