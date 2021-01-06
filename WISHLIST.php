<?php

include "KONEKSI-DATABASE.php";

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Wishlist</title>
    <!-- <link rel="stylesheet" type="text/css" href="CSS/HOME.css"> -->
    <link rel="stylesheet" type="text/css" href="CSS/WISHLIST.css">
</head>
<body>

    <?php
    $isitext=0;
    $isitext2=0;
    $isitext3=0;
    $isitext4=0;

    // QUERY SELECT QTY
    $query = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '1'");
    $baju = mysqli_fetch_array($query);
    if ($baju != null) {
       $isitext =  $baju['qty'];
   }


   $query2 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '2'");
   $sepatu = mysqli_fetch_array($query2);
   if ($sepatu != null) {
      $isitext2 =  $sepatu['qty'];
  }

  $query3 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang ='3'");
  $celana = mysqli_fetch_array($query3);
  if ($celana != null) {
      $isitext3 =  $ce3lana['qty'];
  }


  $query4 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '4'");
  $tas = mysqli_fetch_array($query4);
  if ($tas != null) {
      $isitext4 =  $tas['qty'];
  }
// QUERY SELECT QTY

// QUERY SELECT HARGA
  $queryHarga = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '1'");
  $baju = mysqli_fetch_array($queryHarga);
  $isiHarga =  $baju['harga'];


  $queryHarga2 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '2'");
  $sepatu = mysqli_fetch_array($queryHarga2);
  $isiHarga2 =  $sepatu['harga'];

  $queryHarga3 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang ='3'");
  $celana = mysqli_fetch_array($queryHarga3);
  $isiHarga3 =  $celana['harga'];

  $queryHarga4 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '4'");
  $tas = mysqli_fetch_array($queryHarga4);
  $isiHarga4 =  $tas['harga'];
// QUERY SELECT HARGA




  // QUERY TOTAL HARGA UPDATE
if (isset($_POST["update"])) { // 1
 $queryTotalHarga = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET qty = " . $_POST["qty"] . " WHERE id_barang = 1"
);
 $_SESSION['terbaru'] = $_POST['qty'];
 $totalHarga = $_SESSION['terbaru']* $isiHarga;

 $queryTotalHarga = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET totalharga = " . $totalHarga . " WHERE id_barang = 1"
);
} elseif (isset($_POST["update2"])) { // 2
 $queryTotalHarga2 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET qty = " . $_POST["qty2"] . " WHERE id_barang = 2"
);
 $_SESSION['terbaru2'] = $_POST['qty2'];
 $totalHarga2 =$_SESSION['terbaru2'] * $isiHarga2;

 $queryTotalHarga2 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET totalharga = " . $totalHarga2 . " WHERE id_barang = 2"
);
} elseif (isset($_POST{"update3"})) { // 3
 $queryTotalHarga3 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET qty = " . $_POST["qty3"] . " WHERE id_barang = 3"
);
 $_SESSION['terbaru3'] = $_POST['qty3'];
 $totalHarga3 = $_SESSION['terbaru3'] * $isiHarga3;

 $queryTotalHarga3 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET totalharga = " . $totalHarga3 . "WHERE id_barang = 3"
);

} elseif (isset($_POST["update4"])) { // 4
 $queryTotalHarga4 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET qty = " . $_POST["qty4"] . " WHERE id_barang = 4"
);
 $_SESSION['terbaru4'] = $_POST['qty4'];
 $totalHarga14 = $_SESSION['terbaru4'] * $isiHarga4;

 $queryTotalHarga4 = mysqli_query($koneksiDatabase, 
    "UPDATE detailpembelian SET totalharga = " . $totalHarga4 . " WHERE id_barang = 4"
);
}
// QUERY TOTAL HARGA UPDATE

// QUERY QTY
$query = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '1'");
$baju = mysqli_fetch_array($query);
if ($baju != null) {
   $isitext =  $baju['qty'];
} else {
    $isitext = 0;
}


$query2 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '2'");
$sepatu = mysqli_fetch_array($query2);
if ($sepatu != null) {
  $isitext2 =  $sepatu['qty'];
} else {
    $isitext2 = 0;
}

$query3 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '3'");
$celana = mysqli_fetch_array($query3);
if ($celana != null) {
  $isitext3 =  $celana['qty'];
} else {
    $isitext3 = 0;
}

$query4 = mysqli_query($koneksiDatabase, "select qty from detailpembelian where id_barang = '4'");
$tas = mysqli_fetch_array($query4);
if ($tas != null) {
  $isitext4 =  $tas['qty'];
} else {
    $isitext4 = 0;
}

//   QUERY HARGA
$queryHarga = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '1'");
$baju = mysqli_fetch_array($queryHarga);
$isiHarga =  $baju['harga'];

