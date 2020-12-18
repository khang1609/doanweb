<?php require_once("includes/connection.php");

	 if(isset($_POST["btnThem"]))
      {
      	$tenkh = $_POST["tenkh"];
      	$date = $_POST["date"];
      	$sdt     = $_POST["sdt"];
      	$email     = $_POST["email"];
      	$pass = $_POST["pass"];
            $pass = md5($pass);
      	$diachi  = $_POST["diachi"];
      	$gt = $_POST["gt"];
		
      
      
      	if($tenkh=="" || $pass=="" || $date=="" || $email=="" || $diachi=="")
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO khachhang(maKhachHang,tenKhachHang,email,gioiTinh,ngaySinh,soDienThoai,matKhau,diaChi) values (null, '$tenkh', '$email','$gt','$date','$sdt','$pass','$diachi')";
      		$query = mysqli_query($con, $sql);
      		echo 'Thêm thành công';
      	
      	}
      		
      } 
?>


<br/>
<form action="index.php?them=add_khachhang" method="POST" >
	Ten khach hang:
	<input type="text" name="tenkh" /><br/><br/>
	Gioi tinh:
	<input type="radio" name="gt" value="Nam" />Nam &emsp;
	<input type="radio" name="gt" value="Nu"/>Nu
	<br/><br/>
	Ngay sinh:
	<input type="date" name="date" /><br/><br/>
	email khach hang:
	<input type="email" name="email" /><br/><br/>
	Mat khau:
	<input type="text" name="pass" /><br/><br/>
	Dia chi:
	<input type="text" name="diachi" /><br/><br/>
	So dien thoai:
	<input type="number" name="sdt" /><br/><br/>
	<input style="width:200px;height: 50px;font-size: 18px; border:0;background-color: lightgrey;" type="submit" name="btnThem" value="Add" /><br/><br/>

	
</form>