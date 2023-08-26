<?php
$servername = "localhost";
$username = "mvg65saklnbm_vinhcao"; // Tên người dùng MySQL
$password = "Vinh02012003@"; // Mật khẩu người dùng MySQL
$dbname = "mvg65saklnbm_vinhcao"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO comments (username, comment_text) VALUES ('$username', '$comment')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /comment/comment.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
