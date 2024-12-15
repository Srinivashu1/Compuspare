<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Morris Chart Styles-->
    <link href="<?php echo base_url(); ?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="<?php echo base_url(); ?>assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body>
    <style>

    </style>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation" style="padding-bottom:0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#" style="padding-top: 17px;padding-bottom: 51px;">
                    <strong>Admin Panel</strong>
                </a>
            </div>

            <div class="logo">

                <img src="<?php echo base_url(); ?>assets/img/bright-logo.gif" alt="" width="76" height="59"
                    style="padding-top: 6px">
                <strong class="bri">BRIGHT TECHNOLOGIES - 8754440566 </strong>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">

                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/index"><i class="fa fa-sign-out fa-fw"></i>
                                    Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>




        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li><a href="<?php echo base_url(); ?>index.php/admin/table"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/services"><i class="fa fa-cogs"></i> Service</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/aboutus"><i class="fa fa-user"></i> AboutUS</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/brand"><i class="fa fa-picture-o"></i> Brand</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/gallery"><i class="fa fa-picture-o"></i> Gallery</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/apply"><i class="fa fa-address-card"></i></i> Apply</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/admin/engineer"><i class="fa fa-users"></i> Engineer</a></li>





                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->


        <?php $this->load->view($content); ?>

        <!-- /. footer  -->



    </div>
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url(); ?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/morris/morris.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/Lightweight-Chart/jquery.chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables/dataTables.bootstrap.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/custom-scripts.js"></script>

</body>

</html>