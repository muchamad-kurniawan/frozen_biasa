		<?php 

include 'koneksi.php';
                    $nama = $_POST['nitem'];
                    echo $nama;
                    $jum = $_POST['jumlah'];
                    echo $jum;
                    $hargabeli = $_POST['hargabeli'];
                    echo $hargabeli;
                    $query="insert into gatel2 values('$nama',$jum,$hargabeli) " ;
                    $hasil=mysql_query($query);

                    if ($hasil){
                    //header ('location:view.php');
                    header ("location:form_kulakan.php");
                    } else { echo "Data gagal disimpan";
                    }
                    ?>