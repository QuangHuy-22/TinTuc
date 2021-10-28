<?php 
    session_start(); 
    include 'data.php';
    $dt=new database;
    if(isset($_GET['id'])){
    	$id=$_GET['id'];
    	$dt->command("DELETE FROM tinbai WHERE id='$id'");
    	header('location:trangchuAdmin.php');
    }
?>