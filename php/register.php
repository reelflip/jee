<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$email = $data['email'];
$password = $data['password'];

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
if($conn->query($sql) === TRUE){
    echo json_encode(["status"=>"success"]);
} else{
    echo json_encode(["status"=>"error","message"=>$conn->error]);
}

$conn->close();
?>
