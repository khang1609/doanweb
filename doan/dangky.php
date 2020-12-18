<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php require_once("inculdes/connection.php") ?>
	<?php error_reporting(0); 
	if(isset($_POST['btn_register']))
		{
			
			
         $tenkh = $_POST["tenkh"];
      	$date = $_POST["date"];
      	$sdt     = $_POST["sdt"];
      	$email     = $_POST["email"];
      	$pass = $_POST["pass"];
      	$pass = md5($pass);
      	$diachi  = $_POST["diachi"];
      	$gt = $_POST["gt"];
		
      
      
      	if($tenkh=="" || $pass=="" || $date=="" || $email=="" || $diachi==""||$sdt ==""||$gt=="")
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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="dangky.php">
					<span class="login100-form-title p-b-51">
						Register
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="tenkh" placeholder="Username">
						
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="email" name="email" placeholder="email" >
						
					</div>
					
					<div >Giới tính
						<input  type="radio" name="gt" value="1"/>Nam &emsp;
						<input  type="radio" name="gt" value="0"/>Nu

					</div>
					
					<div class="wrap-input100 validate-input m-b-16">Ngay sinh
						<input  type="date" name="date" />	
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "numberphone is required">
						<input class="input100" type="number" name="sdt" placeholder="sdt">
						
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Address is required">
						<input class="input100" type="text" name="diachi" placeholder="address">
						
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button name="btn_register" type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
					<br/>
					<p>Trở về <a href="login.php">Đăng nhập</a></p>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>