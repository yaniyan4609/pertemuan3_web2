<?php
// Cek apakah data 'nama_pelanggan' dikirim melalui metode POST
if (isset($_POST['nama_pelanggan'])) {

    // Ambil dan simpan data dari POST ke variabel PHP
    $nama    = $_POST['nama_pelanggan'];
    $alamat  = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    // Kueri SQL untuk menyimpan data pelanggan baru
    $query = mysqli_query($conn, "INSERT INTO tb_pelanggan(nama_pelanggan, alamat_pelanggan, no_telp_pelanggan) VALUES('$nama', '$alamat', '$no_telepon')");

    // Cek hasil eksekusi kueri
    if ($query) {
        // Jika berhasil: tampilkan alert dan arahkan kembali ke halaman pelanggan
        echo "<script>alert(\"Data berhasil disimpan\"); location.href=\"?page=pelanggan\"</script>";
    } else {
        // Jika gagal: tampilkan alert
        echo "<script>alert(\"Data gagal disimpan\")</script>";
    }
}
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Pelanggan</li>
    </ol>

    <a href="?page=pelanggan" class="btn btn-warning">Kembali</a>
    <hr>

    <form action="" method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama Pelanggan</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="nama_pelanggan"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea class="form-control" name="alamat" id="alamat"></textarea></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="no_telepon"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>