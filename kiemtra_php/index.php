<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php
		session_start();
		if (! isset($_SESSION["trangthai"])) {
			header("Location:dangnhap.php");
		}
		else{
			echo "<h2> Xin chào: ".$_SESSION["username"]."</h2>";
		}
		if (isset($_POST["btnThoat"])) {

			unset($_SESSION["trangthai"]);
			unset($_SESSION["username"]);
			header("Location:dangnhap.php");
		}
		function thoat()
		{
			return '<br> <button type="submit" name="btnThoat" >Thoát</button>';
		}
	?>
</head>
<body>
	<form method="post">
		<h1>Trang chủ</h1>
		<a href="nhapvt.php">Thêm vật tư</a> <br><br>
		<?php 
			echo thoat()
		?>
	</form>
	
</body>
</html>