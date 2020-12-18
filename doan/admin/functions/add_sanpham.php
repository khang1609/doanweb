<?php include("includes/connection.php");
      if(isset($_POST["btnThem"]))
      {
           
      	$tensp = $_POST["tensp"];
      	$gia = $_POST["gia"];
            $soluong = $_POST["soluong"];
            $giamgia = $_POST["giamgia"];
          	$loai = $_POST["maloai"];
            $mota = $_POST["mota"];
            $mau = $_POST["mamau"];
            $size = $_POST["masize"];
            $img = $_FILES["hinh"]["name"];
            $path = '../images/'.basename($_FILES["hinh"]["name"]);
         
              if($gia < 0)
              {
              echo "Không được thêm giá âm";
               }
               else if($tensp==""||$gia==""||$soluong==""||$giamgia==""||$loai==""||$size==""||$img==""||$mota=="")
               {
                echo "vui long thêm đủ thông tin";
               }
               else
               {
        		$sql = "INSERT INTO sanpham(tenSanPham,soLuong,maLoai,giamGia,moTa,hinh,gia,maSize,maMau) values ('$tensp','$soluong','$loai','$giamgia','$mota','$img','$gia','$size','$mau')";
        		$query = mysqli_query($con, $sql);
                    if(move_uploaded_file($_FILES['hinh']["tmp_name"],$path ))
                    {
        		          echo "Thêm thành công";
                    }
                    else{echo"Thêm ảnh thát bạn";}
                  }
          
      	
      }
 ?>
<br/>
	<form method="POST" action="index.php?them=add_sanpham" enctype="multipart/form-data">
            
		Tên san phamn:
		 <input type="text" name="tensp"/>
		<br/> <br/>
            So luong:
             <input type="text" name="soluong"/>
            <br/> <br/>
            mo ta:
             <input type="text" name="mota"/>
            <br/> <br/>

           Hinh:
             <input type="file" name="hinh"/>
            <br/> <br/>
	    Giá
	     <input type="inumber" name="gia" /><br/><br/>
           Giam gia:
             <input type="text" name="giamgia"/>
            <br/> <br/>
             Màu:
		<select name="mamau">
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
            </select>  
            <br/><br/>
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
		 <button  type="submit" name="btnThem">Them</button>
	    
	</form>
