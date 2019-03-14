<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Blog</title>
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
  <h2>Tabel Cetak Blog</h2>
  <br>
	     <table class="table" border="1">
  			<thead>
  				<tr>
  					<th>No.</th>
  					<th>Nama</th>
  					<th>Keterangan</th>
  					<th>Gambar</th>
            <th>Penerbit</th>
            <th>Tanggal</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					$no = 1; 
  					foreach( $dataHome as $row ) : 
  				?>
  				<tr>
  					<th scope="row" align="center"><?= $no ?></th>
  					<td align="center"><?= $row->nama?></td>
  					<td align="left"><?= $row->keterangan ?></td>
  					<td align="center"><img src="/opt/lampp/htdocs/blog_terkini/assets/img/<?= $row->gambar ?>" alt="" width="90px"></td>
  					<td align="center"><?= $row->penerbit ?></td>
            <td align="center"><?= $row->tanggal ?></td>
  				</tr>
  				<?php $no++ ?>
				<?php endforeach; ?>
  			</tbody>
  		</table>
      
      <br>
      <br>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/blog.png" alt="" style="width: 200px; height: 200px;">
      <p>Karangan, <?= date('d-m-Y'); ?></p>
      <img src="/opt/lampp/htdocs/blog_terkini/assets/img/rega1.jpg" alt="" style="float: right; margin-right: -20%;">
      <strong>Rega Aji</strong>
</body>
</html>