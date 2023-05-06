<?php include "db.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD | home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    
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

          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>