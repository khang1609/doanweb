<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from mau where maMau = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maMau = $_POST["maMau"];
      	$loaiMau = $_POST["loaiMau"];
      	
      	
      	
      		$sql = "UPDATE mau set loaiMau='$loaiMau'  where maMau = '$maMau'";
      		$query = mysqli_query($con, $sql);
      		 ?>
                        <script>
                              window.location="index.php?quanly=ql_mau";
                        </script>
                        <?php 
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_mau">
            Ma mau:
             <input type="text" readonly name="maMau" value="<?php echo $data["maMau"] ?>" />
            <br/> <br/>
		Tên mau:
		 <input type="text" name="loaiMau" value="<?php echo $data["loaiMau"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
