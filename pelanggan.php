<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>

    <a href="?page=tambah_pelanggan" class="btn btn-primary">Tambah Data</a>
    <hr>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            // Query untuk mengambil data dari tabel tb_pelanggan
            $query = mysqli_query($conn, "SELECT * FROM tb_pelanggan");

            // Loop untuk menampilkan setiap baris data
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_pelanggan']; ?></td>
                    <td><?php echo $data['alamat_pelanggan']; ?></td>
                    <td><?php echo $data['no_telp_pelanggan']; ?></td>
                    <td>
                        <a href="?page=ubah_pelanggan&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-warning">Ubah</a>

                        <a href="?page=hapus_pelanggan&id=<?php echo $data['id_pelanggan']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++; // Naikkan nomor urut
            }
            ?>
        </tbody>
    </table>
</div>