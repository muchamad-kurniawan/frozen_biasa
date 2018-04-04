<?php 
include 'database.php';
$db = new database();

			
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['Nama_Item'],$_POST['Stok'],$_POST['Kemasan'],$_POST['Harga_Jual_Ecer'],$_POST['Harga_Jual_Grosir'],$_POST['Jum_Grosir'],$_POST['tdisk']);
 	header("location:tabel_item.php");
 }
 	elseif($aksi == "tambahsem"){
 	$db->inputsem($_POST['nitem'],$_POST['Jumlah']);
 	header("location:form_kasir.php");
 }elseif($aksi == "hapus2"){ 	
 	$db->hapus2($_GET['nama']);
	header("location:form_kasir.php");
 }elseif($aksi == "hapus3"){ 	
 	$db->hapus3($_GET['kode_penjualan']);
	header("location:tabel_penjualan.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['Nama_Item']);
	header("location:tabel_item.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['Nama_Item'],$_POST['Stok'],$_POST['Kemasan'],$_POST['Harga_Jual_Ecer'],$_POST['Harga_Jual_Grosir'],$_POST['Jum_Grosir'],$_POST['disk']);
 	header("location:tabel_item.php");
 }
 elseif($aksi == "update2"){
 	$db->update2($_POST['nama'],$_POST['jumlah']);
 	header("location:form_kasir.php");
 }
  elseif($aksi == "update3"){
 	$db->update3($_POST['nama'],$_POST['jumlah'],$_POST['hargabeli']);
 	header("location:form_kulakan.php");
 }
?>