<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cars Store</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div class="menu-bar">
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item" class="active">
                            <a class="nav-link" href="#">About</a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li><a href="mv.html">Our Mission and Vision</a></li>
                                    <li><a href="aboutus.html">Our Team</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalog.html">Catalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.html">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.html">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
</section>
<div id="slider">
    <div id="headerSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/car1.png.jpg" class="d-block img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5>How to find the perfect Car</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/car2.png" class="d-block img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5>The Best Cars There IS</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/car3.png" class="d-block img-fluid" alt="...">
                <div class="carousel-caption">
                    <h5>For More Info</h5>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#headerSlider"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About</h2>
                    <div class="about-content">
                        Our Website offers the best and newest cars money can buy.If you buy from us we guarantee you that the world is gonna be yours.Be the first be the best be the road god. We can do it together.
                    </div>
                    <button type="button" class="btn btn-primary"> <a href="aboutus.html">Read more</button></a>
                </div>
                <div class="col-md-6 skills-bar">
                    <p>HTML</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;">80%</div>
                    </div>
                    <p>CSS</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%;">85%</div>
                    </div>
                    <p>JAVA</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 75%;">75%</div>
                    </div>
                    <p>Graphics Design</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 50%;">50%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <h1>Our Service</h1>
            <div class="row services">
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Our web services and environment</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-tablet"></i>
                    </div>
                    <h3>App Development</h3>
                    <p>Our web services and environment</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Our web services and environment</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>
                    <h3>Graphics Design</h3>
                    <p>Our web services and environment</p>
                </div>
            </div>
        </div>
    </section>
    <section id="promo">
        <div class="container">
            <p>Get Free Hosting</p>
            <a href="contacts.html" class="btn btn-primary">Contact Us</a>
        </div>
    </section>
    <section id="price">
        <div class="container">
            <h1>Price Plans</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Free</h2>
                            <p>0$/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Diesel Engine</li>
                                <li>4x4</li>
                                <li>Free WiFi</li>
                                <li>4/5 doors</li>
                                <li>GPS</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="#">Join Free</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Business</h2>
                            <p>25$/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Diesel Engine</li>
                                <li>4x4</li>
                                <li>Free WiFi</li>
                                <li>4/5 doors</li>
                                <li>GPS</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>Advanced</h2>
                            <p>50$/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Diesel Engine</li>
                                <li>4x4</li>
                                <li>Free WiFi</li>
                                <li>4/5 doors</li>
                                <li>GPS</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-price">
                        <div class="price-head">
                            <h2>For Life</h2>
                            <p>100$/<span>month</span></p>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><i class="fa fa-check-circle"></i>Diesel Engine</li>
                                <li>4x4</li>
                                <li>Free WiFi</li>
                                <li>4/5 doors</li>
                                <li>GPS</li>
                            </ul>
                        </div>
                        <div class="price-button">
                            <a class="buy-btn" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone ???">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Id">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>Address:</b>XYZ Road,Plavdiv BG</div>
                    <div class="col-md-6 contact-info">
                        <div class="follow"><b>Address:</b>XYZ Road,Plavdiv BG</div>
                        <div class="col-md-6 contact-info">
                            <div class="follow"><b>Address:</b>XYZ Road,Plavdiv BG</div>
                            <div class="follow"><label><b>Get Social:</b></label>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <section id="footer">
        <div class="container text-center">
            <p>Made With <i class="fa fa-heart-o"></i></p>
        </div>
        <div id="footer_inner_main">
            <div class="fpanel1">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <div>
                            <h3>Client Service</h3>
                            <ul>
                                <li><a href="https://www.cars.com/page/faq">FAQ</a></li>
                                <li><a href="https://www.cars.com/page/terms_of_use#item_309">Terms of use</a></li>
                                <li><a href="https://www.cars.com/page/services">Services</a></li>
                                <li><a href="https://www.cars.com/user/return_info">Return Product</a></li>
                                <li><a href="https://www.cars.com/base/send_feedback/">Feedback</a></li>
                                <li><a href="https://www.cars.com/stores/worktime">Work Time</a></li>
                                <li><a href="https://www.cars.com/subscribe/">Subscribe</a></li>
                                <li><a href="https://www.cars.com/page/leasing">Leasing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="https://www.cars.com/auth/login">Login</a></li>
                            <li><a href="https://www.cars.com/cart">Cart</a></li>
                            <li><a href="https://www.cars.com/user/orders">Orders</a></li>
                            <li><a href="https://www.cars.com/user/offers">Offers</a></li>
                            <li><a href="https://www.cars.com/user/profile">Profile</a></li>
                            <li style="display: none;">
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Info and Services</h3>
                        <ul>
                            <li><a href="https://www.cars.com/among_us">Among us</a></li>
                            <li><a href="https://www.cars.com/contacts">Contacts</a></li>
                            <li><a href="https://www.cars.com/privacy">Private Info</a></li>
                            <li><a href="https://www.cars.com/declaration">Declaration of use</a></li>
                            <li><a href="https://www.cars.com/become_dealer">Dealers</a></li>
                            <li><a href="https://www.cars.com/partnership">Partners</a></li>
                            <li><a href="https://www.cars.com/stores">Find us</a></li>
                            <li><a href="https://www.cars.com/terms_of_use#item_306">How to paid</a></li>
                            <li><a href="https://www.cars.com/terms_of_use#item_307">Transport of product</a></li>
                            <li><a href="https://www.cars.com/quality_policy">Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Resources and Connections</h3>
                        <ul>
                            <li><a href="https://www.cars.com/sitemap">Site Map</a> </li>
                            <li><a href="https://www.cars.com/categories">Categories</a> </li>
                            <li><a href="https://www.cars.com/newproduct">New products</a> </li>
                            <li><a href="https://www.cars.com/naiprodavani">Most Sold Products</a> </li>
                            <li><a href="https://www.cars.com/questions">Rating</a></li>
                            <li><a href="https://mail.cars.com">CAR Post</a></li>
                        </ul>
                    </div>
                </div>
                <br class="clear">
                <div class="footer-copyright">
                    <p class="on-desktop">
                        <span>Follow us: </span>
                        <a href="https://facebook.com/cars/" title="Facebook" class="facebook" target="_blank" rel="nofollow"></a>
                        <a href="https://twitter.com/cars/" title="Twitter" class="twitter" target="_blank" rel="nofollow"></a>
                        <a href="https://www.instagram.com/cars/" title="Instagram" class="instagram" target="_blank" rel="nofollow"></a>
                        <a href="https://www.linkedin.com/company/cars" title="Linkedin" class="linkedin" target="_blank" rel="nofollow"></a>
                        <img src="/img/13.png" style="display: none;">
                        <img src="/img/14.png" style="display: none;">
                        <img src="/img//15.png" style="display: none;">
                        <img src="/img/16.png" style="display: none;">
                    </p>
                    <div class="col-sm-4 w-30">
                        <h4 class="footer-head">Follow us</h4>
                        <ul>
                            <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                            <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            <li><i class="fa fa-youtube" aria-hidden="true"></i></li>
                            <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 w-30">
                        <h4 class="footer-head">Contact us</h4>
                        <ul>
                            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> +888 888 8888</li>
                            <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i>me@me.com</span></li>
                        </ul>

                    </div>
                    <div id="copyright-box">
                        Copyright ?? 2020 - 2021 CarStore all rights reserve
                    </div>
                </div>
            </div>
    </section>
</body>
</html>







