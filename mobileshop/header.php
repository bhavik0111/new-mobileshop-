<?php
session_start();
require 'function.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
	.text-active{
		color: blue;
	}
	a{
		text-decoration: none !important;
	}
	
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		line-height: 2;
	}


/* Wrapper */
.wrapper{
  width: 400px;
  height: 300px;
  position: relative;
  background-color: var(--wrapper-background-c);
  box-shadow: 0 0 80px var(--wrapper-shadow-c);
}

/* Images Area */
.images-area{
  width: 100%;
  height: 100%;
  position: relative;
  display: flex;
  overflow: hidden;
}
.images-area img{
  width: 100%;
  transition: 0.3s cubic-bezier(.79,.03,0,.99);
}

/* Buttons Area  */
.buttons-area{
  width: 100%;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  display: flex;
  justify-content: space-between;
  overflow: hidden;
}
.buttons-area > div{
  color: var(--white-c);
  background-color: var(--buttons-background-c);
  cursor: pointer;
  transition: 0.3s ease-in-out;
}
/* Buttons | Previous And Next */
.buttons-area > div:first-child{
  border-radius: 0 5px 5px 0;
  margin-left: -100px;
}
.buttons-area > div:last-child{
  border-radius: 5px 0 0 5px;
  margin-right: -100px;
}
/* Show The Buttons */
.wrapper:hover .buttons-area > div:first-child{
  margin-left: 0;
}
.wrapper:hover .buttons-area > div:last-child{
  margin-right: 0;
}
.buttons-area div:hover:not(div.disabled){
  background-color: var(--buttons-active-background-c);
}
.buttons-area div:not(div.disabled):active{
  opacity: 0.7;
}
/* Disabled Button */
.buttons-area > div.disabled{
  cursor: no-drop;
  opacity: 0.3;
}
.buttons-area div i{
  font-size: 70px;
}

/* Pagination Area */
.pagination-area{
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}
/* Pagination Spans */
.pagination-area span{
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: var(--white-c);
  margin-right: 5px;
  transform: scale(0.5);
  transition: 0.3s ease-in-out;
  opacity: 0.4;
}
/* Current Active Span */
.pagination-area span.active{
  transform: scale(1);
  opacity: 1;
}

/* End Wrapper */
		</style>
</head>
<body>
<table border="1" width="100%">
	<tr>
		<td align="">
		<table width="100%" align="center" border="1">
			<tr><td width="100%" align="center" colspan="2"><h1>BhavikShop</h1></td></tr>
			<tr>
				<td width="80">
					<ul style="display: flex;">
						<?php if (check_login_status() == false) { ?>
								<li><a href="<?php echo SITE_URL . '/login.php'; ?>"><b>Login</b></a></li>
						<?php } else { ?>
								<li><a href="<?php echo SITE_URL .
			'/logout.php'; ?>"><b>logout</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<li><a href=""><b>Profile</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?php } ?>
					</ul>
				</td>
				<td width="20" align="right" style="font-size: x-large;">
					<form action="<?php echo $url?>" method="post" >
						<select name="filter">
								<option value="asc">Asc</option>
								<option value="desc">Desc</option>
								<option value="price_high_to_low">Price High-to-Low</option>
								<option value="price_low_to_high">Price Low-to-High</option>
						</select>
						<button type="submit">Search</button>
					</form>
				</td>
			</tr>
		</table>
	</td></tr>

	
