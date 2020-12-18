<?php require_once("includes/connection.php");
if(!isset($_GET["id"]))
{
      $_GET["id"] = "undefine";
}
      $sql = "select * from sanpham where maSanPham ='$_GET[id]'";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      if(isset($_POST["btnSua"]))
      {
            $masp = $_POST["masp"];
      	$tensp = $_POST["tensp"];
      	$gia = $_POST["gia"];
            $ggia = $_POST["giamGia"];
      	$loai = $_POST["maloai"];
            $size = $_POST["masize"];
            $mau = $_POST["mamau"];
            $img = $_FILES["hinh"]["name"];
            $path = '../images/'.basename($_FILES["hinh"]["name"]);
            if($img != null)
                  {
                        $tmp_img = $_FILES["hinh"]["tmp_name"];
                        $img = $_FILES['hinh']['name'];
                        move_uploaded_file($tmp_img, $path);
                        $sql = "UPDATE sanpham SET hinh ='$img' where maSanPham='$masp' ";
                        $query = mysqli_query($con, $sql);
                        echo "Thêm thành công";
                  }
      		$sql = "UPDATE sanpham set tenSanPham='$tensp',maLoai='$loai',giamGia ='$ggia',gia='$gia',maSize ='$size',maMau= '$mau' where maSanPham='$masp'";
      		$query = mysqli_query($con, $sql);
                  ?>
                        <script>
                              window.location="index.php?quanly=ql_sanpham";
                        </script>
                        <?php 
                 
                 
      	
      }
 ?>
<br/>
	<form method="POST" action="index.php?sua=edit_sanpham" enctype="multipart/form-data">
            Ma san pham:
             <input type="text" readonly name="masp" value="<?php echo $data["maSanPham"] ?>"/>
            <br/> <br/>
		Tên san phamn:
		 <input type="text" name="tensp"  value="<?php echo $data["tenSanPham"] ?>"/>
		<br/> <br/>
           Hinh:
             <input type="file" name="hinh"  value="<?php echo $data["hinh"] ?>"/>
            <br/> <br/>
	    Giá
	     <input type="number" name="gia" value="<?php echo $data["gia"] ?>"/><br/><br/>
           Giảm giá:
           <input type="number" name="giamGia" value="<?php echo $data["giamGia"] ?>"/><br/><br/>
             Màu:
		<select name="mamau">
                  <option value="<?php echo $data["maMau"] ?>"><?php echo $data["maMau"]; ?></option>
            <?php
                  $sql = "select * from mau";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $data["maMau"] ?>"><?php echo $data["loaiMau"]; ?></option>
                  
            <?php } ?>   
            </select>
            <br/><br/>
            Loại:
            <select name="maloai">
            <?php
                  $sql = "select * from loaisanpham";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query))
                  { ?>
                  <option value="<?php echo $data["maLoai"] ?>"><?php echo $data["tenLoai"]; ?></option>
                 
            <?php } ?> 
            </select> <br/><br/>
            Size: 
            <select name="masize">
            <?php
                  $sql = "select * from size";
                  $query = mysqli_query($con, $sql);
                  while($data = mysqli_fetch_array($query))
                  { ?>
                  <option value="<?php echo $data["maSize"] ?>"><?php echo $data["loaiSize"]; ?></option>
                 
            <?php } ?> 
            </select>  
            <br/><br/>
		 <button  type="submit" name="btnSua">Sửa</button>
	    
	</form>
