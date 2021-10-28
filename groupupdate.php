<?php 
 include 'masterpage_admin.php';
 if(isset($_GET['id'])){
 	$id=$_GET['id'];
 	$dt->select("SELECT * FROM theloai WHERE idTheLoai='$id'");
 	$r=$dt->fetch();

?>
<h1 class="h2">sửa nhóm tin: <?php echo $r['tenloai'] ?></h1></div>
	<div class="theloai">
        			<form method="post">
        				Tên nhóm : <input type="text"  name="tennhom" value="<?php echo $r['tenloai']; ?>">
        				<input type="submit" name="update" value="OK">
        			</form>
        			<br>
 <?php 
 	if(isset($_POST['update'])){
 		$tennhom=$_POST['tennhom'];
 		$dt->command("UPDATE theloai SET tenloai='$tennhom' WHERE idTheLoai=$id");
 		echo "sửa thành công<br>";
                echo "<button class='btn btn-sm btn-outline-secondary'><a href='gruopadd.php'>Quay lại trang chủ</a></button>";
 		// header('location:groupupdate.php');
 	}
 }
 echo "</div></div></div>
  </main></div>";
 	// include'center.php';
 	// include 'right.php';
 	include 'bottom.php';
 ?>
   
