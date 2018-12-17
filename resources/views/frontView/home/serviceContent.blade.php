@extends('frontview.master')
@section('aboutContent')

    <script type="text/javascript" src="{{asset('frontEnd')}}/js/js.js"></script>
    {{--slider--}}
   {{-- <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Best <span>powerbank</span> shop</h3>
                            <div class="more">
                                --}}{{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}{{--
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3> <span></span>Save money</h3>
                            <div class="more">
                                --}}{{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}{{--
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Collect <i>superior</i> product</h3>
                            <div class="more">
                                --}}{{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}{{--
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="frontEnd/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="frontEnd/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>


    </div>--}}
    <div class="clearfix"></div>
    <!-- services -->
    <div class="services">
        <h3>Services</h3>
        <div class="w3ls_service_grids">
            <div class="col-md-5 w3ls_service_grid_left">
                <h4>We Offer upto 2 years warranty and life time services</h4>
                <p>At Power shop we contribute to the quality of life through our products and services. To provide these, we, in turn, purchase materials and services from suppliers around the world. Our purchasing policy promotes consistently high standards in these transactions.</p>
            </div>
            <div class="col-md-7 w3ls_service_grid_right">
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/frontEnd/images/18.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/frontEnd/images/19.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-4 w3ls_service_grid_right_1">
                    <img src="/frontEnd/images/20.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_service_grids1">
            <div class="col-md-6 w3ls_service_grids1_left">
                <img src="/frontEnd/images/4.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 w3ls_service_grids1_right">
                <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home delivery. </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Pay after getting the product</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>3 days replacement warranty</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Life time warranty</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Save shipping</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Orginal products</li>
                </ul>
                <a href="/">Shop Now</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //services -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->
@endsection
