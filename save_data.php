<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dini-rohim-wedding";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$status = $_POST["status"];
$pesan = $_POST["pesan"];


$sql = "INSERT INTO form_data (nama, jumlah, status, pesan) VALUES ('$nama', $jumlah, '$status', '$pesan')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
