<?php
include("guruji_header.php");

// $query1 = "SELECT id FROM guruji";
// $result1 = mysqli_query($conn,$query1);
// $data1 = mysqli_fetch_assoc($result1);

$query = "SELECT * FROM user_questions WHERE assign_id = '$id'";
$result = mysqli_query($conn ,$query);
?>
<body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Customer's Questions</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Cust id</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Date of Birth</th>
                      <th>Time Of Birth</th>
                      <th>Question</th>
                      <th>Asked Time</th>
                      <th>Reply</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Cust id</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Date of Birth</th>
                      <th>Time Of Birth</th>
                      <th>Question</th> 
                      <th>Asked Time</th>
                      <th>Reply</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php
                    while($data = mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                      <td><?php echo $data['cust_id']; ?></td>
                      <td><?php echo $data['full_name']; ?></td>
                      <td><?php echo $data['category']; ?></td>
                      <td><?php echo $data['date_of_birth']; ?></td>
                      <td><?php echo $data['time_of_birth']; ?></td>
                      <td><?php echo $data['question']; ?></td>
                      <td><?php echo $data['ask_date_time']; ?></td>
                      <td>
                        <a href="guruji_answer.php?cust_id=<?php echo $data['cust_id']; ?>&que_id=<?php echo $data['id']; ?>" class="btn btn-outline-warning">Reply</a>
                      </td>
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