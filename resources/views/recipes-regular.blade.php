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
                    <div class="col-xs-4"><a href="{{url('recipes-regular')}}"class="active">Recipes<br>Regular</a></div>
                    <div class="col-xs-4"><a href="{{url('recipes-light')}}">Recipes<br>Light</a></div>
                    <div class="col-xs-4"><a href="{{url('baking-gm')}}">Baking<br>with<br>Grand Mills</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

<!-- end inner banner section -->
<!-- start container section -->
@section('container')

<div class="clear pad-30"></div>

<div class="container">
    <div class="row">
    	<div class="col-sm-4 roboto">
        	<div class="bg_gry_lt clearfix pad-20">
            	<h2 class="mt-0">The Recipes</h2>
                <ul class="recipes_items">
                    <li class="active"><a href="{{url('recipes-regular')}}"><i class="fa fa-caret-right"></i> Recipes Regular</a></li>
                    <li><a href="{{url('recipes-light')}}"><i class="fa fa-caret-right"></i> Recipes Light</a></li>
                    <li><a href="{{url('baking-gm')}}"><i class="fa fa-caret-right"></i> Baking with Grand Mills</a></li>
                </ul>
                <div class="clear pad-10"></div>
                <div class="bg_grey pad-20">
                	<h3 class="mt-0">Recipe of the Month</h3>
                    <a href="#"><img src="{{asset('assets/images/chapati.jpg')}}" class="img-responsive mb-15"></a>
                    <a href="#"><img src="{{asset('assets/images/stars4.png')}}" class="mb-10"></a>
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
                	<select class="form-control input-lg"><option>Select Savoury/Sweet</option></select>
  				</div>
                <div class="form-group">
                	<select class="form-control input-lg"><option>Select Cuisines</option></select>
  				</div>
                <div class="form-group">
                	<select class="form-control input-lg"><option>Select Flour</option></select>
  				</div>
  				<button type="submit" class="btn btn-success btn-lg">Search</button>
			</form>
            <div class="clear pad-30"></div>
            <div class="row">
            	<div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/chapati.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Chapati Bread</h3>
                    <p>Mix ingredients with water till it is soft dough</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/roti.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Oven Baked "Tandoori Roti"</h3>
                    <p>This is an oven baked version of the traditional Tandoori Roti.</p>
                </div>
            </div>
            <div class="clear pad-15"></div>
            <div class="row">
            	<div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/poori.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Poori</h3>
                    <p>In a large bowl mix together;flour, salt and chilli powder.</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/corianderpoori.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Potato, Pea and Coriander Poori</h3>
                    <p>In a large bowl mix togetherflour, salt and spices.</p>
                </div>
            </div>
            <div class="clear pad-15"></div>
            <div class="row">
            	<div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/paratha.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Parathas</h3>
                    <p>A Paratha is a crisp, rich unleavened bread.</p>
                </div>
                <div class="col-sm-6 text-center text_grey roboto">
                	<a href="#"><img src="{{asset('assets/images/bhatura.jpg')}}" class="img-center"></a>
                    <div class="clearfix pad-10 mt-10">
                    	<a href="#" class="pull-left"><img src="{{asset('assets/images/stars4.png')}}"></a>
                        <span class="pull-right" style="border-left:#888 1px solid;"><a href="#"><i class="fa fa-heart-o fa-2x text_grey ml-10"></i></a></span>
                    </div>
                    <h3 class="text_grey">Bhatura</h3>
                    <p>Bhaturas are similar to poori but contain egg and yoghurt.</p>
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
                <li class="active"><a href="#">1</a></li>
                <li><a href="">2</a></li>
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