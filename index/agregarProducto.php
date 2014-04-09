<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="...">
        <meta name="keywords" content="...">
        <meta name="author" content="...">
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/czsale.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/czsale-responsive.css" rel="stylesheet" media="screen">
        <title>SYSA Industrial</title>
    </head>
    <body>
        <div class="container wrapper">   
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/czsale_logo.png"></a>
            </div>
            <!-- /Logo -->  
            <!-- Static navbar -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#czsale-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="czsale-navbar">
                    <!--<a href="agregarProducto.php.html" class="btn btn-success navbar-btn add-classified-btn navbar-left" role="button">Add classified</a>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="index.html">Inicio</a></li>-->
                                <li><a href="agregarProducto.php">Agregar producto</a></li>
                                <!--<li><a href="category.html">Category page</a></li>-->
                                <li><a href="detalles.php">Detalles</a></li>
                                <!--<li><a href="conditions.html">Rules & Conditions</a></li>-->
                                <!--<li><a href="help.html">Help (FAQ)</a></li>-->
                                <!--<li><a href="signUp.html">Sign Up</a></li>-->
                            </ul>
                        </li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <!--<li><a href="help.html">Help</a></li>-->
                        <!--<li><a href="signUp.html">Sign Up</a></li>-->
                        <!--                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                                                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                                        <div class="form-group">
                                                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox"> Remember me
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                                                            <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                                                        </li>
                                                    </ul>
                                                </li>-->
                    </ul>
                </div>
            </nav>
            <!-- /Static navbar --> 
            <!-- Content -->
            <div class="row content">
                <div class="col-lg-3 content-left">
                    <h4>Buscar</h4>
                    <div class="well well-sm">
                        <form>
                            <fieldset>
                                <input type="text" class="form-control" />
                                <!--<small><a href="#" class="btn-advanced-search">Advanced</a></small>-->
                                <input type="submit" class="btn btn-danger btn-sm btn-search" value="Buscar" />
                            </fieldset>
                        </form>
                    </div>
                    <h4>Categorias</h4>
                    <div class="list-group categories">
                        <a href="#" class="list-group-item">Industria <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Comercio <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Gobierno <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Publico <span class="glyphicon glyphicon-chevron-right"></span></a>
<!--                        <a href="#" class="list-group-item">Computers & Networking <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">DVDs & Movies <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Health & Beauty <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Music <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Toys & Hobbies <span class="glyphicon glyphicon-chevron-right"></span></a>-->
                    </div>
                    <h4>Productos Nuevos</h4>
                    <div class="newest-classifieds">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Samsung Galaxy S4</strong></a></p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Vizio 60" Slim Frame 3D LED</strong></a></p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" style="width: 64px; height: 64px;" src="http://placehold.it/64x64/e0e0e0" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Apple McBook Pro</strong></a></p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel ...</p>
                            </div>
                        </div>
                        <p class="text-right show-more"><a href="#">More &rarr;</a></p>
                    </div>
                </div>
                <div class="col-lg-9 content-right">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="agregarProducto.php">Agregar producto</a></li>
                    </ol>
                    <h2>Agregar producto</h2>
                    <p>Este apartado será exclusivo para administradores. Desde aquí se podrá dar de alta a los productos, especificando sus detalles, imágenes y categorías.</p>
                    <hr>
                    <form role="form">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Secccion</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="section1">Seccion principal</label>
                                    <select id="section1" class="form-control">
                                        <option>Seleccione una seccion</option>
                                        <option>Industria</option>
                                        <option>Comercio</option>
                                        <option>Gobierno</option>
                                        <option>Publico</option>
<!--                                        <option selected="selected">Computers & Networking</option>
                                        <option>DVDs & Movies</option>
                                        <option>Health & Beauty</option>
                                        <option>Music</option>
                                        <option>Toys & Hobbies</option>-->
                                    </select>
                                </div>
                                <div class="well">
                                    <label>Seccion extra</label>
                                    <div class="checkbox" style="margin-top: 0;">
                                        <label><input type="checkbox"> Hombres</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Mujeres</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Niños</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Detalles</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="type">Tipo</label>
                                    <select id="type" class="form-control">
                                        <option selected="selected">Selecione un tipo</option>
                                        <option>Ropa</option>
                                        <option>Calzado</option>
                                        <option>Accesorios</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Categoria</label>
                                    <select id="category" class="form-control">
                                        <option value="0" selected="selected">Seleccione un categoria</option>
                                        <option value="1">Camisas</option>
                                        <option value="32">Pantalones</option>
                                        <option value="4">Overalles</option>
                                        <option value="5">Sudaderas</option>
                                        <option value="25">Chamarras</option>
