<DOCTYPE HTML>
    <head>
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
            <script src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script> 
        <script src="<?php echo base_url() ?>bower_components/moment/moment.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
       <script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/src/js/locales/bootstrap-datetimepicker.es.js"></script>
        <title>Inicio de Sesión de Administrador</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <!--<link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">-->
        <link href="/assets/css/login.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    
    </head>
    <body background="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <img src="<?php echo base_url() ?>Imagenes/terraza-la-buena-barra.jpg" style="padding-left:20%; width: 70%">
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-5 col-md-3 col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">
                    <form method="post" action="<?php echo base_url() ?>Clogin/valida" role="form">
                        <div class="form-login">
                            <h4>Inicio de sesion</h4>
                            <input type="text" id="userName" name="userName" class="form-control input-sm chat-input" placeholder="Usuario" />
                            <br>
                            <input type="password" id="userPassword" name="userPassword" class="form-control input-sm chat-input" placeholder="Contraseña" />
                            <br><br>
                            <span class="group-btn">
                                <button type="submit" class="btn btn-primary btn-md">Iniciar  <i class="fa fa-sign-in"></i></button>
                                <!-- <a href="" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>-->
                            </span>
                        </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</DOCTYPE>