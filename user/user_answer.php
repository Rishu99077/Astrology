<?php
include("user_header.php");

if(isset($_SESSION['id']))
{

   $id= $_SESSION['id'];

} 

$query = "SELECT * FROM reply WHERE cust_id ='$id'";

$result = mysqli_query($conn, $query);
// print_r($query);
// exit();

?>
<body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Question details</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                   <?php
                    while($data = mysqli_fetch_assoc($result))
                    {
                    ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Date of birth</th>
                      <th>Time of birth</th>
                      <th>your question</th>
                      <th>Asked Time</th>
                      <th>Pandit Answer</th>
                      <th>Reply Time</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Date of birth</th>
                      <th>Time of birth</th>
                      <th>your question</th>
                      <th>Asked Time</th>
                      <th>Pandit Answer</th>
                      <th>Reply Time</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td><?php echo $data['customer_name']; ?></td>
                      <td><?php echo $data['category']; ?></td>
                      <td><?php echo $data['date_of_birth']; ?></td>
                      <td><?php echo $data['time_of_birth']; ?></td>
                      <td><?php echo $data['question']; ?></td>
                      <td><?php echo $data['ask_date_time']; ?></td>
                      <td><?php echo $data['answer']; ?></td>
                      <td><?php echo $data['rply_date_time']; ?></td>
 
                    </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->
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

</body>