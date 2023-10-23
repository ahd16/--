<!DOCTYPE html>
<html>
<head>
    <title>Create Peminjaman</title>
</head>
<body>

<h1>Create Peminjaman</h1>

<form action="<?= base_url('peminjaman/create') ?>" method="post">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label for="namapeminjaman">Nama Peminjaman</label>
    <input type="text" name="peminjaman" value="<?=$data['Peminjaman'] ?? ''?>" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>