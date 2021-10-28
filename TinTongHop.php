  <div class = "container">
    <div class="row">
      <div class = "col-md-10">
          <div class="box_center_top">
          <div class="box_center_top_l">
              <h5 style="margin: 5px;">Tin Tổng hợp</h5>     
          </div>
          <div class="box_center_top_r"></div>
          <div class="clearfix"></div>
      </div>
                    <?php
                      $dt->select('SELECT * FROM tinbai ORDER BY RAND() LIMIT 6');
                      while ($r=$dt->fetch()) {
                        $id=$r['id'];
                        $idtheloai=$r['idTheLoai'];
                        $name= $r['TieuDe'];
                        $noidung=$r['TrichDan'];
                        $anhtrichdan= $r['anhtrichdan'];
                        echo "<div class='tonghop col-md-6' style='height:220px;'>";
                        echo "<a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><img src='$anhtrichdan' width ='100px' height='100px'></a>";
                        echo "<a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><h5>$name <span class='badge badge-warning'>Hot</span></h5></a>";
                        echo "$noidung"."<a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><br><p style='float:right'>Xem chi tiết >></p></a></div>";
                      }
                      ?>
                      <hr>
          </div>
        </div>
      </div>