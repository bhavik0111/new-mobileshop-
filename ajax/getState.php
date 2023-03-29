<?php
include'connect.php';
if(isset($_POST['country_id']))
{
    $sql = "SELECT * FROM `state` WHERE country_id = ".$_POST['country_id']." AND status='Active'";
    $result = mysqli_query($conn, $sql);
    $response = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) 
        {
            $response[] = $row;
        }
        echo(json_encode($response));
        // echo json_encode($row);
    }else{
        echo false;
    }

}
elseif(isset($_POST['state_id']))
{
    $sql = "SELECT * FROM `city` WHERE state_id = ".$_POST['state_id']." AND status='Active'";
    $result = mysqli_query($conn, $sql);
    $response = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) 
        {
            $response[] = $row;
        }
        echo(json_encode($response));
        // echo json_encode($row);
    }else{
        echo false;
    }

}
?>