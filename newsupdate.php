<?php 
include 'masterpage_admin.php';
$dt=new database;
if(isset($_GET['id'])){
$id=$_GET['id'];
$dt->select("SELECT * FROM tinbai WHERE id='$id'");
$r=$dt->fetch();
$idnhom=$r['idTheLoai'];

?>
		<h1 class="h2">Sửa bản tin</h1></div>
			<div id="ndcontent">
				<form method="post">
					<h4>Tiêu đề:</h4>
					<input type="text" name="tieude" size="150" value="<?php echo $r['TieuDe'] ?>">
					<h4>Trích Dẫn:</h4>
					<textarea name="trichdan" cols="150" rows="7"><?php echo $r['TrichDan'] ?></textarea>
					<h4>ảnh trích dẫn</h4>
					<input type="text" name="anhtrichdan" size="150" value="<?php echo $r['anhtrichdan'] ?>">
					<h4>Nội Dung</h4>
					<textarea name="noidung" id="cknoidung"><?php echo $r['NoiDung'] ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'cknoidung', {
						filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
						filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
						filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
						filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
						filebrowserWindowWidth : '1000',
						filebrowserWindowHeight : '700'
					});

					</script><br>
					<input type="submit" name="update" value="Cập nhật">
				</form>
<?php 
if(isset($_POST['update'])){
	$tieude=$_POST['tieude'];
	$trichdan=$_POST['trichdan'];
	$anhtrichdan=$_POST['anhtrichdan'];
	$noidung=$_POST['noidung'];
	$dt->command("UPDATE tinbai SET TieuDe='$tieude',TrichDan='$trichdan',anhtrichdan='$anhtrichdan',NoiDung='$noidung' WHERE id='$id'");
	// 	
	echo "sửa thành công<br>";
			echo "<button class='btn btn-sm btn-outline-secondary'><a href='trangchuAdmin.php'>Quay lại trang chủ</a></button>";
					// header('location:trangchuAdmin.php');
}
}
echo "</div></div></div></main></div>";
// include 'right.php';
include 'bottom.php';
?>
		
	