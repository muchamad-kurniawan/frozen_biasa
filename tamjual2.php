		<?php 
$con=mysqli_connect("localhost","root","","frozen");
if (mysqli_connect_errno())
{
	echo "gagak konek".mysqli_connect_errno();
}


$today = date("Ymd");
//$today = ('20180121');
//$query = "SELECT max(kode_penjualan) AS last FROM Penjualan";

$sql="select * from gatel";
$hasil=mysqli_query($con,$sql);
$query = "SELECT max(kode_penjualan) AS last FROM Penjualan";
$hasil1 = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil1,MYSQL_ASSOC);
$lastNoTransaksi = $data['last'];
if ($today== substr($lastNoTransaksi, 0, 8))
{
$lastNoUrut = substr($lastNoTransaksi, 8, 4);
}
else
{
     $lastNoUrut=0;
}
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);

$tdisk=0;
$belanja=0;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Struk Pembelian</title>
</head>
<body>
<div>
  <p align="center" style="font-size: 15px;"><b>Frozen Food</b><br>
Jln. Rungkut Madya 193 Surabaya
<br>Kasir ()
  </p>
</div>
  <table align="center" style="font-size: 10px;">
    <tr>
      <td><b>Item</b></td>
      <th>  </th> <th>  </th>
      <td><b>Harga</b></td>
      <th>  </th> <th>  </th>
      <td><b>Qty</b></td>
      <th>  </th> <th>  </th>
      <td><b>Total</b></td>
    </tr>


<?php
$diskon=0;
while($row=mysqli_fetch_array($hasil,MYSQL_ASSOC))
{
	$nama=$row["nama"];
  $jumlah=$row["jumlah"];                               
    $query3="select * from item where Nama_Item='$nama'";
	$hasil3 = mysqli_query($con,$query3);
	$data1  = mysqli_fetch_array($hasil3,MYSQL_ASSOC);

	if ($row['jumlah']>=$data1['Jum_Grosir'])
                                      {
                                        $harga=$data1['Harga_Jual_Grosir'];  
                                      }
                                      else
                                      {
                                        $harga=$data1['Harga_Jual_Ecer'];  
                                      }
	
	$jumlah=$row["jumlah"];

	$sql2="insert into asumaneh values ('$nextNoTransaksi','$nama',$jumlah,$harga)";
	$hasil2=mysqli_query($con,$sql2);

$tot_harga=$row['jumlah']*$harga;
                                      $belanja=$belanja+$tot_harga;
                                   $tdisk=$tdisk+$row['jumlah']*$data1['disk'];	
                                   if ($tdisk>10)
                                    {
                                      $diskon=$tdisk*1000;
                                    
                                    }
                                    else
                                    {
                                      $diskon=0;
                                    }
                                    $Nama_Item=$data1['Nama_Item'];
									$Stok=$data1['Stok'];
                                      $query5="update item set Stok= $Stok-$jumlah where Nama_Item='$Nama_Item'";
                                      $hasil5 = mysqli_query($con,$query5);
?>
<tr>
          <td><?php echo $nama; ?></td>
          <td>  </td> <td>  </td>
          <td><?php echo $harga; ?></td>
          <td>  </td> <td>  </td>
          <td><?php echo  $jumlah; ?></td>
          <td>  </td> <td>  </td>
          <td><?php echo number_format($tot_harga,0,".","."); ?></td>
        </tr>
<?php
}

$bayar=$belanja-$diskon;
$namac=$_POST['asu'];
$query4 ="insert into penjualan values ('$nextNoTransaksi','$today','$namac',$bayar) " ;
                                    $hasil2 = mysqli_query($con,$query4);
$query5 ="delete from gatel" ;
                                    $hasil5 = mysqli_query($con,$query5);

                    
$uang=0;
$susok=0;
?>
<tr>
      <td></td>
      <td>  </td> <td>  </td>
      
      <td colspan="4">Total</td>
      <td>  </td> <td>  </td>
      <td><?php echo number_format($bayar,0,".","."); ?></td>
    </tr>
    <tr>
      <td></td>
      <td>  </td> <td>  </td>
      
      <td colspan="4">Dibayarkan</td>
      <td>  </td> <td>  </td>
      <td><?php echo $uang; ?></td>
    </tr>
    <tr>
      <td></td>
      <td>  </td> <td>  </td>
      <td colspan="4">Kembali</td>
      
      <td>  </td> <td>  </td>
      <td><?php echo $susok; ?></td>
    </tr>
  </table>
<div align="center">
  <label>Terima Kasih</label><br>
  <label>Selamat Datang Kembali</label>

  </div>
  
  <script>
window.print();
</script>

<br>
<div align="center">
<a href="">
  <button>Fozen Food Surabaya Corner</button>
</a>
</div>

</body>
</html>