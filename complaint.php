<?php
include 'db.php';
echo "Connected successfully";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $room = $_POST['room'];
    $block = $_POST['block'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $priority = $_POST['priority'];
    
$sql = "INSERT INTO complaints (room, block, complaint, category, priority)
        VALUES ('$room', '$block', '$description', '$category', '$priority')";

    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>