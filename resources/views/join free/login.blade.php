@extends('layouts.dashboard')

<!-- inner banner section start --->

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
<!-- end inner banner section -->

<!-- start container section -->

@section('container')
<div class="clear pad-15"></div>

<div class="container">
    <div class="section-heading">
        <h1>My Grand Mills</h1>
    </div>
    <div class="section-content">
        <div class="col-md-6 roboto border-right-login">
            <div class="row">
                <h4><li class="fa fa-user"></li><strong class="ml-5">Login</strong></h4>
                <form id="login-form" method="post" name="postreview">
                    <div class="form-group">
                        <input class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Pssword">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Remeber me in this Computer</label>
                    </div>

                    <div class="form-group clearfix btn-option">
                        <div class="btn-sec">
                            <a href="#" class="forgot-password">Forgot Password</a>
                            <button class="btn pull-right" style="background-color: #c1cd23; color: #ffffff">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="margin-left-20 row"><strong>Registration</strong></h4>
            <div class="form-group clearfix btn-option row" style="margin-top: 88px">
                <h4 class="text-center">First Time Visitor?</h4>
                <div class="btn-sec roboto ml-btn-register"> 
                    <button class="btn" style="background-color: #c1cd23; color: #ffffff" >Register Now</button>
                </div>
            </div>
        </div>
    </div>   
</div>	

<div class="clear pad-50"></div>

@stop
