<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<h4><center>Daftar Karyawan</center></h4>
	<p><h4><center><?php echo $about; ?></center></h4></p>
	<a href="<?php echo site_url('home') ?>">Kembali</a>
	
<table class="table" border="1">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Email</th>
      <th scope="col">Nama Lengkap</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
		$i=1;
		foreach($user as $row): ?>
    <tr>
     	<td><?php echo $i; ?></td>
		<td><?php echo $row['user_email']; ?></td>
		<td><?php echo $row['user_fullname']; ?></td>
    </tr> 
  </tbody>
  <?php 
	$i++;
endforeach; ?>
</table>
</body>
</html>