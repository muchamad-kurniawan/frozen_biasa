<?php 
$con=mysqli_connect("localhost","root","","frozen");
if (mysqli_connect_errno())
{
	echo "gagak konek".mysqli_connect_errno();
}

$sapi= $_GET['kode_pembelian'];
echo $sapi;

$sql="select * from asumaneh2 where kode='$sapi'";
$hasil=mysqli_query($con,$sql);
$baris=mysqli_num_rows($hasil);
while ($data  = mysqli_fetch_array($hasil,MYSQL_ASSOC))
{
	$nama=$data["nama"];
	$jum=$data["jumlah"];

	echo $nama;
	echo "<br><br>";
	$sql2="select Stok from item where Nama_Item='$nama'";
	$hasil2=mysqli_query($con,$sql2);
	$data3 = mysqli_fetch_array($hasil2,MYSQL_ASSOC);
	$Stok=$data3["Stok"];
	echo "stok".$Stok;
	$sql3="update item set Stok=$Stok-$jum where Nama_Item='$nama'";
	$hasil3=mysqli_query($con,$sql3);
	
}

$sql4="delete from pembelian where kode_pembelian='$sapi'";
$hasil4=mysqli_query($con,$sql4);

$sql5="delete from asumaneh2 where kode='$sapi'";
$hasil5=mysqli_query($con,$sql5);

header ("location:form_pembelian.php");
?>
