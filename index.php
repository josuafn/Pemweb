<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>



	<link href="css/footer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/home.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />

            
</head>

<body class="home">
    <div id="bg">
	<div id="page">
	
	
	<?php
	include "header.php";
	?>
	<hr><br/>
	
    <div id="badan">

	<br/><br/>
	<center><img src="images/loginn.png" width="150" height="150"/></center>
	<hr>
	<br/>
	<center>

<form method="POST" action="cek_login.php">
		<table border="0" cellspacing="4" cellpadding="0" class="tabel_reg">
		  <tr>
			<td width="120">Username</td>
			<td><input name="username" type="text" size="40" value=""> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			<td>Password</td>
			<td><input name="password" type="password" size="40" value=""> <em>harus diisi</em></td>
		  </tr>
		  <tr>
			  <tr>
			<td></td>
			<td><input name="login" type="submit" value="Login"> <input name="batal" type="reset" value="Batal"></td>

<tr>
<div class="grup">
                <a href="#" class="a tombol facebook"><i class="fa fa-facebook"></i>Join with Facebook</a>
                <a href="#" class="a tombol gmail"><i class="fa fa-gmail"></i>Join with Gmail</a>
            
		</table>
<div class="grup">
                    <div class="kiri">
                        <input type="checkbox">
                        <span>Tetap Biarkan saya masuk </span>
                    </div>

</tr>

		
    </div><br/>
    <hr><center>
		<?php
		include "footer.php";
		?>
		</center>
<hr>
</body>
</html>
