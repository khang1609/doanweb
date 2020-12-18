<?php 

  if(!isset($_GET["id"]))
  {
    $_GET["id"] = "undefine";
  }
  $sql = "select * from khachhang where maKhachHang='$_GET[id]'";
  $query = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($query);
  $male_checked = "";
  $female_checked = "";
  if($data["gioiTinh"]==1)
  {
    $male_checked = "checked";
  }
  else{$female_checked = "checked";}
    if(isset($_POST["btnSua"]))
      {
            $makh = $_POST["makh"];
             $tenkh = $_POST["tenkh"];
            $date = $_POST["date"];
            $sdt     = $_POST["sdt"];
            $email     = $_POST["email"];
            $diachi  = $_POST["diachi"];
            $gt = $_POST["gt"];
          
         
        
        $sql = "update khachhang set tenKhachHang='$tenkh',email='$email',gioiTinh='$gt',ngaySinh='$date',soDienThoai='$sdt',diaChi='$diachi' where maKhachHang='$makh'"; 
            $query = mysqli_query($con, $sql);
          
          echo '<p>Đã sửa thành công vui lòng đăng nhập lại <a href="logout.php">Đăng nhập lại</a></p>';
         }
  
  
  
?>
<h3><b>Cập nhật thông tin cá nhân</b></h3>
<form class="form_edit" method="POST" action="info.php?page=edit_info">
  <table style="width:100%;">
            
                <input type="text" name="makh" hidden value="<?php echo $data["maKhachHang"] ?>" />
              
            </tr> 
  					<tr>
  					   <td class="title">Tên khách hàng:</td>
               <td class="content">
                <input type="text" name="tenkh" value="<?php echo $data["tenKhachHang"] ?>" />
              </td>
  					</tr>

            <tr>
               <td class="title">Email:</td>
                <td class="content">
                  <input type="email" name="email" readonly value="<?php echo $data["email"] ?>" />
                </td>
            </tr>

            <tr>
               <td class="title">Giới tính:</td>
                <td class="content">
                <input type="radio" name="gt" value="1" <?php echo $male_checked ?>  /> Nam
                &emsp;
                <input type="radio" name="gt" value="0" <?php echo $female_checked ?> />Nữ
                </td>
            </tr>

            <tr>
               <td class="title">Ngày sinh:</td>
                <td class="content">
                  <input type="date" name="date" value="<?php echo $data["ngaySinh"] ?>" />
                </td>
            </tr>

            <tr>
               <td class="title">Số điện thoại:</td>
              <td class="content">
                <input type="number" name="sdt" value="<?php echo $data["soDienThoai"] ?>" />
              </td>
            </tr>

            <tr>
               <td class="title">Địa chỉ:</td>
              <td class="content">
              <input type="text" name="diachi" value="<?php echo $data["diaChi"] ?>" />
              </td>
            </tr>

             <tr>
                <td class="td_link" colspan="2"><button type="submit" name="btnSua">Cập nhật</button></td>
            </tr>
  </table>
</form>