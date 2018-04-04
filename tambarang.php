		<?php 

include 'koneksi.php';
                    $nama = $_POST['nitem'];
                   
                    $jum = $_POST['Jumlah'];
                    
                   
                    $query2="select Stok from item where Nama_Item='$nama'" ;
                    $hasil1=mysql_query($query2);
                    $data = mysql_fetch_array ($hasil1);
                    if ($jum <= $data[0])
                    {
                    $query="insert into gatel values('$nama',$jum) " ;
                    $hasil=mysql_query($query);
                    //header ('location:view.php');
                    header ("location:form_kasir.php");
                    } 
                    else 
                    { 
                         echo "Stok yang tersisa ",$data[0];
                    }
                    ?>