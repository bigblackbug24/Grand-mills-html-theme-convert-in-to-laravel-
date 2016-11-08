@extends('layouts.plane')

@section('body')
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 text-center"><a href="{{url('/')}}"><img src="{{asset("assets/images/logo.png")}}" alt="" class="img-center"></a></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
                <ul class="top_links">
                    <li><img src="{{asset("assets/images/ico_phone.png")}}"> 800 AGRI (2474)</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ENG <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Arabic</a></li>
                            <li><a href="#">Urdu</a></li>
                            <li><a href="#">Chines</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('login')}}"><img src="{{asset("assets/images/ico_user.png")}}"> SIGN IN</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JOIN FREE <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{url('login')}}">Customer Login</a></li>
                            <li><a href="{{url('register')}}">Create Account</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear pad-5"></div>
                <ul class="top_social">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-bell fa-lg"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="mobile-nav">
            <ul class="nav navbar-nav">
                <li><a href="{{url('recipes-regular')}}">RECIPES</a></li>
                <li><a href="{{url('products')}}">PRODUCTS</a>
                    <ul class="submenu">
                        <li><a href="#"><img src="{{asset("assets/images/prd-b2b.jpg")}}" width="70" class="mr-15 pull-left mb-10"> B2B Range</a></li>
                        <li><a href="#"><img src="{{asset("assets/images/prd-b2c.jpg")}}" width="70" class="mr-15 pull-left mb-10"> B2C Range</a></li>
                    </ul>
                </li>
                <li class=""><a href="{{url("live-healthy")}}">Live Healthy</a>
                    <ul class="submenu">
                        <li><a href="#">Nautrational Facts</a></li>
                        <li><a href="#">Light Recipes</a></li>
                        <li><a href="#">Healthy Eating Guide</a></li>
                        <li><a href="{{url("the-food-pyramid")}}">Food Pyramid</a></li>
                        <li><a href="{{url("power-of-grains")}}">The Power Of Grains</a></li>
                        <li><a href="{{url("tips-and-tricks")}}">Presentation Tips</a></li>
                        <li><a href="#">Calorie Calculator</a></li>
                    </ul>
                <li><a href="#">MY GRAND MILLS</a>
                    <ul class="submenu">
                        <li><a href="{{url('about_gmff')}}">About GMFF</a></li>
                        <li><a href="{{url('agthia-part')}}">We are part of Agthia</a></li>
                        <li><a href="{{url('quality')}}">Quality</a></li>
                    </ul>
                </li>
                <li><a href="#">MEDIA</a>
                    <ul class="submenu">
                        <li><a href="press.html">Press Release</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="{{url('gallery')}}">Gallery</a></li>
                        <li><a href="social.html">Social Media Feeds</a></li>
                        <li><a href="downloads.html">Download Brochure</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="banner">
    @yield('banner')
</div>

<div id="container">

    @yield('container')

</div>
<div id="endcontainer">

    @yield('endcontainer')

</div>
<div id="popup">
    @yield('popup-form')
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left"><a href="#" class="media-object text_blu_tw"><i class="fa fa-twitter fa-3x mr-10"></i></a></div>
                    <div class="media-body">

                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/usmanmu5" data-widget-id="707921653678927873">Tweets by @usmanmu5</a>
                        <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script>

                    </div>
                </div>
                <div class="clear pad-10"></div>
                <ul class="foot_social">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-bell fa-lg"></i></a></li>
                </ul>
                <div class="clear pad-15"></div>
                <ul class="foot_links">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('products')}}">Products</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="recipes.html">Recipes</a></li>
                    <li><a href="{{url('about_gmff')}}">Our Company</a></li>
                    <li><a href="contact.html">Contact Us</a></li>

                    <li><a href="{{url('live-healthy')}}">Live Healthy</a></li>
                    <li><a href="calculator.html">Calories Calculator</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                </ul>

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <h3 class="mt-0">Contact Us</h3>
                <form role="form" method="post">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input class="form-control" id="name" name="name" placeholder="First Name"  required pattern="[a-zA-Z]{3,}[a-zA-Z\s]*$" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="lname" placeholder="Last Name"  required pattern="[a-zA-Z]{3,}[a-zA-Z\s]*$" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="email"placeholder="Email" type="email" required="">
                    </div>
                   
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                    </div>
                    <button type="submit"  name="sub" class="btn btn-success btn-lg pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="clear pad-15"></div>
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">(C) Copyrights 2016, All rights reserved</div>
                <div class="col-xs-6 text-right">
                    <a href="#" class="text_wht">Privacy Policy</a>  | <a href="#" class="text_wht">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@stop

