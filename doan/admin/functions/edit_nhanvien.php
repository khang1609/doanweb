<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from nhanvien where maNhanVien = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maNhanVien = $_POST["maNhanVien"];
      	$tennv = $_POST["tennv"];
      	$pass = $_POST["pass"];
            $pass = md5($pass);
      	$per = $_POST["per"];
      	
      	
      		$sql = "UPDATE nhanvien set tenNhanVien='$tennv',matKhau='$pass', quyen='$per' where maNhanVien = '$maNhanVien'";
      		$query = mysqli_query($con, $sql);
      		  ?>
                        <script>
                              window.location="index.php?quanly=ql_nhanvien";
                        </script>
                        <?php 
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_nhanvien">
            Ma nhan vien:
             <input type="text" readonly name="maNhanVien" value="<?php echo $data["maNhanVien"] ?>" />
            <br/> <br/>
		Tên nhan vien:
		 <input type="text" name="tennv" value="<?php echo $data["tenNhanVien"] ?>" />
		<br/> <br/>
            mat khau:
             <input type="text" name="pass" value="<?php echo $data["matKhau"] ?>"/>
            <br/> <br/>
	Quyen:
	<input type="number" name="per" value="<?php echo $data["quyen"] ?>"/><br/><br/>
		<br/><br/>
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
