<?php 
     //session_start(); 
    include 'data.php';
    $dt=new database;
    if(isset($_GET['iduser'])){
    	$id=$_GET['iduser'];
    	$dt->command("DELETE FROM dangnhap WHERE iduser='$id' ");
    	header('location:add_account.php');
    	echo "xóa thành công!!";
    }
?>