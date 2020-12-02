<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Details - TravelSafe</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top clean-navbar" style="background: rgb(0,0,0);height: 180px;">
        <div class="container-fluid"><a class="navbar-brand logo" href="home.php"><img src="assets/img/logo/logo2.png" style="width: 150px;height: 135px;margin-bottom: -20px;margin-top: -20px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about-us.php" style="font-size: 18px;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html" style="font-size: 18px;">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php" style="font-size: 18px;">Log out</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page shopping-cart-page" style="margin-top: 100px;">
        <section>
            <div>
                <div class="container-fluid">
                    <h1 class="text-center">Details</h1>
                    <hr>
                    <form id="contactForm" action="javascript:void(0);" method="get">                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-md-6 col-lg-10 offset-lg-1" id="message">
                                <div class="form-group"><label for="from-name">Address line 1</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-location-arrow"></i></span></div><input class="form-control" type="text" id="from-name" name="address1" required="" placeholder="Flat, Building"></div>
                                </div>
                                <div class="form-group"><label for="from-email">Addres line 2</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-location-arrow"></i></span></div><input class="form-control" type="text" id="from-email" name="address2" required="" placeholder="Street"></div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">City</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><input class="form-control" type="text" id="from-phone" name="pin" required="" placeholder="City"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">State</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><input class="form-control" type="text" id="from-phone-2" name="pin" required="" placeholder="State"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Pin</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><input class="form-control" type="text" id="from-phone-3" name="pin" required="" placeholder="Pin"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6 offset-lg-0">
                                        <div class="form-group"><label for="from-phone">Phone</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div><input class="form-control" type="text" id="from-phone-1" name="phone" required="" placeholder="Primary Phone"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-calltime">Package</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><select class="form-control" id="from-calltime" name="package"><optgroup label="Package"><option value="Null" selected="">Select</option><option value="Goa">Goa</option><option value="Kolkata">Kolkata</option></optgroup></select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Let us know your additional requirements." rows="5"></textarea></div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><button class="btn btn-danger btn-block" type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                        <div class="col"><a class="btn btn-primary btn-block" role="button" href="payment-s.php">Proceed&nbsp;<i class="fa fa-chevron-circle-right"></i></a></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <div class="text-white footer-basic" style="background: rgb(0,0,0);">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="about-us.php">About Us</a></li>
                <li class="list-inline-item"><a href="contact-us.html">Contact Us</a></li>
            </ul>
            <p class="copyright">TravelSafe © 2020 All rights reserved</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>

</html>