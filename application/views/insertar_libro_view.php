<!DOCTYPE html>
<html lang="es-es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Pagina de Maite Inglada Mulet, homeópata unicista.">
        <meta name="author" content="Amanda María Oliver Sánchez">

        <title>Insertar Libro</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>assets/css/agency.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
                 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url();?>">Homeopatía Castellón</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                             <li>
                        <a class="page-scroll" href="<?php echo base_url();?>administrador_controller">Menú ppal.</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/insertar_entrada">Añ. entrada</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/insertar_noticia">Añ. noticia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/insertar_libro">Añ. libro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/editar_eliminar_entrada">Editar/eliminar entrada</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/editar_eliminar_noticia">Editar/eliminar noticia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>menu_controller/editar_eliminar_libro">Editar/eliminar libro</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <br><br><h2 class="section-heading">Añadir libro a la Bibliografía</h2><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 ">
                   <?php
                            echo form_open("libros_controller/insertar_libro");?>
                            <div class="row ">

                                <div class="col-md-12">
                                    <div class="form-group">
                                         <?php echo form_label("", "titulo");

                                            $data=array(
                                                "name"=>"titulo",
                                                "id"=>"titulo",
                                                "value"=>"",
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí el titulo del libro',
                                            );
                                            echo form_input($data);?><p><?php form_error('titulo')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                       <div class="form-group">
                                         <?php echo form_label("", "editorial");

                                            $data=array(
                                                "name"=>"editorial",
                                                "id"=>"editorial",
                                                "value"=>"",
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí la editorial del libro',
                                            );
                                            echo form_input($data);?><p><?php form_error('editorial')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                       <div class="form-group">
                                         <?php echo form_label("", "autor");

                                            $data=array(
                                                "name"=>"autor",
                                                "id"=>"autor",
                                                "value"=>"",
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí el nombre del autor',
                                            );
                                            echo form_input($data);?><p><?php form_error('autor')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                       <?php echo form_label("", "sinopsis");

                                            $data=array(
                                                "name"=>"sinopsis",
                                                "id"=>"sinopsis",
                                                "value"=>"",
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí la sinopsis del libro',
                                            );
                                            echo form_textarea($data);?><p><?php form_error('sinopsis')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div id="mensaje" class="col-lg-12 ">

                                   <?php echo validation_errors();
                                    echo $message?>

                                    <div class='panel panel-info'><br><br>

                                     <?php echo form_submit("Submit", "Guardar",'class="btn btn-xl negro"') ; ?>

                <a class="btn btn-xl" role="button"href="<?php echo base_url();?>login_controller/logout_ci">Cerrar Sesión</a><br><br><br>
                                </div>

                         <?php echo form_close();?>


                    </div>
                </div>
                    <br><br></div>
            </div>
        </div>



        <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Amanda María Oliver Sánchez</span>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/AmyNahMas"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://es.linkedin.com/pub/amanda-maría-oliver-sánchez/ab/6a3/798/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/agency.js"></script>
</body>


</html>
