<?php
include "../config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * from program where program_id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<section id="main" class="grid_9 push_3">
<article id="dashboard" style="padding:5px;">
<form method="POST" action="program/updateprogram.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['program_id']; ?>">
          <fieldset>
          <legend>Edit Program</legend>
          <dl class="inline">
          <dt><label>Nama Program</label></dt>
          <dd> : <input type="text" name="nama_program" value="<?php echo $row['nama_program']; ?>" size="30"></dd>
          <dt><label>Nominal</label></dt>
          <dd> : <input type="number" name="nominal" value="<?php echo $row['nominal']; ?>" size="30"></dd>
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
