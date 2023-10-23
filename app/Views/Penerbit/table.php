<style>
table tr th,
table tr td {
    border: 1 px solid black;
}
</style>
<a href="<?=base_url('/Penerbit/form')?>">Tambah data</a>
<table style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Penerbit</th>
            <th>Kota Terbit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_penerbit as $k=>$v): ?>
        <tr>
            <td><?=$v['penerbit'] ?></td>
            <td><?=$v['kota'] ?></td>
            <td>
                <form onsubmit="return confirm('Apakah ingin dihapus?')" action="<?=base_url('Penerbit/hapus')?>"
                    method="post">
                    <input type="hidden" name="id" value="<?=$v['id']?>" />
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>