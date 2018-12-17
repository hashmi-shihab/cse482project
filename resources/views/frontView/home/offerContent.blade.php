@extends('frontview.master')
@section('offerContent')

    <script type="text/javascript" src="{{asset('frontEnd')}}/js/js.js"></script>
    {{--slider--}}
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Best <span>powerbank</span> shop</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3> <span></span>Save money</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Collect <i>superior</i> product</h3>
                            <div class="more">
                                {{--<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>--}}
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

    <div class="clearfix"></div>
    </div>
    <!-- banner -->

    {{--powers special offer--}}
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
        <h3>Power's Special Offer </h3>
        <div class="w3ls_w3l_banner_nav_right_grid1">

            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/frontEnd/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="/frontEnd/single.html"><img src="/frontEnd/images/RED1.jpg" alt=" " class="img-responsive" /></a>
                                        <h4>REDDO2910</h4>
                                        <p>Attery capacity:19000mAh</h4>
                                        <p>Weight:340g</h4>
                                        <p>Number of ports:3</h4>
                                        <h4>2890TK <span>3400TK</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dishwash gel, lemon" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/frontEnd/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="/frontEnd/images/RED2.jpg" alt=" " class="img-responsive" /></a>
                                        <h4>REDDO1927</h4>
                                        <p>Attery capacity:28000mAh</h4>
                                        <p>Weight:280g</h4>
                                        <p>Number of ports:3</h4>
                                        <h4>4000TK <span>7000TK</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dish wash bar" />
                                                <input type="hidden" name="amount" value="2.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/frontEnd/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="/frontEnd/images/EASYACC3.jpg" alt=" " class="img-responsive" /></a>
                                        <h4>EASYACC3278</h4>
                                        <p>Battery capacity:24000mAh</h4>
                                        <p>Weight:290g</h4>
                                        <p>Number of ports:3</h4>
                                        <h4>2200TK <span>3900TK</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="air freshener" />
                                                <input type="hidden" name="amount" value="3.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/frontEnd/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="/frontEnd/single.html"><img src="/frontEnd/images/RAVPOWER19.jpg" alt=" " class="img-responsive" /></a>
                                        <h4>RAVPOWER1912</h4>
                                        <p>Battery capacity:24000mAh</h4>
                                        <p>Weight:240g</h4>
                                        <p>Number of ports:3</h4>
                                        <h4>4000TK <span>6900TK</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="toilet cleaner expert" />
                                                <input type="hidden" name="amount" value="6.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    {{--powers special offer--}}

@endsection
