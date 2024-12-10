<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    // Format data untuk disimpan
    $data = "email: $email\ndari: $subject\n\n";

    // Tentukan lokasi file
    $file = 'data.txt';

    // Simpan data ke file
    // Menggunakan `FILE_APPEND` agar data baru ditambahkan ke akhir file
    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
