<?php
include("guruji_header.php");

$query = "SELECT * FROM guruji WHERE id= '$id'";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);

?>
      <!-- main content start -->
      <main class="content">
        <div class="container-fluid p-0">

          <h1 class="h3 mb-3 text-center">Profile</h1>

          <div class="row">
            <div class="col-md-6 offset-md-4 col-xl-4">
              <div class="card mb-3">
                <div class="card-header">
                  <h5 class="card-title mb-0">Profile Details</h5>
                </div>
                <div class="card-body text-center">
                     <img src="img/avatars/avatar_1.jpg" height="128" width="128">
                  <div class="mt-4">
                      <div class="form-group">
                        <div><h4>Your Id :<?php echo $data['guru_name']; ?></h4></div>
                      </div>

                       <div class="form-group">
                         <div><h4>Password :<?php echo $data['guru_pass']; ?></h4></div>
                      </div>
                  <div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            

            <!-- <div class="col-md-8 col-xl-9">
              <div class="card">
                <div class="card-header">

                  <h5 class="card-title mb-0">Activities</h5>
                </div>
                <div class="card-body h-100">

                  <div class="media">
                    
                    <div class="media-body">
                      <table class="table table-responsive">
                        <tr>
                          <th>Category</th>
                          <th>Questions</th>
                          <th>Asking time</th>
                        </tr>
                          <?php
                          while($row = $result->fetch_array())
                          {
                            $rows[] = $row;
                          }
                          foreach ($rows as $row) 
                          {
                          ?>    
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php
                          }
                        ?>
                        </tr>
                      </table>
                    </div>
                  </div>
                  
                  <hr />
                  <div class="media">
      
                  <hr />
                  <a href="#" class="btn btn-primary btn-block">Load more</a>
                  </div>
              </div> -->
            </div>
          </div>

        </div>
      </main>
      <!-- Main content End -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

