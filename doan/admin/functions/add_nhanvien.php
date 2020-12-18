<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$tennv = $_POST["tennv"];
      	$pass = $_POST["pass"];
            $pass = md5($pass);
      	$per = $_POST["per"];
      	
      	if( $tennv=="" || $pass=="" || $per=="")
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO nhanvien(maNhanVien,tenNhanVien,matKhau,quyen) values (null,'$tennv', '$pass', '$per')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POSt" action="index.php?them=add_nhanvien">
		Tên nhan vien:
		 <input type="text" name="tennv"/>
		<br/> <br/>
            mat khau:
             <input type="text" name="pass"/>
            <br/> <br/>
	Quyen:
	<input type="number" name="per" /><br/><br/>
		<br/><br/>
		
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
