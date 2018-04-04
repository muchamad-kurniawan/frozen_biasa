<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>War Project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

        <!--page specific css styles-->
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />


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
       <?php include("header.php"); ?>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <?php include("menu.php"); ?>

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-folder-open-alt"></i> Laporan Gaji</h1>
                        <h4>Laporan Gaji Pegawai</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li class="active">Laporan Gaji</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-table"></i> Gaji Pegawai</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                   
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="icon-print"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="icon-file-text-alt"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="icon-table"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <br>
                                <div>
                                    <div class="control-group">
                                      
                                      <div class="controls">
                                         <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input class="date-picker" placeholder="Tanggal Mulai" size="16" type="text" /><span class="add-on"><i class="icon-calendar"></i></span>
                                         </div>

                                         <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input class="date-picker" size="16" type="text" placeholder="Tanggal Selesai" /><span class="add-on"><i class="icon-calendar"></i></span>
                                         </div>

                                         <div class="input-append">
                                         <select>
                                             <option>Semua Golongan</option>
                                             <option>Karyawan</option>
                                             <option>Manajer</option>
                                             <option>Office Boy</option>
                                         </select>
                                        </div>

                                        <div class="input-append">
                                         <select>
                                             <option>Semua Shift</option>
                                             <option>Pagi</option>
                                             <option>Siang</option>
                                             <option>Malam</option>
                                         </select>
                                        </div>

                                        <div class="input-append">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>

                                      </div>
                                   </div>

                                   

                                </div>
<table class="table table-advance" id="table1">
    <thead>
        <tr>
            <th style="width:18px">No</th>
            <th>Nama Pegawai</th>
            <th>Golongan</th>
            <th>Bulan/Tahun</th>
            <th>Shift</th>
            <th class="text-center">Jumlah Masuk</th>
            <th>Total Gaji</th>
            <th style="width:100px">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Danang Haryo S</td>
            <td>Karyawan</td>
            <td>Januari 2018</td>
            <td>Malam</td>
            <td class="text-center">10</td>
            <td>Rp 4.500.000,00</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-small show-tooltip" title="View" href="#myModal" role="button" data-toggle="modal"><i class="icon-zoom-in"></i></a>
                    <a class="btn btn-small show-tooltip" title="Edit" href="#"><i class="icon-edit"></i></a>
                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="#"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kurniawan</td>
            <td>Karyawan</td>
            <td>Januari 2018</td>
            <td>Pagi</td>
            <td class="text-center">15</td>
            <td>Rp 5.000.000,00</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-small show-tooltip" title="View" href="#myModal" role="button" data-toggle="modal"><i class="icon-zoom-in"></i></a>
                    <a class="btn btn-small show-tooltip" title="Edit" href="#"><i class="icon-edit"></i></a>
                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="#"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Suhadi</td>
            <td>Manajer</td>
            <td>Januari 2018</td>
            <td>Siang</td>
            <td class="text-center">20</td>
            <td>Rp 12.000.000,00</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-small show-tooltip" title="View" href="#myModal" role="button" data-toggle="modal"><i class="icon-zoom-in"></i></a>
                    <a class="btn btn-small show-tooltip" title="Edit" href="#"><i class="icon-edit"></i></a>
                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="#"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr>
        
    </tbody>
</table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>

        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Rincian Gaji</h3>
  </div>
  <div class="modal-body">
    <label><b>Gaji Pokok</b></label>
    <label>Rp 3.000.000,00</label>
    <br>

    <label><b>Jumlah Masuk</b></label>
    <label>24</label>
    <br>

    <label><b>Lembur</b></label>
    <label>10</label>
    <br>

    <label><b>Tunjangan A</b></label>
    <label>Rp 5.000.000,00</label>
    <br>

    <label><b>Surat Peringatan</b></label>
    <label>-</label>
    <br>

    <label><b>Cuti</b></label>
    <label>2</label>
    <br>

    <label><b>Ijin/Sakit</b></label>
    <label>1</label>
    <br>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
  </div>
</div>
        <!-- END Container -->


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

        <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!--flaty scripts-->
        <script src="js/flaty.js"></script>

    </body>
</html>
