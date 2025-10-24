<?php
// Mengambil ID Pelanggan dari URL (Parameter GET)
$id = $_GET['id'];

// Kueri SQL untuk menghapus data
$query = mysqli_query($conn, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id'");

// Cek hasil eksekusi kueri
if ($query) {
    // Jika berhasil: tampilkan alert dan arahkan kembali ke halaman pelanggan
    echo '<script>alert("Data berhasil dihapus"); location.href="?page=pelanggan"</script>';
} else {
    // Jika gagal: tampilkan alert
    echo '<script>alert("Data gagal dihapus")</script>';
}
