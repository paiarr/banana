<?php
    include_once 'Connection.php';
    $sql = "DELETE FROM customer WHERE cus_id='" . $_GET["cus_id"] . "'";
    if (mysqli_query($conn, $sql)) {
        header("Location:View.php?");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    /*include "Connection.php";
    $id = $_GET['cus_id'];
    $del = "DELETE FROM customer WHERE cus_id='".$id."'";
    //$sqlDel = "DELETE FROM customer WHERE cus_id = " + $_POST['cus_id'];
    if(mysqli_query($conn,$del)){
        header("Location:View.php?");
    }*/
?>
