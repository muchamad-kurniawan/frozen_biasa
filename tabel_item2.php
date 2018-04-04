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
        <div id="theme-setting">
            <a href="#"><i class="icon-gears icon-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="icon-check-empty"></i> Fixed Navbar</a>
                    <a class="pull-right visible-desktop" data-target="sidebar" href="#"><i class="icon-check-empty"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                            FLATY Admin
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-right">
                        <!-- BEGIN Button Tasks -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-warning">4</span>
                            </a>

                            <!-- BEGIN Tasks Dropdown -->
                            <ul class="pull-right dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">75%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:75%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Transfer To New Server</span>
                                            <span class="pull-right">45%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:45%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">20%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:20%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Writing Documentation</span>
                                            <span class="pull-right">85%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:85%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See tasks with details</a>
                                </li>
                            </ul>
                            <!-- END Tasks Dropdown -->
                        </li>
                        <!-- END Button Tasks -->

                        <!-- BEGIN Button Notifications -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>

                            <!-- BEGIN Notifications Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    5 Notifications
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-comment orange"></i>
                                        <p>New Comments</p>
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-twitter blue"></i>
                                        <p>New Twitter followers</p>
                                        <span class="badge badge-info">7</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
                                        <p>David would like to become moderator.</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-bug pink"></i>
                                        <p>New bug in program!</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-shopping-cart green"></i>
                                        <p>You have some new orders</p>
                                        <span class="badge badge-success">+10</span>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Notifications -->

                        <!-- BEGIN Button Messages -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-success">3</span>
                            </a>

                            <!-- BEGIN Messages Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-comments"></i>
                                    3 Messages
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                                        <div>
                                            <span class="msg-title">Sarah</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                                        <div>
                                            <span class="msg-title">Emma</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>2 Days ago</span>
                                            </span>
                                        </div>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                                        <div>
                                            <span class="msg-title">John</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>8:24 PM</span>
                                            </span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in ...</p>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Messages -->

                        <!-- BEGIN Button User -->
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                                <img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
                                <span class="hidden-phone" id="user_info">
                                    Penny
                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                                <li class="nav-header">
                                    <i class="icon-time"></i>
                                    Logined From 20:45
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Account Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-question"></i>
                                        Help
                                    </a>
                                </li>

                                <li class="divider visible-phone"></li>

                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-tasks"></i>
                                        Tasks
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-bell-alt"></i>
                                        Notifications
                                        <span class="badge badge-important">8</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-envelope"></i>
                                        Messages
                                        <span class="badge badge-success">5</span>
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                            <!-- BEGIN User Dropdown -->
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    <li class="active">
                       <a href="indexku.php"> 
                            <i class="icon-dashboard"></i>
                            <span>Dashboard </span>
                        </a>
                    </li>

                   

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span>Tables</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="tabel_item.php">Item</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
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
                                <h3><i class="icon-table"></i> Advance Table</h3>
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
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>
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
                                    </tr>
                                </thead>
                                    <?php
                                    $no=1; 
                    $sql = "SELECT * FROM  item";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $Nama_Item = $row['Nama_Item'];
                            $Stok = $row['Stok'];
                            $Kemasan = $row['Kemasan'];
                            $Harga_Jual_Ecer = $row['Harga_Jual_Ecer'];
                            $Harga_Jual_Grosir = $row['Harga_Jual_Grosir'];
                            $Jum_Grosir = $row['Jum_Grosir'];
                            echo "<tr>
                            <td><$no++</td>
                                  td>$Nama_Item</td>
                            <td>$Stok</td>
                            <td>$Kemasan</td>
                            <td>$Harga_Jual_Ecer</td>
                            <td>$Harga_Jual_Grosir</td>
                            <td>$Jum_Grosir</td>
                            </tr>
                            ";
                                    ?>
                                    <tbody>
                                    <tr class="table-flag-blue">

                                        
                                            <div class="btn-group">

                                                <a class="btn btn-small show-tooltip" title="Edit" href="#myModal1<?php echo $Nama_Item; ?>" role="button" data-toggle="modal"><i class="icon-edit"></i></a>

                                                <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="proses.php?Nama_Item=<?php echo $x['Nama_Item']; ?>&aksi=hapus"><i class="icon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                 
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
                    <input type="text" name="Nama_Item" id="username" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" />
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



        <div id="myModal1<?php echo $Nama_Item; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form action="proses.php?aksi=update" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Input Data Item</h3>
                </div>

                <div class="modal-body">
                    <label><b>Nama Item</b></label>
                    <input type="text" name="Nama_Item" id="username" class="input-xlarge" data-rule-required="true" data-rule-minlength="3" value="<?php echo $Nama_Item; ?>" />
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
       <?php
                        }
                    }
                        ?>
                   
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

        <!--flaty scripts-->
        <script src="js/flaty.js"></script>

    </body>
</html>
