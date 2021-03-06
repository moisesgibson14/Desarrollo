<?php 
    session_start();
    include '../php/serv.php';
    if(isset($_SESSION['email'])){
        $correo =$_SESSION['email'];        
        require_once('../php/bdd.php');
        $sql = "SELECT id, title, start, end, color FROM events where correo='$correo' ";
        $req = $bdd->prepare($sql);
        $req->execute();
        $events = $req->fetchAll();    
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
        <link href="../assets/css/calendario.css" rel="stylesheet">        
        <!-- Style CSS -->        
        <link rel="stylesheet" type="text/css" href="../assets/css/design.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome/css/font-awesome.css">
        
        <script src="../assets/js/angular.js"></script>      
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/js/calendario.js"></script> 
        <script src="../assets/js/fullcalendar/fullcalendar.min.js"></script>
        <script src="../assets/js//jquery/js/jquery-ui-1.10.3.minimal.min.js"></script>                

        <script src="../assets/js/moment.min.js"></script>
        <script src="../assets/js/metisMenu/metisMenu.min.js"></script> 
        <script src="../assets/js/sb-admin-2.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>                    
        
    
    
    
        

    </head>
    
    <body ng-app="fetch" id="page-top" data-spy="scroll" data-target=".navbar">        
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
                                    <a href="users.php"><i class="fa fa-inbox fa-fw"></i> Bandeja de entrada</a>
                                </li>
                                <li>
                                    <a href="redactarm.php"><i class="fa fa-pencil fa-fw"></i> Crear Mensaje</a>
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
                    <strong>Calendario</strong>                     
                </li>
            </ol>       
        <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">                
                <div id="calendar" class="col-centered">
                </div>
            </div>
            
        </div>        
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" method="POST" action="../php/addEvent.php">        
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar un Evento</h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Titulo</label>
                        <div class="col-sm-10">
                          <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="color" class="col-sm-2 control-label">Color</label>
                        <div class="col-sm-10">
                          <select name="color" class="form-control" id="color">
                              <option value="">Selecciona</option>
                              <option style="color:#0071c5;" value="#0071c5">&#9724; Azul Oscuro</option>
                              <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                              <option style="color:#008000;" value="#008000">&#9724; Verde</option>                       
                              <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                              <option style="color:#FF8C00;" value="#FF8C00">&#9724; Anaranjado</option>
                              <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                              <option style="color:#000;" value="#000">&#9724; Negro</option>
                              
                            </select>
                        </div>
                      </div>
                      <div class="form-group" style="display: none;">
                        <label for="start" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-10">
                          <input type="text" name="start" class="form-control" id="start" readonly>
                        </div>
                      </div>
                      <div class="form-group" style="display: none">
                        <label for="end" class="col-sm-2 control-label">End date</label>
                        <div class="col-sm-10">
                          <input type="text" name="end" class="form-control" id="end" readonly>
                        </div>
                      </div>                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form class="form-horizontal" method="POST" action="../php/editEventTitle.php">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="color" class="col-sm-2 control-label">Color</label>
                    <div class="col-sm-10">
                      <select name="color" class="form-control" id="color">
                          <option value="">Selecciona</option>
                          <option style="color:#0071c5;" value="#0071c5">&#9724; Azul Oscuro</option>
                          <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                          <option style="color:#008000;" value="#008000">&#9724; Verde</option>                       
                          <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                          <option style="color:#FF8C00;" value="#FF8C00">&#9724; Anaranjado</option>
                          <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                          <option style="color:#000;" value="#000">&#9724; Negro</option>
                          
                        </select>
                    </div>
                  </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label class="text-danger"><input type="checkbox"  name="delete"> Eliminar Evento</label>
                          </div>
                        </div>
                    </div>
                  <input type="hidden" name="id" class="form-control" id="id">                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        </div>    
        </div>    
    </div>                
</div>  
        <script>
            var fetch = angular.module('fetch', []);
                fetch.controller('dbCtrl', function ($scope, $http) {                
                    $http.post("../php/select.php").success(function(data){
                        $scope.data = data;
                        console.log($scope.data);                
                    })
                    
                    .error(function() {
                        $scope.data = "error in fetching dat";
                    });
                });      
        </script>              
        <script>

    $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },          
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                
                $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                $('#ModalAdd').modal('show');
            },
            eventRender: function(event, element) {
                element.bind('dblclick', function() {
                    $('#ModalEdit #id').val(event.id);
                    $('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #color').val(event.color);
                    $('#ModalEdit').modal('show');
                });
            },
            eventDrop: function(event, delta, revertFunc) { // si changement de position

                edit(event);

            },
            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

                edit(event);

            },
            events: [
            <?php foreach($events as $event): 
            
                $start = explode(" ", $event['start']);
                $end = explode(" ", $event['end']);
                if($start[1] == '00:00:00'){
                    $start = $start[0];
                }else{
                    $start = $event['start'];
                }
                if($end[1] == '00:00:00'){
                    $end = $end[0];
                }else{
                    $end = $event['end'];
                }
            ?>
                {
                    id: '<?php echo $event['id']; ?>',
                    title: '<?php echo $event['title']; ?>',
                    start: '<?php echo $start; ?>',
                    end: '<?php echo $end; ?>',
                    color: '<?php echo $event['color']; ?>',
                },
            <?php endforeach; ?>
            ]
        });
        
        function edit(event){
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end){
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }else{
                end = start;
            }
            
            id =  event.id;
            
            Event = [];
            Event[0] = id;
            Event[1] = start;
            Event[2] = end;
            
            $.ajax({
             url: 'editEventDate.php',
             type: "POST",
             data: {Event:Event},
             success: function(rep) {
                    if(rep == 'OK'){
                        alert('Saved');
                    }else{
                        alert('Could not be saved. try again.'); 
                    }
                }
            });

        }
        
    });

</script>        
</body>
<?php 
}
else{
    echo '<script> window.location="../index.php"; <script>';
}
 ?>
</html> 