$queryHarga2 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '2'");
$sepatu = mysqli_fetch_array($queryHarga2);
$isiHarga2 =  $sepatu['harga'];

$queryHarga3 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang ='3'");
$celana = mysqli_fetch_array($queryHarga3);
$isiHarga3 =  $celana['harga'];

$queryHarga4 = mysqli_query($koneksiDatabase, "select harga from barang where id_barang = '4'");
$tas = mysqli_fetch_array($queryHarga4);
$isiHarga4 =  $tas['harga'];


$totalHarga = $isitext * $isiHarga;
$totalHarga2 = $isitext2 * $isiHarga2;
$totalHarga3 = $isitext3 * $isiHarga3;
$totalHarga14 = $isitext4 * $isiHarga4;

  // VIEW TOTAL HARGA
$isiViewTotalHarga = $isiViewTotalHarga2 = $isiViewTotalHarga3 = $isiViewTotalHarga4 = 0;

$queryViewTotalHarga = mysqli_query($koneksiDatabase, "select totalharga from detailpembelian where id_barang = '1'");
$baju = mysqli_fetch_array($queryViewTotalHarga);
if ($baju != null) {
  $isiViewTotalHarga =  $baju['totalharga'];
} else {
    $isiViewTotalHarga = 0;
}

$queryViewTotalHarga2 = mysqli_query($koneksiDatabase, "select totalharga from detailpembelian where id_barang = '2'");
$sepatu = mysqli_fetch_array($queryViewTotalHarga2);
if ($sepatu != null) {
   $isiViewTotalHarga2 =  $sepatu['totalharga'];
} else {
    $isiViewTotalHarga2 = 0;
}

$queryViewTotalHarga3 = mysqli_query($koneksiDatabase, "select totalharga from detailpembelian where id_barang ='3'");
$celana = mysqli_fetch_array($queryViewTotalHarga3);
if ($celana != null) {
   $isiViewTotalHarga3 =  $celana['totalharga'];
} else {
    $isiViewTotalHarga3 = 0;
}


$queryViewTotalHarga4 = mysqli_query($koneksiDatabase, "select totalharga from detailpembelian where id_barang = '4'");
$tas = mysqli_fetch_array($queryViewTotalHarga4);
if ($tas != null) {
   $isiViewTotalHarga4 =  $tas['totalharga'];
} else {
    $isiViewTotalHarga4 = 0;
}
// VIEW TOTAL HARGA


/*QUERY HAPUS*/
if (isset($_POST['trash1'])){
    $hapus=mysqli_query($koneksiDatabase, "DELETE FROM detailpembelian where id_barang = '1' ");
}elseif (isset($_POST['trash2'])){
    $hapus2=mysqli_query($koneksiDatabase, "DELETE FROM detailpembelian where id_barang = '2' ");
}elseif(isset($_POST['trash3'])){
    $hapus3=mysqli_query($koneksiDatabase, "DELETE FROM detailpembelian where id_barang = '3' ");
}elseif(isset($_POST['trash4'])){
    $hapus4=mysqli_query($koneksiDatabase, "DELETE FROM detailpembelian where id_barang = '4' ");
}


/*query bayar*/
if (isset($_POST['bayarfinal'])){
    $q= mysqli_query($koneksiDatabase,"SELECT id_pelanggan from pelanggan where username = '".$_SESSION['username']."'");
    $idpel=mysqli_fetch_array($q);
    $uangpel=$_POST['uangpelanggan'];
    $insertuangpelanggan = mysqli_query($koneksiDatabase,"insert into pembayaran values ('','".$uangpel ."', '".$idpel['id_pelanggan']."')");
    $querydelete=mysqli_query($koneksiDatabase,"truncate detailpembelian");

}


/*QUERY TOTAL HARGA FINAL*/
$queryTotalHarga1 = mysqli_query($koneksiDatabase, "SELECT totalharga FROM detailpembelian WHERE id_barang = 1");
$rs = mysqli_fetch_array($queryTotalHarga1);
if ($rs != null) {
  $totalHarga1 =  $rs['totalharga'];
} else {
    $totalHarga1 = 0;
}

$queryTotalHarga2 = mysqli_query($koneksiDatabase, "SELECT totalharga FROM detailpembelian WHERE id_barang = 2");
$rs = mysqli_fetch_array($queryTotalHarga2);
if ($rs != null) {
  $totalHarga2 =  $rs['totalharga'];
} else {
    $totalHarga2 = 0;
}

$queryTotalHarga3 = mysqli_query($koneksiDatabase, "SELECT totalharga FROM detailpembelian WHERE id_barang = 3");
$rs = mysqli_fetch_array($queryTotalHarga3);
if ($rs != null) {
  $totalHarga3 =  $rs['totalharga'];
} else {
    $totalHarga3 = 0;
}

