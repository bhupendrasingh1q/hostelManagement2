<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "UPDATE complaints SET status='Assigned' WHERE id=$id";

    if($conn->query($sql)){
        header("Location: mycomplaints.php");
    } else {
        echo "Error assigning";
    }
}
?>