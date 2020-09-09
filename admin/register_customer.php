<?php
include("admin_header.php");

$query = "SELECT * FROM new_user";
$result = mysqli_query($conn ,$query);
?>
<body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Registered customer's</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form >
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Cust Id</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Mobile No.</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Cust Id</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Mobile No.</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
                        while($data = mysqli_fetch_assoc($result))
                        //   print_r($data);
                        // exit();
                        {
                        ?>
                        <tr>
                          <td><?php echo $data['id']; ?></td>
                          <td><?php echo $data['full_name']; ?></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><?php echo $data['gender']; ?></td>
                          <td><?php echo $data['mobile']; ?></td>
                          <!-- <td> -->
                             <!-- <a href="user_add.php?userid=<?php echo $data['id']; ?>" class="btn btn-success">Activate</a> -->
                          <!--   <a href="user_delete.php?userid=<?php echo $data['id']; ?>"id="delete" class="btn btn-danger">De-Activate</a> -->
                          <!-- </td> -->
                        </tr>
                        <?php
                      }
                      ?>
                      </tbody>
                    </table>
              </form>
              <script type="text/javascript">
                $('#delete').click( function() { 
                  alert('are you sure to delete this entry?'); 
                });
              </script>
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