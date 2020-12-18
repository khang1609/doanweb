
<?php
	$sql = "select * from sanpham where maSanPham = '$_GET[id]'";
	$query = mysqli_query($con,$sql);
	while($data = mysqli_fetch_array($query))
	{
		echo '
		<div class="col-lg-5 col-sm-12">
		<img src="images/'.$data["hinh"].'"  width="400" height="500" />
	</div>
	<div class="col-lg-5 col-sm-12">

		<h4>Tên Sản Phẩm:&nbsp;'.$data["tenSanPham"].'</h4>
		<br/>
		<p>Mô Tả :&nbsp;'.$data["moTa"].'</p>
		<br/>
		<p>Giá:&nbsp;'.$data["gia"].'</p>
		<br/>
		<p>Mã size :&nbsp;'.$data["maSize"].'</p>
		<br/>
		<p>Số Lượng:&nbsp;'.$data["soLuong"].'</p>
	</div>
		  ';
	} 
?>
