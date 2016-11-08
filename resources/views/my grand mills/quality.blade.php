@extends('layouts.dashboard')

<!-- inner banner section start -->
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
<!-- end inner banner section  -->
<!-- container section start -->
@section('container')

<div class="clear pad-15"></div>

<div class="container">
    <h1>Our definition of Quality</h1>
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('assets/images/quality-pic.jpg')}}" class="img-responsive">
        </div>
        <div class="col-sm-6 roboto">
            <p>Grand Mills operates a modern, fully automated manufacturing facility for flour in accordance with the requirements of the local authorities. In our state-of-the-art laboratory we have the latest analytical equipment which supports our teams in providing proven superior flour quality.</p>

            <p>Our Quality Management System is based on internal and externally recognized quality standards, including ISO 9001:2008, ISO 22000:2005 and Hazard Analysis and Critical Control Points (HACCP), a food safety risk assessment process focused on controlling biological, chemical and physical hazards within the food chain.</p>

            <p>Our quality management system applies to all business activities including research and development, procurement, manufacturing, laboratory, sales and marketing.</p>

            <p>Commitment to Quality has ensured that Grand Mills stays at the forefront of a very competitive market. We believe that offering a top quality consistent proven product builds confidence and loyalty with our Customers.</p>
        </div>
    </div>
</div>

<div class="clear pad-50"></div>


@stop
<!-- end container section -->