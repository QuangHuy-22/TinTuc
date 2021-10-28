<?php 
    include 'masterpage_admin.php';
?>

                <h1 class="h2">Danh sách thể loại</h1></div>
                <div class="addnews">
        		<table width="80%" align="center">
        			<tr>
        				<th>STT</th>
        				<th>ID USER</th>
        				<th>USER NAME</th>
        				<th>PASSWORD</th>
        			</tr>
        		
 <?php 
 	$dt->select("SELECT * FROM dangnhap");
 	$i=0;
 	while ($r=$dt->fetch()) {
 		$i++;
 		$id=$r['iduser'];
 		$username=$r['tentc'];
        $password=$r['matkhau'];
 		echo "<tr>";
 		echo "<td>$i</td><td>$id</td><td>$username</td><td>$password</td>";
 		echo "<td>";
 		echo "<a href='doi_mk.php?iduser=$id'>Đổi mật khẩu | </a>";
 		echo "<a href='delete_account.php?iduser=$id'>xóa</a>";
 		echo "</td>";
 		echo "</tr>";
 	}
 	echo "</table><hr>";
 ?>
 <div>
 <h4>Thêm Tài khoản</h4>
 	<form method="post">
 		<table width="50%" align="center">
        				<tr>
        					<td>USERNAME</td>
        					<td><input type="text" name="name" size="25"></td>
        				</tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td><input type="password" name="password" size="25"></td>
                        </tr>
                           <tr>
                            <td>NHẬP LẠI PASSWORD</td>
                            <td><input type="password" name="password1" size="25"></td>
                        </tr>
        				<tr>
        					<td colspan="2" align="center"><input type="submit" name="add" value="Thêm"></td>
        				</tr>
        			</table>
 	</form>
 </div>
 <br>
 <?php 
 	      if(isset($_POST['add'])){
 		// if($dt->CheckNull($_POST['name']) && $dt->CheckNull($_POST['password']) && $dt->CheckNull($_POST['password1'])) {
 			//  $id=$_POST['id'];
 			$user=$_POST['name'];
            $partten = "/^[A-Za-z0-9_\.]{5,32}$/";
            $pass=$_POST['password'];
            $pass1=$_POST['password1'];
            if($user=="" || $pass=="" || $pass1==""){
                echo "<div class='alert alert-danger alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Cảnh báo </strong> các trường không được bỏ trống!!
                        </div>";
            } else if(!preg_match($partten ,$user)){
                echo "<div class='alert alert-danger alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Cảnh báo </strong> Tài khoản không hợp lệ!!
                        </div>";
            }else if(!preg_match($partten ,$pass)){
                echo "<div class='alert alert-danger alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Cảnh báo </strong> Mật Khẩu không hợp lệ!!
                        </div>";
            }else{
            if($pass1 != $pass){
                echo "<div class='alert alert-danger alert-dismissible'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong>Cảnh báo </strong> Mật khẩu không khớp!!
                        </div>";
                    }else{
                        $sql= "SELECT * FROM dangnhap WHERE tentc ='$user'";
                        // $kt =$dt->fetch();
                        $dt->select($sql);
                        if($dt->fetch()){
                            echo "Tài khoản đã tồn tại!!";
                        } else {
 			$dt->command("INSERT INTO dangnhap(tentc,matkhau) VALUES ('$user','$pass')");
                         echo "Thêm thành công<br>";
                echo "<button class='btn btn-sm btn-outline-secondary'><a href='add_account.php'>Quay lại</a></button>";
 			// header('location:index.php');
 		}

 	}
 }
}
 	echo "</div> </div>
      </div>
    </main>
</div>";
 	// include 'center.php';
 	// include 'right.php';
 	include 'bottom.php';
 ?>

