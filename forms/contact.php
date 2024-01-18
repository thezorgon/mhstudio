<?php
 // Hubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "emailform");

// Periksa koneksi
if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Tangkap data formulir
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Query untuk menyimpan data ke dalam tabel
$query = "INSERT INTO inmail (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

// Jalankan query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan ke database.";
} else {
    echo "" . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
