<!DOCTYPE html>
<html>
<!-- Mirrored from mannatthemes.com/annex/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 15:38:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>ARTECH GROUP LTD</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Magique Technologies" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/clockpicker/jquery-clockpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/colorpicker/asColorPicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet">

</head>

<!-- Loader -->
<body class="fixed-left">
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper"><!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
                class="ion-close"></i></button><!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center"><a href="/" class="logo"><i class="mdi mdi-assistant"></i> ARTECH GROUP </a>
            </div>
        </div>
        <div class="sidebar-inner slimscrollleft">
            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main Menu</li>
                    <li>
                        <a href="/home" class="waves-effect">
                            <i class="mdi mdi-airplay"></i>
                            <span>Dashboard <span></span></span>
                        </a>
                    </li>

                    @if( Auth::user()->role != 'BDO')

                    <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-layers"></i> <span>Users </span><span class="float-right"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/newuser">New User</a></li>
                            <li><a href="/allusers">View All Users</a></li>
                        </ul>
                    </li>
                    @endif

                    <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-layers"></i> <span>Groups& Members</span><span class="float-right"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/groups">Create/View Groups</a></li>
                        </ul>
                    </li>

                    @if(Auth::user()->role == 'ADMIN')
                    <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i
                                class="mdi mdi-layers"></i> <span>Branches</span><span class="float-right"><i
                                    class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/branches">Create/View Branches</a></li>
                        </ul>
                    </li>
                    @endif

                </ul>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="content-page">
        <div class="content">

            <div class="topbar">
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                               href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome {{Auth::user()->fname}}</h5>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect"><i
                                    class="mdi mdi-menu"></i></button>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>
            </div>

            @yield('content')


        </div><!-- content -->
        <footer class="footer">© {{now()->year}} Artech Group LTD. Developed by <a href="https://magiquetechnologies.co.ke/"> Magique Technologies </a> </footer>
    </div><!-- End Right content here --></div>

<!-- END wrapper --><!-- jQuery  -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/detect.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/js/waves.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/plugins/skycons/skycons.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/pages/dashborad.js')}}"></script><!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
<script src="{{asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script><!-- Buttons examples -->
<script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script><!-- Responsive examples -->
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script><!-- Datatable init js -->
<script src="{{asset('assets/pages/datatables.init.js')}}"></script>
<script src="{{asset('assets/plugins/select2/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/timepicker/moment.js')}}"></script>
<script src="{{asset('assets/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
<script src="{{asset('assets/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
<script src="{{asset('assets/plugins/clockpicker/jquery-clockpicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/colorpicker/jquery-asColor.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/colorpicker/jquery-asGradient.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/colorpicker/jquery-asColorPicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/form-advanced.js')}}"></script>
<script>
    if (typeof Skycons !== 'undefined') {
        var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    }
    ;

    // scroll

    $(document).ready(function () {

        $("#boxscroll").niceScroll({cursorborder: "", cursorcolor: "#cecece", boxzoom: true});
        $("#boxscroll2").niceScroll({cursorborder: "", cursorcolor: "#cecece", boxzoom: true});

    });</script>

<script>$(document).ready(function () {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });</script>

<script type="text/javascript">$(document).ready(function () {
        $('#datatable2').DataTable();
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#datatable3').DataTable();
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#datatable4').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#datatableAPM').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#attachmentsUsers').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#attachmentsMembers').DataTable({
            responsive: true
        });
    });
</script>

<script type="text/javascript">$(document).ready(function () {
        $('#datatableHome').DataTable({
            responsive: true,
            order: [[ 4, "desc" ]]
        });
    });
</script>
</body>
</html>
