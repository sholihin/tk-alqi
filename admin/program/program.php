<section class="grid_9 push_3">
  <article id="formadd" style="padding:5px;display:none">
  <form method="POST" action="program/addprogram.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Tambah Program</legend>
            <dl class="inline">
            <dt><label>Program</label></dt>
            <dd> : <input type="text" name="nama_program" value="" size="30"></dd>
            <dt><label>Nominal</label></dt>
            <dd> : <input type="number" name="nominal" value="" size="30"></dd>
            <dt><label>Tahun Ajaran</label></dt>
            <dd> : <input type="text" name="tahun_ajaran" value="" size="30"></dd>
            <div class="buttons">
              <input class="button blue" type="submit" value="Tambah">
              <input class="button blue" type="button" value="Batal" onclick="backtable()">
            </div>
            </fieldset>
  </form>
  </article>

  <article id="tabledata">
    <h2>Daftar Program</h2><hr>
    <input type="button" class="button blue" value="Tambah Program" onclick="showadd()">
    <br><br>
    <table id="table1" class="gtable sortable">
      <thead>
        <tr>
          <th>Nama Program</th>
          <th>Nominal</th>
          <th>Tahun Ajaran</th>
          <th width="100px">Aksi</th>
        </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          include "../config/koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM `program` ORDER BY `program_id` ASC");
          while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?php echo $data['nama_program']; ?></td>
          <td>Rp. <?php echo number_format($data['nominal']); ?></td>
          <td><?php echo $data['tahun_ajaran']; ?></td>
          <td>
             <a href="?module=editprogram&id=<?php echo $data['program_id']; ?>" title="Edit"><img src="images/icons/edit.png" alt="Edit"></a> |
             <a href="program/deleteprogram.php?id=<?php echo $data['program_id']; ?>" title="Hapus"><img src="images/icons/cross.png" alt="Delete"></a>
          </td>
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
