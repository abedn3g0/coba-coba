<?php
// Mengimport file koneksi.php yang berisi kode untuk menghubungkan ke database
include 'koneksi.php';

// Cek apakah form telah disubmit (tombol submit ditekan)
if (isset($_POST['submit'])) {

    // Mengambil nilai inputan dari form dan menyimpannya dalam variabel
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    
    // Membuat query INSERT INTO untuk menyimpan data siswa baru ke dalam tabel "siswa"
    $query = mysqli_query($conn, "INSERT INTO data_siswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')");

    // Cek apakah query berhasil dijalankan
    if ($query) {
        // Redirect ke halaman index.php jika berhasil
        header('location: index.php');
    } else {
        // Tampilkan pesan "Data gagal disimpan" jika gagal
        echo 'Data gagal disimpan';
    }
}
?>

