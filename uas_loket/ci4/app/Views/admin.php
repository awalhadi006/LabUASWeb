<?= $this->include('template/admin_header'); ?>

<div class="row" style="justify-content:flex-end">
    <div class="col-12">
        <a class="btn btn-primary" href="<?= base_url('/home');?>" style="margin:1px 10px;float:left">Kembali</a>
        <a class="btn btn-primary" href="<?= base_url('/admin/add');?>" style="margin:1px 10px;float:right">Tambah Layanan</a>
</div>
</div>
<nav>
    <a href="<?= base_url('/admin/admin');?>" class="active">Pelayanan</a>
    <a href="<?= base_url('/admin/loket');?>">Loket</a>
</nav>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Layanan</th>
            <th>Keterangan</th>
            <th>Kode</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if($pelayanan): foreach($pelayanan as $row): ?>
    <tr>
        <td>
            <?= $row['id']; ?>
        </td>
        <td>
            <b><?= $row['nama']; ?></b>
        </td>
        <td>
            <?= $row['keterangan']; ?>
        </td>
        <td>
            <?= $row['kode']; ?>
        </td>
        <td style="width:250px">
            <a class="btn btn-primary" href="<?= base_url('/admin/edit/' . $row['id']);?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/delete/' . $row['id']);?>">Hapus</a>
        </td>
    </tr>
    <?php  endforeach; else: ?>
    <tr>
        <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?> 
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?> 