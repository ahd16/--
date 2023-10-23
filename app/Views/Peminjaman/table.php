<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/Peminjaman/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Peminjaman</th>
            <th>Kota</th>
            <th>Edit</th>
            <th>Hapus</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_Peminjaman as $k=>$v): ?>
            <tr>
                <td><?=$v['peminjaman'] ?></td>
                <td><?=$v['kota'] ?></td>
                <td> <a href="<?=base_url("/peminjaman/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('yakin ke nak dihapus??')" action="<?=base_url('peminjaman/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>