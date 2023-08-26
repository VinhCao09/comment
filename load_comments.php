<?php
$servername = "localhost";
$username = "mvg65saklnbm_vinhcao"; // Tên người dùng MySQL
$password = "Vinh02012003@"; // Mật khẩu người dùng MySQL
$dbname = "mvg65saklnbm_vinhcao"; // Tên cơ sở dữ liệu

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["username"] . ":</strong> " . $row["comment_text"] . "</p>";
        echo "<small>" . $row["created_at"] . "</small><br>";
    }
} else {
    echo "No comments yet.";
}

$conn->close();
?>
