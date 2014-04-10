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
        <title>CZSale - Classified Ads Website</title>
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
                    <!--<a href="addClassified.html" class="btn btn-success navbar-btn add-classified-btn navbar-left" role="button">Add classified</a>-->
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
                    <h4>Search</h4>
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
                        <a href="#" class="list-group-item">Industria <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <div class="list-subgroups">
                            <a href="#" class="list-subgroup-item">Overall</a>
                            <a href="#" class="list-subgroup-item">Chamarras</a>
                            <a href="#" class="list-subgroup-item">Botas</a>
                            <a href="#" class="list-subgroup-item">Camisas</a>
                            <a href="#" class="list-subgroup-item">Pantalones</a>
                            <a href="#" class="list-subgroup-item">Accesorios</a>
                        </div>
                        <a href="#" class="list-group-item">Comercio <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Gobierno <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Publico <span class="glyphicon glyphicon-chevron-right"></span></a>
<!--                    <a href="#" class="list-group-item">Computers & Networking <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">DVDs & Movies <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Health & Beauty <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Music <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <a href="#" class="list-group-item">Toys & Hobbies <span class="glyphicon glyphicon-chevron-right"></span></a>-->
                    </div>
                    <h4>Newest classifieds</h4>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Computers & Networking</a></li>
                        <li><a href="category.html">PC, Computers</a></li>
                    </ol>
                    <h2>PC, Computers</h2>
                    <div class="well well-sm" style="padding: 0; background-color: #FCF8E3;">
                        <div class="row top-classifieds">
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Samsung Galaxy S4</a></small><p>
                                        <p><strong>550 EUR</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Vizio 60" Slim Frame ...</a></small><p>
                                        <p><strong>370 EUR</strong></p>                 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Logitech 2.1 HS-263</a></small><p>
                                        <p><strong>36 EUR</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Apple McBook Pro</a></small><p>
                                        <p><strong>740 EUR</strong></p>                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Adidas Blake 46"</a></small><p>
                                        <p><strong>55 EUR</strong></p>                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 top-classified">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/400x300/e0e0e0" />
                                    <div class="caption">
                                        <p><small><a href="#">Nokia Lumia 800</a></small><p>
                                        <p><strong>185 EUR</strong></p>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row classifieds-table">
                        <div class="col-lg-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                    <tr>
                                        <td class="col-sm-8 col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#">
                                                    <img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Product name</a></h4>
                                                    <p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla adipiscing tempor ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac ...</small></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><strong>110.87 EUR</strong></td>
                                        <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">76x</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12" style="text-align: center;">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
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