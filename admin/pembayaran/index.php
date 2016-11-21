<?php
  include "../config/koneksi.php"; ?>
<section class="grid_9 push_3">
  <article id="formadd" style="padding:5px;display:none">
  <form method="POST" action="pembayaran/add.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Tambah Pengeluaran</legend>
            <dl class="inline">
              <dt><label>Nama Siswa</label></dt>
              <dd> :
                <select name="siswa_id">
                    <option value="" selected disabled>Pilihan</option>
                    <?php
                    $q = mysqli_query($koneksi, "select * from siswa");
                    while($da = mysqli_fetch_object($q)){
                        echo '<option value="'.$da->siswa_id.'">'.$da->nama_siswa.'</option>';
                    } ?>
                </select>
              </dd>
              <dt><label>Nama Program</label></dt>
              <dd> :
                <select name="program_id">
                    <option value="" selected disabled>Pilihan</option>
                    <?php
                    $q = mysqli_query($koneksi, "select * from program");
                    while($da = mysqli_fetch_object($q)){
                        echo '<option value="'.$da->program_id.'">'.$da->nama_program.'</option>';
                    } ?>
                </select>
              </dd>
              <div class="buttons">
                <input class="button blue" type="submit" value="Tambah">
                <input class="button blue" type="button" value="Batal" onclick="backtable()">
              </div>
            </dl>
            </fieldset>
  </form>
  </article>

  <article id="tabledata">
    <h2>Daftar Pengeluaran</h2><hr>
    <input type="button" class="button blue" value="Tambah Pengeluaran" onclick="showadd()">
    <br><br>
    <table id="table1" class="gtable sortable">
      <thead>
        <tr>
          <th>Nama Siswa</th>
          <th>Nama Program</th>
          <th>Sisa Tagihan</th>
          <th>Tagihan Terbayar</th>
          <th>Tanggal Bayar</th>
        </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          $query = mysqli_query($koneksi, "SELECT `pembayaran`.*, `siswa`.`nama_siswa`, `program`.`nama_program` FROM `pembayaran`
            LEFT JOIN `siswa` ON `pembayaran`.`siswa_id` = `siswa`.`siswa_id`
            LEFT JOIN `program` ON `pembayaran`.`program_id` = `program`.`program_id`
            ORDER BY `pembayaran`.`pembayaran_id` DESC");
          while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?php echo $data['nama_siswa']; ?></td>
          <td><?php echo $data['nama_program']; ?></td>
          <td><?php echo $data['nominal_anggaran']; ?></td>
          <td><?php echo $data['saldo_awal']; ?></td>
          <td><?php echo $data['tanggal_pembayaran']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </article>

</section>

<script type="text/javascript">
  function showadd(){
      $('#tablesubdata').fadeOut();
      $('#formadd').fadeIn();
  }
  function backtable(){
      $('#tabledata').fadeIn();
      $('#formadd').fadeOut();
  }
</script>
