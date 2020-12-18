
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang quản lý cửa hàng</title>
	<link rel="stylesheet" href="./css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<!----------menu------>
	<section class="box__menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<ul class="list__menu">
						
						
						<li>menuuuuuuuuuuu</li>
						
						
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			 
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			    	<li><h4><i><a class="nav-link" style="color:red"><?php echo $_SESSION["nv"]["tenNhanVien"]; ?></a></i></h4></li>
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php?quanly=ql_khachhang">Quản lí khách hàng</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?quanly=ql_sanpham">Quản lí sản phẩm</a>
			      </li>
			     <li class="nav-item">
			        <a class="nav-link" href="index.php?quanly=ql_nhanvien">Quản lí nhân viên</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?quanly=ql_mau">Quản lí màu</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="index.php?quanly=ql_loai">Quản lí loại</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="index.php?quanly=ql_size">Quản lí size</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="logout.php">Logout</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			
		</div>
	</section>
	<br/><br/>
