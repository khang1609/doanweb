
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from nhanvien";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				if($_GET["id"]==$_SESSION["nv"]["maNhanVien"])
				{
					echo "Không thể xóa tài khoản đang đăng nhập";
				}
				else
				{
				$sql = "delete from nhanvien where maNhanVien =".$_GET['id_delete'];
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_nhanvien";
				</script>
				<?php 
			}
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>maNhanVien</td>
		 		<td>tenNhanVien</td>
		 		<td>Mat khau</td>
		 		<td>Quyen</td>
		 		
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maNhanVien"].'</td>
		 				<td>'.$data["tenNhanVien"].'</td>
		 				<td>'.$data["matKhau"].'</td>
		 				<td>'.$data["quyen"].'</td>
		 				
		 			
		 				<td><a href="index.php?sua=edit_nhanvien&id='.$data["maNhanVien"].'">Edit</a> | <a href="index.php?quanly=ql_nhanvien&id_delete='.$data["maNhanVien"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_nhanvien"><button class="btnThem">Them nhan vien</button></a>
	</div>
</div>