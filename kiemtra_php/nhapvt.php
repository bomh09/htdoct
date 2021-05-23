<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php
		if (isset($_POST["btnThem"])) {
			// kết nối
			$conn = mysqli_connect("localhost", "root", "", "quanlyvattu");
			// kiểm tra kết nối
			if (! $conn) {
				die("Kết nối không thành công");
			}

			$mavt = $_POST["txtMavt"];
			$tenvt = $_POST["txtTenvt"];
			$ngaynhap = $_POST["txtNgayNhap"];
			$ngayxuat = $_POST["txtNgayXuat"];
			$soluong = $_POST["txtSL"];
			$trangthai = $_POST["txtTrangThai"];

			$SQL_INSERT = "INSERT INTO vattu(mavt, tenvt, ngaynhap, ngayxuat, soluong, trangthai)"
			."VALUES('$mavt', '$tenvt', '$ngaynhap', '$ngayxuat', '$soluong', '$trangthai')";

			$result = mysqli_query($conn, $SQL_INSERT);
			if (! $result) {
				echo "Thêm thất bại, vui lòng kiểm tra dữ liệu";
			}
			else{
				// B3: đóng CSDL
				mysqli_close($conn);
				echo "Thêm thành công";
			}
		}
	?>
</head>
<body>
	<form method="post" action="nhapvt.php">
		<h1>Thêm vật tư</h1>

		Mã vật tư: <input type="text" name="txtMavt"> <br><br>

		Tên vật tư: <input type="text" name="txtTenvt"> <br><br>

		Ngày nhập: <input type="date" name="txtNgayNhap"> <br><br>

		Ngày xuất: <input type="date" name="txtNgayXuat"> <br><br>

		Số lượng: <input type="text" name="txtSL"> <br><br>

		Trạng thái: <input type="text" name="txtTrangThai"> <br><br>

		<button type="submit" name="btnThem">Thêm</button>
	</form>
</body>
</html>