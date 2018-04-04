<?php 
include 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Form Components - FLATY Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->
        <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/favicon.html">

        <script src="assets/modernizr/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Theme Setting -->
         <!-- BEGIN Theme Setting -->
       
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
       <?php include("header.php"); ?>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
<                <?php include("menu.php"); ?> 
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                   
                </div>
                <!-- END Breadcrumb -->
                

                <!-- BEGIN Main Content -->
                
               
               <div class="row-fluid">
                    <div class="span3">
                        <div class="box box-black">
                            
                                <a href="tambah_barang.php"><button class="btn-block btn btn-large btn-primary">Tambah Barang </button></a>
                           <br>
                            </div>
                        </div>
                </div>

                <?php 
                date_default_timezone_set('Asia/Jakarta');
                echo "tanggal  :",date('d-m-y');
                echo "<br>";
                echo date("H:i:s");
                ?>


                <div class="row-fluid">
                      <form action="tamjualprint.php" method="post" class="form-horizontal">
                
                  
                  <div class="control-group info">
                    <label class="control-label">Nama Customer</label>
                    <div class="controls">
                        <input type="text" class="span6" name="namacus"/>
                     </div>
                   </div>
                   <div class="control-group info">
                    <label class="control-label">Alamat Customer</label>
                    <div class="controls">
                        <input type="text" class="span6" name="alamat"/>
                     </div>
                   </div>
                   <div class="control-group info">
                    <label class="control-label">Telp Customer</label>
                    <div class="controls">
                        <input type="text" class="span6" name="telp"/>
                     </div>
                   </div>
                            <div class="box-content">
                               
                                    <?php
                                    
                                   ?>
<!--                                    <div class="row-fluid">
                                        <div class="control-label">
                                            <label>Nama Customer    : <?php echo $id ?> </label>
                                            <label>Alamat Customer  : <?php echo $_POST['Alamat'] ?> </label>
                                            <label>Telp Customer    : <?php echo $_POST['Telp'] ?> </label>
                                                <div class="controls">
                                                    <label>tanggal : <?php echo $today ?> </label>
                                                    <label>nomer Transaksi : <?php echo $nextNoTransaksi ?> </label>
                                                </div>
                                        </div>
                                    </div> -->
                
                                <table class="table table-advance">  
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Jumlah</th>
                                        <th>Harga Satuan</th>
                                        <th>Harga </th>
                                        
                                    </tr>
                                </thead>



                                   <?php
                                   //$_POST['jumlah'];
                                    $no = 1;
                                    $query = "select * from gatel";
                                    $hasil = mysql_query($query);
                                    $bayar=0;
                                    $tdisk=0;
                                  
                                    if (mysql_num_rows($hasil)>0)
                                    {
                                    while ($data = mysql_fetch_array ($hasil))
                                    {
                                       $id=$data['nama'];
                                      $query1="select * from item where Nama_Item='$id'";
                                      $hasil1 = mysql_query($query1);
                                      $data1 = mysql_fetch_array ($hasil1);
                                   $tdisk=$tdisk+$data['jumlah']*$data1['disk'];
                                   if ($data['jumlah']>=20 &&$data1['disk']==0 )
                                      {
                                        $harga=$data1['Harga_Jual_Grosir']-200;  
                                      }
                                        elseif ($data['jumlah']>=15 &&$data1['disk']==0 )
                                      {
                                        $harga=$data1['Harga_Jual_Grosir']-100;  
                                      }
                                      
                                      elseif ($data['jumlah']>=$data1['Jum_Grosir'] )
                                      {
                                        $harga=$data1['Harga_Jual_Grosir'];  
                                      }
                                      else
                                      {
                                        $harga=$data1['Harga_Jual_Ecer'];  
                                      }
                                      
                                      $tot_harga=$data['jumlah']*$harga;
                                      $bayar=$bayar+$tot_harga;
                                    ?>

                                    <tbody>
                                    <tr class="table-flag-blue">

                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['jumlah']; ?></td>
                                        <td><?php echo $harga; ?></td>
                                        <td><?php echo $tot_harga; ?></td>
                                        
                                   
                                        <td>
                                            <div class="btn-group">

                                               <a class="btn btn-small show-tooltip" title="Edit" href="edit_tambarang.php?nama=<?php echo $data['nama'];?>&aksi=edit2" role="button" data-toggle="modal"><i class="icon-edit"></i></a>

                                                <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="proses.php?nama=<?php echo $data['nama']; ?>&aksi=hapus2"><i class="icon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <?php 
                                    }
                                    }
                                    
                                    if ($tdisk>=12)
                                    {
                                      $diskon=$tdisk*1000;
                                    
                                    }
                                    else
                                    {
                                      $diskon=0;
                                    }
                                    ?>
                                </table>
                                <div class="controls">
                                  <div class="controls controls-row">
                                    <label class="control-label">Total </label>
                                    <label class="control-label"><?php echo $bayar ?></label>
                                    <br>
                                    <br>
                                    <label class="control-label">Diskon </label>
                                    <label class="control-label"><?php echo $diskon ?></label>
                                    <br>
                                    <br>
                                    <label class="control-label">Total Bayar </label>
                                    <label class="control-label"><?php echo $bayar-$diskon ?></label>
                                 </div>
                                 <br>
                                  <div class="control-group">
                                       <label class="control-label">Uang </label>
                                       <div class="controls">
                                          <input type="text" placeholder="" class="input-xlarge" name="uang"/>
                                          <span class="help-inline">uang yang dibayar</span>
                                       </div>
                                    </div>
                       
                                </div>

                                <button class="btn-block btn btn-large btn-primary" type="submit">PROSES</button>

                               
                      </form>
                    </div>
                 
                <!-- END Main Content -->
                
                <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>

                
            </div>

            <!-- cobacoba -->
            
        </div>

         



        <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="proses.php?aksi=update" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Input Data Item</h3>
                </div>

                <div class="modal-body">
                    <label><b>Nama Item</b></label>
                    <input type="text" name="Nama_Item" id="username" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" value="<?php echo $x['Nama_Item']; ?>" />
                    <br>
                    <label><b>Stok Awal</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Stok" id="numberfield" data-rule-number="true" data-rule-required="true">
                    <br>
                    <label><b>Jum/Kemasan</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Kemasan" id="numberfield" data-rule-number="true" data-rule-required="true">
                    <br>
                    <label><b>Harga Jual Ecer</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Harga_Jual_Ecer" id="numberfield" data-rule-number="true" data-rule-required="true">
                    <br>
                    <label><b>Harga Jual Grosir</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Harga_Jual_Grosir" id="numberfield" data-rule-number="true" data-rule-required="true">
                    <br>
                    <label><b>Jum Min Grosir</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Jum_Grosir" id="numberfield" data-rule-number="true" data-rule-required="true">
                    <br>

                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <!-- <input type="submit" value="Simpan"> -->
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>              
                </div>
            </form>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
        <script src="assets/nicescroll/jquery.nicescroll.min.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script> 

        <!--flaty scripts-->
        <script src="js/flaty.js"></script>

    </body>
</html>
