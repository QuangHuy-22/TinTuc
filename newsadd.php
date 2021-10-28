<?php 
include 'masterpage_admin.php';
if(isset($_GET['idTheLoai'])){
	$idnhom=$_GET['idTheLoai'];
	$dt->select("SELECT * FROM theloai WHERE idTheLoai='$idnhom'");
	$rows = $dt->fetch();
?>

		<h1 class="h2">Thêm bản tin</h1></div>
		<div class="addnews">
	<form method="post">
		<h4>thể loại:</h4>
		<select name="idtheloai">
			<?php 
		$dt->select('SELECT * FROM theloai');
	while($r = $dt->fetch()){
			$idnhom = $r['idTheLoai'];
			$tennhom = $r['tenloai'];
			echo "<option value='$idnhom'>$tennhom</option>";
		}
		?>
		</select>
			<h4>Tiêu đề:</h4>
			<input type="text" name="tieude" size="70">
			<h4>Trích Dẫn:</h4>
			<textarea name="trichdan" cols="90" rows="7"></textarea>
			<h4>ảnh trích dẫn</h4>
			<input type="text" name="anhtrichdan" size="70">
			<h4>Nội Dung</h4>
			<textarea name="noidung" id="cknoidung"></textarea>
					<script type="text/javascript">
						CKEDITOR.replace( 'cknoidung', {
			filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '/ckfindeckfinder.html?Type=Images',
			filebrowserUploadUrl: '/ckfinder/core/connectophp/connector.php?command=QuickUpload&pe=Files',
			filebrowserImageUploadUrl: '/ckfinder/corconnector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserWindowWidth : '1000',
			filebrowserWindowHeight : '700'
					});

					</script><br>
					<input type="submit" name="insert" value="Thêm">
				</form>
					</div><br>
<?php 
	if(isset($_POST['insert'])){
	$idtheloai=$_POST['idtheloai'];
		$tieude=$_POST['tieude'];
		$trichdan=$_POST['trichdan'];
		$anhtrichdan=$_POST['anhtrichdan'];
		$noidung=$_POST['noidung'];
		$dt->command("INSERT INTO tinbai(idTheLoai,TieuDe,TrichDan,anhtrichdan,NoiDung) VALUES ('$idtheloai','$tieude','$trichdan','$anhtrichdan','$noidung')");
	echo "thêm thành công<br>";
			echo "<button class='btn btn-sm btn-outline-secondary'><a href='trangchuAdmin.php'>Quay lại trang chủ</a></button>";
		// header('location:trangchuAdmin.php');
	}


}
echo "</div></div>
	</div>
</main>
</div>";
// include 'right.php';
include 'bottom.php';
?>
