<?php
include "../config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * from pengeluaran where pengeluaran_id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<section id="main" class="grid_9 push_3">
<article id="dashboard" style="padding:5px;">
<form method="POST" action="pengeluaran/update.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['pengeluaran_id']; ?>">
          <fieldset>
          <legend>Edit Pengeluaran</legend>
          <dl class="inline">
              <dt><label>Nama Pengeluaran</label></dt>
              <dd> : <input type="text" name="nama_pengeluaran" value="<?php echo $row['nama_pengeluaran'] ?>" size="30"></dd>
              <dt><label>Nominal</label></dt>
              <dd> : <input type="number" name="nominal" value="<?php echo $row['nominal'] ?>" size="30"></dd>
              <dt><label>Keterangan</label></dt>
              <dd> : <textarea name="keterangan" size="30"><?php echo $row['keterangan'] ?></textarea></dd>
              <dt><label>Tanggal Pengeluaran</label></dt>
              <dd> : <input type="text" name="tanggal_pengeluaran" value="<?php echo $row['tanggal_pengeluaran'] ?>" size="30"></dd>
              <div class="buttons">
                <input class="button blue" type="submit" value="Rubah">
                <input class="button blue" type="button" value="Batal" onclick="self.history.back()">
              </div>
          </dl>
          </fieldset>
</form>
</article>
</section>
