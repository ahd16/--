<!DOCTYPE html>
<html>

<head>
    <title>Create Peminjaman</title>
</head>

<body>

    <h1>Create Peminjaman</h1>

    <form action="<?= base_url('peminjaman/save') ?>" method="post">
        <input type="hidden" name="id" value="<?= $peminjaman['id'] ?? '' ?>" />
        <label for="tgl_peminjaman">Tanggal Peminjaman</label>
        <input type="date" name="tgl_peminjaman" value="<?= $peminjaman['tgl_peminjaman'] ?? '' ?>" required><br>

        <label for="tgl_pengembalian">Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian" value="<?= $peminjaman['tgl_pengembalian'] ?? '' ?>"><br>

        <label for="tb_pengguna_id_peminjaman">ID Pengguna Peminjaman</label>
        <input type="text" name="tb_pengguna_id_peminjaman" value="<?= $peminjaman['tb_pengguna_id_peminjaman'] ?? '' ?>" required><br>

        <label for="tb_pengguna_id_pengembalian">ID Pengguna Pengembalian</label>
        <input type="text" name="tb_pengguna_id_pengembalian" value="<?= $peminjaman['tb_pengguna_id_pengembalian'] ?? '' ?>"><br>

        <label for="tb_anggota_id">ID Anggota</label>
        <input type="text" name="tb_anggota_id" value="<?= $peminjaman['tb_anggota_id'] ?? '' ?>" required><br>

        <label for="tb_buku_id">ID Buku</label>
        <input type="text" name="tb_buku_id" value="<?= $peminjaman['tb_buku_id'] ?? '' ?>"><br>

        <label for="denda">Denda</label>
        <input type="text" name="denda" value="<?= $peminjaman['denda'] ?? '' ?>"><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
