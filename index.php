<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Proyecto de Programacion Web EDCOM ESPOL">
    <meta name="keywords" content="edcom, espol, ecuador en un click">
    <meta name="author" content="Ecuadigital MKT"/>
    <meta name="robots" content="index, follow">
    
    <link rel="shortcut icon" href="favicon.png">

    <title>Ecuador en un click</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- Animacije -->
    <link href="css/animate.css" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- parte 2 -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top top-nav-collapse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"> 
              <img class="img-responsive hidden-sm hidden-md hidden-xs" src="images/logo.png" />
              <img class="img-responsive visible-xs visible-md visible-sm hidden-lg" src="images/logo-sm.png"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a class="page-scroll" href="#about">Ecuador</a></li>
                <li><a href="#about">&nbsp; &nbsp; Tips &nbsp; &nbsp;</a></li>
                <!--li><a href="#contact">Contact</a></li-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acerca del Proyecto <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </nav>

    <section id="intro" class="intro-section">
          <!-- Video Background -->
        <video id="video_background" preload="auto" autoplay="autoplay" muted="muted" loop="loop"> 
               <source src="video/ecuador.mp4" type="video/mp4" />
                <source src="video/ecuador.webm" type="video/webm" />
        </video> 
        <!-- / End Video Start Container -->       
        <div class="wow bounceIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Ecuador es nuestro destino </br> Atr&eacute;vete a conocerlo </h1>
                    <p class="slogan"><mark class="gray">ESTAMOS A UN CLICK DE DISTANCIA</mark></p>
                    </div>
                    <a class="home-button page-scroll" href="#about">EMPECEMOS</a>
                    <a class="home-button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-star"></i> LOGIN</a>
                    <!-- VENTANA MODAL PARA LOGIN -->

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg modallog" tabindex="-1" role="dialog" id="myModal" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog mimodal">
                        <div class="modal-content modal-login">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title " id="myModalLabel">Identifícate o Crea una Cuenta</h4>
                          </div>
                          <div class="modal-body">
                            <section class="row mt">
                                  <div class="col-xs-6">
                                    <h2 class="strong-header"></h2>
                                  </div>
                                    <div class="container">
                                      <div class="row fondo-login">
                                        <div class="col-md-6 space-right-20 linea">
                                            <section class="login element-emphasis-strong">
                                                <h3 class="strong-header large-header">
                                                    Identifícate
                                                </h3>
                                                <form role="form" action="php/Sesion.php" method="post" novalidate="">
                                                    <div class="form-group">
                                                        <label for="email">Usuario</label>
                                                        <input type="email" name="email" class="form-control" id="email" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Contraseña</label>
                                                        <input type="password" name="password" class="form-control" id="password" required="">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox"> Recordarme
                                                        </label>
                                                      </div>
                                                    <a type="submit" name="iniciar_sesion" id="iniciar_sesion" class="home-button btn ">Iniciar Sesión</a>
                                                    <a href="#" class="btn btn-link pull-right">Olvidé mi Contraseña</a>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </section>
                                        </div>
                                        <div class="col-md-6 space-left-20">
                                            <section class="element-emphasis-weak">
                                                <h3 class="strong-header">
                                                    Regístrate
                                                </h3>
                                                <p><span>Aún no eres miembro de Servitickets.</span></br>
                                                <span>Únete a nuestra comunidad y forma parte de nuestra familia.</span></br>  
                                                </p>
                                                </br>
                                                <a href="registro.html" class="home-button btn ">
                                                    Regístrate
                                                </a>
                                                
                                            </section>
                                        </div>
                                      </div>
                                    </div>
                                </section>
                          </div>
                          
                        </div>
                      </div>
                    </div>


                    <!-- FIN VENTANA MODAL -->



            
        </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section col-lg-12">
    <div class="row space"> </div>
        <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12"> 
            <img src="images/c01.jpg" class="img-responvive visible-lg hidden-md hidden-xs hidden-sm"/>
            <center><img src="images/c01-sm.jpg" class="img-responvive visible-xs visible-sm visible-md hidden-lg"/></center>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12"> 
            <img src="images/c02.jpg" class="img-responvive visible-lg hidden-md hidden-xs hidden-sm"/>
            <center><img src="images/c02-sm.jpg" class="img-responvive visible-xs visible-sm visible-md hidden-lg"/></center>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12"> 
            <img src="images/c03.jpg" class="img-responvive hidden-md hidden-xs hidden-sm"/>
            <center><img src="images/c03-sm.jpg" class="img-responvive visible-xs visible-sm visible-md hidden-lg"/></center>
            </div>
            
            <div class="col-lg-6 col-md-12 col-sm-12"> 
            <img src="images/c04.jpg" class="img-responvive visible-lg hidden-md hidden-xs hidden-sm"/>
            <center><img src="images/c04-sm.jpg" class="img-responvive visible-xs visible-sm visible-md hidden-lg"/></center>
            </div>
            <div class="col-md-offset-4 img-centro"><img src="images/centro.png" class="img-responsive visible-lg visible-md hidden-xs hidden-sm"/></div>

        </div>


        	</div>
        </div><!-- /.carousel -->

    </section>
    
