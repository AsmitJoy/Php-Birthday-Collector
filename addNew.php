<?php

include 'layouts/header.php';

include 'layouts/side&topbar.php';

  
?>
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Add New</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Type your name" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-5 mb-4  mx-auto">

          <!-- Material form login -->
            <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
              <strong>Add New</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

              <!-- Form -->
              <form method="POST" class="text-center" style="color: #757575;" action="#">

                <!-- Name -->
                <div class="md-form">
                  <input type="text" id="materialLoginFormEmail" name="name" class="form-control">
                  <label for="materialLoginFormEmail">Name</label>
                </div>

                <!-- Date of birth -->
                <div class="md-form">
                  <input type="date" name="bday" id="materialLoginFormPassword" value="<?php echo date("Y-m-d") ?>" class="form-control">
                  <label for="materialLoginFormPassword">Date of Birth</label>
                </div>

                

                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Confirm!</button>


              </form>
              <!-- Form -->
              <?php
              include 'db.php';
                if(isset($_POST['submit'])){
                  $name= $_POST['name'];
                  $bday= $_POST['bday'];

                    
                   
                  if(!empty($name) && !empty($bday)){

                    $sql = "insert into records(name, bday) values('$name','$bday')";
                    if ($conn->query($sql) === TRUE) {
                      echo '<script>location.href="viewall.php"</script>';
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                  
                  $conn->close();
                    
                }
                else {
                    echo '<script>alert("you have to fulfil name and bday")</script>';
                }
                }
              
              ?>
            </div>

</div>
<!-- Material form login -->

        </div>
        <!--Grid column-->

        
      </div>
      <!--Grid row-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    </div>
  </main>
  <!--Main layout-->

<?php
  include 'layouts/footer.php';
  ?>