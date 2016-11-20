<?php
include "../config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * from siswa where siswa_id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<section id="main" class="grid_9 push_3">
<article id="dashboard" style="padding:5px;">
<form method="POST" action="siswa/update.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['siswa_id']; ?>">
          <fieldset>
          <legend>Edit Siswa</legend>
          <dl class="inline">
            <dt><label>Nama Siswa</label></dt>
            <dd> : <input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" size="30"></dd>
            <dt><label>Tempat Lahir</label></dt>
            <dd> : <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" size="30"></dd>
            <dt><label>Tanggal Lahir</label></dt>
            <dd> : <input type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" size="30"></dd>
            <dt><label>Kelompok</label></dt>
            <dd> :
              <select name="kelompok_id">
                  <option value="" selected disabled>Pilihan</option>
                  <?php
                  $q = mysqli_query($koneksi, "select * from kelompok");
                  while($da = mysqli_fetch_object($q)){
                      echo '<option value="'.$da->kelompok_id.'"';
                      if($row['kelompok_id'] == $da->kelompok_id){ echo 'selected'; }
                      else '';
                      echo '>'.$da->nama_kelompok;
                      echo '</option>';
                  } ?>
              </select>
            </dd>
            <dt><label>Tahun Ajaran</label></dt>
            <dd> : <input type="text" name="tahun_ajaran" value="<?php echo $row['tahun_ajaran']; ?>" size="30"></dd>
          <div class="buttons">
            <input class="button blue" type="submit" value="Rubah">
            <input class="button blue" type="button" value="Batal" onclick="self.history.back()">
          </div>
          </fieldset>
</form>
</article>
</section>
