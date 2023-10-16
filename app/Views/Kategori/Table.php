<style>
table tr th,
table tr td {
    border: 1 px solid black;
}
</style>
<a href="<?=base_url('/Kategori/form')?>">Tambah data</a>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Kategori Buku</th>
            <th>Kode DDC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_kategori as $k=>$v): ?>
        <tr>
            <td><?=$v['kategori'] ?></td>
            <td><?=$v['kode_ddc'] ?></td>
            <td>
                <form onsubmit="return confirm('Apakah ingin di hapus?')" action="<?=base_url('Kategori/hapus')?>"
                    method="post">
                    <input type="hidden" name="id" value="<?=$v['id']?>" />
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>