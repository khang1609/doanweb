<?php require_once("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
      	$loaiMau = $_POST["loaiMau"];
      	$maMau = $_POST["maMau"];
      
      	
      	if( $maMau=="" || $loaiMau=="" )
      	{
      		echo "Vui lòng điền đầy đủ thông tin";
      	}
      	else
      	{
      		$sql = "INSERT INTO mau(maMau,loaiMau) VALUES ('$maMau','$loaiMau')";
      		$query = mysqli_query($con, $sql);
      		echo "Thêm thành công";
      	}
      }
 ?>
<br/>
	<form method="POST" action="index.php?them=add_mau">
             Ma mau:
             <input type="text" name="maMau"/>
            <br/> <br/>
		Tên mau:
		 <input type="text" name="loaiMau"/>
		<br/> <br/>
           
		
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
