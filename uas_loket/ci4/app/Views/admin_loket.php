<?= $this->include('template/admin_header'); ?>

<div class="row">
    <div class="col-12">
        <a class="btn btn-primary" href="<?= base_url('/home');?>" style="margin:1px 10px;float:left">Kembali</a>
        <a class="btn btn-primary" href="<?= base_url('/admin/add_loket');?>" style="margin:1px 10px;float:right">Tambah Loket</a>
</div>
</div>
<nav>
    <a href="<?= base_url('/admin/admin');?>">Pelayanan</a>
    <a href="<?= base_url('/admin/loket');?>" class="active">Loket</a>
</nav>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Loket</th>
            <th>Keterangan</th>
            <th>Jenis Pelayanan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

   <?php $conect=mysqli_connect("localhost", "root", "", "uas_loket"); ?>
   <?php $ambildata=mysqli_query($conect, "Select * From pelayanan pl, loket pn where pl.id=pn.pelayanan_id");
        $result=mysqli_fetch_row($ambildata);
            ?>
   
    <?php if($loket): foreach($loket as $row ): ?>
     
 
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
           <?= $row['pelayanan_id']; ?>
        </td>
        <td style="width:250px">
            <a class="btn btn-primary" href="<?= base_url('/admin/edit/' . $row['id']);?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/delete_loket' . $row['id']);?>">Hapus</a>
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