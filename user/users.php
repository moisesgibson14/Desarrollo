<?php 
session_start();
include '../php/serv.php';
if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--  Scripts -->        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Montaplast</title>   
        <link rel="shortcut icon" href="../assets/images/ico/icon.png">     
        <!-- Bootstrap -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet">
        <link href="../assets/css/metisMenu.css" rel="stylesheet">
        <!-- Style CSS -->        
        <link rel="stylesheet" href="../assets/css/design.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome/css/font-awesome.css">
        <style type="text/css">
            
            
            
            
            .user_div{clear:both;
                    font-family: verdana;                    
                    color:black;                     
                    height:40px;
                    margin:1px;
                    padding:10px;
                    width:280px;
                    
                }
            .name{float:left;margin:0 0 0 10px;}            
            a:link {text-decoration:none;}a:visited {text-decoration:none;}a:hover {text-decoration:none;}a:active {text-decoration:none;}
        </style>
        
    </head>
    
    <body  ng-app="fetch" id="page-top" data-spy="scroll" data-target=".navbar">        
    <div id="wrapper" ng-controller="dbCtrl">        
            <!-- Navigation ---------- start -->
        <nav class="navbar navbar-default navbar-static-top" style="position: fixed;" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../assets/images/logooficial.png" alt="logo">                                
                
            </div>
            
            <ul class="nav navbar-top-links navbar-right">      
                <li class="dropdown" >                    
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="mensajes">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>                    
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>                                            
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todos los mensajes</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Archivos">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Alertas">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->

                <li class="profile-info dropdown" ng-repeat="perfil in data">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">                            
                            <img src="{{perfil.fotoperfil}}" alt="" class="img-circle" width="40" title="{{perfil.nombre}}" />                            
                    </a> 
                    <ul class="dropdown-menu dropdown-user">                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>{{perfil.nombre}} <br>[{{perfil.email}}]</a>                            
                        </li>                        
                        <li>
                            <a href="personal/configuracion.php"><i class="fa fa-gear fa-fw"></i>Configuracion</a>                        
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-male fa-fw"></i> Mi Cuenta</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                </li> 
    
                <!-- /.dropdown -->
            </ul>

            
            <!-- ---------------------------------------- -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar.." name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>    
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="documentos.php"><i class="fa fa-folder-open-o fa-fw"></i> Documentos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o fa-fw"></i> Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="users.php"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                                </li>                    
                                <li>
                                    <a href="chat/chat.php"><i class="fa fa-wechat fa-fw"></i> Chat</a>
                                </li>                    
                                <li>
                                    <a href="inbox.php"><i class="fa fa-inbox fa-fw"></i> Bandeja de entrada</a>
                                </li>
                                <li>
                                    <a href="redactarm.php"><i class="fa fa-pencil fa-fw"></i> Crear Mensaje</a>
                                </li>
                                <li>
                                    <a href="mensajes.php"><i class="fa fa-eye fa-fw"></i> Ver Mensajes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                
                        <li>
                            <a href="#"><i class="fa fa-paperclip fa-fw"></i> Utilidades <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="calendario.php"><i class="fa fa-calendar fa-fw"></i>Calendario</a>
                                </li>                        
                                <li>
                                    <a href="notas.php"><i class="fa fa-edit fa-fw"></i> Notas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Estadisticas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="graficas.php">Graficas</a>
                                </li>
                                <li>
                                    <a href="estados.php">Estados de Produccion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                        
                        <li>
                            <a href="herramientas.php"><i class="fa fa-wrench fa-fw"></i> Herramientas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Actualizar Información </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        
        <div id="page-wrapper">         
            <ol class="breadcrumb bc-3" >
                <li>
                    <a href="index.html"><i class="fa fa-home"></i> Inicio</a>
                </li>                
                <li class="active">
                    <strong>Usuarios</strong>                     
                </li>
            </ol>           
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <h2>Usuarios.</h2>
            </div>
            
            <div class="col-md-3 col-sm-5">
                <form method="post" action="" role="form" name="search_form" id="search_form" class="search-form-full">                
                    <div class="form-group">
                        <input type="text" class="form-control search_box" name="search" id="search_box" placeholder="Search..." autocomplete="off" />
                        <div id="searchres" class="searchres" style="position: absolute; background-color: white; border-top: red;"></div>    
                        <i class="entypo-search"></i>
                    </div>                
                </form>
                
            </div>
            
            
        </div>
        <!-- Member Entries -->
        <!-- Single Member -->
        <div class="member-entry" ng-repeat="usuario in user">
            <a href="extra-timeline.html" class="member-img">
                <img src="{{usuario.fotoperfil}}" width="40" class="img-rounded" />
                <i class="entypo-forward"></i>
            </a>
            <div class="member-details">
                <h4>
                    <a href="#">{{usuario.nombre}} {{usuario.apellidos}}</a>
                </h4>
                <!-- Details with Icons -->
                <div class="row info-list">
                    
                    <div class="col-sm-4">
                        <i class="fa fa-briefcase fa-fw"></i>
                        Area <a href="#">{{usuario.nombredpto}}</a>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-envelope fa-fw"></i>
                        <a href="#">{{usuario.email}}</a>
                    </div>                                                        
                    <div class="col-sm-4">
                        <i class="fa fa-facebook-square fa-fw"></i>
                        <a href="#">{{usuario.Facebook}}</a>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-pencil-square fa-fw"></i>
                        <a href="#">{{usuario.profesion}}</a>
                    </div>
                    <div class="clear"></div>                                                                                
                </div>
            </div>
        </div>    
    </div>          
</div>  


        <script src="../assets/js/angular.js"></script>      
        
        <script src="../assets/js/jquery.js"></script> 
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/metisMenu/metisMenu.min.js"></script> 
        <script src="../assets/js/sb-admin-2.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>                    


        <script>
            var fetch = angular.module('fetch', []);
                fetch.controller('dbCtrl', function ($scope, $http) {                
                    $http.post("../php/select.php").success(function(data){
                        $scope.data = data;
                        console.log($scope.data);                
                    })

                    $http.post("../php/user.php").success(function(user){                        
                            $scope.user = user;
                            console.log($scope.user);                
                        })
                    
                    .error(function() {
                        $scope.data = "error in fetching dat";
                    });                    
                });                      
        </script>              
        <script type="text/javascript">
            $(function(){
    $('#search').focus();
    $('#search_form').submit(function(e){
        e.preventDefault();
    })

    $('#search').keyup(function(){
        var envio = $('#search').val();
        $('#resultados').html('<h6 size=5 width=20% align=center><img src="../assets/images/cargar.gif" width="20" alt="" /> Cargando</h6>');
        $.ajax({
            type: 'POST',
            url: '../php/buscador.php',
            data: ('search='+envio),
            success: function(resp){
                if(resp!=""){
                    $('#resultados').html(resp);
                }
            }
        })
    })
}) 

        </script>
        <script type="text/javascript">
            $(document).ready(function(){
            $("#search_box").keyup(function(){
                var search_string = $("#search_box").val();
                if(search_string == ''){
                    $("#searchres").html('');
                }else{
                    postdata = {'string' : search_string
                }
                    $.post("../php/buscador2.php",postdata,function(data){
                     $("#searchres").html(data); 
                    });
                }});
            });
            function fillme(name){
                $("#search_box").val(name);$("#searchres").html('');
            }
        </script>
</body>
<?php 
}
else{
    echo '<script> window.location="../index.php"; <script>';
}
 ?>
</html> 