<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Safari - Tour Packages </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Rangeslider css -->
    <link rel="stylesheet" href="assets/css/nouislider.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <!-- preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->
     <?php
      include "includes/navbar.php"
     ?>
    <!-- Header Area -->

    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Safari search result</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Tours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Available Safari tours</h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-3">
                    <div class="left_side_search_area">
                        <div class="left_side_search_boxed">
                            <div class="item_searc_map_area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Search by name</h5>
                            </div>
                            <div class="name_search_form">
                                <input type="text" class="form-control" placeholder="e.g Deluxe bus">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by price</h5>
                            </div>
                            <div class="filter-price">
                                <div id="price-slider"></div>
                            </div>
                            <button class="apply" type="button">Apply</button>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by Review</h5>
                            </div>
                            <div class="filter_review">
                                <form class="review_star">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                        <label class="form-check-label" for="flexCheckDefault1">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                        <label class="form-check-label" for="flexCheckDefault5">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by hotel star</h5>
                            </div>
                            <div class="filter_review">
                                <form class="review_star">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulta">
                                        <label class="form-check-label" for="flexCheckDefaulta">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaulf21">
                                        <label class="form-check-label" for="flexCheckDefaulf21">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf3">
                                        <label class="form-check-label" for="flexCheckDefaultf3">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf4">
                                        <label class="form-check-label" for="flexCheckDefaultf4">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf5">
                                        <label class="form-check-label" for="flexCheckDefaultf5">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Facilities</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                    <label class="form-check-label" for="flexCheckDefaultf1">
                                        <span class="area_flex_one">
                                            <span>Wake-up call</span>
                                            <span>20</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf2">
                                    <label class="form-check-label" for="flexCheckDefaultf2">
                                        <span class="area_flex_one">
                                            <span>Flat TV</span>
                                            <span>14</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf3">
                                    <label class="form-check-label" for="flexCheckDefaultaf3">
                                        <span class="area_flex_one">
                                            <span>Vehicle service</span>
                                            <span>30</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf4">
                                    <label class="form-check-label" for="flexCheckDefaultaf4">
                                        <span class="area_flex_one">
                                            <span>Guide service</span>
                                            <span>22</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf5">
                                    <label class="form-check-label" for="flexCheckDefaultaf5">
                                        <span class="area_flex_one">
                                            <span>Internet, Wi-fi</span>
                                            <span>41</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Hotel service</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt1">
                                    <label class="form-check-label" for="flexCheckDefaultt1">
                                        <span class="area_flex_one">
                                            <span>Gymnasium</span>
                                            <span>20</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt2">
                                    <label class="form-check-label" for="flexCheckDefaultt2">
                                        <span class="area_flex_one">
                                            <span>Mountain Bike</span>
                                            <span>14</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt3">
                                    <label class="form-check-label" for="flexCheckDefaultt3">
                                        <span class="area_flex_one">
                                            <span>Wifi</span>
                                            <span>62</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt4">
                                    <label class="form-check-label" for="flexCheckDefaultt4">
                                        <span class="area_flex_one">
                                            <span>Aerobics Room</span>
                                            <span>08</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt5">
                                    <label class="form-check-label" for="flexCheckDefaultt5">
                                        <span class="area_flex_one">
                                            <span>Golf Cages</span>
                                            <span>12</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/Flion 3.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzania</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">7 Days Perfect Combo</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3> <span></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzania</p>
                                    <div class="discount_tab">
                                        <span></span>
                                    </div>

                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">6 Days Wildlife Discovery</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/Zanzibar.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzania</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">6 Days Restful</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/Antelop.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzania</p>
                                    <div class="discount_tab">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">5 Days lively wildlife</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/ZEBRA.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzania</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">5 Days thrilling</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/ANtelop1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Tanzaniap>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Design Your Safari trip</a></h4>
                                    <p><span class="review_rating"></span> <span
                                            class="review_count"></span></p>
                                    <h3><span></span></h3>
                                </div>
                            </div>
                        </div>
                      <!--   <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel7.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Zefi resort and spa</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel8.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Manila international resort</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Kantua hotel, Thailand</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Kantua hotel, Thailand</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                    <div class="discount_tab">
                                        <span>50%</span>
                                    </div>

                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Hotel paradise international</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two img_hover">
                                <div class="theme_two_box_img">
                                    <a href="tour-details.html"><img src="assets/img/tab-img/hotel3.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="tour-details.html">Hotel kualalampur</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination_area">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>


    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer  -->
    <?php
    include "includes/footer.php"
    ?>
    <!-- Footer  -->
    
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Range js -->
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <!-- owl carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/add-form.js"></script>
    <script src="assets/js/form-dropdown.js"></script>

</body>

</html>