<!--                                        <option value="30">Games</option>
                                        <option value="27">Coolers</option>
                                        <option value="7">Printers</option>
                                        <option value="9">LCD screens</option>
                                        <option value="2">Modems</option>
                                        <option value="26">MP3 players</option>
                                        <option value="10">Notebooks</option>
                                        <option value="12">PC, Computers</option>
                                        <option value="13">Processors</option>
                                        <option value="14">Network devices</option>
                                        <option value="17">Software</option>
                                        <option value="24">Tablets, E-readers</option>
                                        <option value="28">Wireless, WiFi</option>
                                        <option value="19">Motherboards</option>
                                        <option value="22">Other</option>-->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="heading">Titutlo</label>
                                    <input type="text" class="form-control" id="heading" placeholder="ej. Pantalon Industrial tipo Cargo Azul-Mar Reforzado">
                                </div>
                                <div class="form-group">
                                    <label for="text">Detalles</label>
                                    <textarea id="text" class="form-control" rows="8"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Precio</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group" style="width: 150px;">
                                                <input type="text" class="form-control" id="price">
                                                <span class="input-group-addon">MX</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p class="form-control-static" style="padding: 0 10px;">ó</p>
                                        </div>
                                        <div class="form-group">
                                            <select id="price-other" class="form-control">
                                                <option value="0" selected="selected">Precio alternativo</option>
                                                <option value="1">Por acuerdo</option>
                                                <option value="2">Por oferta</option>
                                                <option value="3">Intercambio</option>
                                                <option value="4">Gratis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="zip">Codigo de producto</label>
                                    <input type="text" class="form-control" id="zip" style="width: 150px;">
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Imagenes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Seleccione las imagenes de producto</label>
                                    <input type="file" id="image1">
                                    <input type="file" id="image2">
                                    <input type="file" id="image3">
                                    <input type="file" id="image4">
                                    <input type="file" id="image5">
                                </div>
<!--                                <div class="form-group">
                                    <label for="video">Video (YouTube embed code)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="video">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                                    </div>
                                </div>-->
                            </div>
                        </div>
<!--                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Your personal details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="userName">Your name</label>
                                    <input type="text" class="form-control" id="userName">
                                </div>
                                <div class="form-group">
                                    <label for="userPhone">Phone</label>
                                    <input type="text" class="form-control" id="userPhone">
                                </div>
                                <div class="form-group">
                                    <label for="userEmail">E-mail</label>
                                    <input type="email" class="form-control" id="userEmail">
                                </div>
                                <div class="form-group">
                                    <label for="userPass">Password</label>
                                    <input type="password" class="form-control" id="userPass">
                                </div>
                            </div>
                        </div>-->
<!--                        <div class="well">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet porta eros, eget facilisis arcu. Duis condimentum fermentum enim, ac rutrum erat venenatis vel. Morbi pharetra viverra faucibus.</p>
                            <div class="checkbox">
                                <label><input type="checkbox" checked="checked"> Sign Up for Newsletter</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> I agree to the <a href="#">Terms of Use</a></label>
                            </div>
                            <button type="button" class="btn btn-success">Preview & Save</button>
                        </div>-->
                    </form>
                </div>
            </div>
            <!-- /Content -->
            <div class="footer">
                <div class="well well-sm">
                    <div class="pull-left">
                        <ul class="nav nav-pills">
                            <li><a href="agregarProducto.php"><span class="glyphicon glyphicon-plus"></span> Add classified</a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="help.html">Help</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="conditions.html">Rules & conditions</a></li>
                        </ul>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
                <div class="pull-right">
                    <p class="text-muted"><small>Copyright &copy; 2013-2014, SenseMedia.cz - All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script src="../bootstrap/js/jquery-1.10.2.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/respond.min.js"></script>
        <script src="../bootstrap/js/jquery.slides.min.js"></script>
        <script>
            $(document).ready(function() {
                // Drop down menu handler
                $('.dropdown-menu').find('form').click(function(e) {
                    e.stopPropagation();
                });
            });
        </script>
        <!-- /JS -->
    </body>
</html>