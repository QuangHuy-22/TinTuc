<!DOCTYPE html>
<?php 
  //session_start(); 
  include 'data.php';
  $dt=new database;

?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Quản lý tin tức </title>
  <script type="text/javascript" src="https://cdn.ckeditor.com/4.10.1/full-all/ckeditor.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <style type="text/css">
        .chartjs-size-monitor{
        position: absolute;
        left: 0px;
        top: 0px;
        right: 0px;
        bottom: 0px;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1;
        }
        .chartjs-size-monitor-expand{
          position:absolute;
          left:0;
          top:0;
          right:0;
          bottom:0;
          overflow:hidden;
          pointer-events:none;
          visibility:hidden;
          z-index:-1;
        }
        .chartjs-size-monitor-shrink{
          position:absolute;
          left:0;
          top:0;
          right:0;
          bottom:0;
          overflow:hidden;
          pointer-events:none;
          visibility:hidden;
          z-index:-1;
        }
      </style>
</head>

<body cz-shortcut-listen="true">
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="trangchuAdmin.php">Quản Lý Tin Tức</a>
    <input class="form-control form-control-dark mr-sm-2 " type="text" placeholder="Search" aria-label="Search">
    <button type="submit" class="btn btn-light" name="submit">
              <span class="glyphicon glyphicon-search"></span> Search
            </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="login.php">Thoát</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky position:relative sticky-top">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
              <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 bg-dark">
            <span style="color: #fff;">Quản lý tin bài</span>
          </h5>
                <li class="nav-item">
                <?php
                  $dt->select('SELECT * FROM tinbai ORDER BY id');
                  $r= $dt->fetch();
                  $idnhom = $r['idTheLoai'];
              echo "<a class='nav-link' href='newsadd.php?idTheLoai=$idnhom'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus-circle'><circle cx='12' cy='12' r='10'></circle><line x1='12' y1='8' x2='12' y2='16'></line><line x1='8' y1='12' x2='16' y2='12'></line></svg>
                Thêm bản  tin
                  </a>";
                  ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trangchuAdmin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
                Sửa tin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trangchuAdmin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                xóa tin
              </a>
            </li>
          </ul>

          <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 bg-dark">
            <span style="color: #fff;">Quản lý Thể loại</span>
          <!--   <a class="d-flex align-items-center text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a> -->
          </h5>
          <ul class="nav flex-column mb-2">
              <li class="nav-item">
              <?php
                  $dt->select('SELECT * FROM tinbai ORDER BY id');
                  $r= $dt->fetch();
                  $id = $r['idTheLoai'];
              echo "<a class='nav-link' href='gruopadd.php?idTheLoai=$id'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus-circle'><circle cx='12' cy='12' r='10'></circle><line x1='12' y1='8' x2='12' y2='16'></line><line x1='8' y1='12' x2='16' y2='12'></line></svg>
                Thêm thể loại
                  </a>";
                  ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gruopadd.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                Sửa thể loại
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gruopadd.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                xóa thể loại
              </a>
            </li>
          </ul>
          <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 bg-dark">
            <span style="color: #fff;">Quản lý Tài khoản</span>
          <!--   <a class="d-flex align-items-center text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a> -->
          </h5>
          <ul class="nav flex-column mb-2">
              <li class="nav-item">
              <?php
                  $dt->select('SELECT * FROM dangnhap ORDER BY iduser');
                  $r= $dt->fetch();
                  $id = $r['iduser'];
              echo "<a class='nav-link' href='add_account.php?iduser=$id'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus-circle'><circle cx='12' cy='12' r='10'></circle><line x1='12' y1='8' x2='12' y2='16'></line><line x1='8' y1='12' x2='16' y2='12'></line></svg>
                Thêm Tài Khoản
                  </a>";
                  ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_account.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                Đổi Mật Khẩu
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_account.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                Xóa Tài Khoản
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class="nowmol"></div></div><div class="chartjs-size-monitor-shrink" ><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">

      


  