<?php 
error_reporting(0);
include 'top.php';
if(isset($_GET['id'])){
$id= $_GET['id'];
$dt->select("SELECT tenloai FROM theloai WHERE idTheLoai ='$id'");
$row= $dt->fetch();

?>
<div class="col-md-6">
<?php
	echo "<div id='todaydate' class='datetime'>";
		echo date('Y-m-d');
		echo "</div><br clear='left'>";
?>
	<div class="box_center_top">
		<div class="box_center_top_l">
			<h5 style="margin: 5px;"><?php echo $row['tenloai'] ?></h5>     
		</div>
		<div class="box_center_top_r"></div>
		<div class="clearfix"></div>
	</div>   
<?php 
		// if(isset($_SESSION['username'])){
		// 	echo "<p align='right'>";
		// 	echo "<a href='newsadd.php?idTheLoai=$id'>Thêm mới bản tin</a>";
		// 	echo "</p>";
		// }

		$soluong=5;
		$dt->select("SELECT COUNT(id) AS tong FROM tinbai WHERE idTheLoai='$id'");
		$row = $dt->fetch();
		$tong=$row['tong'];
if($tong > 0){
		if($tong > $soluong){
		$sotrang= ceil($tong/$soluong);
		}
		if(isset($_GET['page']) && $dt->CheckNumber($_GET['page']) && (int)$_GET['page'] >=1 && (int)$_GET['page'] <= $sotrang){
		$page = $_GET['page'];
		} else{
		$page= 1;
		}
		$start = ($page-1)* $soluong;

	$dt->select("SELECT * FROM tinbai WHERE idTheLoai='$id' ORDER BY id DESC LIMIT $start,$soluong");
	while($r=$dt->fetch()){
		$idtin=$r['id'];
		$tieude=$r['TieuDe'];
		$trichdan=$r['TrichDan'];
		$idnhom=$r['idTheLoai'];
		$urlanh= $r['anhtrichdan'];
		echo "<div class='new' style='height:200'>";


		echo "<a href='newsdetail.php?idTheLoai=$idnhom&id=$id'><img src='$urlanh' width='140px' height='140px'/></a>";
		echo "<a href='newsdetail.php?idTheLoai=$idnhom&id=$idtin'><h5>$tieude <span class='badge badge-danger'>New</span></h5></a>";
		echo "$trichdan"."<a href='newsdetail.php?idTheLoai=$idnhom&id=$idtin'><br><p style='float:right'>Xem chi tiết >></p></a>";

		echo "</div>";
		echo "<hr>";
		}
		echo "<ul class='pagination'>";
			if($page > 1){
				$prev = $page - 1;
				echo "<li class='page-item'><a class='page-link' href='news.php?id=$id&page=$prev'>Trước</a></li>";
			}
				for($i=1;$i< $sotrang;$i++){
					if($page != $i){
						echo "<li class='page-item'><a class='page-link' href='news.php?id=$id&page=$i'>$i</a></li>";
					}else{
						echo "<li class='page-item active'><a class='page-link' href='news.php?id=$id&page=$i'>$i</a></li>";
					}
				}
			if($page < $sotrang){
				$next = $page + 1;
				echo "<li class='page-item'><a class='page-link' href='news.php?id=$id&page=$next'>Sau</a></li>";
			}

		echo "</ul>";

		}else{
		echo "không có bản tin nào trong mục này!!!";
		}
		echo "</div>";
}
include 'center.php';
include 'right.php';
// include 'TinXemNhieu.php';
include 'TinTongHop.php';
include 'bottom.php';
?>