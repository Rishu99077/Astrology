<?php
include("admin_header.php");

$query = "SELECT * FROM user_questions WHERE assign_id IS NULL";
$result = mysqli_query($conn ,$query);

$query1 = "SELECT name,id FROM guruji";
$result1 = mysqli_query($conn , $query1);

$query = "SELECT id FROM user_questions";
$result2 = mysqli_query($conn ,$query);

// $data1 = mysqli_fetch_assoc($result1);
?>
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
              <!--   <script type="text/javascript">  
                    $(document).ready(function()
                    {
                        $('#ass').click(function()
                        {
                          $("tr").css("background-color", "yellow");
                        });
                    });
                </script> -->
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
                <form action="assign_que.php" method="post">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Category</th>
                      <th>Date of Birth</th>
                      <th>Time Of Birth</th>
                      <th>Question</th>
                      <th>Question Id</th>
                      <th>Select guruji</th>
                      <th>Assign</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Category</th>
                      <th>Date of Birth</th>
                      <th>Time Of Birth</th>
                      <th>Question</th>
                      <th>Question Id</th>
                      <th>Select guruji</th>
                      <th>Assign</th>
                      <th>Time</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php
                    while($data = mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                      <td><?php echo $data['full_name']; ?></td>
                      <td><?php echo $data['email']; ?>></td>
                      <td><?php echo $data['mobile']; ?></td>
                      <td><?php echo $data['category']; ?></td>
                      <td><?php echo $data['date_of_birth']; ?></td>
                      <td><?php echo $data['time_of_birth']; ?></td>
                      <td id="success"><?php echo $data['question']; ?></td>  
                      <td>
                          <input type="checkbox" name="question_id" value="<?php echo $data['id'];?>"> <?php echo $data['id']; ?>
                      </td>
                      <td>
                       <?php
                          while($row = $result1->fetch_array())
                          {
                            $rows[] = $row;
                          }
                          foreach ($rows as $row) 
                          {
                          ?> 
                          <input type="checkbox" name="guru_id" value="<?php echo $row['id'];?>"> <?php echo $row['name']; ?><hr>
                          
                        <?php
                        }
                        ?>
                      </td>
                        <td><button class="btn btn-outline-success" id="ass" value="submit">Assign</button></td>
                      <td><?php echo $data['ask_date_time']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
                </form>
  
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

</body>