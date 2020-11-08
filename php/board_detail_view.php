<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>borad_page_main</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
      $(function() {
        $("#comment_alter_btn").on("click", function() {
        $("#alter_text").replaceWith("<input type='text'>");
        });
    });
  </script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php
  include_once "nav_left.php";
  ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <?php
          if($_SESSION['id'] == null){
          ?>
          <a href="login.php"><span>로그인</span></a>
          <?php
          }else{
          ?>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" style="margin-right:5px;">
                <span style="color:black;"><?=$_SESSION['name']?>님</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">    
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  로그아웃
                </a>
              </div>
            </li>

          </ul>
        <?php
          }
        ?>    
        </nav>
        <!-- End of Topbar -->
          
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">글 보기</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th colspan="2" style="text-align:center">게시글 보기</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once "connect.php";
                    $get_bo_no = $_GET['bo_no'];

                    $sql1 = "
                        SELECT 
                            bo_no,
                            bo_title,
                            bo_text,
                            bo_regdate,
                            bo_editdate,
                            user_name
                        FROM TB_user AS u, TB_board AS b
                        WHERE u.user_no = b.bo_regno
                        AND bo_no = {$get_bo_no};
                    ";

                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_fetch_array($result1)
                    ?>
                        <tr>
                            <td>글 번호</td>
                            <td><?=$row1['bo_no']?></td>
                        </tr>
                        <tr>    
                            <td>글 제목</td>
                            <td><?=$row1['bo_title']?></td>
                        </tr>
                        <tr>
                            <td>글 내용</td>
                            <td><?=$row1['bo_text']?></td>
                        </tr>    
                        <tr>
                            <td>글 작성일</td>
                            <td><?=$row1['bo_regdate']?></td>
                        </tr>
                        <tr>  
                            <td>글 수정일</td>  
                            <td><?=$row1['bo_editdate']?></td>
                        </tr>
                        <tr>
                            <td>글 작성자</td>    
                            <td><?=$row1['user_name']?></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center"><a href="index.php">메인으로</a></td>
                        </tr>    
                </tbody>
                </table>
            </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">댓글달기</h6>
                </div>
                <div class="card-body"> 
                    <form class="user" method="POST" action="comment_ok.php">
                    <div class="form-group">
                    <textarea class="form-control" id="co_text" placeholder="댓글 내용을 입력해주세요" name="co_text" rows="5" cols="50"></textarea>    
                    </div>
                    <input type="hidden" value="<?=$get_bo_no?>" name="co_bono" id="co_bono">
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="저장" id="comment_btn">
                </form>
                </div>
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">댓글리스트</h6>
                </div>
                <div class="card-body"> 
                    <?php
                        include_once "comment_view.php"
                    ?>
                </div>
            </div>
        </div>
        </div>

        
        <!-- /.container-fluid -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; NamNaHyun Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">로그아웃 버튼을 선택하셨습니까?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">로그아웃 버튼을 눌러 로그아웃을 해주새요</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
          <a class="btn btn-primary" href="logout.php">로그아웃</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
