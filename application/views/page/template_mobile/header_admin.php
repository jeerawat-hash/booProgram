<?php 

        $menu = array("","","","","","","","","","");


        switch ($page_focus) {
            case 'home':
                $menu[0] = "active";
                break;


            case 'logout':
                $menu[0] = "active";
                break;
            
        }
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>บ้านเอื้ออาทรบางบ่อ 3 สาครเคเบิล</title>
    <!-- Favicon-->
    <link rel="icon" href="https://boo3.sakorncable.com/assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="https://boo3.sakorncable.com/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://boo3.sakorncable.com/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://boo3.sakorncable.com/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://boo3.sakorncable.com/assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="https://boo3.sakorncable.com/assets/css/themes/all-themes.css" rel="stylesheet" />

        <!-- Jquery Core Js -->
    <script src="https://boo3.sakorncable.com/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://boo3.sakorncable.com/assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="https://boo3.sakorncable.com/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="https://boo3.sakorncable.com/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://boo3.sakorncable.com/assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="https://boo3.sakorncable.com/assets/js/admin.js"></script>
     
    <!-- Demo Js -->
    <script src="https://boo3.sakorncable.com/assets/js/demo.js"></script>
    <script src="https://boo3.sakorncable.com/assets/clappr/dist/clappr.js"></script>




</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>โปรด รอซักครู่...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->



    <!-- Search Bar -->
    <!--<div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div> -->
    <!-- #END# Search Bar -->



    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <!--
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                -->
                <a href="javascript:void(0);" class="bars"></a>
                
                <a class="navbar-brand" href="javascript:void(0);">นิติบุคคล Pack1 สาครเคเบิล</a>
            </div>
            
            <!--
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
            -->

                    <!-- Call Search -->
                    <!--<li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->


                    <!-- Notifications -->
                    <!--<li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- #END# Notifications -->


                    <!-- Tasks -->
                    <!--<li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- #END# Tasks -->


                    <!--
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    -->

            <!--
                </ul>
            </div>
            -->

        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               <!-- <div class="image">
                    <img src="https://boo3.sakorncable.com/assets/images/user.png" width="48" height="48" alt="User" />
                </div> -->
                <div class="info-container">
                     

                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="NameAuthen">Guest</div>
                        <div class="email" id="StatusAuthen">Waiting Authentication</div>
                        <input type="text" readonly hidden id="TelephoneAuthen" name="TelephoneAuthen">
                        <input type="text" readonly hidden id="NameAuthen" name="NameAuthen">
                        <input type="text" readonly hidden id="StatusAuthen" name="StatusAuthen">
 

                    <!--
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                    -->




                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">เมนูหลัก</li>

 
                    <li class="<?php echo $menu[0]; ?>" >
                        <a href="javascript:void(0);">
                            <i class="material-icons">home</i>
                            <span>จัดการบริการนิติบุคคลpack1</span>
                        </a>
                    </li>

                    <li class="<?php echo $menu[1]; ?>" >
                        <a href="https://boo3.sakorncable.com/index.php/management">
                            <i class="material-icons">home</i>
                            <span>ออกจากระบบ</span>
                        </a>
                    </li>




                    <!--
                    <li>
                        <a href="https://boo3.sakorncable.com/assets/pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://boo3.sakorncable.com/assets/pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="https://boo3.sakorncable.com/assets/pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li> -->
                    <!--
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="active">
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="https://boo3.sakorncable.com/assets/pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://boo3.sakorncable.com/assets/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- #Menu -->






            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019-2020 <a href="javascript:void(0);">SakornCable NetworkServices</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.10p
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->








        <!-- Right Sidebar -->
        <!--<aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside> -->
        <!-- #END# Right Sidebar -->

 
    </section>