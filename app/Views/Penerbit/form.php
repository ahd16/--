<!DOCTYPE html>
<html>

<head>
    <title>Create Penerbit</title>
</head>

<body>

    <h1>Create Penerbit</h1>

    <form action="<?= base_url('Penerbit/create') ?>" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
        <label for="penerbit">Nama Penerbit</label>
        <input type="text" name="penerbit" value="<?=$data['penerbit'] ?? ''?>" required><br>

        <label for="kota">Kota Terbit</label>
        <input type="text" name="kota" value="<?=$data['kota'] ?? ''?>" required><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>