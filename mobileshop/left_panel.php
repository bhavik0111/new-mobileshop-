<?php

$cat_id=''; 
$cat_name='';
$count = 0;
$cat_name_query = '';

   $cat_sql = "SELECT `cat_id`, `cat_name` FROM category_master where (SELECT COUNT(prod_id) FROM `product_master` WHERE `cat_id`=category_master.cat_id)>0 AND `cat_status`=1" ;
   $cat_result = mysqli_query($conn, $cat_sql); 

//for all category link click show prod_image
if(isset($_GET['cat_id'])){
   $cat_id=$_GET['cat_id']; 
   $cat_name_query = 'AND `cat_id` = '.$cat_id;

   $cat_name_sql = "SELECT `cat_name` FROM `category_master` WHERE `cat_status`= '1' $cat_name_query ";  
 
   $cat_name_result = mysqli_query($conn, $cat_name_sql); 
   $cat_name=mysqli_fetch_row($cat_name_result)[0];
}


//end....
// echo $cat_name;
// echo $cat_id;
?>
<tr><td width="100%">
   <table width="100%" border="0" >
      <tr>
         <td width="20%">
            <ul>
               <li><b><a href="index.php">All category</a></b></li><br>

               <?php if($cat_result->num_rows > 0){
                        while ($row = $cat_result->fetch_assoc()){ 
                           // print_r($row);
                           ?>
                           <li><b><a href="index.php?cat_id=<?php echo $row['cat_id']; ?>" class="<?php echo (($cat_id == $row['cat_id']) ? 'text-active' : '') ?>" ><?php echo $row['cat_name']; ?></a></b></li>
                     <?php }  } 
                  ?>
            </ul>
         </td>
        
