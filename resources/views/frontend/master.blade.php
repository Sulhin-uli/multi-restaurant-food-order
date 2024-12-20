<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Osahan Eat - Online Food Ordering Website HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.png') }}">
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('frontend/vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="{{ asset('frontend/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="{{ asset('frontend/css/osahan.css') }}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/vendor/owl-carousel/owl.theme.css') }}">
   </head>
   <body>
      <div class="homepage-header">
      <div class="overlay"></div>
      <nav class="navbar navbar-expand-lg navbar-dark osahan-nav">
         <div class="container">
            <a class="navbar-brand" href="index.html"><img alt="logo" src="img/favicon.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-warning">New</span></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Restaurants
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                        <a class="dropdown-item" href="listing.html">Listing</a>
                        <a class="dropdown-item" href="detail.html">Detail + Cart</a>
                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Pages
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                        <a class="dropdown-item" href="track-order.html">Track Order</a>
                        <a class="dropdown-item" href="invoice.html">Invoice</a>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="404.html">404</a>
                        <a class="dropdown-item" href="extra.html">Extra :)</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img alt="Generic placeholder image" src="img/user/4.png" class="nav-osahan-pic rounded-pill"> My Account
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                        <a class="dropdown-item" href="orders.html#orders"><i class="icofont-food-cart"></i> Orders</a>
                        <a class="dropdown-item" href="orders.html#offers"><i class="icofont-sale-discount"></i> Offers</a>
                        <a class="dropdown-item" href="orders.html#favourites"><i class="icofont-heart"></i> Favourites</a>
                        <a class="dropdown-item" href="orders.html#payments"><i class="icofont-credit-card"></i> Payments</a>
                        <a class="dropdown-item" href="orders.html#addresses"><i class="icofont-location-pin"></i> Addresses</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown dropdown-cart">
                     <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-shopping-basket"></i> Cart
                     <span class="badge badge-success">5</span>
                     </a>
                     <div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">
                        <div class="dropdown-cart-top-header p-4">
                           <img class="img-fluid mr-3" alt="osahan" src="img/cart.jpg">
                           <h6 class="mb-0">Gus's World Famous Chicken</h6>
                           <p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
                           <small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
                        </div>
                        <div class="dropdown-cart-top-body border-top p-4">
                           <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1   <span class="float-right text-secondary">$314</span></p>
                           <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Corn & Peas Salad x 1   <span class="float-right text-secondary">$209</span></p>
                           <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1  <span class="float-right text-secondary">$133</span></p>
                           <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1   <span class="float-right text-secondary">$314</span></p>
                           <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1   <span class="float-right text-secondary">$209</span></p>
                        </div>
                        <div class="dropdown-cart-top-footer border-top p-4">
                           <p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$499</span></p>
                           <small class="text-info">Extra charges may apply</small>  
                        </div>
                        <div class="dropdown-cart-top-footer border-top p-2">
                           <a class="btn btn-success btn-block btn-lg" href="checkout.html"> Checkout</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <section class="pt-5 pb-5 homepage-search-block position-relative">
         <div class="banner-overlay"></div>
         <div class="container">
            <div class="row d-flex align-items-center py-lg-4">
               <div class="col-lg-8 mx-auto">
                  <div class="homepage-search-title text-center">
                     <h1 class="mb-2 display-4 text-shadow text-white font-weight-normal"><span class="font-weight-bold">Discover the best food & drinks in India 🇮🇳
                     </span></h1>
                     <h5 class="mb-5 text-shadow text-white-50 font-weight-normal">Lists of top restaurants, cafes, pubs, and bars in Melbourne, based on trends</h5>
                  </div>
                  <div class="homepage-search-form">
                     <form class="form-noborder">
                        <div class="form-row">
                           <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                              <div class="location-dropdown">
                                 <i class="icofont-location-arrow"></i>
                                 <select class="custom-select form-control-lg">
                                    <option> Quick Searches </option>
                                    <option> Breakfast </option>
                                    <option> Lunch </option>
                                    <option> Dinner </option>
                                    <option> Cafés </option>
                                    <option> Delivery </option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-7 col-md-7 col-sm-12 form-group">
                              <input type="text" placeholder="Enter your delivery location" class="form-control form-control-lg">
                              <a class="locate-me" href="#"><i class="icofont-ui-pointer"></i> Locate Me</a>
                           </div>
                           <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                              <a href="listing.html" class="btn btn-primary btn-block btn-lg btn-gradient">Search</a>
                              <!--<button type="submit" class="btn btn-primary btn-block btn-lg btn-gradient">Search</button>-->
                           </div>
                        </div>
                     </form>
                  </div>
                  <h6 class="mt-4 text-shadow text-white font-weight-normal">E.g. Beverages, Pizzas, Chinese, Bakery, Indian...</h6>
                  <div class="owl-carousel owl-carousel-category owl-theme">
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/1.png" alt="">
                              <h6>American</h6>
                              <p>156</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/2.png" alt="">
                              <h6>Pizza</h6>
                              <p>120</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/3.png" alt="">
                              <h6>Healthy</h6>
                              <p>130</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/4.png" alt="">
                              <h6>Vegetarian</h6>
                              <p>120</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/5.png" alt="">
                              <h6>Chinese</h6>
                              <p>111</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/6.png" alt="">
                              <h6>Hamburgers</h6>
                              <p>958</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/7.png" alt="">
                              <h6>Dessert</h6>
                              <p>56</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/8.png" alt="">
                              <h6>Chicken</h6>
                              <p>40</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="osahan-category-item">
                           <a href="#">
                              <img class="img-fluid" src="img/list/9.png" alt="">
                              <h6>Indian</h6>
                              <p>156</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
             
            </div>
         </div>
      </section>
      </div>
      <section class="section pt-5 pb-5 bg-white homepage-add-section">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="img/pro1.jpg" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="img/pro2.jpg" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="img/pro3.jpg" class="img-fluid rounded"></a>
                  </div>
               </div>
               <div class="col-md-3 col-6">
                  <div class="products-box">
                     <a href="listing.html"><img alt="" src="img/pro4.jpg" class="img-fluid rounded"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 products-section">
         <div class="container">
            <div class="section-header text-center">
               <h2>Popular Brands</h2>
               <p>Top restaurants, cafes, pubs, and bars in Ludhiana, based on trends</p>
               <span class="line"></span>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-carousel-four owl-theme">
                     <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                              <a href="detail.html">
                              <img src="img/list/1.png" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black">World Famous</a></h6>
                                 <p class="text-gray mb-3">North Indian • American • Pure veg</p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 20–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                              </div>
                              <div class="list-card-badge">
                                 <span class="badge badge-success">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-warning"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                              <a href="detail.html">
                              <img src="img/list/3.png" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black">Bite Me Sandwiches</a></h6>
                                 <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $100 FOR TWO</span></p>
                              </div>
                              <div class="list-card-badge">
                                 <span class="badge badge-danger">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <div class="member-plan position-absolute"><span class="badge badge-danger">Promoted</span></div>
                              <a href="detail.html">
                              <img src="img/list/6.png" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black">The osahan Restaurant
                                    </a>
                                 </h6>
                                 <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                              </div>
                              <div class="list-card-badge">
                                 <span class="badge badge-danger">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                              <a href="detail.html">
                              <img src="img/list/8.png" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black">Polo Lounge
                                    </a>
                                 </h6>
                                 <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                              </div>
                              <div class="list-card-badge">
                                 <span class="badge badge-danger">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                           <div class="list-card-image">
                              <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                              <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                              <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                              <a href="detail.html">
                              <img src="img/list/9.png" class="img-fluid item-img">
                              </a>
                           </div>
                           <div class="p-3 position-relative">
                              <div class="list-card-body">
                                 <h6 class="mb-1"><a href="detail.html" class="text-black">Jack Fry's
                                    </a>
                                 </h6>
                                 <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                 <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                              </div>
                              <div class="list-card-badge">
                                 <span class="badge badge-danger">OFFER</span> <small>65% off | Use Coupon OSAHAN50</small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 bg-white becomemember-section border-bottom">
         <div class="container">
            <div class="section-header text-center white-text">
               <h2>Become a Member</h2>
               <p>Lorem Ipsum is simply dummy text of</p>
               <span class="line"></span>
            </div>
            <div class="row">
               <div class="col-sm-12 text-center">
                  <a href="register.html" class="btn btn-success btn-lg">
                  Create an Account <i class="fa fa-chevron-circle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="section pt-5 pb-5 text-center bg-white">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h5 class="m-0">Operate food store or restaurants? <a href="login.html">Work With Us</a></h5>
               </div>
            </div>
         </div>
      </section>
      <section class="footer pt-5 pb-5">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-12 col-sm-12">
                  <h6 class="mb-3">Subscribe to our Newsletter</h6>
                  <form class="newsletter-form mb-1">
                     <div class="input-group">
                        <input type="text" placeholder="Please enter your email" class="form-control">
                        <div class="input-group-append">
                           <button type="button" class="btn btn-primary">
                           Subscribe
                           </button>
                        </div>
                     </div>
                  </form>
                  <p><a class="text-info" href="register.html">Register now</a> to get updates on <a href="offers.html">Offers and Coupons</a></p>
                  <div class="app">
                     <p class="mb-2">DOWNLOAD APP</p>
                     <a href="#">
                     <img class="img-fluid" src="img/google.png">
                     </a>
                     <a href="#">
                     <img class="img-fluid" src="img/apple.png">
                     </a>
                  </div>
               </div>
               <div class="col-md-1 col-sm-6 mobile-none">
               </div>
               <div class="col-md-2 col-6 col-sm-4">
                  <h6 class="mb-3">About OE</h6>
                  <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Culture</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Careers</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
               <div class="col-md-2 col-6 col-sm-4">
                  <h6 class="mb-3">For Foodies</h6>
                  <ul>
                     <li><a href="#">Community</a></li>
                     <li><a href="#">Developers</a></li>
                     <li><a href="#">Blogger Help</a></li>
                     <li><a href="#">Verified Users</a></li>
                     <li><a href="#">Code of Conduct</a></li>
                  </ul>
               </div>
               <div class="col-md-2 m-none col-4 col-sm-4">
                  <h6 class="mb-3">For Restaurants</h6>
                  <ul>
                     <li><a href="#">Advertise</a></li>
                     <li><a href="#">Add a Restaurant</a></li>
                     <li><a href="#">Claim your Listing</a></li>
                     <li><a href="#">For Businesses</a></li>
                     <li><a href="#">Owner Guidelines</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-bottom-search pt-5 pb-5 bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <p class="text-black">POPULAR COUNTRIES</p>
                  <div class="search-links">
                     <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>  |  <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a><a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>  |  <a href="#">Australia</a> |  <a href="#">Brasil</a> | <a href="#">Canada</a> |  <a href="#">Chile</a>  |  <a href="#">Czech Republic</a> |  <a href="#">India</a>  |  <a href="#">Indonesia</a> |  <a href="#">Ireland</a> |  <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> |  <a href="#">Turkey</a>  |  <a href="#">Philippines</a> |  <a href="#">Sri Lanka</a>
                  </div>
                  <p class="mt-4 text-black">POPULAR FOOD</p>
                  <div class="search-links">
                     <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a> |  <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a><a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a> |  <a href="#">Fast Food</a> |  <a href="#">Chinese</a> | <a href="#">Street Food</a> |  <a href="#">Continental</a>  |  <a href="#">Mithai</a> |  <a href="#">Cafe</a>  |  <a href="#">South Indian</a> |  <a href="#">Punjabi Food</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="pt-4 pb-4 text-center">
         <div class="container">
            <p class="mt-0 mb-0">© Copyright 2020 Osahan Eat. All Rights Reserved</p>
            <small class="mt-0 mb-0"> Made with <i class="fas fa-heart heart-icon text-danger"></i> by
            <a class="text-danger" target="_blank" href="https://www.instagram.com/iamgurdeeposahan/">Gurdeep Osahan</a> - <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
            </small>
         </div>
      </footer>
      <!-- jQuery -->
      <script src="{{ asset('frontend/vendor/jquery/jquery-3.3.1.slim.min.js') }}"></script>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- Select2 JavaScript-->
      <script src="{{ asset('frontend/vendor/select2/js/select2.min.js') }}"></script>
      <!-- Owl Carousel -->
      <script src="{{ asset('frontend/vendor/owl-carousel/owl.carousel.js') }}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{ asset('frontend/js/custom.js') }}"></script>
   </body>
</html>