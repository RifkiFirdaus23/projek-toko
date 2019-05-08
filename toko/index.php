<?php

  require 'fungsi/koneksi.php';

  $barang = mysqli_query($kon, "SELECT * FROM `tb_barang`");
  $id_order = mysqli_num_rows(mysqli_query($kon, "SELECT id_order FROM transaksi"))+1;
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Laptop Cell</title>
  </head>
  <body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="card shadow-lg my-5">
              <div class="card-header" >
                <img src="img/d.jpg" class="card-img-top" alt="...">
                <!-- https://www.freepik.com/free-photo/high-angle-view-fresh-ingredients-raw-italian-pasta_4085702.htm#index=29 -->
                <div class="text-center">
                  <h1 class="display-3 font-weight-bold my-4">~ Laptop Cell ~</h1>
                  <p class="lead">Tempat beli Laptop terpercaya!</p>
                </div>
              </div>

    		<div class="card-body px-0 py-3">
    			<div class="row mx-3">
              <?php while ($b = mysqli_fetch_assoc($barang)) : ?>
      					<form action="order.php" method="post" class="col-lg-4 col-md-6 mb-4">
      					  	<div class="card shadow-sm">
                      <input type="hidden" name="id_order" value="<?= $id_order; ?>">
      						  <img class="card-img-top" src="img/<?php echo $b['gambar'];?>" style="height: 220px;">
      						  <div class="card-body pb-1">
      						    <h4 class="card-title"><?php echo $b['nama']; ?></h4>
      						    <div class="form-group row px-3">
      						      <p class="card-text col-6">Rp.<?php echo $b['harga']; ?></p>
      						    </div>
      						  </div>

      						  <button type="submit" name="id" value="<?= $b['id_barang']; ?>" class="card-footer btn" >Pesan</button>
      						</div>
      					</form>
              <?php endwhile; ?>
    			</div>
    			<div class="row justify-content-center my-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              CheckOut
            </button>
    			</div>
    		</div>
    		<div class="card-footer bg-dark text-light py-0">
              <p class="text-center my-3">&copy; 2019 Rifky</p>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Diri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cekout.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Atas nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com">
                      </div>
                      <input type="hidden" name="id_order" value="<?php echo $id_order; ?>">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">CheckOut</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
