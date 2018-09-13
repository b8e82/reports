<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllSystem</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{asset('vendor/metisMenu/metisMenu.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('dist/css/sb-admin-2.css')}}">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{asset('vendor/morrisjs/morris.css')}}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fieldsetform.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ONSYSTEM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/clients"><i class="fa fa-user fa-fw"></i> Clientes</a>
                        </li>
                        <li>
                            <a href="/devices"><i class="fa fa-desktop fa-fw"></i> Dispositivos</a>
                        </li>
                        <li>
                            <a href="/dyndns_hosts"><i class="fa fa-table fa-fw"></i>Hosts DynDNS</a>
                        </li>
                        <li>
                            <a href="/owners"><i class="fa fa-table fa-fw"></i>Donos de Obra</a>
                        </li>
                        <li>
                            <a href="/installers"><i class="fa fa-cog fa-fw"></i>Instaladores</a>
                        </li>
                        <li>
                            <a href="/technicians"><i class="fa fa-wrench fa-fw"></i>Técnicos</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-building fa-fw"></i>Medições<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/upload">Importar</a>
                                </li>
                                <li>
                                    <a href="/buildings">asdf</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/buildings"><i class="fa fa-building fa-fw"></i>Edifícios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/buildings/create">Adicionar</a>
                                </li>
                                <li>
                                    <a href="/buildings">Todos</a>
                                </li>
                            </ul>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                
                @yield('content')

            </div>
            <!-- /.row -->
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="{{ URL::asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
<script type="text/javascript" src="{{ URL::asset('/vendor/raphael/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/vendor/morrisjs/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/data/morris-data.js') }}"></script>
    <!-- Custom Theme JavaScript -->
<script type="text/javascript" src="{{ URL::asset('/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
