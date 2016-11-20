<section id="main" class="grid_9 push_3">
<article id="dashboard" style="padding:5px;">
<form method="POST" action="modul/mod_siswa/aksi_siswa.php?module=siswa&amp;act=update_siswa" enctype="multipart/form-data">
          <input type="hidden" name="id" value="7">
          <fieldset>
          <legend>Edit Member</legend>
          <dl class="inline">
          <dt><label>Fullname</label></dt>
          <dd> : <input type="text" name="fullname" value="" size="30"></dd>
          <dt><label>City</label></dt>
          <dd> : <input type="text" name="city" value="" size="30"></dd>
          <dt><label>Country</label></dt>
          <dd> : <input type="text" name="country" value="" size="30"></dd>
          <dt><label>Address</label></dt>
          <dd> : <input type="text" name="address" value="" size="30"></dd>
          <dt><label>Tanggal Lahir</label></dt>
          <dd> : <select name="tgl">
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                </select>
                <select name="bln">
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10" selected="">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
                <select name="thn">
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
                  <option value="1952">1952</option>
                </select>
             <label>
                                          </dd>
                                          <dt><label>Agama</label></dt>        <dd> : <select name="agama">
                                           <option value="Islam" selected="">Islam</option>
                                           <option value="Islam">Islam</option>
                                           <option value="Kristen">Kristen</option>
                                           <option value="Katolik">Katolik</option>
                                           <option value="Hindu">Hindu</option>
                                           <option value="Buddha">Buddha</option>
                                           </select></dd>
          <dt><label>Foto</label></dt>   <dd> : <ul class="photos sortable ui-sortable">
                    <li>
                    <img src="../foto_siswa/medium_foto gw.jpg">
                    <div class="links">
                    <a href="../foto_siswa/medium_foto gw.jpg" rel="facebox">View</a>
		    <div>
                    </div></div></li>
                  </ul></dd>
          <dt><label>Email</label></dt>        <dd> : <input type="text" name="email" size="30" value="mohamad.sholihin.it@gmail.com"></dd>
          <dt><label>No Telp/HP</la
          <dt><label>Ganti Foto</label></dt>
          <dd> : <input type="file" name="fupload" size="40">
                                                <small>Tipe foto harus JPG/JPEG dan ukuran lebar maks: 400 px</small>
                                                <small>Apabila foto tidak diganti, dikosongkan saja</small></dd><dt><label>Blokir</label></dt>     <dd> : <label><input type="radio" name="blokir" value="Y"> Y</label>
                                           <label><input type="radio" name="blokir" value="N" checked=""> N </label></dd></dl>
          <div class="buttons">
          <input class="button blue" type="submit" value="Update">
          <input class="button blue" type="button" value="Batal" onclick="self.history.back()">
          </div>
          </fieldset>
        </form>
</article>
</section>