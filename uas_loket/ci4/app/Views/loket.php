<?= $this->include('template/header'); ?>

<h1 class="judul">Pelayanan Loket 1 (Customer Service)</h1>

<div class="container" style="margin-left:165px">
  <div class="row">
  <div class="col-4">
      <div class="loket">
          Sedang Dilayani
      </div>
      <div class="box">
          A01
      </div>
  </div>
  <div class="col-5">
      <div class="daftar">
          Daftar Antrian Selanjutnya
      </div>
      <table border="2">
        <tr>
            <td class="col-3" style="padding: 10px;text-align:center;	background-color: rgb(106, 255, 143)">No Antrian</td>
            <td class="col-3" style="padding: 10px;text-align:center;	background-color: rgb(106, 255, 143)">Panggil</td>
            <td class="col-3" style="padding: 10px;text-align:center;	background-color: rgb(106, 255, 143)">Keterangan</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center">A02</td>
            <td id="box_4">Panggil Lagi</td>
            <td>Tidak Ada</td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center">A03</td>
            <td id="box_5">Panggil</td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center">A04</td>
            <td id="box_5">Panggil</td>
            <td></td>
        </tr>
        <tr>
            <td style="font-weight:bold;text-align:center">A05</td>
            <td id="box_5">Panggil</td>
            <td></td>
        </tr>
    </table>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="loket">
            Selesai
</div>
</div>
</div>
    
<?= $this->include('template/footer'); ?>