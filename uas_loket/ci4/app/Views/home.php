<?= $this->include('template/header'); ?>

<a href="<?= base_url('/admin/admin');?>" id="box_1">
    Menu Antrian
</a>

<?php if($pelayanan): foreach($pelayanan as $row): ?>
    <div id="kolom_box_2">
            <a href="<?= base_url('/detail/' . $row['id']);?>" id="box_2"><?=$row['nama']; ?></a>
    </div>
<?php endforeach; else: ?>
    <div class="kolom_box_2">
        <div id="box_2" style="margin: 50px 450px">
    Belum ada Data.
</div>
</div>
<?php endif; ?>
<?= $this->include('template/footer'); ?>