<head>
    <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/Admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>...</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <!--<li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>-->
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php //echo base_url(); ?>assets/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="<?php //echo base_url(); ?>assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="<?php //echo base_url(); ?>assets/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="<?php //echo base_url(); ?>assets/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>-->
            <!--<li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li>-->
            <li>
                <a href="<?php echo base_url().'Welcome/index'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Rec'; ?>">
                    <i class="fa fa-bar-chart"></i>
                    <span>Recording</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Playlist'; ?>">
                    <i class="fa fa-users"></i> <span>Playlist</span>
                </a>
                <!--<ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>assets/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>-->
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Rating' ?>">
                    <i class="fa fa-truck"></i> <span>Rating</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/History'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>History Recording</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Report'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Report</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/RecPlay'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Recording Playlist</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/UserRec'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>User Recording</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Like'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Like</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Msg'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Message</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Conn'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Connection</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Comm'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Comment</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url().'Welcome/Cate'; ?>">
                    <i class="fa fa-shopping-bag"></i>
                    <span>Category</span>
                </a>
            </li>
            <!--<li>
                <a href="<?php echo base_url(); ?>assets/pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-red">3</small>
                        <small class="label pull-right bg-blue">17</small>
                    </span>
                </a>
            </li>-->
            <!--<li>
                <a href="<?php echo base_url(); ?>assets/pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-yellow">12</small>
                        <small class="label pull-right bg-green">16</small>
                        <small class="label pull-right bg-red">5</small>
                    </span>
                </a>
            </li>-->
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>-->
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>-->
            <!--<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
            <!--<li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>