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
                    <a href="addClassified.html" class="btn btn-success navbar-btn add-classified-btn navbar-left" role="button">Add classified</a>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paginas <b class="caret"></b></a>
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
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ol>
                    <h2>Contact</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <iframe src="https://mapsengine.google.com/map/embed?mid=z4AJqEOxN-SI.kHxwRDMJz1Sg" style="border: none; width: 100%; height: 400px;"></iframe>  
                            <!--http://mapsengine.google.com/map/embed?mid=z-BEFzFo7gdM.kYdiUKVQpQQI-->
                        </div>
                        <div class="col-md-4">
                            <div class="well well-sm">
                                <address>
                                    <strong>Twitter, Inc.</strong><br />
                                    795 Folsom Ave, Suite 600<br />
                                    San Francisco, CA 94107<br />
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Full Name</strong><br />
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
                            </div> 
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">                
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="InputEmail">Email address</label>
                                            <input type="email" class="form-control" id="InputEmail" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputSubject">Subject</label>
                                            <input type="email" class="form-control" id="InputSubject" placeholder="Enter your subject">
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
                    </div>
                </div>
            </div>
            <!-- /Content -->
            <div class="footer">
                <div class="well well-sm">
                    <div class="pull-left">
                        <ul class="nav nav-pills">
                            <li><a href="addClassified.html"><span class="glyphicon glyphicon-plus"></span> Add classified</a></li>
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