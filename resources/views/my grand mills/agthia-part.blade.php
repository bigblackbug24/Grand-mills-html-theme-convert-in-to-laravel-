@extends('layouts.dashboard')
<!-- start inner barnner section -->
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
                    <div class="col-xs-4"><a href="recipes-regular.html">Recipes<br>Regular</a></div>
                    <div class="col-xs-4"><a href="recipes-light.html">Recipes<br>Light</a></div>
                    <div class="col-xs-4"><a href="baking-gm.html">Baking<br>with<br>Grand Mills</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- end inner barnner section -->
@section('container')

<div class="clear pad-15"></div>

<div class="container">
    <h1>We are part of Agthia</h1>
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset("assets/images/aghtia.jpg")}}" class="img-responsive">
        </div>
        <div class="col-sm-6 roboto">
            <div class="row">
                <div class="col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
                </div>
                <div class="col-sm-6">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear pad-50"></div>

@stop
<!-- end container section -->