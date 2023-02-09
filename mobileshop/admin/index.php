<?php 
   include('header.php');
  
    if(check_login_status() == true){
         echo "<p align='right'><b>You are logged in.</b></p>";
    }
?>
<tr><td width="100%">
	<table width="100%" border="0" >
		<tr><th colspan="2" align="center"><?php if(isset($_SESSION["usr_role"])){ echo "Welcome ". $_SESSION["usr_role"];}?></th></tr>
	</table>
</td></tr>
<?php include('footer.php'); ?>