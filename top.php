<?php 
// session_start(); 
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <link type="text/css" href="style.css" rel="stylesheet"> -->
<link type="text/css" rel="stylesheet" href="dinh-dang.css" />
<style type="text/css">
    *{
margin:0;
padding:0;
}
.container-fluid{
background: linear-gradient(to right, #ffff , #78b43d );
margin:0;
padding:0;
margin-bottom: 5px;
}
.navbar{
height: 42px;
padding-top: 10px;
background-color: #78b43d;
}
/*.navbar .navbar-brand img{
width: 170px;
height: 50px;
margin: auto;
}*/
html{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
margin: auto;
}
.navbar-brand img{
margin-left: 20px;
}
/*định dạng thẻ menu*/
.btn-group a{
width: 120px;
height: 40px;
line-height: 30px;
color: white;
margin-top: 6px;
}
.btn-group a:hover{
background-color: #F5A60E;
color:#FFFFFF;
}
.btn-group{
margin-left: 60px;
color: #0B9628;
height: 40px;
margin-bottom: 15px;
}
/*định dạng thẻ div top*/
.col-md-12{
text-align: center;
height: 40px;

/*background-color: #0B9628;*/
}
.form-inline{
/*margin: auto;*/
float: right;
margin-left: 110px;
margin-top: 35px;
padding-bottom: 3px;   
}
.btn-light{
color: #000;
}
/*định dạng nội dung chính*/
/*#noidung{

}
/*nội dung bên trái*/
.datetime {
float: left;
width: 268px;
height: 27px;
font: normal 11px/27px Tahoma;
color: #999;
}
.col-md-6 .new{
height: 200px;
}
.col-md-10 .tonghop{
height: 300px;
}
.col-md-6 .new nav ol{
padding: 0.25rem;
margin-bottom: 0rem;
}
.col-md-6 .new .breadcrumb{
width: 100px;
border: 1px solid #ccc;
margin-top: 5px;
margin-bottom: 5px;
}
.col-md-6 .new .breadcrumb:hover{
background-color: #2BB62B;
}
.col-md-6{
float: left;
width: 480px;
/*    border: 1px solid #cccccc;*/
background:#FFF;
}
.new{
clear: left;
}
.col-md-6 h4{
margin:1px; 
}
.col-md-6 .new img{
border: 1px solid #cccccc;
padding: 1px;
float: left;
margin-right: 5px;
}
.col-md-10 .tonghop img{
border: 1px solid #cccccc;
padding: 1px;
float: left;
margin-right: 5px;
}
.new a{
color:#009;
}

.new a{
text-decoration:none;
}
.new a:hover{
color:#be1212;
}
.new a:active{
color:#F00; 
}
.new h4{
color:#Fff;
display:block;
}
.col-md-6 h4{
background:#78b43d;
text-align:center;
color:#fff;
margin-bottom:5px;
}
.new h5{
padding:5px;
padding-bottom:1px;
}
.new ul {

padding:10px 10px 10px 20px;
}
.new .lienquan h5{
clear:left;
}
.new .lienquan a{
color:#00F;
}
.new .lienquan a:hover{
color:#F00;
}
.new .lienquan a:active{
color:#F0F;
}
.pagination{
    margin-left: 100px;
}
/*nội dung giữa*/
.col-md-4 .center{
background:#78b43d; 
}
.col-md-4{
float: left;
background:#fff;
/*border-right: 1px solid #ccc;*/
}
.col-md-4 .event  ul li a h6{
    display: block;
-webkit-margin-before: 1.33em;
-webkit-margin-after: 1.33em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
font-weight: bold;
}
.col-md-4 .event  ul li{
list-style:none;
/*list-style-type:square;*/
    
}
.col-md-4 .event{
padding:2px 0px 0px 10px;   
}
.col-md-4 .center h4{
text-align:center;
color:#fff; 
/*padding-top: 5px;*/
margin: 1px;
}
.col-md-4 .event  ul li a{
text-decoration:none;
color:#09F; 
}
.col-md-4 .event  ul li a:hover{
color:#F30;
text-decoration:underline;
}
.col-md-4 .event  ul li a:active{
color:#C09;
}
/*nội dung phải*/
.col-md-2{
float:left;
}
.col-md-2 a{
/*border: 1px solid #cccccc;*/
float: left;
margin-bottom: 5px;     
}
/*định dang xem  nhiều*/
.container .row .col-md-3{
float: left;

}
.container h6{
display: block;
}
.container .row .col-md-3 img{
float: left;
margin-right: 5px;
padding-top: 2px;
}
/*định dạng thẻ login*/
.login ul li{
display: inline;
list-style-type: none;
text-decoration: none;
margin-right: 10px;
}
.login{
text-align: right;
margin-bottom:0px;
}

/*định dạng thẻ button*/
#footer{
height: 60px;
background: #999999;
text-align: center;
width: 100%;

}
#button a{
text-decoration:none;
}
/*.btn-group a img{
border: 1px solid red;
}*/
.btn-group a:first-child{
width: 60px;
}
.login ul li .btn{
background-color: #FFFFFF;
color: #007bff;
}
.login ul li .btn:hover{
text-decoration: underline;
color:blue;
}
.col-md-8 ul{
margin-bottom: 0px;
} 
.box_center_top
{
border-bottom:3px solid #78b43d;
margin-bottom: 5px;
}
.box_center_top_l
{
    background:#78b43d;
float:left;
height:32px;
color: #fff;
}
.box_center_top_r
{
height:4px;
width:0;
float:left;
border-left:32px solid #78b43d;
border-top:32px solid transparent;
}
/* .theLoaiTop{
    transition: background-position 0.5s;
}
.theLoaiTop:hover{
    background-position: 0 0;
  cursor: pointer;
} */
</style>
</head>
<body>
<div class="container-fluid" >
    <div class="row">
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
                        <a href="login.php">Đăng nhập</a>   
                <!--  <?php 
                    if(isset($_SESSION['username'])){
                    echo "<a href='logout.php'>Thoát  </a> ";
                    echo " | ";
                    echo "<a href='gruopadd.php'>  Thêm nhóm tin</a>";
                } else{
                    echo "<a href='login.php'>Đăng Nhập</a> ";
            }
                ?> -->
                </form>
    </div>
        <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="timkiem" required>
            <button type="submit" class="btn btn-light" name="submit">
            <span class="glyphicon glyphicon-search"></span> Search
            </button>
        </form>
        </nav>
    </div>
</div>
</div>
<div class="container">

<div class="row">