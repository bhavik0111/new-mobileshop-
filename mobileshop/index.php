<?php
include('header.php');

$prod_id='';
$prod_name='';
$prod_price='';
$prod_image='  ';
$cat_name_query = '';

//for all category link click show prod_image
if(isset($_GET['cat_id'])){
   $cat_name_query = 'AND `cat_id` = '.$_GET['cat_id'];
}
//end....

   $prod_sql = "SELECT `prod_id`,`prod_name`, `prod_price`, `prod_image` FROM `product_master` WHERE `prod_status`='1' $cat_name_query ";      
   $prod_result = mysqli_query($conn, $prod_sql);
 
?>
      <?php include("left_panel.php"); ?>
         <td width="80%">
            <table width="100%" border="1">
               <tr>
                 <?php if($prod_result->num_rows > 0){
                        while($prod_row = $prod_result->fetch_assoc()){  
                          if($count %3==0 && $count != 0){ echo "  <tr> </tr>"; }  
                     ?>
                  <td align="center"><b>
                     <a href="productview.php?prod_id=<?php echo $prod_row['prod_id']; ?>">
                        <img src="<?php echo SITE_URL_IMG . '/product/' . $prod_row['prod_image']; ?>" height="130" width="130">     
                     </a><br><?php echo $prod_row['prod_name']; ?><br>Price  <?php echo $prod_row['prod_price']; ?><br>
                     <a href="#">Add To Cart</a></b>
                  </td>
                  <?php
                     $count++;
                    } } ?>
               </tr>
            </table>
         </td>
      </tr>
   </table>
</td></tr>
<?php include('footer.php'); ?>