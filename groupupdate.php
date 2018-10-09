<?php 
 include 'top.php';
 if(isset($_GET['id'])){
 	$id=$_GET['id'];
 	$dt->select("SELECT * FROM theloai WHERE idTheLoai='$id'");
 	$r=$dt->fetch();

?>
<div class="col-md-6" >
<h4>sửa nhóm tin: <?php echo $r['tenloai'] ?></h4>
        			<form method="post">
        				Tên nhóm : <input type="text"  name="tennhom" value="<?php echo $r['tenloai']; ?>">
        				<input type="submit" name="update" value="OK">
        			</form>
        			<br>
 <?php 
 	if(isset($_POST['update'])){
 		$tennhom=$_POST['tennhom'];
 		$dt->command("UPDATE theloai SET tenloai='$tennhom' WHERE idTheLoai=$id");
 		header('location:groupupdate.php');
 	}
 }
 echo "</div>";
 	// include'center.php';
 	// include 'right.php';
 	include 'bottom.php';
 ?>