<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into  registration(name, email, password, phone) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $name, $email, $password, $phone); // use 'sssi' (string for phone)
    $stmt->execute();
    echo '<a href="https://pizza-hubb-hd2ty5c3w-vikash-kumars-projects-7dc2595e.vercel.app/">Click here to continue to My-Restaurant Website</a>';
    $stmt->close();
    $conn->close();
}
?>
