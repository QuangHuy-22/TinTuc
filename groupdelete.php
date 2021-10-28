<?php 
     //session_start(); 
    include 'data.php';
    $dt=new database;
    if(isset($_GET['id'])){
    	$id=$_GET['id'];
    	$dt->command("DELETE FROM theloai WHERE idTheLoai='$id' ");
    	header('location:gruopadd.php');
    	//echo "Xóa thành công<br>";
    }
?>