<?php 
 include '_loader.php'; 
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();
  
?>

<!DOCTYPE html>
<html lang="en" class="lightblue-theme"> <!-- /.Pnegaturan warna tema -->

<?php include '_layouts/head.php'?> <!-- /.mengakses file head.php -->

<body>
    <div class="row no-gutters vh-100 loader-screen">
        <div class="col align-self-center text-white text-center">
            <img src="<?=templates()?>img/logos.png" alt="logo" class="logo-small">
            <h1 class="mt-3"><span class="font-weight-light ">WebGIS</span>Losari</h1>
            <p class="text-mute text-uppercase small">Kab.Brebes Prov.Jawa Tengah</p>
            <div class="laoderhorizontal">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
<?php
  include '_layouts/sidebar.php'; 
  include '_layouts/header.php';

  ?>

  <?php
  echo $content;
  ?>
   <!-- /.content -->

  <?php


  include '_layouts/js.php';


?> 

</div>
</body>
</html>
 