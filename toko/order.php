<?php

  require 'fungsi/koneksi.php';

  $id_order = $_POST['id_order'];
  $id_barang = $_POST['id'];

  $send = mysqli_query($kon, "INSERT INTO keranjang VALUES('',$id_order,$id_barang)");
  if ($send) : ?>

  <script type="text/javascript">
    alert("Pesanan Dikonfirmasi, Jika Sudah Pilih Barang Klik CheckOut Untuk Memulai Membeli");
    window.location.href="index.php";
  </script>
<?php endif  ?>
