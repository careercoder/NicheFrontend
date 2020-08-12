<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->
<head>
    <meta charset="UTF-8">
    <title>Niche Income Guide | Dashboard</title>
    <link rel="shortcut icon" href="dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
-->

    <!-- END Template CSS-->

    <!-- START: App CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.3/css/buttons.bootstrap4.min.css"/>

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/pulse/bootstrap.min.css" integrity="sha384-L7+YG8QLqGvxQGffJ6utDKFwmGwtLcCjtwvonVZR/Ba2VzhpMwBz51GaXnUsuYbj" crossorigin="anonymous">


    <style>
        .modal-dialog-slideout {min-height: 100%; margin: 0 0 0 auto;background: #fff;}
        .modal.fade .modal-dialog.modal-dialog-slideout {-webkit-transform: translate(100%,0)scale(1);transform: translate(100%,0)scale(1);}
        .modal.fade.show .modal-dialog.modal-dialog-slideout {-webkit-transform: translate(0,0);transform: translate(0,0);display: flex;align-items: stretch;-webkit-box-align: stretch;height: 100%;}
        .modal.fade.show .modal-dialog.modal-dialog-slideout .modal-body{overflow-y: auto;overflow-x: hidden;}
        .modal-dialog-slideout .modal-content{border: 0;}
        .modal-dialog-slideout .modal-header, .modal-dialog-slideout .modal-footer {height: 69px; display: block;}
        .modal-dialog-slideout .modal-header h5 {float:left;}

        .send-button{
            background: #54C7C3;
            width:100%;
            font-weight: 600;
            color:#fff;
            padding: 8px 25px;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .g-button{
            color: #fff !important;
            border: 1px solid #EA4335;
            background: #ea4335 !important;
            width:100%;
            font-weight: 600;
            color:#fff;
            padding: 8px 25px;
        }
        .my-input{
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            cursor: text;
            padding: 8px 10px;
            transition: border .1s linear;
            font-size:1rem;
            border: solid 2px #507690;
        }
        .header-title{
            margin: 5rem 0;
        }
        h1{
            font-size: 31px;
            line-height: 40px;
            font-weight: 600;
            color:#4c5357;
        }
        h2{
            color: #5e8396;
            font-size: 21px;
            line-height: 32px;
            font-weight: 400;
        }
        .login-or {
            position: relative;
            color: #aaa;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .span-or {
            display: block;
            position: absolute;
            left: 50%;
            top: -2px;
            margin-left: -25px;
            background-color: #fff;
            width: 50px;
            text-align: center;
        }
        .hr-or {
            height: 1px;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }        /*
                Sinbad
                #A3D5CA

                Athens Gray
                #EDF0F3

                Smalt Blue
                #507690

                Bermuda Gray
                #7287A0
              */
    </style>


</head>
<!-- END Head-->

<!-- START: Body-->
<body id="main-container" class="default semi-dark" ng-app="NicheIncomeGuide">
<!-- START: Pre Loader-->
<div class="se-pre-con2">
    <div class="loader2"></div>
</div>
<!-- END: Pre Loader-->

<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                <a href="index.html" class="horizontal-logo text-left">
                    <img src="https://i.imgur.com/sme7kWs.png" width="100">
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative">
                    <div ng-controller="ActiveNicheController" >
                        <select name="niche"
                                ng-model="active_niche.name" ng-change="change()"

                                style="font-size: 1.2rem; font-weight: bold;" id="activeNicheSelection"
                                class="form-control border-0 rounded bg-search pl-5"></select>
                    </div>
                    <div class="btn-search position-absolute top-0">

                    </div>
                    <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                    </a>

                </div>
            </form>
            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>
                        </a>
                    </li>

                    <li class="dropdown align-self-center">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border  py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">john</p>
                                            <span class="text-success">New user registered.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">Peter</p>
                                            <span class="text-success">Server #12 overloaded.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">Bill</p>
                                            <span class="text-danger">Application error.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>

                    </li>
                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                        <div class="media-body">
                                            <p class="mb-0 text-success">john send a message</p>
                                            12 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-danger">Peter send a message</p>
                                            15 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-warning">Bill send a message</p>
                                            5 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->

<!-- START: Main Menu-->
<!-- START: Main Menu-->
<div class="sidebar">
    <div class="site-width">

        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown" data-toggle="collapse" data-target="#quick"><a href="#"><i class="icon-home mr-1"></i> Quick</a>
                <ul id="quick">
                    <li><a href="index.html"><i class="icon-rocket"></i> Dashboard</a></li>
                    <li><a href="index-account.html"><i class="icon-layers"></i> Account</a></li>
                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Analytic</a></li>
                    <li><a href="index-covid.html"><i class="icon-earphones"></i> Hit List</a></li>
                    <li><a href="index-crypto.html"><i class="icon-support"></i> Support</a></li>
                    <li><a href="index-ecommerce.html"><i class="icon-briefcase"></i> Niches</a></li>
                </ul>
            </li>
            <li class="dropdown" ><a href="/niche/" data-toggle="collapse" data-target="#brown"><i class="fas fa-blog mr-1"></i> Niches / Websites</a>
                <ul id="brown">
                    <li><a href="#!/niche/list/" ><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="#!/niche/create/"><i class="icon-earphones"></i> Create Niche</a></li>

                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>
            <li class="dropdown" ><a data-toggle="collapse" data-target="#fox" href="{% url "brandplan_list_view" %}"><i class="fas fa-atlas mr-1"></i> Brand Plan</a>
                <ul id="fox">
                    <li><a href="{% url "brandplan_list_view" %}"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="#/brandplan/create/" class="createBrandPlan"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="{% url "brandplan_list_view" %}"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>

            <li class="dropdown" ><a  data-toggle="collapse" data-target="#jumped" href="/ideation/"><i class="far fa-lightbulb mr-1"></i> Ideation</a>
                <ul id="jumped">
                    <li><a href="/ideation/list/"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="{% url "ideation_create_view" %}"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="#"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>
            <li class="dropdown" ><a data-toggle="collapse" data-target="#over" href="/hitlist/"><i class="icon-home mr-1"></i> Hit List</a>
                <ul id="over">
                    <li><a href="/hitlist/list/"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="/hitlist/create/"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="/helpdesk/hitlist/><i class="icon-grid"></i> Help &amp;amp; Tips</a></li>
                </ul>
            </li>

            <li class="dropdown" ><a data-toggle="collapse" data-target="#the" href="#"><i class="icon-home mr-1"></i> Authors</a>
                <ul id="the">
                    <li><a href="index.html"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="index-account.html"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>
            <li class="dropdown" ><a href="#" data-toggle="collapse" data-target="#lazy"><i class="icon-home mr-1"></i> Help &amp; Support</a>
                <ul id="lazy">
                    <li><a href="index.html"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="index-account.html"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>
            <li class="dropdown" data-toggle="collapse" data-target="#dog">
                <a href="#"><i class="icon-home mr-1"></i> Community</a>
                <ul id="dog">
                    <li><a href="index.html"><i class="icon-rocket"></i> View All</a></li>
                    <li><a href="index-account.html"><i class="icon-layers"></i> Create New</a></li>
                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Help &amp; Tips</a></li>
                </ul>
            </li>
        </ul>
        <!-- END: Menu-->


    </div>
</div>
<!-- END: Main Menu-->
<!-- END: Main Menu-->

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">


        <div class="row" style="padding: 0 0 0px 0;">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary btn-block">
                <a class="navbar-brand text-white" href="#" id="appTitle" ng-bind="app_title">{{ app_title }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" >
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 hidden" type="hidden" placeholder="Search" aria-label="Search">
                        <button class="btn btn-link my-2 my-sm-0" style="font-size:1rem;" type="submit">the search query you have selected</button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12  mt-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-between text-white align-items-center bg-primary">
                        <h4 class="card-title" ng-bind="app_title"></h4>

                    </div>
                    <div class="card-body" id="app-content">
                        <div ng-view></div>
                    </div>
                </div>
            </div>



        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->



<!-- START: Footer-->
<footer class="site-footer">
    2020 © NicheIncomeGuide.com - All Rights Reserved.
</footer>
<!-- END: Footer-->


<!-- START: Back to top-->
<a href="#" class="scrollup text-center">
    <i class="icon-arrow-up"></i>
</a>
<!-- END: Back to top-->


<!-- modal containers -->


<!-- Modal -->
<!-- modal slideout -->
<div class="modal fade" id="centerLgModal" tabindex="-1" role="dialog"
     aria-labelledby="centerSmModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="centerLgModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- modal -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- START: Template JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
<script src="assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous"></script>

<!-- END: Template JS-->

<!-- START: Page Vendor JS-->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js" integrity="sha512-gYUM+7JjtBqPPGOgwgOZ+NwjGl+11/EP124oB+ihjlBpLgP5LTh7R/Iwcdy//cgH+QzrjspBiJI5iUegTNww3w==" crossorigin="anonymous"></script>
<!-- <script src="dist/vendors/datatable/pdfmake/vfs_fonts.js"></script> -->
<script src="https://cdn.datatables.net/buttons/1.6.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.3/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
<!-- END: Page Vendor JS-->


<!-- START: APP JS -->
<script src="application/app.js"></script>
<!-- ND: APP JS-->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<!--
<script src="app/js/application.js"></script>
<script src="app/js/brandplan.js"></script>
<script src="app/js/niche.js"></script>
<script src="app/js/pagedetails.js"></script>
<script src="app/js/ideation.js"></script>
<script src="app/js/serp.js"></script>
-->

<!-- new -->
<script src="application/settings.js"></script>
<script src="application/core.js"></script>

<script src="application/modules/brandplan/js/app.js"></script>
<script src="application/modules/niche/js/app.js"></script>

<script src="application/routing.js"></script>
<!-- end new -->


</body>
<!-- END: Body-->
</html>
