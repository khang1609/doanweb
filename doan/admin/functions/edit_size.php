<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from size where maSize = '$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $maSize = $_POST["maSize"];
      	$loaiSize = $_POST["loaiSize"];
      	
      	
      	
      		$sql = "UPDATE size set loaiSize='$loaiSize'  where maSize = '$maSize'";
      		$query = mysqli_query($con, $sql);
      		 ?>
                        <script>
                              window.location="index.php?quanly=ql_size";
                        </script>
                        <?php 
      	
      }
 ?>
<br/>
	<form method="POSt" action="index.php?sua=edit_size">
            Ma size:
             <input type="text" readonly name="maSize" value="<?php echo $data["maSize"] ?>" />
            <br/> <br/>
		Tên size:
		 <input type="text" name="loaiSize" value="<?php echo $data["loaiSize"] ?>" />
		<br/> <br/>
           
	
		
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
