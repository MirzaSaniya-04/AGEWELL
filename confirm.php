<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$card_no = $_POST['card_no'];
$security_code = $_POST['security_code'];
$sql = "SELECT user_name FROM account WHERE card_no = ? AND security_code = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $card_no, $security_code);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Hello " . htmlspecialchars($row['user_name']);
} else {
    echo "Incorrect info";
}
$stmt->close();
$conn->close();
?>
