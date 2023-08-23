<?php
// Koneksi ke database MySQL
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "contact_db"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir HTML
$email = $_POST['inp_email'];
$name = $_POST['inp_subject'];
$message = $_POST['inp_message'];

// Masukkan data ke dalam tabel
$sql = "INSERT INTO contact_form (email, name, message) VALUES ('$email', '$name', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data telah berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