<!--************************** footer ************************-->
    <footer>
          <div class="container">
               
              <div class="row">
                <div class="col-lg-4 hidden-xs hidden-sm hidden-m foot">
                  <form>
                      <p>Porque su opinion es importante para nosotros. </p>
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email">
                          </div>
                      <div class="form-group">
                          <textarea type="text" class="form-control" id="exampleInputPassword1" rows="3" placeholder="Mensaje"></textarea>
                      </div>
                     
                      <button type="submit" class="btn btn-default">ENVIAR</button>
                    </form>
                  </div>
              <!-- **********************8 -->
                  
                <div class="col-lg-4 hidden-xs hidden-sm hidden-m infoCentro foot">
                    <p class="direccion">Cont&aacute;ctenos</p> 
                      
                    <span class="direccion glyphicon glyphicon-map-marker ">&nbsp;Malec&oacute;n 100 y Loja</span></br>
                    <span class="direccion glyphicon glyphicon-earphone">&nbsp;Tel&eacute;fono: (593-4) 2 530271</span></br>
                    <span class="direccion glyphicon glyphicon-globe">&nbsp;Guayaquil - Ecuador</span></br>
                    <span class="direccion glyphicon glyphicon-screenshot">&nbsp;C&oacute;digo Postal: EC090194</span>
                    </br></br></br>
                        
                  </div>
                  <!-- ********************** -->
                            
                <div class="col-lg-4 hidden-xs hidden-sm hidden-m foot">
                    <div class="col-lg-6 imgfoot"><center><img class="img-responsive" src="images/f1.png"/></center></div>
                    <div class="col-lg-6 imgfoot"><center><img class="img-responsive" src="images/f2.png"/></center></div>
                    <div class="col-lg-6 imgfoot"><center><img class="img-responsive" src="images/f3.png"/></center></div>
                    <div class="col-lg-6 imgfoot"><center><img class="img-responsive" src="images/f4.png"/></center></div>
                
                  </div>
              </div>
          <div class="col-lg-12 col-sm-12 col-md-12 derAutor">
                  <p>Todos los derechos reservados. Ecuador en un click - EcuaDigital MKT&copy; - 2014</a></p>
        
              </div>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- / Contact -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        $(document).ready(function () {
            $('#tooltipa').tooltip();
            $('#tooltippic').tooltip();
            $('#tooltipskype').tooltip();
            $('#tooltiplinkedin').tooltip();
            $('#tooltipfacebook').tooltip();
            $('#tooltipgoogle').tooltip();
            $('#tooltipinstagram').tooltip();
        });
    </script>
</body>
</html>
