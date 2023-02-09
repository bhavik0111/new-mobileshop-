<?php
session_start();
require "function.php";
include 'connect.php';
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
			        <?php if(check_login_status() == false){ ?>
							<li><a href="<?php echo SITE_URL.'/login.php';?>"><b>Login</b></a></li>
			        <?php }else{ ?>
							<li><a href="<?php echo SITE_URL.'/logout.php';?>"><b>logout</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<li><a href=""><b>Profile</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			        <?php } ?>
				</ul>
			</td></tr>
		</table>
	</td></tr>

	