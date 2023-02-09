
<?php
include('header.php');

;
$prod_id='';
$prod_name='';
$prod_price='';
$prod_image='';

//for all category link click show prod_image
if(isset($_GET['cat_id'])){
   $cat_name_query = 'AND `cat_id` = '.$_GET['cat_id'];
}
//end....



   $prod_view_query = "SELECT * FROM `product_master` WHERE `prod_id` =  $id ";
	$prod_view_result = mysqli_query($conn, $prod_view_query);
   
   $prod_row = $update_result->fetch_assoc();

?>

	<?php include("left_panel.php"); ?>
		<td>
			<table align="center" border="1">
				<tr><td width="80">
					<b><?php echo $prod_row['prod_name'] ; ?><br>Price  <?php echo $prod_row['prod_price']; ?><br>
					<a href="#">Add To Cart</a></b>
				</tr></td>
			</table>
		</td>
	</tr>
	</table>
</td></tr>
<?php include('footer.php'); ?>