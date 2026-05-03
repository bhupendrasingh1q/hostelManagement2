<?php
include 'db.php';

$id = intval($_GET['id']);

if(isset($_POST['update'])){
  $occupants = $_POST['occupants'];

  $conn->query("UPDATE rooms SET occupants='$occupants' WHERE id=$id");

  header("Location: rooms.php");
}

$room = $conn->query("SELECT * FROM rooms WHERE id=$id")->fetch_assoc();
?>

<form method="POST">
  <h2>Update Room <?php echo $room['room_number']; ?></h2>

  <input type="number" name="occupants" value="<?php echo $room['occupants']; ?>">

  <button name="update">Update</button>
</form>