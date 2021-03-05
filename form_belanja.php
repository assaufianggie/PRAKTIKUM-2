<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>     
      <div class="container-fluid p-5  shadow-sm" style="background-color:#F7DCB4;">
          <div class="row">
            <div class="col-8">
              <form method="POST" action="form_belanja.php" class="form-horizontal ">
                <h1 class="text" style="color:#C35817;">Belanja Online</h1>
                <hr>
                <div class="form-group row" style="color:#C35817;">
                  <label for="nama__customer" class="col-sm-4 col-form-label"><b>Nama Customer</b></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" style="color:#C35817;" name="namacustomer">
                  </div>
                </div>
              <!------------------------>

                <fieldset class="form-group">
                  <div class="row" style="color:#C35817;">
                    <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                    <div class="col-sm-8">

                      <div class="form-check">
                        <input class="form-check-input" style="color:#C35817;" type="radio" id="TVz" name="produk" value="TV" required>
                        <label class="form-check-label" style="color:#C35817;" for="TVz">
                          TV
                        </label>
                      </div>
                      <!--------------------------->
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="Kulkaz" name="produk" value="Kulkas" required>
                        <label class="form-check-label" for="Kulkaz">
                          Kulkas
                        </label>
                      </div>
                      <!--------------------------->
                      <div class="form-check">
                        <input class="form-check-input" style="color:#C35817;" type="radio" id="MesinCuci" name="produk" value="Mesin Cuci" required>
                        <label class="form-check-label"style="color:#C35817;"  for="MesinCuci">
                          Mesin Cuci
                        </label>
                      </div>
                      <!--------------------------->
                      <div class="form-check">
                        <input class="form-check-input" style="color:#C35817;" type="radio" id="KipasAngin" name="produk" value="Kipas Angin" required>
                        <label class="form-check-label"style="color:#C35817;"  for="KipasAngin">
                          Kipas Angin
                        </label>
                      </div>

                    </div>  <!---col-->
                  </div> <!---row-->
                </fieldset> 
                <div class="form-group row">
                
                  <label for="jumlah__" class="col-sm-4 col-form-label" style="color:#C35817;"><b>Jumlah</b></label>
                  <div class="col-sm-5">
                    <input type="number" for="produk__" class="form-control" style="color:#C35817;" name="jumlah" value="" required>
                  </div>
                </div>

                <button href="" type="submit" class="btn pl-5 pr-5" style="background-color:#C35817; color:#F7DCB4;" name="proses">Kirim</button>
              </form>
            </div> <!-----col-6-->
            <div class="col-4 " >
                <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                  <li class="p-2 text-white" style="background-color:#C35817; color:#F7DCB4;">Daftar Harga</li>
                  <li class="p-2" style="color:#C35817;">TV : 4.200.000</li>
                  <li class="p-2" style="background-color:#F7DCB4; color:#C35817;">Kulkas : 3.100.000</li>
                  <li class="p-2" style="color:#C35817;">Mesin Cuci : 3.800.000</li>
                  <li class="p-2" style="color:#C35817;">Kipas Angin : 700.000</li>
                  <li class="p-2 text-white" style="background-color:#C35817; color:#F7DCB4;">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
          
          </div> <!---row-->
      </div> <!---containe-fluid-->

      <div class="container-fluid mt-5 mb-5 p-5 shadow-sm" style="background-color:#F7DCB4;">
        <h1 class="animate__animated animate__bounce animate__infinite	infinite animate__delay-4s	4s" style="color:#C35817;">Ini HASILNYA!</h1>
        <br>
        <?php
        $proses= $_POST['proses']; 
        $nama_customer = $_POST['namacustomer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        echo '<br/>Nama Customer: '.$nama_customer;
        echo '<br/>Pilihan Produk : '.$produk;
        echo '<br/>Jumlah Beli : '.$jumlah;
        if($produk == "TV") {
          echo "<br>Total : " . 4200000 * $jumlah;
        }
        else if ($produk == "Kulkas") {
          echo "<br>Total : " . 3100000 * $jumlah;
        }
        else if ($produk == "Kipas Angin") {
          echo "<br>Total : " . 700000 * $jumlah;
        }
        else {
          echo "<br>Total : " . 3800000 * $jumlah;
        }
        ?>
      </div>
</body>
</html>