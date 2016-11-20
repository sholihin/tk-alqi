<?php
include "../config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * from kelompok where kelompok_id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<section id="main" class="grid_9 push_3">
<article id="dashboard" style="padding:5px;">
<form method="POST" action="kelompok/update.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['kelompok_id']; ?>">
          <fieldset>
          <legend>Edit Kelompok</legend>
          <dl class="inline">
            <dt><label>Nama Kelompok</label></dt>
            <dd> : <input type="text" name="nama_kelompok" value="<?php echo $row['nama_kelompok']; ?>" size="30"></dd>
            <dt><label>Tempat Lahir</label></dt>
            <dd> : <input type="text" name="tingkat" value="<?php echo $row['tingkat']; ?>" size="30"></dd>
          </dl>
          <div class="buttons">
            <input class="button blue" type="submit" value="Rubah">
            <input class="button blue" type="button" value="Batal" onclick="self.history.back()">
          </div>
          </fieldset>
</form>
</article>
</section>
