<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dini-rohim-wedding";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = mysqli_real_escape_string($conn, $_POST["nama"]);
$jumlah = mysqli_real_escape_string($conn, $_POST["jumlah"]);
$status = mysqli_real_escape_string($conn, $_POST["status"]);

$sql = "INSERT INTO form_data (nama, jumlah, status) VALUES ('$nama', '$jumlah', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
