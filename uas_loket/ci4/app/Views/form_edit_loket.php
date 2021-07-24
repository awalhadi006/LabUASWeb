<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>

<form action="" method="post">
    <p>
        <input type="text" name="nama" value="<?= $data['nama'];?>">
    </p>
    <p>
        <input type="text" name="keterangan" value="<?= $data['keterangan'];?>">
    </p>
    <p>
        <input type="text" name="pelayanan id" value="<?= $data['pelayanan_id'];?>">
</p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?> 