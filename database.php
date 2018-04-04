<?php 
 
class database
{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "frozen";
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data()
	{
	//$data = mysql_query("select Nama_Item,Stok,Harga_Jual_Ecer,Harga_Jual_Grosir from item order by Nama_Item");
	$data = mysql_query("select * from item order by Nama_Item");
	while($d = mysql_fetch_array($data))
		{
			$hasil[] = $d;
		}
	return $hasil;
	}

	function inputsem($nitem,$Jumlah)
	{
		mysql_query("insert into sementara values('$nitem','$Jumlah')");
	}

	
	
	function input($Nama_Item,$Stok,$Kemasan,$Harga_Jual_Ecer,$Harga_Jual_Grosir,$Jum_Grosir,$tdisk)
	{
		mysql_query("insert into item values('$Nama_Item','$Stok','$Kemasan','$Harga_Jual_Ecer','$Harga_Jual_Grosir','$Jum_Grosir','$tdisk')");
	}

	function hapus2($nama)
	{
		mysql_query("delete from gatel where nama='$nama'");
	}

	function hapus3($kode_penjualan)
	{
		//jek belum bisa trigger;
		
		$data = mysql_query("select * from det_penjualan where kode_penjualan='$kode_penjualan'");
		
		while($d = mysql_fetch_array($data))
		{
			$jum=$d['Jumlah'];
			echo $jum;

			$nama=$d['Nama_Item'];
			mysql_query("update item set Stok=Stok+$jum where Nama_Item='$nama'");
		}
		mysql_query("delete from penjualan where kode_penjualan='$kode_penjualan'");
		mysql_query("delete from det_penjualan where kode_penjualan='$kode_penjualan'");
		//kurang trigger untuk menambah stok item jika detail penjualan di delete.
	}

	function hapus($Nama_Item)
	{
		mysql_query("delete from item where Nama_Item='$Nama_Item'");
	}

	function edit($Nama_Item)
	{
		$data = mysql_query("select * from item where Nama_Item='$Nama_Item'");
		while($d = mysql_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;	
	}

	function edit2($Nama_Item)
	{
		$data = mysql_query("select * from gatel where nama='$Nama_Item'");
		while($d = mysql_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;	
	}

	function edit3($nama)
	{
		$data = mysql_query("select * from gatel2 where nama='$nama'");
		while($d = mysql_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;	
	}

	function update($Nama_Item,$Stok,$Kemasan,$Harga_Jual_Ecer,$Harga_Jual_Grosir,$Jum_Grosir,$disk)
	{
		mysql_query("update item set Stok='$Stok', Kemasan='$Kemasan', Harga_Jual_Ecer='$Harga_Jual_Ecer',Harga_Jual_Grosir='$Harga_Jual_Grosir',Jum_Grosir='$Jum_Grosir',disk='$disk' where Nama_Item='$Nama_Item'");
	} 

	function update2($nama,$jumlah)
	{
		mysql_query("update gatel set jumlah='$jumlah' where nama='$nama'");
	} 
 }
?>