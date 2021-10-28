<!DOCTYPE html>
<?php 
  include 'masterpage_admin.php';
  // session_start(); 
  // include 'data.php';
  // $dt=new database;

?>

          <h1 class="h2">Danh sách bản tin</h1>
          <?php 
            ?>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <?php
                  $dt->select('SELECT * FROM tinbai ORDER BY id');
                  $r= $dt->fetch();
                  $idnhom = $r['idTheLoai'];
                  echo " <button class='btn btn-sm btn-outline-secondary'><a href='newsadd.php?idTheLoai=$idnhom'>Thêm mới bản tin</a></button>";
                ?>
            </div>
          </div>
        </div>

        <!--  <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1271" height="536" style="display: block; width: 1271px; height: 536px;"></canvas>
-->
        <div class="table-responsive" style="text-align: center;">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>id</th>
                <th>id thể loại</th>
                <th>Tiêu đề</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php 
        $dt->select('SELECT * FROM tinbai ORDER BY id');
      while($r = $dt->fetch()){
      $id = $r['id'];
      $idnhom = $r['idTheLoai'];
      $tieude = $r['TieuDe'];
      $trichdan= $r['TrichDan'];
      $urlanh= $r['anhtrichdan'];
      $noidung=$r['NoiDung'];
      echo "<tr><td>$id</td>";
      echo "<td>$idnhom</td>";
      echo "<td>$tieude</td>";
      echo "<td><button class='btn btn-sm btn-outline-secondary'><a href='newsupdate.php?id=$id'>Sửa</a></button>
              <button class='btn btn-sm btn-outline-secondary'><a href='newsdelete.php?id=$id'>Xóa</a></button>
              </td>";
}
echo "</div>";
// include 'center.php';
// include 'right.php';
// include 'bottom.php';
?>

          
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./Dashboard Template for Bootstrap_files/jquery-3.3.1.slim.min.js.tải xuống" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="./Dashboard Template for Bootstrap_files/popper.min.js.tải xuống"></script>
  <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js.tải xuống"></script>

  <!-- Icons -->
  <script src="./Dashboard Template for Bootstrap_files/feather.min.js.tải xuống"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="./Dashboard Template for Bootstrap_files/Chart.min.js.tải xuống"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>


</body></html>