<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from khachhang where maKhachHang = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $makh = $_POST["makh"];
           $tenkh = $_POST["tenkh"];
            $date = $_POST["date"];
            $sdt     = $_POST["sdt"];
            $email     = $_POST["email"];
            $pass = $_POST["pass"];
             $pass = md5( $pass);
            $diachi  = $_POST["diachi"];
            $gt = $_POST["gt"];
         
      	
      	$sql = "update khachhang set tenKhachHang='$tenkh',email='$email',gioiTinh='$gt',ngaySinh='$date',soDienThoai='$sdt',matKhau='$pass',diaChi='$diachi' where maKhachHang='$makh'"; 
            $query = mysqli_query($con, $sql);
      		 ?>
                        <script>
                              window.location="index.php?quanly=ql_khachhang";
                        </script>
                        <?php 
                 
      	
      }
 ?>
<br/>
	<form method="POST" action="index.php?sua=edit_khachhang">
             Ma khach hang:
      <input type="text" readonly name="makh" value="<?php echo $data["maKhachHang"] ?>" /><br/><br/>
            Ten khach hang:
      Ten khach hang:
      <input type="text" name="tenkh" value="<?php echo $data["tenKhachHang"] ?>"/><br/><br/>
      Gioi tinh:
      <input type="radio" name="gt" value="Nam" />Nam &emsp;
      <input type="radio" name="gt" value="Nu"/>Nu
      <br/><br/>
      Ngay sinh:
      <input type="date" name="date"  value="<?php echo $data["ngaySinh"] ?>"/><br/><br/>
      email khach hang:
      <input type="email" name="email" value="<?php echo $data["email"] ?>"/><br/><br/>
      Mat khau:
      <input type="text" name="pass" value="<?php echo $data["matKhau"] ?>"/><br/><br/>
      Dia chi:
      <input type="text" name="diachi" value="<?php echo $data["diaChi"] ?>"/><br/><br/>
      So dien thoai:
      <input type="number" name="sdt" value="<?php echo $data["soDienThoai"] ?>"/><br/><br/>
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
