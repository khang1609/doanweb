<table style="width:100%;" border="1">
					<tr>
					   <td class="title">Tên khách hàng:</td>
             <td class="content"><?php echo $_SESSION["kh"]["tenKhachHang"] ?></td>
					</tr>

          <tr>
             <td class="title">Email:</td>
              <td class="content"><?php echo $_SESSION["kh"]["email"] ?></td>
          </tr>

          <tr>
             <td class="title">Giới tính:</td>
              <td class="content"><?php if($_SESSION["kh"]["gioiTinh"]==1) {echo "Nam";} else{echo"Nữ";}  ?></td>
          </tr>

          <tr>
             <td class="title">Ngày sinh:</td>
              <td class="content"><?php echo $_SESSION["kh"]["ngaySinh"] ?></td>
          </tr>

          <tr>
             <td class="title">Số điện thoại:</td>
              <td class="content"><?php echo $_SESSION["kh"]["soDienThoai"] ?></td>
          </tr>

          <tr>
             <td class="title">Địa chỉ:</td>
              <td class="content"><?php echo $_SESSION["kh"]["diaChi"] ?></td>
          </tr>

           <tr>
              <td class="td_link" colspan="2"><a style="color:deeppink;" href="info.php?page=edit_info&id=<?php echo $_SESSION["kh"]["maKhachHang"] ?>">Chỉnh sửa lại thông tin</a></td>
          </tr>
</table>