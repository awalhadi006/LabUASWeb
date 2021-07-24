<?= $this->include('template/header'); ?>

<h1 class="judul"><?= $pelayanan['nama']; ?></h1>

<div class="container" style="margin-left:165px">
  <div class="row">
    <div class="col-4">
      <div class="loket">
          Panggilan Antrian
      </div>
      <div class="box">
        A03
      </div>
      <div class="loket">
        LOKET 1
      </div>
    </div>
    <div class="col-6">
      <div class="box" style="background-color: rgb(226, 83, 83);font-size:50px;color: white;text-align:center;padding: 143px 0">Layar Video</div>

    </div>
</div>
<div class="row">
    <div class="col-2">
      <div class="loket">
      Loket 1
      </div>
      <div class="box_kecil">A03</div>
    </div>
    <div class="col-2">
    <div class="loket">
      Loket 2
      </div>
      <div class="box_kecil">A02</div>
    </div>
    <div class="col-2">
    <div class="loket">
      Loket 3
      </div>
      <div class="box_kecil">B05</div>
    </div>
    <div class="col-2">
    <div class="loket">
      Loket 4
      </div>
      <div class="box_kecil">B06</div>
    </div>
    <div class="col-2">
    <div class="loket">
      Loket 5
      </div>
      <div class="box_kecil">C02</div>
    </div>
  </div>
</div>
<?= $this->include('template/footer'); ?>