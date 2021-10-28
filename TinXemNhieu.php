  <div class = "container">
    <div class="row">
      <div class = "col-md-10">
          <div class="box_center_top">
          <div class="box_center_top_l">
              <h5 style="margin: 5px;">Tin Xem Nhiều Nhất</h5>     
          </div>
          <div class="box_center_top_r"></div>
          <div class="clearfix"></div>
      </div>
                    <?php
                      $dt->select('SELECT * FROM tinbai ORDER BY luottruycap DESC LIMIT 8');
                      while ($r=$dt->fetch()) {
                        $id=$r['id'];
                        $idtheloai=$r['idTheLoai'];
                        $name= $r['TieuDe'];
                        $anhtrichdan= $r['anhtrichdan'];
                        echo "<div class='col-md-3'><a href='newsdetail.php?idTheLoai=$idtheloai&&id=$id'><img src='$anhtrichdan' width ='100px' height='100px'><h6>$name</h6></a></div>";
                      }
                      ?>
          </div>
        </div>

      </div>
