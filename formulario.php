<?php
session_start();
include('verifica_login.php');
?>


<html lang = "en">

    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
        <meta name = "descrição" content = "">
        <meta name = "autor" content = "">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title> Painel - Máquina Reciclágem </title>
        <link href = "css/all.min.css" rel = "stylesheet" type = "text / css">
        <link href = "css/bootstrap.min.css" rel = "stylesheet" type = "text / css">
        <link href = "css/ruang-admin.min.css" rel = "stylesheet">

    </head>


    <body id = "page-top">

        <div id = "wrapper">
            <! - Barra lateral ->
            <ul class = "navbar-nav sidebar sidebar-light acordeão" id = "AccordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class = "sidebar-brand-icon">
                        <img src = "img/setrem_logo_site.png">
                    </div>
                </a>
                <hr class = "sidebar-divider my-0">
                <li class = "nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class = "fas fa-fw fa-tachometer-alt"> </i>
                        <span> Painel </span> </a>
                </li>
                <hr class = "sidebar-divider">
                <div class="sidebar-heading">
                    Funcionalidades
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                       aria-expanded="true" aria-controls="collapseBootstrap">
                        <i class="far fa-fw fa-window-maximize"></i>
                        <span>Mapa de Pontos de Coleta</span>
                    </a>
                    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mapa de Pontos de Coleta</h6>
                            <a class="collapse-item" href="alerts.html">Opção 1</a>
                            <a class="collapse-item" href="buttons.html">Opção 2</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                       aria-expanded="true" aria-controls="collapseBootstrap">
                        <i class="far fa-fw fa-window-maximize"></i>
                        <span>Meus Tickets</span>
                    </a>
                    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Meus Tickets</h6>
                            <a class="collapse-item" href="alerts.html">Opção 1</a>
                            <a class="collapse-item" href="buttons.html">Opção 2</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                       aria-expanded="true" aria-controls="collapseBootstrap">
                        <i class="far fa-fw fa-window-maximize"></i>
                        <span>Cadastrar Reciclável</span>
                    </a>
                    <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">OPÇÕES</h6>
                            <a class="collapse-item" href="formulario.php">Cadastrar</a>
                            <a class="collapse-item" href="buttons.html">Consultar </a>

                        </div>
                    </div>
                </li>


                <hr class = "sidebar-divider">
                <div class = "sidebar-header">
                </div>
                <li class = "nav-item">
                    <a class = "nav-link collapsed" href = "#" data-toggle = "collapse" data-target = "# collapsePage" aria-extended = "true"
                       aria-controls = "collapsePage">
                        <i class = "fas fa-fw fa-columns"> </i>
                        <span> Suporte - Chat </span>
                    </a>
                    <div id = "collapsePage" class = "collapse" aria-labelledby = "headerPage" data-parent = "# accordionSidebar">
                        <div class = "bg-white py-2 collapse-inner rounded">
                            <h6 class = "collapse-header"> Páginas de exemplo </h6>
                            <a class="collapse-item" href="404.html"> Página 404 </a>
                            <a class="collapse-item" href="blank.html"> Página em branco </a>
                        </div>
                    </div>
                </li>


            </ul>
            <! - Barra lateral ->
            <div id = "content-wrapper" class = "d-flex flex-column">
                <div id = "content">
                    <!-- TopBar -->
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">



                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                    <span class="ml-2 d-none d-lg-inline text-white small">Dionathan</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    </li>
                    <div style="text-align:center"class = "topbar-divider d-none d-sm-block"> </div>
                    <li style="text-align:center" class = "nav-item dropdown no-arrow">
                        <a class = "nav-link dropdown-toggle" href = "#" id = "userDropdown" role = "button" data-toggle = "dropdown"
                           aria-haspopup = "true" aria-extended = "false">

                            <h2 style="text-align:center" >Olá, <?php echo $_SESSION['nome']; ?> , esse é o seu painel de cadastro de recicláveis.</h2>
                        </a> <br>

                    </li>
                    </ul>
                    </nav>

                    <! - Formulário de Cadastro de Recicláveis ->





                    <form class="row" name="Cadastro" action="cadastrar1.php" method="POST">

                        <div class="col">  
                            <label>Tipo Reciclavel: </label>
                            <input type="text" class="form-control" placeholder="Tamanho do Reciclavel" name="TipoReciclavel">
                        </div>
                        <div class="col">  
                            <label>Tamanho: </label>
                            <input type="text" class="form-control" placeholder="Tamanho do Reciclavel" name="Tamanho" size="20">
                        </div>
                        <div class="col">  
                            <label>Data Depósito: </label><br>
                            <input type="text" class="form-control" placeholder="Tamanho do Reciclavel" name="DataDeposito" size="20">
                        </div>
                        <div class="col">
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar Reciclável</button>
                        </div>                   

                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

</div>
</div>

<! - Role para cima ->
<a class="scroll-to-top rounded" href="#page-top">
    <i class = "fas fa-angle-up"> </i>
</a>

<script src = "js/jquery.min.js"></script>
<script src = "js/bootstrap.bundle.min.js"></script>
<script src = "js/jquery.easing.min.js"></script>
<script src = "js/ruang-admin.min.js"></script>
<script src = "js/Chart.min.js"></script>
<script src = "js/chart-area-demo.js"></script>  
</body>

</html>