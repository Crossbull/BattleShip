<?php

    include "../Includes/db.php";

    $id = $_GET['delId'];

    $del = mysqli_query($con,"DELETE FROM admin_accounts WHERE admin_id = '$id'");

    if($del)
    {
        mysqli_close($con);
        header("location: admin_accounts.php");
        exit;	
    }
    else
    {
        echo "Error deleting record";
    }
?>
