@extends('layouts.dashboard')
<!-- banner section start-->

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
<div class="clear pad-15"></div>

<div class="container">
	<h1>The Food Pyramids</h1>
    	
<div class="faq">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true"> 
                            <span><i class="fa fa-plus"></i></span>
                            Six Color for Five Food Groups and Oils.
                        </a> 
                    </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                        <div class="col-md-6">
                            <img class="img-responsive" src="{{asset("assets/images/the-Food-Pyramid.jpg")}}">
                        </div>
                        <div class="col-md-4">
                            <div class="roboto">
                            </div>        
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text roboto">
                                <p>Each food group is identified by a unique color. This color is used both in the graphic and in information about that group.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
      
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Grains Group
                    </a> 
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/grain-group.png")}}">
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                                <li><p>Provides the body with energy,CHO,Vitamins,minerals, and fiber </p></li>
                                <li><p>Make half your servings whole grains.</p></li>
                                <li><p>Choose lower fat sugar and calorie gain products.</p></li>
                                <li><p>This group includes bread,rice,pasta,oatmeal,etc.</p></li>
                                <li><p>6-11 servings a day</p></li>
                            </ul>       
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Vegetables Group
                    </a> 
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/Vegetables-Group.jpg")}}">
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                                <li><p>Provides the body with energy,CHO,Vitamins,minerals, and fiber </p></li>
                                <li><p>Make half your servings whole grains.</p></li>
                                <li><p>Choose lower fat sugar and calorie gain products.</p></li>
                                <li><p>This group includes bread,rice,pasta,oatmeal,etc.</p></li>
                                <li><p>6-11 servings a day</p></li>
                            </ul>       
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Milk Group
                    </a> 
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/milk-group.jpg")}}">
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                                <li><p>Provides the body with energy,CHO,Vitamins,minerals, and fiber </p></li>
                                <li><p>Make half your servings whole grains.</p></li>
                                <li><p>Choose lower fat sugar and calorie gain products.</p></li>
                                <li><p>This group includes bread,rice,pasta,oatmeal,etc.</p></li>
                                <li><p>6-11 servings a day</p></li>
                            </ul>       
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Meat and Bean Group
                    </a> 
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/Meat-and-Bean-Group.jpg")}}">
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                                <li><p>Provides the body with energy,CHO,Vitamins,minerals, and fiber </p></li>
                                <li><p>Make half your servings whole grains.</p></li>
                                <li><p>Choose lower fat sugar and calorie gain products.</p></li>
                                <li><p>This group includes bread,rice,pasta,oatmeal,etc.</p></li>
                                <li><p>6-11 servings a day</p></li>
                            </ul>       
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Oil Group
                    </a> 
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/Oil-Group.jpg")}}">
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                                <li><p>Provides the body with energy,CHO,Vitamins,minerals, and fiber </p></li>
                                <li><p>Make half your servings whole grains.</p></li>
                                <li><p>Choose lower fat sugar and calorie gain products.</p></li>
                                <li><p>This group includes bread,rice,pasta,oatmeal,etc.</p></li>
                                <li><p>6-11 servings a day</p></li>
                            </ul>       
                        </div>
                </div>
            </div>
        </div>
        
        
    </div> 
</div>
        
    
</div>

<div class="clear pad-50"></div>

@stop