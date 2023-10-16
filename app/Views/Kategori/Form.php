<!DOCTYPE html>
<html>

<head>
    <title>Create Kategori</title>
</head>

<body>

    <h1>Create Kategori</h1>

    <form action="<?= base_url('Kategori/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="kategori">Nama Kategori</label>
        <input type="text" name="kategori" value="<?=$data['kategori'] ?? ''?>" required><br>

        <label for="kode_ddc">Kode DDC</label>
        <input type="text" name="kode_ddc" value="<?=$data['kode_ddc'] ?? ''?>" required><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>