$queryTotalHarga4 = mysqli_query($koneksiDatabase, "SELECT totalharga FROM detailpembelian WHERE id_barang = 4");
$rs = mysqli_fetch_array($queryTotalHarga4);
if ($rs != null) {
  $totalHarga4 =  $rs['totalharga'];
} else {
    $totalHarga4 = 0;
}

$totalHargaFinal = $totalHarga1 + $totalHarga2 + $totalHarga3 + $totalHarga4;
/*QUERY TOTAL HARGA FINAL*/


?>


<div class="container">
  <div class="topbar">
 
<div class="img2">
    <a href="HOME.php"><img src="FOTO/logo.png" width="15%"></a>
</div>

<div class="navbar">
    <ul>
        <li><a class="link-navigasi" href="HOME.php">HOME</a></li>
        <li><a class="link-navigasi" href="WISHLIST.php">CART</a></li>
        <?php
        if (!isset($_SESSION["username"])) {
            echo "<li><a class='link-navigasi' href='LOGIN.php'>LOGIN</a></li>";
        } else {
            echo "<li><a class='link-navigasi' href='AKUN.php'>AKUN</a></li>";
            echo "<li><a class='link-navigasi' href='LOGOUT.php'>LOGOUT</a></li>";
        }
        ?>
    </ul>
</div>
</div>
</div>

<article>
    <div>
        <div>
           <div class="prekonten">
            <div class="konten">
                <form action="" method="post">                        
                    <a href=""><img src="FOTO/kaoshitampolos.jpg" style="margin-top: 50px; width: 98%; height: 50%;"></a>
                    <div class="judul">
                        <a href="hero-cypher.html">Baju</a>
                    </div>
                    <p align="justify">
                        Baju hitam polos khas surabaya.
                        <br><br><br> <input type="text" name="qty" value="<?php if ($isitext!=0)  echo $isitext; ?>"> <br> <input type="text" name="total" value="<?php if ($isiViewTotalHarga!=0) echo $isiViewTotalHarga; ?>" disabled>
                    </p>
                    <button type="submit" name="update">Update</button>
                </div>

                <div class="konten">
                    <a href=""><img src="FOTO/sepatu.jpg" style="width: 95%; height: 38%;"></a>
                    <div class="judul">
                        <a href="hero-cypher.html">Sepatu</a>
                    </div>
                    <p align="justify">
                        Sepatu high kekinian.
                        <br><br> <input type="text" name="qty2" value="<?php if ($isitext2!=0)  echo $isitext2; ?>"> <br> <input type="text" name="total2" value="<?php if ($isiViewTotalHarga2!=0) echo $isiViewTotalHarga2; ?>" disabled>
                    </p>
                    <button type="submit" name="update2">Update</button>
                </div>                

                <div>
                    <div class="konten">
                        <a href=""><img src="FOTO/celana.png" style="width: 100%; height: 48%;"></a>
                        <div class="judul">
                            <a href="hero-cypher.html">Celana</a>
                        </div>
                        <p align="justify">
                            Celana hits anak jaman now.
                            <br><br><br><br> <input type="text" name="qty3" value="<?php if ($isitext3!=0)  echo $isitext3; ?>"> <br> <input type="text" name="total3" value="<?php if ($isiViewTotalHarga3!=0) echo $isiViewTotalHarga3; ?>" disabled>
                        </p>
                        <button type="submit" name="update3">Update</button>
                    </div>

                    <div>
                        <div class="konten">
                            <a href=""><img src="FOTO/tas.jpg" style="width: 95%; height: 38%;"></a>
                            <div class="judul">
                                <a href="hero-cypher.html">Tas</a>
                            </div>
                            <p align="justify">
                                Tas anak muda tempo 90's.
                                <br><br> <input type="text" name="qty4" value="<?php if ($isitext4!=0)  echo $isitext4; ?>"> <br> <input type="text" name="total4" value="<?php if ($isiViewTotalHarga4!=0) echo $isiViewTotalHarga4; ?>" disabled>
                            </p>
                            <button type="submit" name="update4">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="container5">
            <div>
                <form class="bayar" method="post">
                    <input type="text" name="uangpelanggan">
                    <br>
                    <input type="text" name="totalfinalharga" value="<?php echo $totalHargaFinal; ?>" disabled>  
                    <br><br><br>
                    <button type="submit" name="bayarfinal">BAYAR</button>
                    <div>
                        <button class="buttonstyle" type="submit" name="trash1"><img src="FOTO/TRASH.png" width="70%"></button>
                        <button class="buttonstyle2" type="submit" name="trash2"><img src="FOTO/TRASH.png" width="70%"></button>
                        <button class="buttonstyle3" type="submit" name="trash3"><img src="FOTO/TRASH.png" width="70%"></button>
                        <button class="buttonstyle4" type="submit" name="trash4"><img src="FOTO/TRASH.png" width="70%"></button>
                    </div>
                </form>
            </div>
        </div>
        

    </body>
    </html>