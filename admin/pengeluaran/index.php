<?php
  include "../config/koneksi.php"; ?>
<section class="grid_9 push_3">
  <article id="formadd" style="padding:5px;display:none">
  <form method="POST" action="pengeluaran/add.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Tambah Pengeluaran</legend>
            <dl class="inline">
              <dt><label>Nama Pengeluaran</label></dt>
              <dd> : <input type="text" name="nama_pengeluaran" value="" size="30"></dd>
              <dt><label>Nominal</label></dt>
              <dd> : <input type="number" name="nominal" value="" size="30"></dd>
              <dt><label>Keterangan</label></dt>
              <dd> : <textarea name="keterangan" size="30"></textarea></dd>
              <dt><label>Tanggal Pengeluaran</label></dt>
              <dd> : <input type="text" name="tanggal_pengeluaran" value="" size="30"></dd>
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
          <th>Nama Pengeluaran</th>
          <th>Nominal</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
          <!-- <th width="100px">Aksi</th> -->
        </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM `pengeluaran` ORDER BY `pengeluaran_id` ASC");
          while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?php echo $data['nama_pengeluaran']; ?></td>
          <td><?php echo $data['nominal']; ?></td>
          <td><?php echo $data['keterangan']; ?></td>
          <td><?php echo $data['tanggal_pengeluaran']; ?></td>
          <!-- <td>
             <a href="?module=editpengeluaran&id=<?php echo $data['pengeluaran_id']; ?>" title="Edit"><img src="images/icons/edit.png" alt="Edit"></a> |
             <a href="pengeluaran/delete.php?id=<?php echo $data['pengeluaran_id']; ?>" title="Hapus"><img src="images/icons/cross.png" alt="Delete"></a>
          </td> -->
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
