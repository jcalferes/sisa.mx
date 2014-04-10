<!--asdsad-->
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
        <link href="../bootstrap/css/czsale-carousel.css" rel="stylesheet" media="screen">
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
                    <a href="addClassified.html" class="btn btn-success navbar-btn add-classified-btn navbar-left" role="button">Add classified</a>
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
                                <input type="submit" class="btn btn-danger btn-sm btn-search" value="Search" />
                            </fieldset>
                        </form>
                    </div>
                    <h4>Categories</h4>
                    <div class="list-group categories">
                        <a href="categorias.php" class="list-group-item">Industria <span class="glyphicon glyphicon-chevron-right"></span></a>
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
                                <img class="media-object" style="width: 64px; height: 64px;" src="img/classifieds/ch1.jpg" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Camisa Tipo 1</strong></a></p>
                                <p>Pequeña descripcion del producto</p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" style="width: 64px; height: 64px;" src="img/classifieds/chh8.jpg" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Chamarra Tipo 8</strong></a></p>
                                <p>Pequeña descripcion del producto</p>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" style="width: 64px; height: 64px;" src="img/classifieds/ph1.jpg" />
                            </a>
                            <div class="media-body">
                                <p><a href="#"><strong>Pantalon Tipo 1</strong></a></p>
                                <p>Pequeña descripcion del producto</p>
                            </div>
                        </div>
                        <p class="text-right show-more"><a href="#">Mas &rarr;</a></p>
                    </div>
                </div>
                <div class="col-lg-9 content-right">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Industria</a></li>
                        <li><a href="#">Hombres</a></li>
                    </ol>
                    <h2>Overall Especial</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12" id="slider">
                                    <div class="col-md-12" id="carousel-bounding-box" style="padding: 0;">
                                        <div id="detailCarousel" class="carousel slide">
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="img/classifieds/8.jpg" class="img-responsive" />
                                                </div>
                                                <div class="item" data-slide-number="1">
                                                    <img src="http://placehold.it/1024x768/e0e0e0/&text=Image+2" class="img-responsive" />
                                                </div>
                                                <div class="item" data-slide-number="2">
                                                    <img src="http://placehold.it/1024x768/e0e0e0/&text=Image+3" class="img-responsive" />
                                                </div>
                                                <div class="item" data-slide-number="3">
                                                    <img src="http://placehold.it/1024x768/e0e0e0/&text=Image+4" class="img-responsive" />
                                                </div>
                                                <div class="item" data-slide-number="4">
                                                    <img src="http://placehold.it/1024x768/e0e0e0/&text=Image+5" class="img-responsive" />
                                                </div>
                                            </div>
                                            <a class="carousel-control left" href="#detailCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                            <a class="carousel-control right" href="#detailCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
                                    <ul class="list-inline">
                                        <li><a id="carousel-selector-0" class="selected"><img src="img/classifieds/8.jpg" class="img-responsive" /></a></li>
                                        <li> <a id="carousel-selector-1"><img src="http://placehold.it/1024x768/e0e0e0/&text=Image+2" class="img-responsive" /></a></li>
                                        <li> <a id="carousel-selector-2"><img src="http://placehold.it/1024x768/e0e0e0/&text=Image+3" class="img-responsive" /></a></li>
                                        <li> <a id="carousel-selector-3"><img src="http://placehold.it/1024x768/e0e0e0/&text=Image+4" class="img-responsive" /></a></li>
                                        <li> <a id="carousel-selector-4"><img src="http://placehold.it/1024x768/e0e0e0/&text=Image+5" class="img-responsive" /></a></li>
                                    </ul>    
                                </div> 
                            </div> 
                        </div>
                        <div class="col-md-4">
                            <table class="table table-condensed table-hover">
                                <thead>
                                <th colspan="2">Detalles:</th>
                                </thead>
                                <tbody style="font-size: 12px;">
                                    <tr>
                                        <td>ID</td>
                                        <td>012345</td>
                                    </tr>
                                    <tr>
                                        <td>Precio</td>
                                        <td>550 MXN</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>Nuevo</td>
                                    </tr>
                                    <tr>
                                        <td>Marca</td>
                                        <td>SYSA Industrial</td>
                                    </tr>
                                    <tr>
                                        <td>Tipo</td>
                                        <td>Overall</td>
                                    </tr>
                                    <tr>
                                        <td>Talla</td>
                                        <td>M, G, XG</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Unico</td>
                                    </tr>
<!--                                    <tr>
                                        <td>Payments</td>
                                        <td>PayPal, Credit Card</td>
                                    </tr>-->
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <span style="padding-left: 5px;"><strong>Ventas:</strong></span>
                                    <div class="well">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4><a href="#">SYSA Industrial</a></h4>
                                                <!--<small>Rating: <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star-empty"></span></small><br />-->
                                                <!--<small>Location: <cite title="Prague, Czech Republic">Prague, Czech Republic <span class="glyphicon glyphicon-map-marker"></span></cite></small><br />-->
                                                <span class="glyphicon glyphicon-envelope"></span> ventas@sysaindustrail.com.mx<br />
                                                <span class="glyphicon glyphicon-phone-alt"></span> +420 123 456 789<br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Description</h4>
                            <p style="text-align: justify;">Descripcion larga...</p>
                        </div>
                    </div>
                    <hr>
<!--                    <div class="row">
                        <div class="col-md-12">
                            <h4>Send message to seller</h4>
                            <div class="panel panel-default">
                                <div class="panel-body">                
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="InputEmail">Email address</label>
                                            <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputText">Your text</label>
                                            <textarea class="form-control" id="InputText" name="message" placeholder="Type in your message" rows="5" style="margin-bottom:10px;"></textarea>
                                        </div>
                                        <button class="btn btn-info" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <!-- /Content -->
            <div class="footer">
                <div class="well well-sm">
                    <div class="pull-left">
                        <ul class="nav nav-pills">
                            <!--<li><a href="agregarProducto.php"><span class="glyphicon glyphicon-plus"></span> Add classified</a></li>-->
                        </ul>
                    </div>
                    <div class="pull-right">
                        <ul class="nav nav-pills">
                            <!--<li><a href="help.html">Help</a></li>-->
                            <li><a href="contact.php">Contact</a></li>
                            <!--<li><a href="conditions.html">Rules & conditions</a></li>-->
                        </ul>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
                <div class="pull-right">
                    <p class="text-muted"><small>Copyright &copy; 2013-2014, PC-Oriente - Todos los derechos reservados.</small></p>
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
                // Carousel (slider)
                $('#detailCarousel').carousel({
                    interval: 4000
                });
                $('[id^=carousel-selector-]').click(function() {
                    var id_selector = $(this).attr("id");
                    var id = id_selector.substr(id_selector.length - 1);
                    id = parseInt(id);
                    $('#detailCarousel').carousel(id);
                    $('[id^=carousel-selector-]').removeClass('selected');
                    $(this).addClass('selected');
                });
                $('#detailCarousel').on('slid', function(e) {
                    var id = $('.item.active').data('slide-number');
                    id = parseInt(id);
                    $('[id^=carousel-selector-]').removeClass('selected');
                    $('[id^=carousel-selector-' + id + ']').addClass('selected');
                });
            });
        </script>
        <!-- /JS -->
    </body>
</html>