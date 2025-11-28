<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['user_id'];

$sql = "SELECT * FROM progress WHERE user_id='$user_id'";
$result = $conn->query($sql);

$progress = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $progress[] = $row;
    }
}

echo json_encode($progress);
$conn->close();
?>
