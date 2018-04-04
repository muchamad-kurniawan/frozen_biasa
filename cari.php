<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Halaman Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/normalize/normalize.css">

<link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen.min.css" />
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
        
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
       
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
          <?php include ("menu.php") ?>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                
                <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("mymodal").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("mymodal").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","up_kategori.php?q="+str,true);
xmlhttp.send();
}
</script>
<div id="content">
<!-- BEGIN Content -->
            <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> menu cari item</h1>
                    
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="cari.php">Home</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li>Item
                        
                    </ul>
                </div>
 <?php
    include("conn.php");
    
    if(isset($_POST['inp']))
    {
        $jk=$_POST['jk'];
        
        $kl=mysql_query("insert into stand_pujasera values('','$jk',sysdate())");
        if($kl)
        {
?>
    <meta http-equiv="refresh" content="0;url=home.php?page=kategori" />
<?php
        
        }
        else
        {
            echo "gagal";
        }
    }
    elseif(isset($_POST['phj']))
    {
        $id1=$_POST['id1'];
        $jk1=$_POST['jk1'];
        
        $gh=mysql_query("update stand_pujasera set nama_stand='$jk1' where id_stand='$id1'");
        if($gh)
        {
?>
        <meta http-equiv="refresh" content="0;url=home.php?page=kategori" />
<?php
        
        }
        else
        {
            echo "gagal";
        }
    }
 ?>              
                
                
                <div class="row-fluid">
   
    
    <div class="box box-pink">
    <div class="box-title">
        <h3>Tabel ITEM</h3>
    </div>
    <div class="box-content">
    <table class="table table-advance" id="table1">
        <thead>
            <tr>
                <th>ITEM</th>
                <th>STOK</th>
                <th>Harga Ecer</th>
                <th>Harga Grosir</th>
                <th> </th>
            </tr>
         </thead>
         <tbody>
            <?php
            $ty=mysql_query("select * from item");
            $y=1;
            while($dt=mysql_fetch_array($ty))
            {
            ?>
            <tr>
                <td><?php echo $dt[0]; ?></td>
                <td><?php echo $dt[1]; ?></td>
                <td><?php echo $dt['Harga_Jual_Ecer']; ?></td>
                <td><?php echo $dt['Harga_Jual_Grosir']; ?></td>
               
                <td>
                
           
            </tr>
            <?php
                    $y++;
                }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    
</div>
</div>

<div class="modal hide fade" id="mymodal">
            
</div>

                <!-- END Breadcrumb -->

               
                <footer>
                    <p>Copyright 2015 © CreActive Labs</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
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
        

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>

       <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
        
        <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
        <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>
        
        <script src="assets/flot/jquery.flot.js"></script>
        <script src="assets/flot/jquery.flot.resize.js"></script>
        <script src="assets/flot/jquery.flot.pie.js"></script>
        <script src="assets/flot/jquery.flot.stack.js"></script>
        <script src="assets/flot/jquery.flot.crosshair.js"></script>

        <!--flaty scripts-->
        <script src="js/flaty.js"></script>

    </body>
</html>