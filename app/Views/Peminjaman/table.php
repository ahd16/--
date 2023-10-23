<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>

    <a href="<?= base_url('peminjaman/create') ?>">Tambah Data Peminjaman</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>ID Pengguna Peminjaman</th>
                <th>ID Pengguna Pengembalian</th>
                <th>ID Anggota</th>
                <th>ID Buku</th>
                <th>Denda</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($peminjaman as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Peminjaman:</td>
                    <td><?= $row['tgl_peminjaman'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pengembalian:</td>
                    <td><?= $row['tgl_pengembalian'] ?></td>
                </tr>
                <tr>
                    <td>ID Pengguna Peminjaman:</td>
                    <td><?= $row['tb_pengguna_id_peminjaman'] ?></td>
                </tr>
                <tr>
                    <td>ID Pengguna Pengembalian:</td>
                    <td><?= $row['tb_pengguna_id_pengembalian'] ?></td>
                </tr>
                <tr>
                    <td>ID Anggota:</td>
                    <td><?= $row['tb_anggota_id'] ?></td>
                </tr>
                <tr>
                    <td>ID Buku:</td>
                    <td><?= $row['tb_buku_id'] ?></td>
                </tr>
                <tr>
                    <td>Denda:</td>
                    <td><?= $row['denda'] ?></td>
                </tr>
                <tr>
                    <td>
                        <a href="<?= base_url('peminjaman/edit/' . $row['id']) ?>">Edit</a>
                        <a href="<?= base_url('peminjaman/delete/' . $row['id']) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
