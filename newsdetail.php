<?php 
include 'top.php';
if(isset($_GET['id']) && isset($_GET['idTheLoai'])){
$id=$_GET['id'];
$idnhom=$_GET['idTheLoai'];
$dt->select("SELECT * FROM theloai WHERE idTheLoai='$idnhom'");
$rn=$dt->fetch();
?>
<div class="col-md-8">
<h4 style="margin-top: 3px;"><?php echo $rn['tenloai'] ?></h4>
<?php 
// if(isset($_SESSION['username'])){
// 	 	echo "<p align='right'>";
// 	 	echo "<a href='newsadd.php?idTheLoai=$idnhom'>Thêm mới bản tin</a>";
// 	 	echo " | <a href='newsupdate.php?id=$id'>Sửa bản tin</a>";
// 	 	echo " | <a href='newsdelete.php?id=$id'>Xóa bản tin</a>";
// 	 	echo "</p>";
// 	 }
$dt->select("SELECT * FROM tinbai WHERE id='$id'");
$r= $dt->fetch();
echo "<h5>";
echo $r['TieuDe'];
echo "</h5>";
echo "<h6>";
echo $r['TrichDan'];
echo "</h6>";
// $dt->select("SELECT * FROM tinbai WHERE id != '$id' AND idTheLoai='$idnhom' ORDER BY id DESC LIMIT 3");
// 	while ($row = $dt->fetch()) {
// 		echo "<ul><li>";
// 		// echo "<img src='anh-quangcao12.png' float:left>";
// 		$idtin= $row['id'];
// 		$tieude= $row['TieuDe'];
// 		$idtheloai=$row['idTheLoai'];
// 		echo "<a href='newsdetail.php?idTheLoai=$idtheloai&&id=$idtin'>$tieude</a><br><br>";
// 	echo "</li></ul>";
// 	}
$image=$r['anhtrichdan'];
if($r['anhtrichdan'] != null)
	// echo "<img src='$image' width='600'>";
	echo "<p align=justify>";
	echo $r['NoiDung'];
	echo "</p>";
	echo"</div>";
	include 'quangcao.php';
	}
	?>
	<div class="container mt-4">
<h2>Bình Luận:</h2>
<hr>
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment" placeholder="Mời bạn để lại ý kiến bình luận của minh ở đây."></textarea>
<button type="submit" class="btn btn-primary mt-2"  data-toggle="modal" data-target="#myModal">Gửi</button>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	
	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title">Điền Thông Tin</h4>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	
	<!-- Modal body -->
	<div class="modal-body">
		<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="usr">
		</div>
		<div class="form-group">
			<label for="pwd">email:</label>
			<input type="email" class="form-control" id="email">
		</div>
	</div>
	
	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary data-dismiss="modal">Gửi</button>
	</div>
	
	</div>
</div>
</div>
</div>
	<?php
include 'bottom.php';
?>