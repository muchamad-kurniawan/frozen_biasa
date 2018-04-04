<?php 
include 'database.php';
$db = new database();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "frozen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tabel Item</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->

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
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> Tabel Item</h1>
                        <h4>Tambah Data, Hapus, Edit </h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="icon-home"></i> Home</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
               

                <!-- BEGIN Main Content -->
               <div class="row-fluid">
                    <div class="span12">

                        <div class="box box-black">
                            <div class="box-title">
                                <h3><i class="icon-table"></i> Tabel Item Barang</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right">
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new record" href="#myModal" role="button" data-toggle="modal"><i class="icon-plus"></i></a>
                                  
                                        <!-- <a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="icon-edit"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="icon-trash"></i></a> -->
                                    </div>
                                    <div class="btn-group">
                                        <!-- <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="icon-print"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="icon-file-text-alt"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="icon-table"></i></a> -->
                                    </div>
                                <!--     <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div> -->
                                </div>

                                <table class="table table-advance">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Stok</th>
                                        <th>Jumlah per Kemasan</th>
                                        <th>Harga Ecer</th>
                                        <th>Harga Grosir</th>
                                        <th>Jumlah Min Grosir</th>
                                        <th>disk</th>
                                    </tr>
                                </thead>
                                    <?php
                                    $no = 1;
                                    foreach($db->tampil_data() as $x){
                                    ?>

                                    <tbody>
                                    <tr class="table-flag-blue">

                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $x['Nama_Item']; ?></td>
                                        <td><?php echo $x['Stok']; ?></td>
                                        <td><?php echo $x['Kemasan']; ?></td>
                                        <td><?php echo $x['Harga_Jual_Ecer']; ?></td>
                                        <td><?php echo $x['Harga_Jual_Grosir']; ?></td>
                                        <td><?php echo $x['Jum_Grosir']; ?></td>
                                        <td><?php echo $x['disk']; ?></td>
                                        <td>
                                            <div class="btn-group">

                                                <a class="btn btn-circle show-tooltip" title="Update" href="#myModal1<?php echo $no; ?>" role="button" data-toggle="modal"><i class="icon-edit"></i></a>

                                               <!--  <a class="btn btn-small show-tooltip" title="Edit" href="edit_item.php?Nama_Item=<?php echo $x['Nama_Item'];?>&aksi=edit" role="button" data-toggle="modal"><i class="icon-edit"></i></a>
 -->
                                                <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="proses.php?Nama_Item=<?php echo $x['Nama_Item']; ?>&aksi=hapus"><i class="icon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>


                                    <div id="myModal1<?php echo $no; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="passwordses.php?aksi=update" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Input Data Item</h3>
                </div>

                <div class="modal-body">
                    <label><b>Nama Item</b></label>
                    <input type="text" name="Nama_Item" id="username" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" value="<?php echo $x['Nama_Item']; ?>" />
                    <br>
                    <label><b>Stok Awal</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Stok" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['Stok']; ?>">
                    <br>
                    <label><b>Jum/Kemasan</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Kemasan" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['Kemasan']; ?>">
                    <br>
                    <label><b>Harga Jual Ecer</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Harga_Jual_Ecer" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['Harga_Jual_Ecer']; ?>">
                    <br>
                    <label><b>Harga Jual Grosir</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Harga_Jual_Grosir" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['Harga_Jual_Grosir']; ?>">
                    <br>
                    <label><b>Jum Min Grosir</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="Jum_Grosir" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['Jum_Grosir']; ?>">
                    <br>
                    <label><b>disk</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="disk" id="numberfield" data-rule-number="true" data-rule-required="true" value="<?php echo $x['disk']; ?>">
                    <br>

                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <!-- <input type="submit" value="Simpan"> -->
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>              
                </div>
            </form>
        </div>


                                    <?php 
                                    }
                                    ?>
                                </table>

                </div>
                <!-- END Main Content -->
                
                <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>

         <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="proses.php?aksi=tambah" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Input Data Item</h3>
                </div>
                <div class="modal-body">

                                    
                    <label><b>Nama Item</b></label>
                    <input type="text" name="Nama_Item" id="username" class="input-xlarge" maxlength="25" />
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
                    <label><b>disk</b></label>
                    <input type="text" class="input-xlarge" placeholder="Only numbers" name="tdisk" id="numberfield" data-rule-number="true" data-rule-required="true" value=1>
                    <br>

                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <!-- <input type="submit" value="Simpan"> -->
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>              
                </div>
            </form>
        </div>



        

        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
        <script src="assets/nicescroll/jquery.nicescroll.min.js"></script>


        <!--page specific plugin scripts-->
        <script src="assets/flot/jquery.flot.js"></script>
        <script src="assets/flot/jquery.flot.resize.js"></script>
        <script src="assets/flot/jquery.flot.pie.js"></script>
        <script src="assets/flot/jquery.flot.stack.js"></script>
        <script src="assets/flot/jquery.flot.crosshair.js"></script>
        <script src="assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>


        <!--flaty scripts-->
        <script src="js/flaty.js"></script>

    </body>
</html>
