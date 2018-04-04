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
               <?php include("menu.php"); ?>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> TAMBAH ITEM PENJUALAN</h1>
                    </div>
                </div>

                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="icon-home"></i></li>
                    </ul>
                </div>
                    <?php
                    
                    $query = "SELECT Nama_Item,Stok FROM item order by Nama_Item asc";
                                    $hasil = mysql_query($query);
                                    
                                    
                    ?>
                <form action="tambarang2.php" method="post" class="form-horizontal">
                    <div class="control-group">
                                <label class="control-label"><b>Nama Item</b></label>
                                      <div class="controls" onfocus ="cuk()">
                                         <select data-placeholder="Pilih Item" class="chosen-with-diselect span6" tabindex="-1" id="cuk1" name="nitem">
                                            <option value=""> </option>
                                            <?php
                                            if (mysql_num_rows($hasil)>0)
                                            {
                                            while ($row=mysql_fetch_array($hasil))
                                            {
                                            ?>
                                            <option><?php echo $row['Nama_Item']?></option>
                                           <?php  } 
                                         } ?>
                                            

                                         </select>
                                      </div>
                        </div>

                    <div class="control-group info">
                        <label class="control-label">Jumlah </label>
                        <div class="controls">
                            <input type="text" class="span6" name="jumlah"/>
                         </div>
                    </div>
                    <div class="control-group info">
                        <label class="control-label">Harga Beli </label>
                        <div class="controls">
                            <input type="text" class="span6" name="hargabeli"/>
                         </div>
                    </div>
                         <button class="btn btn-primary btn-xlarge" type="submit" value="Simpan"><i class="icon-expand"></i> Tambah</button>
                      </form>
                    </div>

                    
                        
            <!-- cobacoba -->
            </div>
            <!-- END Content -->

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
