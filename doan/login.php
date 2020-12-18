<?php session_start(); ?>
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
	<?php include("inculdes/connection.php") ?>
	<?php 
	error_reporting(0);
	if(isset($_POST['btn_login']))
		{
			$email = $_POST['email'];
			$password = $_POST['password']; 
			$password = md5($password); 
			
			if($email =="" && $password =="")
			{
				echo "Thiếu thống tin";
			}
			else
			{
				$sql = "select * from khachhang where email ='$email' and matKhau ='$password' ";
				$query = mysqli_query($con, $sql);
				$num=mysqli_num_rows($query);
				
				if($num == 0)
				{
					echo "Tài khoản hoặc mật khẩu không chính xác";
				}
				else
				{
					while($data["kh"] = mysqli_fetch_array($query))
					{
						$_SESSION["kh"]['maKhachHang'] = $data["kh"]['maKhachHang'];
						$_SESSION["kh"]['tenKhachHang'] = $data["kh"]['tenKhachHang'];
						$_SESSION["kh"]['gioiTinh']	= $data["kh"]['gioiTinh'];	
						$_SESSION["kh"]['ngaySinh']	= $data["kh"]['ngaySinh'];	
						$_SESSION["kh"]['email']	= $data["kh"]['email'];	
						$_SESSION["kh"]['diaChi']	= $data["kh"]['diaChi'];
						$_SESSION["kh"]['soDienThoai']	= $data["kh"]['soDienThoai'];			
					} 
					?>
					<script>
					    window.location="index.php";
					</script>
					<?php
				}
			}
		}

	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" action="login.php" method="POST">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
				

					<div class="container-login100-form-btn m-t-17">
						<button name="btn_login" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<br/>
					<p>Nếu chưa có tài khoản vui lòng <a href="dangky.php">Đăng ký</a></p>

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