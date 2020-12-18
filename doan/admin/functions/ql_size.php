
<div class="row">
	<div class="col-12">
		<?php
			$sql1 = "select * from size";
			$query1 = mysqli_query($con, $sql1);
			if(isset($_GET['id_delete']))
			{
				$sql = "delete from size where maSize ='$_GET[id_delete]'";
				$query = mysqli_query($con, $sql);
				?>
				<script>
					window.location="index.php?quanly=ql_size";
				</script>
				<?php 
			}
		 ?>
		 <table border="1" style="text-align: center;width: 90%; margin-left:5%">
		 	<tr>
		 		<td>ma size</td>
		 		<td>ten size</td>
		 		<td></td>
		 	</tr>
		 	<?php
		 		while($data = mysqli_fetch_array($query1))
		 		{
		 			echo '<tr>
		 				<td>'.$data["maSize"].'</td>
		 				<td>'.$data["loaiSize"].'</td>
		 				<td><a href="index.php?sua=edit_size&id='.$data["maSize"].'">Edit</a> | <a href="index.php?quanly=ql_size&id_delete='.$data["maSize"].'">Delete</a> </td>
		 			
		 			</tr>';
		 		} 
		 	 ?>
		 	
		 </table>
		 <br/><br/>
		 <a href="index.php?them=add_size"><button class="btnThem">Them size</button></a>
	</div>
</div>