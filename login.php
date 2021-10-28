<?php 
// include 'top.php';
//session_start(); 
  include 'data.php';
  $dt=new database;
?>
<html>
<head runat="server">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <title>Six News</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link type="text/css" rel="stylesheet" href="Dinhdang.css"/>
        <link type="text/css" rel="stylesheet" href="Dinhdang1.css" />
        <script type="text/javascript" src="https://cdn.ckeditor.com/4.10.1/full-all/ckeditor.js"></script>
      <style type="text/css">
      .container .mb-5{
        margin-top: 120px;
      }
      .m-auto{
        position: relative;
        background-color: #E2DC9D;
        
      }
      .text-center img{
        position: absolute;
        right:147px;
        top:-40px;
  }
  .container-fluid{
    background: linear-gradient(to right, #ffff , #78b43d );
  }
</style>
<body>
    <div class="container-fluid">
    <div class="container" style="display:flex;">
            <a  name="dautrang" class="navbar-brand" href="index.php"><img src="image/logo_sixnews.png" height="120px" width="300px"></a>
            <a href="https://www.facebook.com/huypham2211"><img src="image/banner-soundcloud-covers.jpg" width="780px" height="150px"></a>
        </div>
          <div class="col-md-12 ">
              <nav class="navbar navbar-expand-lg navbar-light">
                  <button class="navbar-toggler" type="" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="btn-group btn-group-justified">
              <form id="home" runat="server">
                  <a href="index.php" class="btn"><img src="image/home.png" width="50px" height="40px" style="padding-bottom: 5px; padding-right: 3px;"></a>
                      <?php
                          $dt->select('SELECT * FROM theloai ORDER BY idTheLoai ASC');
                          while ($r=$dt->fetch()) {
                              $id=$r['idTheLoai'];
                              $name= $r['tenloai'];
                              echo "<a href='news.php?id=$id' class='btn' style='font-size: 20px;'>$name</a>";
                          }
                        ?>
                </form>
      </div>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button type="button" class="btn btn-light">
              <span class="glyphicon glyphicon-search"></span> Search
            </button>
          </form>
          </nav>
      </div>
  </div>
</div>
<div class="container mb-5">
<div class="m-auto pb-5" style="width: 400px;border:2px solid #B0AFAF; height: 450px;">
<div class="text-center">
<img src="images/img_avatar2.png" class="rounded-circle mt-5 mb-5 text-center" width="100px" height="100px">
<br><br>
<h6 class="mb-5 mt-5 pt-5">Đăng nhập vào tài khoản của bạn</h6>
</div>
          <form method="post">
            <div class="form-group pl-5 pr-5">
            <label class="font-weight-bold">Tài Khoản</label><br>
                        <input class="form-control" type="text" name="user" placeholder="Enter Username" size="25">
            </div>
            <div class="form-group pl-5 pr-5">
                              <label class="font-weight-bold">Mật Khẩu</label><br>
                <input class="form-control" type="password" name="pass" placeholder="Enter Password" size="25">
                </div>
                              <input class="btn btn-success ml-5 mt-4" type="submit" name="login" value="Đăng nhập">	
          </form>
        </div>

<?php 
if(isset($_POST['login'])){
              if($dt->CheckNull($_POST['user']) && $dt->CheckNull($_POST['pass'])){
                        $user = addslashes($_POST['user']);
                        $pass = addslashes($_POST['pass']);
              // $pass = md5($pass);
                        $dt->select("SELECT * FROM dangnhap WHERE tentc='$user' AND matkhau='$pass'");
                      if($dt->fetch()){    
                      $_SESSION['username'] =$user;
                      header('location:trangchuAdmin.php');
                      exit();
              } else{
                      echo "<div class='alert alert-danger alert-dismissible'>
                          <button type='button' class='close' data-dismiss='alert'>&times;</button>
                          <strong>Cảnh báo </strong> tài khoản hoặc mật khẩu không đúng, vui lòng đăng nhập lại.!!
      </div>";
              } 
      } else {
              echo "<div class='alert alert-danger alert-dismissible'>
                          <button type='button' class='close' data-dismiss='alert'>&times;</button>
                          <strong>Cảnh báo </strong>không được để trống tên đăng nhập và mật khẩu.!!
      </div>";
      }
}


// include 'right.php';
include 'bottom.php';
?>