
			<!-- </div> -->
			<div class="col-md-4">
			<!-- <a href="http://fica.vn/"><img src="image/suafica_1503162639.gif" width="350"></a> -->
			<div class="center" style="background:#fff"><marquee style="background: linear-gradient(to right, #A9A9A9 , #2F4F4F );border-radius: 25px;"><h4 style="display: inline-block; font: bold 4.5em/1.5 Bebas, sans-serif; color: #5CA17C;font-size: 30px; text-transform: uppercase; background-image: linear-gradient(to bottom, #26BDA6, #FF9F65, #DED37E, #26BDA6); background-size: auto 250%; transition: background-position 0.5s; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-position: 0 100%;">Tin Tức - Sự Kiện</h4></marquee></div>
		<div class="event">
				<ul>
					<?php
						$dt->select('SELECT * FROM tinbai ORDER BY id LIMIT 10');
						while ($r=$dt->fetch()) {
							$id=$r['id'];
							$idtheloai=$r['idTheLoai'];
							$name= $r['TieuDe'];
							echo "<li><a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><h6>$name</h6></a></li>";
						}
						?>
				</ul>
		</div>
			<!-- <div class="quangcao"> -->
			<h5>Quảng cáo bởi Six News</h5><hr>
			<div class="quangcao1 position:relative">
			<a href="https://www.facebook.com/huypham2211"> <img src="image/16587398622601277156.jpg" width="360" height="335"></a>
			<a href="https://www.facebook.com/huypham2211"><img src="image/468x90_1521087659.png" width="360" height="200"></a>
		</div>
		</div>