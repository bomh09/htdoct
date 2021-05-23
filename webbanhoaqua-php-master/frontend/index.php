<?php
require_once ('../db/dbhelper.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="..\style.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<div class="home-page">
		<h1><a href="<?=home_url() ?>">Trang chủ</a></h1>
	</div>
	<div class="admin-page">
		<h1><a href="<?=admin_url() ?>">Admin</a></h1>
	</div>
</header>
<ul class="menu-cate">
<?php
$sql          = 'select * from category';
$categoryList = executeResult($sql);
foreach ($categoryList as $item) {
?>
  <li>
    <a class="nav-link active" 
	href=category.php?id="<?php echo $item['id']; ?>">
	<?php echo $item['name']; ?>
	</a>
  </li>
<?php } ?>
</ul>

</body>
</html>