<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Produk</li>
    </ol>

    <a href="?page=tambah_produk" class="btn btn-primary">Tambah Data</a>
    <hr>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Stok Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            // Query untuk mengambil data dari tabel tb_pelanggan
            $query = mysqli_query($conn, "SELECT * FROM tb_produk");

            // Loop untuk menampilkan setiap baris data
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_produk']; ?></td>
                    <td><?php echo $data['harga_produk']; ?></td>
                    <td><?php echo $data['stok_produk']; ?></td>
                    <td>
                        <a href="?page=ubah_produk&id=<?php echo $data['id_produk']; ?>" class="btn btn-warning">Ubah</a>

                        <a href="?page=hapus_produk&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++; // Naikkan nomor urut
            }
            ?>
        </tbody>
    </table>
</div>