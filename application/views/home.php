<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<h1><?php echo $menu; ?></h1>
	
	<a href="<?php echo site_url('home/list') ?>">
		<button type="button" class="btn btn-outline-dark">List Karyawan</button></a>

	<a href="<?php echo site_url('home/add')  ?>">
		<button type="button" class="btn btn-outline-dark">Tambah Data</button></a>
	
</body>
</html>