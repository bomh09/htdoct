<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php
		session_start();
		if (isset($_POST["btnLogin"])) {
			// kiểm tra username và password 
			$username = $_POST["txtUsername"];
			$password = $_POST["txtPassword"];

			// kết nối sql
			$conn = mysqli_connect("localhost", "root", "", "quanlyvattu");
			if (! $conn) {
				die("Kết nối không thành công!");
			}

			$SQL_LOGIN = "SELECT * from taikhoan where username = '$username' and password = '$password'";
			$result = mysqli_query($conn, $SQL_LOGIN);
			if ($result) {
				if (mysqli_num_rows($result) == 1) {
					$_SESSION["trangthai"] = "Đã đăng nhập";
					$_SESSION["username"] = $username;

					mysqli_close($conn);

					header("Location:index.php");
				}
				else
					echo "Tên đăng nhập hoặc mật khẩu không đúng";
			}
		}
	?>
</head>
<body>
	<form method="post" action="dangnhap.php">
		<h1>Đăng nhập</h1>

		Tên đăng nhập: <input type="text" name="txtUsername"> <br><br>

		Mật khẩu: <input type="password" name="txtPassword"> <br><br>

		<button type="submit" name="btnLogin">Đăng nhập</button>
	</form>
</body>
</html>