<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pilarapp";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pastikan folder uploads ada
$uploads_dir = 'uploads/';
if (!is_dir($uploads_dir)) {
    mkdir($uploads_dir, 0777, true);
}

$errors = [];

// Mendapatkan data dari form
foreach ($_FILES as $key => $file) {
    if ($file['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $file['tmp_name'];
        $name = basename($file['name']);
        $destination = $uploads_dir . $name;
        if (move_uploaded_file($tmp_name, $destination)) {
            // Mendapatkan tanggal dari nama input
            $tanggal = str_replace('bukti_tf_', '', $key);

            // Simpan informasi file ke database
            $sql = "UPDATE pembayaran SET bukti_tf='$name' WHERE tanggal='$tanggal'";
            if (!$conn->query($sql)) {
                $errors[] = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $errors[] = "Failed to move uploaded file.";
        }
    } elseif ($file['error'] != UPLOAD_ERR_NO_FILE) {
        $errors[] = "File upload error: " . $file['error'];
    }
}

$conn->close();

if (empty($errors)) {
    header("Location: history_pembayaran.php"); // Redirect kembali ke halaman history_pembayaran.php
    exit();
} else {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}


