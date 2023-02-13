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


	if($prod_row_count > 0){
?>
		<td>
			<table align="" border="1">
				<tr>
					<td width="80">
	               		<img src="<?php echo SITE_URL_IMG . '/product/' . $prod_row['prod_image']; ?>" height="250" width="250">
	            </td>
	            <td align="center">
	            	<?php echo $cat_name; ?><br>
						<b>Name </b><?php echo $prod_row['prod_name']; ?><br>
						<b>Price </b><?php echo $prod_row['prod_price']; ?><br>
						<b>Description </b><?php echo $prod_row['prod_desc']; ?><br>
					</td> 
					
							<td width="40">
								<div class="wrapper">
									<!-- Images Area slice-->
									<div class="images-area">
									<?php
										if($prodmt_result->num_rows > 0){
											$count = 0;
											while($show_prodmt = mysqli_fetch_array($prodmt_result)){ 
												?>
										<img src="<?php echo SITE_URL_IMG . '/product/' . $show_prodmt['prodmt_glrimg']; ?>"  alt="image" class="<?php echo (($count == 0) ? 'firstImage' : '') ?>"  style="min-width:400px;max-width:400px;">
										
										<?php $count++; } } ?>
									</div>
									<!-- Buttons Area -->
									<div class="buttons-area">
										<div class="previous-btn">
										<i class='bx bx-chevron-left'></i>
										</div>
										<div class="next-btn">
										<i class='bx bx-chevron-right'></i>
										</div>
									</div>
									<!-- Pagination Area -->
									<div class="pagination-area">
									</div>
						</div>
					</td>
						
				</tr>
				<tr align="center">
					<td>
						<a href="#"><b>Add To Cart</b></a>
					<!-- 	Add Quantity:-<input type="number" name="qty" value="">
						<input type="submit" name="addcart" value="Add"> -->
					</td>
				</tr>
			</table>
		</td><?php 
	}else{ 
		header("location:".SITE_URL."/index.php");
	}?>
	</tr>
	</table>
</td></tr>

<?php include('footer.php'); ?>
