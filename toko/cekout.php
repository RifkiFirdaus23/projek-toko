<?php

  require 'fungsi/koneksi.php';

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $id_order = $_POST["id_order"];

  $total = mysqli_fetch_assoc(mysqli_query($kon, "SELECT SUM(harga) AS J FROM tb_barang
                                          JOIN keranjang ON `tb_barang`.`id_barang` = `keranjang`.`id_barang`
                                          WHERE id_order = $id_order"))['J'];
  $input = mysqli_query($kon, "INSERT INTO transaksi VALUES('', '$nama', '$email', $total, $id_order)");

if ($input): ?>
<script type="text/javascript">
  alert("CheckOut Telah Berhasil, Di Harap Menunnggu Konfirmasi Dari Admin Melalui Email");
  window.location.href="detailpembeli.php";
</script>
<?php endif ?>
