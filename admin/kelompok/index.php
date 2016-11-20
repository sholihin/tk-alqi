<?php
  include "../config/koneksi.php"; ?>
<section class="grid_9 push_3">
  <article id="formadd" style="padding:5px;display:none">
  <form method="POST" action="kelompok/add.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Tambah Kelompok</legend>
            <dl class="inline">
            <dt><label>Nama Kelompok</label></dt>
            <dd> : <input type="text" name="nama_kelompok" value="" size="30"></dd>
            <dt><label>Tingkat</label></dt>
            <dd> : <input type="text" name="tingkat" value="" size="30"></dd>
            <div class="buttons">
              <input class="button blue" type="submit" value="Tambah">
              <input class="button blue" type="button" value="Batal" onclick="backtable()">
            </div>
            </fieldset>
  </form>
  </article>

  <article id="tabledata">
    <h2>Daftar Kelompok</h2><hr>
    <input type="button" class="button blue" value="Tambah Kelompok" onclick="showadd()">
    <br><br>
    <table id="table1" class="gtable sortable">
      <thead>
        <tr>
          <th>Nama Kelompok</th>
          <th>Tingkat</th>
          <th width="100px">Aksi</th>
        </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM `kelompok` ORDER BY `kelompok_id` ASC");
          while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?php echo $data['nama_kelompok']; ?></td>
          <td><?php echo $data['tingkat']; ?></td>
          <td>
             <a href="?module=editkelompok&id=<?php echo $data['kelompok_id']; ?>" title="Edit"><img src="images/icons/edit.png" alt="Edit"></a> |
             <a href="kelompok/delete.php?id=<?php echo $data['kelompok_id']; ?>" title="Hapus"><img src="images/icons/cross.png" alt="Delete"></a>
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
