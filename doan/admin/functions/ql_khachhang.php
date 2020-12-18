
<div class="row">
	<div class="col-12">

		<?php
			$sql = "select * from khachhang";
			$query = mysqli_query($con, $sql);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from khachhang where maKhachHang =".$_GET['id_delete'];
				$query = mysqli_query($con, $sql);
				
				?>
				<script>
					window.location="index.php?quanly=ql_khachhang";
				</script>
				<?php 
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ID</td>
		 		<td>Ten kh</td>
		 		<td>Gioi tinh</td>
		 		<td>Ngay sinh</td>
		 		<td>Email</td>
		 		<td>Mat khau</td>
		 		<td>Dia chi</td>
		 		<td>sdt</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maKhachHang"].'</td>
		 				<td>'.$data["tenKhachHang"].'</td>
		 				<td>'.$data["email"].'</td>
		 				<td>'.$data["gioiTinh"].'</td>
		 				<td>'.$data["ngaySinh"].'</td>
		 				<td>'.$data["soDienThoai"].'</td>
		 				<td>'.$data["matKhau"].'</td>
		 				<td>'.$data["diaChi"].'</td>
		 				<td><a href="index.php?sua=edit_khachhang&id='.$data["maKhachHang"].'">Edit</a> | <a href="index.php?quanly=ql_khachhang&id_delete='.$data["maKhachHang"].'">Delete</a> </td>
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_khachhang"><button class="btnThem">Them khach hang</button></a>
	</div>
</div>