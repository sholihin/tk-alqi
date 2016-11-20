<section id="main" class="grid_9 push_3">
  <article id="detail">
    <h2>Konfirmasi Pesanan</h2><hr>
    <div style="overflow-x:scroll">
    <table id="table1" class="gtable sortable">
      <thead>
        <tr>
          <th>Invoice</th>
          <th>Total Tagihan</th>
          <th>Bank</th>
          <th>No Rekening</th>
          <th>Atas Nama</th>
          <th>Ke Rekening</th>
          <th>Jumlah Bayar</th>
          <th>Bukti</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
          </tr>
      </thead>
      <tbody class="ui-sortable">
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM `konfirmasi` ORDER BY `id` DESC");
          while($data = mysqli_fetch_array($query)){
          $total += ($data['qty'] * $data['price_product']);
        ?>
        <tr>
          <td><?php echo $data['invoice']; ?></td>
          <td><?php echo $data['total_tagihan']; ?></td>
          <td><?php echo $data['nama_bank']; ?></td>
          <td><?php echo $data['no_rekening']; ?></td>
          <td><?php echo $data['atas_nama']; ?></td>
          <td><?php echo $data['rekening_tujuan']; ?></td>
          <td><?php echo $data['jumlah_bayar']; ?></td>
          <td><img src="../buktibayar/<?php echo $data['bukti']; ?>" style="width:70px;"></td>
          <td><?php echo $data['keterangan']; ?></td>
          <td><?php echo $data['date']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </article>
</section>
