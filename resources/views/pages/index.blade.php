@extends('layouts.app')

@section('content')
<!-- Homepage Slider -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
            <li class="bg4">
                <!-- Slide Title -->
                <h2 class="title">Job Listings</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Find the perfect job for you</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="{{asset('img/homepage-slider/slide1.png')}}" alt="Slide 1" />
            </li>
            <!-- End Slide 1 -->
            <!-- Slide 2 -->
            <li class="bg3">
                <!-- Slide Title -->
                <h2 class="title">Companies</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Great companies are built on great products</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="{{asset('img/homepage-slider/slide2.png')}}" alt="Slide 2" />
            </li>
            <!-- End Slide 2 -->
            <!-- Slide 3 -->
            <li class="bg1">
                <!-- Slide Title -->
                <h2 class="title">Are you HR in your company?</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">This is the perfect place for you!</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="{{asset('img/homepage-slider/slide3.png')}}" alt="Slide 3" />
            </li>
            <!-- End Slide 3 -->
        </ul>
        <div class="sequence-pagination-wrapper">
            <ul class="sequence-pagination">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="in-press press-wired">
                    <h3>There are no secrets to success. It is the result of preparation, hard work, and learning from failure.</h3>
                    <small>Colin Powells</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="in-press press-mashable">
                    <h3>Self-belief and hard work will always earn you success.</h3>
                    <small>Virat Kohli</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="in-press press-techcrunch">
                    <h3>It's all about quality of life and finding a happy balance between work and friends and family.</h3>
                    <small>Philip Green</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Press Coverage -->

<!-- Services -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Check some of our registered companies</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <img src="img/service-icon/diamond.png" alt="Service 1">
                    <h3>Company 1</h3>
                    <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <img src="img/service-icon/ruler.png" alt="Service 2">
                    <h3>Company 2</h3>
                    <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <img src="img/service-icon/box.png" alt="Service 3">
                    <h3>Company 3</h3>
                    <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Call to Action Bar -->
<div class="section section-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="calltoaction-wrapper">
                    <h3>All Job Listings at one place</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call to Action Bar -->

<!-- Testimonials -->
<div class="section">
    <div class="container text-center">
        <h2>Recent jobs</h2>
        <div class="row">
            <!-- Testimonial -->
            <div class="col-sm-4">
                <!-- Product -->
                <div class="shop-item">
                    <!-- Product Image -->
                    <div class="image">
                        <a href="page-product-details.html"><img src="img/product1.jpg" alt="Item Name"></a>
                    </div>
                    <!-- Product Title -->
                    <div class="title">
                        <h3><a href="page-product-details.html">Lorem ipsum dolor</a></h3>
                    </div>
                    <!-- Product Description-->
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
                    </div>
                    <!-- Add to Cart Button -->
                    <div class="actions">
                        <a href="page-product-details.html" class="btn"><i class="icon-shopping-cart icon-white"></i>Read more</a>
                    </div>
                </div>
                <!-- End Product -->
            </div>
            <div class="col-sm-4">
                <!-- Product -->
                <div class="shop-item">
                    <!-- Product Image -->
                    <div class="image">
                        <a href="page-product-details.html"><img src="img/product1.jpg" alt="Item Name"></a>
                    </div>
                    <!-- Product Title -->
                    <div class="title">
                        <h3><a href="page-product-details.html">Lorem ipsum dolor</a></h3>
                    </div>
                    <!-- Product Description-->
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
                    </div>
                    <!-- Add to Cart Button -->
                    <div class="actions">
                        <a href="page-product-details.html" class="btn"><i class="icon-shopping-cart icon-white"></i>Read more</a>
                    </div>
                </div>
                <!-- End Product -->
            </div>
            <div class="col-sm-4">
                <!-- Product -->
                <div class="shop-item">
                    <!-- Product Image -->
                    <div class="image">
                        <a href="page-product-details.html"><img src="img/product1.jpg" alt="Item Name"></a>
                    </div>
                    <!-- Product Title -->
                    <div class="title">
                        <h3><a href="page-product-details.html">Lorem ipsum dolor</a></h3>
                    </div>
                    <!-- Product Description-->
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio.</p>
                    </div>
                    <!-- Add to Cart Button -->
                    <div class="actions">
                        <a href="page-product-details.html" class="btn"><i class="icon-shopping-cart icon-white"></i>Read more</a>
                    </div>
                </div>
                <!-- End Product -->
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Our Clients -->
<div class="section">
    <div class="container">
        <h2>Our Partners</h2>
        <div class="clients-logo-wrapper text-center row">
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/canon.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/cisco.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/dell.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/ea.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/ebay.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/facebook.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/google.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/hp.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/microsoft.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/mysql.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/sony.png" alt="Client Name"></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><img src="img/logos/yahoo.png" alt="Client Name"></div>
        </div>
    </div>
</div>
<!-- End Our Clients -->
@endsection