<?php
$dbhost ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="test_bhavikshop";

 $conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

  if(!$conn){
    echo "database could not connect" .mysqli_error($conn);
  }

define("SITE_URL", "http://192.168.0.1/test/bhavik/mobileshop");
define("SITE_ROOT_URL", $_SERVER['DOCUMENT_ROOT']."/test/bhavik/mobileshop"); 
define("SITE_ROOT_IMG", $_SERVER['DOCUMENT_ROOT']."/test/bhavik/mobileshop/images"); 
define("SITE_URL_IMG", "http://192.168.0.1/test/bhavik/mobileshop/images");   //listing image path

// echo SITE_ROOT_URL .'<br>';
// echo SITE_URL;
// exit();
$url = CURRENT_URL;
if(isset($_GET['cat_id'])) { 
   $url.= '&cat_id='.$_GET['cat_id']; 
}
if(isset($_GET['prod_id'])) { 
   $url.= '&prod_id='.$_GET['prod_id']; 
}
?>
