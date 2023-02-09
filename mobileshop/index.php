<?php
include('header.php');

$cat_id=''; 
$cat_name='';
$prod_name='';
$prod_price='';
$prod_image='';
$count = 0;
$cat_name_query = '';

if(isset($_GET['cat_id'])){
   $cat_name_query = 'AND `cat_id` = '.$_GET['cat_id'];
}

  $cat_sql = "SELECT `cat_id` ,`cat_name` FROM `category_master` WHERE `cat_status`='1' ";    
  $cat_result = mysqli_query($conn, $cat_sql); 

  $prod_sql = "SELECT `prod_name`, `prod_price`, `prod_image` FROM `product_master` WHERE `prod_status`='1' $cat_name_query ";
  $prod_result = mysqli_query($conn, $prod_sql);
?>
<tr><td width="100%">
   <table width="100%" border="0" >
      <tr>
         <td width="20%">
            <ul>
               <li><b>All category</b></li><br>

               <?php if($cat_result->num_rows > 0){
                        while ($row = $cat_result->fetch_assoc()){ ?>
                           <li><a href="index.php?cat_id=<?php echo $row['cat_id']; ?>" value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></a> </li>
                     <?php }  } 
                  ?>
            </ul>
         </td>
         <td width="80%">
            <table width="100%" border="1">
               <tr>
                 <?php if($prod_result->num_rows > 0){
                        while($prod_row = $prod_result->fetch_assoc()){  
                         if($count %3==0 && $count != 0){ echo "  <tr> </tr>"; }  
                     ?>
                  <td align="center"><b>
                     <a href="#">
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

