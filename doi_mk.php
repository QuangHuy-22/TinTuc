<?php
include 'masterpage_admin.php';
if (isset($_GET['iduser'])) {
  $idtk=$_GET['iduser'];
   $dt->select("SELECT * FROM dangnhap WHERE iduser=$idtk");
       while ($r=$dt->fetch()) {
        $tentk= $r['tentc'];
        $matkhau= $r['matkhau'];
      }
}
?>
  <h1 class="h2">Đổi Mật Khẩu:</h1></div>
  <div class="taikhoan">
    <form method="Post" name="form1">
      <table style="width: 20%;" align="center" >
        <tr>
          <td >
            <div class="form-group pl-3 pr-3">
            <label>Tên tài khoản:</label>
                        <input type="text" class="form-control" name="tentk" id="" value="<?php echo $tentk ?>" placeholder="Tên tài khoản" style="width: 280px;">
                        </div>
          </td>
      </tr>
      <tr>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Mật khẩu cũ:</label>
            <input type="password" name="matkhau" id="" class="form-control" value="<?php echo $matkhau ?>" placeholder="Mật Khẩu" style="width: 280px;">
              </div>
          </td>
      </tr>
      <tr>
          <td>
            <div class="form-group pl-3 pr-3">
            <label>Mật khẩu mới:</label>
            <input type="password" name="matkhaumoi" id="" class="form-control" value="" placeholder="Mật Khẩu" style="width: 280px;">
              </div>
          </td>
        </tr>
        <tr>
        	<td style="text-align: center;">
      <button class="btn btn-success m-2" style="width: 100px;margin-left: -20px;" name="luu"  data-dismiss="modal" >Lưu</button>
      <a href="add_account.php"><button class="btn btn-success m-2" style="width: 100px;">Hủy</button></a>
        	</td>
        </tr>
      </table>
    
    </form>
  </div>
  <?php
    if (isset($_POST['luu'])) {
      $tentk=$_POST['tentk'];
      $matkhau=$_POST['matkhau'];
      $matkhaumoi=$_POST['matkhaumoi'];
      $partten = "/^[A-Za-z0-9_\.]{5,32}$/";
      if(!preg_match($partten ,$matkhaumoi)){
                echo "<div class='alert alert-danger alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Cảnh báo </strong> Mật Khẩu mới không hợp lệ!!
                        </div>";
            } else {
          $dt->select("UPDATE dangnhap SET tentc='$tentk',matkhau='$matkhaumoi' WHERE iduser=$idtk");
      echo "Đổi mật khẩu thành công<br>";
                echo "<button class='btn btn-sm btn-outline-secondary'><a href='add_account.php'>Quay lại trang chủ</a></button>";
        }
    }
    echo '</div>';
 	// include'center.php';
 	// include 'right.php';
 	include 'bottom.php';
  ?>