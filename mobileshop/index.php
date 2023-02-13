<?php
include('header.php');
include("left_panel.php");

$prod_id='';
$prod_name='';
$prod_price='';
$prod_image='  ';

   $prod_sql = "SELECT `prod_id`,`prod_name`, `prod_price`, `prod_image` FROM `product_master` WHERE `prod_status`='1' $cat_name_query ";      
   $prod_result = mysqli_query($conn, $prod_sql);
 
?>
         <td width="80%">
            <table width="100%" border="1">
               <tr>
                 <?php if($prod_result->num_rows > 0){
                        while($prod_row = $prod_result->fetch_assoc()){  
                          if($count %3==0 && $count != 0){ echo "  <tr> </tr>"; }  
                     ?>
                  <td align="center"><b>
                     <a href="<?php echo SITE_URL ?>/productview.php?<?php  if($cat_id > 0){ echo 'cat_id='.$cat_id ; }?>&prod_id=<?php echo $prod_row['prod_id']; ?>">
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
