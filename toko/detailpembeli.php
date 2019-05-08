<?php
require 'fungsi/koneksi.php';

$datapembeli = mysqli_query($kon, "SELECT * FROM transaksi");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="row mx-3">
        <?php while ($b = mysqli_fetch_assoc($datapembeli)) : ?>
          <form action="order.php" method="post" class="col-lg-4 col-md-6 mb-4">
              <div class="card shadow-sm">
                <input type="hidden" name="id_order" value="<?= $id_order; ?>">
              <div class="card-body pb-1">
                <h4 class="card-title"><?php echo $b['nama']; ?></h4>

                <div class="form-group row px-3 ">
                  <p class="card-text"><?php echo $b['email'] ?></p>
                  <p class="card-text col-6"> Total Rp.<?php echo $b['total']; ?></p>
                </div>
              </div>
              <button type="submit" name="id" value="" class="card-footer btn" >Batal</button>
            </div>
          </form>
        <?php endwhile; ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
