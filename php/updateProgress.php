<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$user_id = $data['user_id'];
$chapter = $data['chapter'];
$status = $data['status'];

$sql = "INSERT INTO progress (user_id, chapter, status) VALUES ('$user_id','$chapter','$status') 
        ON DUPLICATE KEY UPDATE status='$status'";

$conn->query($sql);
$conn->close();
echo json_encode(["status"=>"success"]);
?>
