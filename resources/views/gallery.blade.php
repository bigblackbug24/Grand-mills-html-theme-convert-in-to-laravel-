@extends('layouts.dashboard')
<!-- banner section start -->
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
<!-- end banner section -->

<!-- start container section -->

@section('container')

<div class="texture">
    <div class="container">
        <h2>Gallery</h2>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('assets/images/media-01.jpg')}}" class="img-responsive">
                <div class="clear pad-15"></div>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('assets/images/media-02.jpg')}}" class="img-responsive">
                <div class="clear pad-15"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('assets/images/media-03.jpg')}}" class="img-responsive">
                <div class="clear pad-15"></div>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('assets/images/media-04.jpg')}}" class="img-responsive">
                <div class="clear pad-15"></div>
            </div>
        </div>
    </div>
</div>

@stop
<!-- end container section -->