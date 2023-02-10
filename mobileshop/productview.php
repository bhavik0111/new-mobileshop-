<?php
include('header.php');
include("left_panel.php");

$id='';
$prod_id='';
$prod_name='';
$prod_price='';
$prod_image='';

//for all category link click show prod_image
if(isset($_GET['cat_id'])){
   $cat_name_query = 'AND `cat_id` = '.$_GET['cat_id'];
}
//end....

if(isset($_GET['prod_id'])){
    $id = $_GET['prod_id'];
 }
   
   $prod_view_query = "SELECT `prod_id`,`cat_id`,`prod_name`,`prod_image`,`prod_price`,`prod_desc` FROM `product_master` WHERE `prod_id`=$id AND `prod_status`='1' ";
	$prod_view_result = mysqli_query($conn, $prod_view_query);
	$prod_row_count   = mysqli_num_rows($prod_view_result);
   $prod_row = $prod_view_result->fetch_assoc();

     $prodmt_query = "SELECT * FROM `product_meta` WHERE `prod_id` ='".$id."' ";
     $prodmt_result = mysqli_query($conn, $prodmt_query);

?>
		<td>
			<table align="" border="1">
				<tr class="mount">
					<td width="80"><?php
						if($prod_row_count > 0){ ?>
	               		<img class="splide" src="<?php echo SITE_URL_IMG . '/product/' . $prod_row['prod_image']; ?>" height="250" width="250"><?php 
	               }else{ 
	               	header("location:".SITE_URL."/index.php");
	               }?>
	            </td>
	            <td align="center">
	            	<?php echo $prod_row['cat_id']; ?><br>
						<b>Name </b><?php echo $prod_row['prod_name']; ?><br>
						<b>Price </b><?php echo $prod_row['prod_price']; ?><br>
						<b>Description </b><?php echo $prod_row['prod_desc']; ?><br>
					</td> 
					   <?php
						if($prodmt_result->num_rows > 0){
	                  while($show_prodmt = mysqli_fetch_array($prodmt_result)){ ?>
					<td>
						<img class="splide" src="<?php echo SITE_URL_IMG . '/product/' . $show_prodmt['prodmt_glrimg']; ?>" height="80" width="80">
					</td>
						<?php } } ?>
				</tr>
				<tr align="center">
					<td>
						<a href="#"><b>Add To Cart</b></a>
					<!-- 	Add Quantity:-<input type="number" name="qty" value="">
						<input type="submit" name="addcart" value="Add"> -->
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</td></tr>
<?php include('footer.php'); ?>
