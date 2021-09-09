<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM cadastro";
    $result = $conn->query($sql);
/*
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Tamanho"]. "<br>";
      }
    } else {
      echo "0 results";
    }
 
 */
   // $conn->close();
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
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel.php">
                    <div class = "sidebar-brand-icon">
                        <img src = "img/setrem_logo_site.png">
                    </div>
                </a>
                <hr class = "sidebar-divider my-0">
                <li class = "nav-item active">
                    <a class="nav-link" href="painel.php">
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
                            <a class="collapse-item" href="">Ver Estabelecimentos</a>
                           

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
                            <a class="collapse-item" href="">Ver</a>
                         

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
                            <a class="collapse-item" href=""> Login </a>
                    
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

                            <h2 style="text-align:center" >Olá, <?php echo $_SESSION['nome']; ?> , esse é o seu painel de pontos.</h2>
                            <span class = "ml-2 d-none d-lg-inline text-white small"> Dionathan da Rosa </span> <br>
                        </a> <br>

                    </li>
                    </ul>
                    </nav>

                    <! - Fluido do recipiente ->


                    <div  class = "row mb-3">
                        <! - Exemplo de cartão de ganhos (mensal) ->
                        <div class = "col-xl-4 col-md-6 mb-4">
                            <div class = "card h-100">
                                <div class = "card-body">
                                    <div class = "row align-items-center">
                                        <div class = "col mr-2">
                                            <div class = "text-xs font-weight-bold text-uppercase mb-1"> Total de Contribuição Recicláveis </div>
                                            <div class = "h5 mb-0 font-weight-bold text-gray-800"> 37 </div>
                                            <div class = "mt-2 mb-0 text-muted text-xs">
                                                <span class = "text-success mr-2"> <i class = "fa fa-arrow-up"> </i> Objetos </span>
                                                <span> Desde o mês passado </span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <! - Exemplo de cartão de ganhos (anual) ->
                        <div class = "col-xl-4 col-md-6 mb-4">
                            <div class = "card h-100">
                                <div class = "card-body">
                                    <div class = "row no-gutters align-items-center">
                                        <div class = "col mr-2">
                                            <div class = "text-xs font-weight-bold text-uppercase mb-1"> Seu Lucro </div>
                                            <div class = "h5 mb-0 font-weight-bold text-gray-800"> R$ 13.70 </div>
                                            <div class = "mt-2 mb-0 text-muted text-xs">
                                                <span class = "text-success mr-2"> <i class = "fas fa-arrow-up"> </i> 12% </span>
                                                <span> Nos últimos 30 dias </span>
                                            </div>
                                        </div>
                                        <div class = "col-auto">
                                            <i class = "fas fa-shopping-cart fa-2x text-success"> </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <! - Exemplo de novo cartão de usuário ->
                        <div class = "col-xl-4 col-md-6 mb-4">
                            <div class = "card h-100">
                                <div class = "card-body">
                                    <div class = "row no-gutters align-items-center">
                                        <div class = "col mr-2">
                                            <div class = "text-xs font-weight-bold text-uppercase mb-1"> Total Tickets de Recicláveis </div>
                                            <div class = "h5 mb-0 mr-3 font-weight-bold text-gray-800"> 08 </div>
                                            <div class = "mt-2 mb-0 text-muted text-xs">
                                                <span class = "text-success mr-2"> <i class = "fas fa-arrow-up"> </i> 3 </span>
                                                <span> Ainda não foram resgatados </span>
                                            </div>
                                        </div>
                                        <div class = "col-auto">
                                            <i class = "fas fa-users fa-2x text-info"> </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <! - Exemplo de fatura ->
                        <div class = "col-xl-12  col-lg-7 mb-4">
                            <div class = "card">
                                <div class = "card-header py-3 d-flex-flex-row align-items-center justify-content-between">
                                    <h6 class = "m-0 font-weight-bold text-primary"> Ver meu histórico completo </h6>
                                    <br>
                                    <a class="m-0 float-right btn btn-danger btn-sm" href="#"> Ver mais <i
                                            class = "fas fa-chevron-right"> </i> </a>
                                </div>
                                <div class = "table-responsive">
                                    <table class = "table align-items-center table-flush">
                                        <thead class = "thead-light">
                                            <tr>
                                                <th> ID do Reciclável </th>
                                                <th> Tipo de Reciclável </th>
                                                <th> Tamanho </th>
                                                <th> Data do Depósito </th>
                                                <th> Ticket </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            $html = "";
                                            while($row = $result->fetch_assoc()) {
                                                $html .= "<tr>";
                                                $html .= "<td> <a href='#'> ".$row["id"]." </a> </td>";
                                                $html .= "<td> ".$row["TipoReciclavel"]." </td>";
                                                $html .= "<td> ".$row["Tamanho"]." </td>";
                                                $html .= "<td> ".$row["DataDeposito"]." </td>";
                                                $html .= "<td> ".$row["Tamanho"]." </td>";
                                                 $html .= "</tr>";      
                                              
                                            }
                                            echo $html;
                                          }?>
                                            
                                   
                                        </tbody>
                                    </table>
                                </div>
                                <div class = "card-footer"> </di qv>
                            </div>
                        </div>
                        <! - Mensagem do cliente ->



                    </div>
                </div>
            </div>

        </div>
        <! --- Fluido do recipiente ->
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