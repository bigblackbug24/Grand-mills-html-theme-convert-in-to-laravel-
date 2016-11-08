@extends('layouts.dashboard')
<!--  inner banner section start -->
@section ('banner')
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

<!-- inner banner section stop -->


<!-- start container section -->
@section('container')

<div class="clear pad-15"></div>

<div class="container">
    <div class="section-heading">
        <h1>My Grand Mills</h1>
    </div>
    <div class="section-content">
        <div class="col-md-9 roboto">
            <div class="row">
                <h4><li class="fa fa-user"></li><strong class="ml-5">Create Login</strong></h4>
                <form id="review-form" method="post" name="postreview">
                    <div class="form-group">
                        <input class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">	
                        <input class="form-control" placeholder="E-mail Address">
                    </div>
                    <div class="form-group">	
                        <input class="form-control" placeholder="Date of Birth">
                    </div>
                    <div class="form-group">	
                        <input class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">	
                        <input class="form-control" placeholder="Mobile">
                    </div>
                    <div class="form-group">	
                        <input class="form-control pull-left" placeholder="User Name">
                        <p>Minimum of 5 Characters of either text or a combination of text and number </p>
                    </div>
                    <div class="form-group">	
                        <input class="form-control pull-left" placeholder="Password">
                        <p>Minimum of 5 Characters of either text or a combination of text and number </p>
                    </div>
                    <div class="form-group">	
                        <input class="form-control" placeholder="Re-Type Password">
                    </div>
                    <div class="form-group clearfix btn-options">       
                        <div class="btn-sec">
                            <button class="btn pull-right" style="background-color: #c1cd23; color: #ffffff">Reset</button>
                            <button class="btn pull-right" style="background-color: #c1cd23; color: #ffffff">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>	

</div>

<div class="clear pad-50"></div>

@stop
<!-- end container section -->