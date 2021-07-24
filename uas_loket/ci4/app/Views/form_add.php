<?= $this->include('template/admin_header'); ?>

<h2>Tambah Layanan</h2>
<form action="" method="post">
    <p>
        <input type="text" name="nama">
    </p>
    <p>
        <input type="text" name="keterangan">
    </p>
    <p>
        <input type="text" name="kode">
</p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?> 