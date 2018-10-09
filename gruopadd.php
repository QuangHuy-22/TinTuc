<?php 
 // include 'top.php';
session_start(); 
    include 'data.php';
    $dt=new database;
?>
 <div class="col-md-8">
<h4>Xử Lý Dữ Liệu Nhóm Tin</h4>
        		<table width="80%" align="center">
        			<tr>
        				<th>STT</th>
        				<th>ID NHÓM</th>
        				<th>TÊN NHÓM</th>
        				<th>Xử Lý</th>
        			</tr>
        		
 <?php 
 	$dt->select("SELECT * FROM theloai");
 	$i=0;
 	while ($r=$dt->fetch()) {
 		$i++;
 		$id=$r['idTheLoai'];
 		$tennhom=$r['tenloai'];
 		echo "<tr>";
 		echo "<td>$i</td><td>$id</td><td>$tennhom</td>";
 		echo "<td>";
 		echo "<a href='groupupdate.php?id=$id'>sửa | </a>";
 		echo "<a href='groupdelete.php?id=$id'>xóa</a>";
 		echo "</td>";
 		echo "</tr>";
 	}
 	echo "</table>";
 ?>
 <div>
 <h4>Thêm nhóm mới</h4>
 	<form method="post">
 		<table width="50%" align="center">
        				<tr>
        					<td>ID nhóm:</td>
        					<td><input type="text" name="id" size="25"></td>
        				</tr>
        				<tr>
        					<td>Tên Nhóm</td>
        					<td><input type="text" name="name" size="25"></td>
        				</tr>
        				<tr>
        					<td colspan="2" align="center"><input type="submit" name="add" value="Thêm nhóm"></td>
        				</tr>
        			</table>
 	</form>
 </div>
 <br>
 <?php 
 	if(isset($_POST['add'])){
 		if($dt->CheckNull($_POST['id']) && $dt->CheckNumber($_POST['id']) &&
 		$dt->CheckNull($_POST['name'])) {
 			$id=$_POST['id'];
 			$name=$_POST['name'];
 			$dt->command("INSERT INTO theloai(idTheLoai,tenloai) VALUES ('$id','$name')");
 			header('location:index.php');
 		}

 	}
 	echo "</div></div>";
 	// include 'center.php';
 	// include 'right.php';
 	include 'bottom.php';
 ?>