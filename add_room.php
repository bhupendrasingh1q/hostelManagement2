<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Room</title>
</head>
<body>

<h2>Add New Room</h2>

<form method="POST">
  <input type="text" name="room_number" placeholder="Room Number (e.g. 401)" required><br><br>

  <input type="text" name="block" placeholder="Block (A/B/C)" required><br><br>

  <input type="number" name="occupants" placeholder="Number of occupants" required><br><br>

  <button type="submit">Add Room</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $room = $_POST['room_number'];
  $block = $_POST['block'];
  $occupants = $_POST['occupants'];

  // auto-calculate floor
  $floor = substr($room, 0, 1);

  $sql = "INSERT INTO rooms (room_number, block, floor, occupants)
          VALUES ('$room', '$block', '$floor', '$occupants')";

  if ($conn->query($sql)) {
    echo "<script>alert('Room Added Successfully'); window.location.href='dashboard.php';</script>";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>

</body>
</html>