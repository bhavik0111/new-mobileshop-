<?php

$cat_id=''; 
$cat_name='';
$count = 0;
$cat_name_query = '';

   $cat_sql = "SELECT `cat_id`, `cat_name` FROM category_master where (SELECT COUNT(prod_id) FROM `product_master` WHERE `cat_id`=category_master.cat_id)>0 AND `cat_status`=1" ;

     // $cat_sql = "SELECT `cat_id` ,`cat_name` FROM `category_master` WHERE `cat_status`= '1' ";    
   $cat_result = mysqli_query($conn, $cat_sql); 

?>
<tr><td width="100%">
   <table width="100%" border="0" >
      <tr>
         <td width="20%">
            <ul>
               <li><b>All category</b></li><br>

               <?php if($cat_result->num_rows > 0){
                        while ($row = $cat_result->fetch_assoc()){ ?>
                           <li><b><a href="index.php?cat_id=<?php echo $row['cat_id']; ?>" value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></a></b></li>
                     <?php }  } 
                  ?>
            </ul>
         </td>
        