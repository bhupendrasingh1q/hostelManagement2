<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM complaints WHERE id=$id";

    if($conn->query($sql)){
        header("Location: mycomplaints.php");
    } else {
        echo "Error deleting";
    }
}
?>