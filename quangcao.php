<div class="col-md-4" style="background-color:#fff; padding:0px; ">
      <marquee style="background: linear-gradient(to right, #A9A9A9 , #2F4F4F );border-radius: 25px;"><reg style="display: inline-block; font: bold 4.5em/1.5 Bebas, sans-serif; color: #5CA17C;font-size: 25px; text-transform: uppercase; background-image: linear-gradient(to bottom, #26BDA6, #FF9F65, #DED37E, #26BDA6); background-size: auto 250%; transition: background-position 0.5s; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-position: 0 100%;">Tin hay</reg></marquee>
      <?php
      if(isset($_GET['id']) && isset($_GET['idTheLoai'])){
        $id=$_GET['id'];
$idnhom=$_GET['idTheLoai'];
$dt->select("SELECT * FROM theloai WHERE idTheLoai='$idnhom'");
$rn=$dt->fetch();
$dt->select("SELECT * FROM tinbai WHERE id != '$id' AND idTheLoai='$idnhom' ORDER BY id DESC LIMIT 5");
	while ($row = $dt->fetch()) {
		echo "<ul ><li style='list-style-type: none;'>";
		// echo "<img src='anh-quangcao12.png' float:left>";
		$idtin= $row['id'];
		$tieude= $row['TieuDe'];
		$idtheloai=$row['idTheLoai'];
		echo "<a style='font-weight: bold;text-align: center; font-size: 15px;padding-left:5px;' href='newsdetail.php?idTheLoai=$idtheloai&&id=$idtin'> _$tieude</a><br><br>";
	echo "</li></ul>";
	}
      }
      ?>
        <!-- <a href="http://www.remminhdang.com/?gclid=EAIaIQobChMI46TF-b2Q2gIVUyAqCh3wrQqkEAEYASAAEgLwWvD_BwE"> <img src="image/16587398622601277156.jpg" width="350" height="335"></a> -->
        <!--  <div class="quangcao1 position:relative sticky-top">
          <a href="https://bds.rongbay.com/p1609/flc-eco-charm-da-nang.html?utm_source=backup&utm_medium=FLC_Eco_backup&utm_content=[admdomain]&utm_campaign=FLC_Eco_Charm" ><img src="image/468x90_1521087659.png" width="350" height="200"></a></div> -->
    </div>
  </div>
</div>