<?php
$barang_nama = array("Terigu", "Gula", "Telor", "Beras");
$berat = array(1.5, 2, 1, 3);
$stok = array(30, 20, 0, 30);
?>

<!DOCTYPE html>
<html style="background-color:#9f98eb">
<head>
<style>
table {
  width: 100%;
  border: 1px solid #663000;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 16px;
  border: 1px solid ;
  border-collapse: collapse;
}
</style>
</head>
<body>
<h1 style="Color:black; text-align:center; margin-top : 150px;">Toko Kelontong Pak Joy </h1>
<table>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Berat(kg)</th>
        <th>Berat(g)</th>
        <th>Berat(mg)</th>
        <th>Stok</th>
      </tr> 
      <?php $nomor = 1;  
      for ($i=0; $i < 4; $i++) 
      { ?> 
      <?php $color;
        if ($stok[$i] == 0) {
        $color = "style='background-color: red;'";
        }else{
        $color = "style='background-color:#9f98eb'";
        } ?> <tr>
        <td> <?php echo $nomor; ?> </td>
        <td> <?php echo $barang_nama[$i]; ?> </td>
        <td> <?php echo $berat[$i]; ?> </td>
        <td> <?php echo $berat[$i] * 1000; ?> </td>
        <td> <?php echo $berat[$i] * 1000000; ?> </td>
        <td <?= $color ?>> <?php if ($stok[$i] == 0 ){
            echo "kosong";
            }
            else {
                echo $stok[$i];
            }?> </td>
      </tr> 
      <?php $nomor = $nomor + 1; } ?>
</table>
  <h3 style="text-align:left; margin-top : 10px;">Nama: Hafizh Fuqaha <br>NIM: 105219028 </h3>
</body>
</html>