<?php
  include "../config/koneksi.php"; ?>
<section class="grid_9 push_3">
  <article id="formadd" style="padding:5px;display:none">
  <form method="POST" action="siswa/add.php" enctype="multipart/form-data">
            <fieldset>
            <legend>Tambah Siswa</legend>
            <dl class="inline">
            <dt><label>Nama Siswa</label></dt>
            <dd> : <input type="text" name="nama_siswa" value="" size="30"></dd>
            <dt><label>Tempat Lahir</label></dt>
            <dd> : <input type="text" name="tempat_lahir" value="" size="30"></dd>
            <dt><label>Tanggal Lahir</label></dt>
            <dd> : <input type="text" name="tanggal_lahir" value="" size="30"></dd>
            <dt><label>Kelompok</label></dt>
            <dd> :
              <select name="kelompok_id">
                  <option value="" selected disabled>Pilihan</option>
                  <?php
                  $q = mysqli_query($koneksi, "select * from kelompok");
                  while($da = mysqli_fetch_object($q)){
                      echo '<option value="'.$da->kelompok_id.'">'.$da->nama_kelompok.'</option>';
                  } ?>
              </select>
            </dd>
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
    <h2>Daftar Siswa</h2><hr>
    <input type="button" class="button blue" value="Tambah Siswa" onclick="showadd()">
    <br><br>
    <table id="table1" class="gtable sortable">
      <thead>
        <tr>
          <th>Nama Siswa</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Kelompok</th>
          <th>Tahun Ajaran</th>
          <th width="100px">Aksi</th>
        </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          $query = mysqli_query($koneksi, "SELECT `siswa`.*, `kelompok`.`nama_kelompok` FROM `siswa` left join kelompok on `siswa`.kelompok_id = `kelompok`.`kelompok_id` ORDER BY `siswa_id` ASC");
          while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td><?php echo $data['nama_siswa']; ?></td>
          <td><?php echo $data['tempat_lahir']; ?></td>
          <td><?php echo $data['tanggal_lahir']; ?></td>
          <td><?php echo $data['nama_kelompok']; ?></td>
          <td><?php echo $data['tahun_ajaran']; ?></td>
          <td>
             <a href="?module=editsiswa&id=<?php echo $data['siswa_id']; ?>" title="Edit"><img src="images/icons/edit.png" alt="Edit"></a> |
             <a href="siswa/delete.php?id=<?php echo $data['siswa_id']; ?>" title="Hapus"><img src="images/icons/cross.png" alt="Delete"></a>
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
