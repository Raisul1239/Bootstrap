<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Carousel Template · Bootstrap</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo base_url(); ?>asset/CSS/Web.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

        <!-- Bootstrap core CSS -->
        <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="ml">
                        <div class="row">
                            <div class="column">
                                <div class="drop">
                                    <div class="dropdown">
                                        <button class="dropbtn">About</button>
                                        <div class="dropdown-content">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>
                                <!--                        <li class="dropdown">
                                                            
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About </a>
                                                              
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Another action</a></li>
                                                                    <li><a href="#">Something else here</a></li>
                                
                                                                    <li><a href="#">Separated link</a></li>
                                
                                                                    <li><a href="#">One more separated link</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>-->
                            </div>
                            <div class="mlm">
                                <div class="column">
                                    <div class="drop">
                                        <div class="dropdown">
                                            <button class="dropbtn">Menu</button>
                                            <div class="dropdown-content">
                                                <a href="#">Link 1</a>
                                                <a href="#">Link 2</a>
                                                <a href="#">Link 3</a>
                                            </div>
                                        </div>   
                                        <!--                        <li class="dropdown">
                                                                    
                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu </a>
                                        
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="#">Action</a></li>
                                                                            <li><a href="#">Another action</a></li>
                                                                            <li><a href="#">Something else here</a></li>
                                        
                                                                            <li><a href="#">Separated link</a></li>
                                        
                                                                            <li><a href="#">One more separated link</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>-->
                                    </div>
                                </div>
                            </div>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Welcome/contact_us">Contact Us <span class="sr-only">(current)</span></a>
                            </li>
                        </div>
                        <!--            <li class="dropdown">
                                                    <div class="drop">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu</a>
                                      </div>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        
                                        <li><a href="#">Separated link</a></li>
                                        
                                        <li><a href="#">One more separated link</a></li>
                                      </ul>
                                    </li>-->

                        <!--                        <li class="nav-item">
                                                    <a class="nav-link" href="#">Menu</a>
                                                </li>-->
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main role="main">
        <div class="container">
            <div><h1>Contact Us</h1></div>
            <br />
            <div class="row">
                <!--        <div class="col-md-6">
                            <div id="googlemap" style="width:100%; height:350px;"></div>
                        </div>
                        <br />-->
                <div class="col-md-8">
                    <form class="my-form">
                        <div class="form-group">
                            <label for="form-name">Name</label>
                            <input type="email" class="form-control" id="form-name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="form-subject">Mobile</label>
                            <input type="text" class="form-control" id="form-subject" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <label for="form-email">Email</label>
                            <input type="email" class="form-control" id="form-email" placeholder="Email ">
                        </div>
                        <div class="form-group">
                            <label for="form-message">Address</label>
                            <textarea class="form-control" id="form-message" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form-message">Message</label>
                            <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-default" type="submit">Submit</button>                
                    </form>
                </div>
                <div class="col-md-4">
                    <!--                    <div id="googlemap" style="width:100%; height:350px;"></div>-->
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Promiti%20computers%20and%20Networks%20Ltd&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/private-internet-access-coupon/">private internet access coupon</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>
                <br />
            </div>
        </div>

        <style>
            .my-form {
                color: #305896;
            }
            .my-form .btn-default {
                background-color: #305896;
                color: #fff;
                border-radius: 0;
            }
            .my-form .btn-default:hover {
                background-color: #4498C6;
                color: #fff;
            }
            .my-form .form-control {
                border-radius: 0;
            }
        </style>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAwfK47QApVyrV1j46ZBwm7G943ifTtIw &callback=initMap"
        type="text/javascript"></script>
<!--        <script type="text/javascript">
            jQuery(function ($) {
                // Google Maps setup
                var googlemap = new google.maps.Map(
                        document.getElementById('googlemap'),
                        {
                            center: new google.maps.LatLng(23.829852, 90.362461),
                            zoom: 8,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                );
            });
        </script>-->
        <div class="mar">
            <footer class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div>
    </main>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</html>
