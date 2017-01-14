<?php 
    session_start();
    include '../../php/serv.php';
    if(isset($_SESSION['email'])){        
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Montaplast</title>   
        <link rel="shortcut icon" href="../../assets/images/ico/icon.png">     
        <!-- Bootstrap -->
        <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet">
        <link href="../../assets/css/metisMenu.css" rel="stylesheet">
        <link href="../../assets/css/mensaje.css" rel="stylesheet">        
        <link href="../../assets/css/subirarchivo.css" rel="stylesheet">                
        <!-- Style CSS -->        
        <link rel="stylesheet" type="text/css" href="../../assets/css/design.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome/css/font-awesome.css">
    </head>    

    <body ng-app="fetch" id="page-top" data-spy="scroll" data-target=".navbar">        
    <div id="wrapper"  ng-controller="dbCtrl">        
            <!-- Navigation ---------- start -->
        <nav class="navbar navbar-default navbar-static-top" style="position: fixed;" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="../../assets/images/logooficial.png" alt="logo">                                                
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
                            <img src="../{{perfil.fotoperfil}}" alt="" class="img-circle" width="40" title="{{perfil.nombre}}" />                            
                    </a> 
                    <ul class="dropdown-menu dropdown-user">                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>{{perfil.nombre}} <br>{{perfil.email}}</a>                            
                        </li>                        
                        <li>
                            <a href="personal/configuracion.php"><i class="fa fa-gear fa-fw"></i>Configuracion</a>                        
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-male fa-fw"></i> Mi Cuenta</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../../php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
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
                            <a href="../index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="../documentos.php><i class="fa fa-folder-open-o fa-fw"></i> Documentos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o fa-fw"></i> Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../users.php"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                                </li>                    
                                <li>
                                    <a href="chat.php"><i class="fa fa-wechat fa-fw"></i> Chat</a>
                                </li>                    
                                <li>
                                    <a href="users.php"><i class="fa fa-inbox fa-fw"></i> Bandeja de entrada</a>
                                </li>
                                <li>
                                    <a href="../redactarm.php"><i class="fa fa-pencil fa-fw"></i> Crear Mensaje</a>
                                </li>
                                <li>
                                    <a href="users.php"><i class="fa fa-eye fa-fw"></i> Ver Mensajes</a>
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
                    <strong>Hoy!</strong>                     
                </li>
            </ol>    

            
            <div class="col-lg-4" style="overflow:scroll;height:400px;">
                <div class="media" ng-repeat="users in user">
                <a class="pull-left" href="javascript:mostrar('flotante');" ng-click="mostrarUser(users)">
                    <img class="media-object dp img-circle" src="../{{users.fotoperfil}}" style="width: 50px;height:50px;">
                </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{users.nombre}} <small> {{users.nombredpto}}</small></h4>
                        <h5>{{users.profesion}}</h5>
                        <hr style="margin:8px auto">
                        <span class="label label-info">{{users.nombredpto}}</span>                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" style="display:none;" id="flotante">                
                <div class="profile-env">
                    <section class="profile-feed">
                        <a href="javascript:cerrar('flotante');">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </a>
                        <h5>Chat con:{{userActual.nombre}}</h5>                       
                    
                        <form class="profile-post-form" id="formChat" role="form">                        
                            <div class="form-group">                            
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                                <div class="form-group" ng-repeat="perfil in data">                                
                                     <textarea required="" id="message" name="message" placeholder="Enter Message"  class="form-control autogrow" rows="3" style="resize: none;"></textarea>
                                    </textarea>  
                                    <input type="hidden" name="nombre" value={{perfil.nombre}} />
                                    <input type="hidden" name="iduser" value={{perfil.idUsuarios}} />
                                    <input type="hidden" name="idusuario" value={{userActual.idUsuarios}} />
                                    <input type="hidden" name="nombreuserdos" value={{userActual.nombre}} />
                                    <input type="hidden" name="correore" value={{userActual.email}} />
                                    <input type="hidden" name="fotoperfil" value={{perfil.fotoperfil}} />

                                    <div class="form-options">                        
                                        <div class="post-type">                
                                            <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Upload a Picture">
                                                <i class="fa fa-camera fa-fw"></i>
                                                Foto
                                            </a>
                                            <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Attach a file">
                                                <i class="fa fa-folder fa-fw"></i>
                                                Archivo
                                            </a>
                                            <a href="#" class="tooltip-primary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Check-in">
                                                <i class="entypo-location"></i>
                                            </a>
                                            <input type="hidden" name="idusuario" value={{perfil.idUsuarios}} />

                                        </div>                                            
                                    </div>                             
                                </div>
                            <button id="send" class="btn btn-primary" >Send</button>                                    
                        </form>                        
                    </section>
                </div>
            </div>
        </div>
    </div>
        <script src="../../assets/js/angular.js"></script>      
        <script src="../../assets/js/jquery.js"></script>         
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>             
        <script src="../../assets/js/metisMenu/metisMenu.min.js"></script> 
        <script src="../../assets/js/sb-admin-2.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>         
        <script languague="javascript">
        function mostrar(id) {
            div = document.getElementById(id);
            div.style.display = '';                             

        }
        
        function cerrar(id) {
        div = document.getElementById(id);
        div.style.display = 'none';
        }
    </script>

        <script>
        /**
         * Function para posicionar el cursor al final de un input o textarea
         * Tiene que recibir el id del elemento
         */
        function ponerElCursorAlFinal(id)
        {
            var obj = $("#"+id),
 
            // Guardamos en una variable el contenido
            val = obj.val();
 
            // Ponemos el foco, limpiamos el contenido y volvemos a poner
            // nuevamente el mismo contenido
            obj.focus().val("").val(val);
 
            // Movemos el scroll
            obj.scrollTop(obj[0].scrollHeight);
        }
    </script>

        <script>
            var fetch = angular.module('fetch', []);
                fetch.controller('dbCtrl', function ($scope, $http) {                
                    $http.post("../../php/select.php").success(function(data){
                        $scope.data = data;
                        console.log($scope.data);                
                    })                    
                    $http.post("../../php/user.php").success(function(user){                        
                            $scope.user = user;
                            console.log($scope.user);                
                        })
                    .error(function() {
                        $scope.data = "error in fetching dat";
                    });
                    $scope.count= 0;
                    $scope.myFunc = function(){
                        $scope.count++;
                    }
                /*
                $scope.mostrarUser = function( id ) {
                    $scope.userActual=id;
                    $http({              
                    method: 'POST',
                    url:  'conversation2.php',
                    data: { recordId : id }              
                    }).then(function (response) {                            
                        //$scope.getPeople();
                        console.log($scope.userActual.idUsuarios);
                      //console.log(response.data,response.status);              
                    }, function (response) {              
                        console.log($scope.userActual.idUsuarios);
                      //console.log(response.data,response.status);              

                    });
                };
                */
                
                $scope.mostrarUser = function(id){
                    $scope.userActual=id;
                    //alert($scope.userActual.idUsuarios);
                    $http.post("conversation.php",{elige:'postdata', userActual:$scope.userActual.idUsuarios}).success(function(iduser){ 
                        //$scope.detallediputado=detallediputado;                 
                        $scope.idusuario=iduser;

                        //console.log($scope.idusuario);
                        });                
                    //console.log($scope.userActual.idUsuarios);                
                } 
                       
                
                });      
        </script>              
        <script>
        	$(document).on("ready", function(){
				registrerMessages();
				$.ajaxSetup({"cache":false});
				setInterval("loadOldMessages()", 500);
			});
			var registrerMessages = function(){
				$('#send').on( "click",function(e){
					e.preventDefault();
					var frm = $("#formChat").serialize();
					$.ajax({
						type: "POST",
						url: "registrerprueba.php",
						data: frm
					}).done(function(info){
						console.log( info );
						$("#message").val("");
						var altura = $("#conversation").prop("scrollHeight");
						$("#conversation").scrollTop(altura);
					})
				});
			}

            var enviarusuario = function(){
                $('#enviar').on( "click",function(e){
                    e.preventDefault();
                    var frm = $("#formUser").serialize();
                    $.ajax({
                        type: "POST",
                        url: "conversation.php",
                        data: frm
                    }).done(function(info){
                        console.log( info );                                                
                    })
                });
            }

			var loadOldMessages = function(){
				$.ajax({
					type: "POST",
					url: "conversation.php"
				}).done(function(info){
					$("#conversation").html(info).scrollTop($("#conversation")[0].scrollHeight);;
					$("#conversation p:last-child").css({"background-color":"lightgreen","padding-botton":"20px"});
				});
                
			}	
        </script>
          <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
<?php 
}
else{
    echo '<script> window.location="../../index.php"; <script>';
}
 ?>
</html> 

