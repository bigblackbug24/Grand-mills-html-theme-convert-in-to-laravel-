@extends('layouts.dashboard')
<!-- banner section start -->
@section('banner')
<div class="banner">
    <div class="container">
        <div class="row search-recipes">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="input-group input-group-lg">                        
                    <input placeholder="Search for Grand Mills Recipes" class="form-control" type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
                    </span>          			
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
                <div class="row bann-widgets">
                    <div class="col-xs-4"><a href="{{url('recipes-regular')}}">Recipes<br>Regular</a></div>
                    <div class="col-xs-4"><a href="{{url('recipes-light')}}">Recipes<br>Light</a></div>
                    <div class="col-xs-4"><a href="{{url('baking-gm')}}">Baking<br>with<br>Grand Mills</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- end banner section -->

<!-- start container section -->
@section('container')
<div class="clear pad-15"></div>

<div class="container">
    <h1 class="text-center">Grand Mills Recipes</h1>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-7">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-01.jpg")}}" class="img-responsive">
                            <h5 class="caption">Recipe 01</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-02.jpg")}}" class="img-responsive">
                            <h5 class="caption">Recipe 02</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear pad-5"></div>
            <div class="mills-recipes">
                <a href="recipes.html">
                    <img src="{{asset("assets/images/recipy-03.jpg")}}" class="img-responsive">
                    <h5 class="caption">Recipe 03</h5>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-4">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-04.jpg")}}" class="img-responsive">
                            <div class="caption-top">
                                <h6>Chapati Bread</h6>
                                <p>Mix ingredients with water till it is soft dough.</p>
                            </div>
                            <h5 class="caption">Recipe 04</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-05.jpg")}}" class="img-responsive">
                            <h5 class="caption">Recipe 05</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear pad-5"></div>
            <div class="row">
                <div class="col-xs-7">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-06.jpg")}}" class="img-responsive">
                            <h5 class="caption">Recipe 06</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="mills-recipes">
                        <a href="recipes.html">
                            <img src="{{asset("assets/images/recipy-07.jpg")}}" class="img-responsive">
                            <h5 class="caption">Recipe 07</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear pad-15"></div>

    <h1 class="text-center text_brwn">Live Healthy</h1>
    <div class="row">
        <div class="col-sm-6">
            <ul class="healthy-tips">
                <li class="orrang"><a href="healthy.html">Healthy Eating Guide</a></li>
                <li class="green"><a href="healthy.html">Nutritional Facts</a></li>
                <li class="blue"><a href="healthy.html">The Food Pyramid</a></li>
                <li class="pink"><a href="healthy.html">Light Recipes</a></li>
                <li class="prpl"><a href="healthy.html">The Power of Grain</a></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <a href="#" class="recipy-calculator">Calories Calculator</a>
            <div class="clear pad-15"></div>
            <div class="bg_green pad-30 text_blck text_12">
                <h3 class="mt-0 text_wht font_bold">Tips</h3>
                <h5 class="text_blck">Food Presentation Tips</h5>
                <p>As we spend so much time and expense on the preparation of meals it is important that the end result is appetizing and appealing The following are...</p>
            </div>
        </div>
    </div>

    <div class="clear pad-15"></div>

    <h1 class="text-center text_brwn">Products</h1>
    <div class="clear pad-15"></div>
    <div class="row">
        <div class="col-sm-3 text-center"><a href="products.html"><img src="{{asset("assets/images/prd-01.png")}}" class="img-center"></a></div>
        <div class="col-sm-3 text-center"><a href="products.html"><img src="{{asset("assets/images/prd-02.png")}}" class="img-center"></a></div>
        <div class="col-sm-3 text-center"><a href="products.html"><img src="{{asset("assets/images/prd-03.png")}}" class="img-center"></a></div>
        <div class="col-sm-3 text-center"><a href="products.html"><img src="{{asset("assets/images/prd-04.png")}}" class="img-center"></a></div>
    </div>
    <div class="clear pad-30"></div>
    <div class="row">
        <div class="col-xs-offset-5 col-xs-2"><a href="products.html" class="btn btn-primary btn-block">See All Products</a></div>
    </div>    
</div>

@stop
@section('endcontainer')
<div id="endcontainer">

    <div class="clear pad-30"></div>

    <div class="bg_navy pad-20">
        <div class="container">
            <div class="col-md-6">
                <h3 class="text_orng">About GMFF</h3>
                <p>We are Grand Mills, the modern Abu Dhabi miller bringing traditional virtues and innovative thinking to the flours feeding our region. Actively selecting and mixing superior quality ingredients we ensure a distinctively better tasting flour goes into better tasting products.</p>
                <div class="clear pad-15"></div>
                <a href="about.html" class="text_orng">more...</a>
            </div>
            <div class="col-md-6">
                <h3 class="text_orng">Our Definition of Quality</h3>
                <p>Grand Mills operates a modern, fully automated manufacturing facility for flour in accordance with the requirements of the local authorities. In our state-of-the-art laboratory we have the latest analytical equipment which supports our teams in providing proven superior flour quality.</p>
                <div class="clear pad-5"></div>
                <a href="quality.html" class="text_orng">more...</a>
            </div>
        </div>
    </div>

</div>
@stop