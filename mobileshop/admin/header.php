<?php
 	session_start();
 	require "function.php";
 	include 'connect.php';

 	
 	    if(check_login_status() == false){
			header("location:login.php");
	    }
 ?>
<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<table border="1" width="100%">
	<tr><td align="center">
		<table width="100%" align="center" border="1">
			<tr><td width="100%" align="center"><h1>BhavikShop</h1></td></tr>
			<tr><td>
				<ul style="display: flex;">
					<?php if($_SESSION["usr_role"] == '1') { ?>
					<li><a href="<?php echo SITE_URL_ADMIN;?>/user_master.php"><b>Users</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="<?php echo SITE_URL_ADMIN;?>/category.php"><b>Category</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="<?php echo SITE_URL_ADMIN;?>/product.php"><b>Product</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<li><a href="<?php echo SITE_URL_ADMIN;?>/logout.php"><b>Logout</b></a></li>
					<?php } ?>
				</ul>
			</td></tr>
		</table>
	</td></tr>