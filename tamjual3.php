		<?php 
$con=mysqli_connect("localhost","root","","frozen");
if (mysqli_connect_errno())
{
	echo "gagak konek".mysqli_connect_errno();
}


$today = date("Ymd");
//$today = ('20180121');
//$query = "SELECT max(kode_penjualan) AS last FROM Penjualan";

$sql="select * from gatel2";
$hasil=mysqli_query($con,$sql);
$query = "SELECT max(kode_pembelian) AS last FROM pembelian";
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
//echo $lastNoUrut;
$nextNoUrut = $lastNoUrut + 1;
$nextNoTransaksi = $today.sprintf('%04s', $nextNoUrut);

$tdisk=0;
$belanja=0;
while($row=mysqli_fetch_array($hasil,MYSQL_ASSOC))
{
	$nama=$row["nama"];
  $jumlah=$row["jumlah"];
  $harga=$row["hargabeli"];    
  $belanja=$belanja+$harga;                               
   

	$sql2="insert into asumaneh2 values ('$nextNoTransaksi','$nama',$harga,$jumlah)";
	$hasil2=mysqli_query($con,$sql2);


									$Stok=$data1['Stok'];
                                      $query5="update item set Stok= Stok+$jumlah where Nama_Item='$nama'";
                                      $hasil5 = mysqli_query($con,$query5);
}

$namac=$_POST['asu'];
$query4 ="insert into pembelian values ('$nextNoTransaksi','$today','$namac',$belanja) " ;
                                    $hasil2 = mysqli_query($con,$query4);
$query5 ="delete from gatel2" ;
                                    $hasil5 = mysqli_query($con,$query5);

                                     header ("location:form_kulakan.php");

?>
<meta http-equiv="refresh" content="0;url=home.php?page=kategori" />    