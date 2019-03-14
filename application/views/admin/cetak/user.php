<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak User</title>
  <style>
      h1{
        margin-top: 40px;
        text-align: center;
        font-family: arial;
      }
      h2{
        text-align: center;
        font-family: verdana;
      }
      table{
        font-size: 17px;
      }
      table thead{
        text-align: center;
      }
      p{
        float: right;
        margin-top: -1px;
        font-size: 25px;
        z-index: 999;
      }
      strong{
        float: right;
        font-size: 30px;
        margin-top: 32%;
        margin-right: -18%;
      }
  </style>
</head>
<body>
	<h1>Blog Terkini</h1>
  <img src="/opt/lampp/htdocs/blog_terkini/assets/img/icon.png" alt="" style="margin-top: -100px; width: 15%">
  <hr>
  <h2>Tabel Cetak User</h2>
  <br>
	     <table class="table" border="1">
  			<thead>
  				<tr>
  					<th>No.</th>
  					<th>Username</th>
  					<th>Password</th>
  					<th>Nama Lengkap</th>
            <th>Email</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					$no = 1; 
  					foreach( $dataUser as $row ) : 
  				?>
  				<tr>
  					<th scope="row"><?= $no ?></th>
  					<td><?= $row->username ?></td>
  					<td><?= $row->password ?></td>
  					<td><?= $row->nama_lengkap ?></td>
  					<td><?= $row->email ?></td>
  				</tr>
  				<?php $no++ ?>
				<?php endforeach; ?>
  			</tbody>
  		</table>
      
      <br>
      <br>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/chart.png" alt="" style="width: 200px; height: 200px;">
      <p>Karangan, <?= date('d-m-Y'); ?></p>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/rega1.jpg" alt="" style="float: right; margin-right: -20%;">
      <strong>Rega Aji</strong>
</body>
</html>