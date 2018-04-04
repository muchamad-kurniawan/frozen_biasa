		<?php 

include 'koneksi.php';

$today = date("Ymd");
//$today = ('20180121');
$query = "SELECT max(kode_penjualan) AS last FROM Penjualan";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
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

$query = "select * from gatel";
                                    $hasil = mysql_query($query);
                                    $data = mysql_fetch_array ($hasil);
                                    $belanja=0;
                                    $tdisk=0;
                                    $nama=$_POST['asu'];
                                    $query2 ="insert into penjualan values ('$nextNoTransaksi','$today','$nama','') " ;
                                    $hasil2 = mysql_query($query2);
                                    $baris=mysql_num_rows($hasil);
                                    $data = mysql_fetch_array ($hasil);
                                    $id=$data['nama'];
                                    //echo $data['jumlah'];
                                    $jum=$data['jumlah'];
                                    //echo $hasil;
                                    echo $baris;
                                  //  $query3="insert into det_penjualan values ('$nextNoTransaksi','$id',$jum,0)";
                                  //    $hasil3 = mysql_query($query3);
                                   if ($baris>0)
                                    {
                                     while ($data = mysql_fetch_array ($hasil))
                                    {

                                      $id=$data['nama'];
                                      echo $id;
                                      $query1="select * from item where Nama_Item='$id'";
                                      $hasil1 = mysql_query($query1);
                                      $data1 = mysql_fetch_array ($hasil1);
                                      $jum=$data['jumlah'];
                                      $Nama_Item=$data1['Nama_Item'];
                                   $tdisk=$tdisk+$data['jumlah']*$data1['disk'];
                                      
                                      if ($data['jumlah']>=$data1['Jum_Grosir'])
                                      {
                                        $harga=$data1['Harga_Jual_Grosir'];  
                                      }
                                      else
                                      {
                                        $harga=$data1['Harga_Jual_Ecer'];  
                                      }
                                    //  echo $nextNoTransaksi;
                                     // echo $Nama_Item;
                                      $query3="insert into asumaneh values ('$nextNoTransaksi','$id','$jum','$harga')";
                                      $hasil3 = mysql_query($query3);
                                    //  $query3;
                                      if ($hasil3)
                                      {
                                        echo "ada";
                                      }
                                      else
                                      {
                                        echo "gak";
                                      }
                                      echo $hasil3;
                                      $Stok=$data1['Stok'];
                                      $query5="update item set Stok= $Stok-$jum where Nama_Item='$Nama_Item'";
                                      $hasil5 = mysql_query($query5);
                                      $tot_harga=$data['jumlah']*$harga;
                                      $belanja=$belanja+$tot_harga;

                                      }
                                    }
                                    
                                    if ($tdisk>10)
                                    {
                                      $diskon=$tdisk*1000;
                                    
                                    }
                                    else
                                    {
                                      $diskon=0;
                                    }

                                   $bayar=$belanja-$diskon;
                                   //echo $bayar;

                                    $query2 ="update penjualan set tot_belanja=$bayar where kode_penjualan='$nextNoTransaksi'" ;
                                    $hasil2 = mysql_query($query2);
                                    $query4="delete from gatel";
                                      $hasil4=mysql_query($query4);
                                   // header ("location:form_kasir.php");
                  /*  $query="insert into gatel values('$nama',$jum) " ;
                    $hasil=mysql_query($query);

                    if ($hasil){
                    //header ('location:view.php');
                    header ("location:form_kasir.php");
                    } else { echo "Data gagal disimpan";
                    } */
                                        ?>