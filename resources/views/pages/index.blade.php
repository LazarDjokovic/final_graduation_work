@extends('layouts.app')

@section('content')

@include('components.index.slider')

@include('components.index.quotes')

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