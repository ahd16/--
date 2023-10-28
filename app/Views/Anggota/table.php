<style>
    table tr th, table tr td{
        border:1 px solid black;
    }
</style>
<a href="<?=base_url('/Anggota/form')?>">Tambah data</a>
<table  style="border: 1px solid black;">
    <thead>
        <tr>
            <th>Nama Anggota</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>No telp</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Hapus</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($daftar_Anggota as $k=>$v): ?>
            <tr>
                <td><?=$v['nama_lengkap'] ?></td>
                <td><?=$v['alamat'] ?></td>
                <td><?=$v['kota'] ?></td>
                <td><?=$v['notelp'] ?></td>
                <td><?=$v['email'] ?></td>
                <td> <a href="<?=base_url("/Anggota/edit/".$v['id'])?>">Edit</a> </td>
                <td>
                    <form onsubmit="return confirm('Apakah kamu yakin jika ini dihapus?')" action="<?=base_url('Anggota/hapus')?>" method="post">
                        <input type="hidden" name="id" value="<?=$v['id']?>" />
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>