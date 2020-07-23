<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>School Management System V1</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48be5f5ef0.js" crossorigin="anonymous"></script>

</head>

<body>
    @php
    $x = Auth::user()->preference;
    $user = Auth::user()->name;
    @endphp

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sticky-top">
                <button type="button" id="sidebarCollapseI" class="navbar-btnI float-right"
                    style="position: absolute;right: 5px;">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div id="dashboardTop" class="sidebar-header text-center">
                    <i class="fas fa-user-circle fa-10x" style="margin-bottom:5px;"></i>
                    <div style="margin-top: 5px;">
                        <div class="form-inline justify-content-center" style="border-top-style:none;">
                            <p style="margin: 0px 10px 0px 0px;">{{ $user }}</p>
                            <i class="fas fa-cog"></i>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download
                            source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content Holder -->
        <div class="container-fluid" id="content" style="background-image: url('./img/BackGB.jpg');background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">

            <nav class="navbar sticky-top navbar-expand-lg" id="navbar">
                <div class="container-fluid">
                    <div class="row" style="margin-left: 0">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <a class="navbar-brand" href="#" style="margin-left: 5px;font-weight:400;">Brooklyn School
                            System</a>
                    </div>
                    <button id="collapseMenu" class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">{{ $user }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="form-inline"
                            style="cursor: pointer;" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            @csrf
                            <span style="margin-right: 10px;">Logout</span>
                            <i class="fas fa-sign-out-alt fa-2x" style="font-size: 25px;"></i>

                        </form>
                    </div>
                </div>
            </nav>
            <div id="containerD" class="container-fluid">
                <div class="row float-left">
                    <div class="col-12">
                        <div class="jumbotron"
                            style="padding-top: 25px; padding-bottom: 25px;background-color: rgba(0,0,0,.15);color:black;">
                            <h3 class="display-5">Bienvenido, al Sistema de Gestion Escolar Brooklyn School</h3>
                            <p class="lead">Ejemplo de un modulo de bienvenida o instrucciones para el usuario</p>
                            <hr class="my-4">
                            <p>Detalles de un tema o instruccion para el usuario.</p>
                            <a class="btn btn-primary" href="#" role="button">Aprender más</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <h5 class="card-header" style="background-color: rgba(255, 195, 0,.9)">Tareas y Asignaciones
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">Ejemplo de un contenido</h5>
                                <p class="card-text softP">Datos o informacion de un modulo de contenido.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="line" style="background-color: black"></div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <h5 class="card-header" style="background-color: rgba(213, 38, 0,.5)">Clases Online</h5>
                            <div class="card-body">
                                <h5 class="card-title">Ejemplo de un contenido</h5>
                                <p class="card-text softP">Datos o informacion de un modulo de contenido.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="line" style="background-color: black"></div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <h5 class="card-header" style="background-color: rgba(88, 24, 69,.5)">Examenes de Unidad
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">Ejemplo de un contenido</h5>
                                <p class="card-text softP">Datos o informacion de un modulo de contenido.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="line" style="background-color: black"></div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <h5 class="card-header" style="background-color: rgba(18, 171, 0,.6)">Notas e Información
                            </h5>
                            <div class="card-body">
                                <h5 class="card-title">Ejemplo de un contenido</h5>
                                <p class="card-text softP">Datos o informacion de un modulo de contenido.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="line" style="background-color: black"></div>
                    </div>
                </div>

            </div>

            <div class="footerI">
                <!-- Copyright -->
                <div class="col-md-12">
                    <div class="text-center py-2 mx-auto" style="color:grey;font-size: 12px;">© 2020 Copyright,
                        developed by Ing. André Bolaños</div>
                </div>
                <!-- Copyright -->
            </div>



        </div>

    </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                $('#content').toggleClass('active');
                $('#sidebarCollapseI').toggleClass('active');
                $('#containerD').toggleClass('active');

            });
        });
        $(document).ready(function () {
            $('#sidebarCollapseI').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                $('#sidebarCollapse').toggleClass('active');
                $('#containerD').toggleClass('active');
                

            });
        });

        $(document).ready(function () {
            
            if ({!! json_encode($x) !!} == 'Estilo A') {
                document.getElementById("navbar").style.backgroundColor ="#0072C6";
                document.getElementById("sidebar").style.backgroundColor ="#0072C6";
            }
                
            if ({!! json_encode($x) !!} == 'Estilo B') {
                document.getElementById("navbar").style.backgroundColor ="#772953";
                document.getElementById("sidebar").style.backgroundColor ="#772953";
            } 

            if ({!! json_encode($x) !!} == 'Estilo C') {
                document.getElementById("navbar").style.backgroundColor ="#4B286D";
                document.getElementById("sidebar").style.backgroundColor ="#4B286D";
            }

            if ({!! json_encode($x) !!} == 'Estilo D') {
                document.getElementById("navbar").style.backgroundColor ="#34495E";
                document.getElementById("sidebar").style.backgroundColor ="#34495E";
            } 

            if ({!! json_encode($x) !!} == 'Estilo E') {
                document.getElementById("navbar").style.backgroundColor ="#008080";
                document.getElementById("sidebar").style.backgroundColor ="#008080";
            } 

            if ({!! json_encode($x) !!} == 'Estilo F') {
                document.getElementById("navbar").style.backgroundColor ="#7B241C";
                document.getElementById("sidebar").style.backgroundColor ="#7B241C";
            }   
            
            
            
        });

       

        






    </script>
</body>

</html>