@extends('layouts.dashboard')

<!-- start inner banner section -->
@section('banner')
<div class="banner inner">
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
                    <div class="col-xs-4"><a href="{{url('recipies-regular')}}">Recipes<br>Regular</a></div>
                    <div class="col-xs-4"><a href="{{url('recipes-light')}}" class="active">Recipes<br>Light</a></div>
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

<div class="clear pad-30"></div>

<div class="container">
    <div class="row">
        <div class="col-sm-4 roboto">
            <div class="bg_gry_lt clearfix pad-20">
                <h2 class="mt-0">The Recipes</h2>
                <ul class="recipes_items">
                    <li><a href="#"><i class="fa fa-caret-right"></i> Recipes Regular</a></li>
                    <li class="active"><a href="#"><i class="fa fa-caret-right"></i> Recipes Light</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i> Baking with Grand Mills</a></li>
                </ul>
                <div class="clear pad-10"></div>
                <div class="bg_grey pad-20">
                    <h3 class="mt-0">Recipe of the Month</h3>
                    <a href="#"><img src="{{asset("assets/images/chapati.jpg")}}" class="img-responsive mb-15"></a>
                    <a href="#"><img src="{{asset("assets/images/stars4.png")}}" class="mb-10"></a>
                    <h4>Chapati Bread</h4>
                    <p>Mix ingredients with water till it is soft dough.<br><a href="#">Know More</a></p>
                </div>
                <div class="clear pad-10"></div>
                <a href="#" class="btn btn-success btn-lg btn-block"><strong>Calories Calculator</strong></a>
                <div class="clear pad-30"></div>
            </div>
        </div>
        <div class="col-sm-8">
            <h1 class="mt-0">Savoury/Sweet</h1>
            <form class="form-inline">
                <div class="form-group">
                    <select class="form-control input-lg"><option>Select Savoury/Sweet</option>                 
                        <option value="1">Savouary</option>
                        <option value="2">Sweet</option>
                    </select>

                </div>
                <div class="form-group">
                    <select class="form-control input-lg"><option>Select Cuisines</option>
                        <option value="1">Indian</option>
                        <option value="2">Western</option>
                        <option value="2">Arabic</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control input-lg"><option>Select Flour</option>
                        <option value="1">All Flour</option>
                        <option value="1">Brown Flour</option>
                        <option value="1">Chapati </option>
                        <option value="1">Riggag</option>
                        <option value="1">Wholemeal</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Search</button>
            </form>
            <div class="clear pad-30"></div>
            <div class="row">
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/12.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Pancake crepe</h3>
                    <p>These parathas use a minimal amount of canola oil</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/13.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">  Wholemeal Walnut Loaf</h3>
                    <p>These stuffed parathas could be served as a light lunch or snack.</p>
                </div>
            </div>
            <div class="clear pad-15"></div>
            <div class="row">
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/14.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Sofof</h3>
                    <p>This is a healthy variation of this traditional Punjabi recipe.</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/15.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Saudi Date Cake with Caramel Sauce</h3>
                    <p>Pies dough is being prepared in the same way safiha pie is made.</p>
                </div>
            </div>
            <div class="clear pad-15"></div>
            <div class="row">
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/16.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Toasted Coconut Waffles</h3>
                    <p>These breads are easy to make and very tasty.</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                    <a href="#"><img src="{{asset("assets/images/17.jpg")}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                        <a href="#" class="pull-left"><img src="{{asset("assets/images/stars4.png")}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Coconut Stuffed Pancakes</h3>
                    <p>This is light quiche recipe using wholemeal partry, and milk.</p>
                </div>
            </div>
            <div class="clear pad-15"></div>
            <nav class="text-center">
                <ul class="pagination pagination-lg">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="recipes-light-2nd.html">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="clear pad-50"></div>

@stop
<!-- stop container section -->