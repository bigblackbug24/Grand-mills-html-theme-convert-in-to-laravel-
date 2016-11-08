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
                    <div class="col-xs-4"><a href="{{url('recipes-regular')}}">Recipes<br>Regular</a></div>
                    <div class="col-xs-4"><a href="{{url('recipes-light')}}">Recipes<br>Light</a></div>
                    <div class="col-xs-4"><a href="{{url('baking-gm')}}">Baking<br>with<br>Grand Mills</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- stop inner banner section -->


<!-- strat container section -->

@section('container')

<div class="clear pad-15"></div>

<div class="container">
    <h1>About GMFF</h1>
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset("assets/images/about-pic.jpg")}}" class="img-responsive">
        </div>
        <div class="col-sm-6 roboto">
            <p>We are Grand Mills, the modern Abu Dhabi miller bringing traditional virtues and innovative thinking to the flours feeding our region. Actively selecting and mixing superior quality ingredients we ensure a distinctively better tasting flour goes into better tasting products. Well balanced commercially and nutritionally, our flour range helps build healthy businesses as well as happy families. Beyond flour we also provide expert and informed advice. Creating value, inspiring better products and increasing success for the bakers we supply and happily work alongside.</p>

            <p>As pioneers of the region's milling industry and a leading player in the UAE market we're appreciated for our collaborative and progressive approach to business. Creating bespoke answers and producing trusted products to excite and satisfy appetites locally and across our region. Formed in 1978 we are now part of one Agthia. Sharing their commitment to supply the good quality, nutritional, carefully produced food and drink that's essential for wholehearted living.</p>
        </div>
    </div>
</div>

<div class="clear pad-50"></div>


@stop