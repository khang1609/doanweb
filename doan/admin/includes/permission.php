<?php
if (isset($_SESSION["nv"]['maNhanVien']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
    	header('Location:login.php');
}else {
	if (isset($_SESSION["nv"]['quyen']) == true) {
		// Ngược lại nếu đã đăng nhập
		$quyen = $_SESSION["nv"]['quyen'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($quyen == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='http://localhost/doan/admin/login.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>