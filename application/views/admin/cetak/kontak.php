<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Kontak</title>
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
        font-size: 28px;
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
        z-index: 999;
      }
  </style>
</head>
<body>
	<h1>Blog Terkini</h1>
  <img src="/opt/lampp/htdocs/blog_terkini/assets/img/icon.png" alt="" style="margin-top: -100px; width: 15%">
  <hr>
  <h2>Tabel Cetak Kontak</h2>
  <br>
	     <table class="table" border="1" align="center">
  			<thead>
  				<tr>
  					<th>No.</th>
  					<th>Nama</th>
  					<th>Email</th>
  					<th>Phone</th>
            <th>Pesan</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					$no = 1; 
  					foreach( $dataKontak as $row ) : 
  				?>
  				<tr>
  					<th scope="row"><?= $no ?></th>
  					<td><?= $row->nama ?></td>
  					<td><?= $row->email ?></td>
  					<td><?= $row->phone ?></td>
  					<td><?= $row->pesan ?></td>
  				</tr>
  				<?php $no++ ?>
				<?php endforeach; ?>
  			</tbody>
  		</table>
      
      <br>
      <br>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/kontak.png" alt="" style="width: 200px; height: 200px;">
      <p>Karangan, <?= date('d-m-Y'); ?></p>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/rega1.jpg" alt="" style="float: right; margin-right: -20%;">
      <strong>Rega Aji</strong>
</body>
</html>