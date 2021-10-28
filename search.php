<?php  
include 'top.php';
$search=$_POST['timkiem'];
?>
<div class="col-md-6" >
<h4 title="Tin tức mới nhất">Kết quả tìm kiếm</h4>


<?php
$sql = "SELECT * FROM tinbai WHERE TieuDe LIKE '%$search%' ";
$dt->select($sql);
	while ($r = $dt->fetch()) {
		$id=$r['id'];
		$idnhom = $r['idTheLoai'];
		$tieude = $r['TieuDe'];
		$trichdan= $r['TrichDan'];
		$urlanh= $r['anhtrichdan'];
		echo "<div class='new'>";
		echo " <a href='newsdetail.php?idTheLoai=$idnhom&id=$id'><img src='$urlanh' width='140px' height='140px'/></a>";
		echo "<a href='newsdetail.php?idTheLoai=$idnhom&id=$id'><h5>$tieude <span class='badge badge-danger'>New</span></h5></a>";
		echo "$trichdan";
		echo "<div class='lienquan'>";
		echo "</div></div>";
		echo "<hr>";
	}
echo "</div>";

include 'center.php';
include 'right.php';
include 'bottom.php';
?>