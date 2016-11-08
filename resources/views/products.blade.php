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

<div class="texture">
    <div class="container">
        <div class="text-right font_smbold text_blck text_18">
            <a href="#" class="text_blck">B2B Range</a> | <a href="#" class="text_blck">B2C Range</a>
        </div>
        <h2>Consumer Range</h2>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/bf-1kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Brown Flour (No. 2)<br>1kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/bf-2kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Brown Flour (No. 2)<br>2kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/bf-10kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Brown Flour (No. 2)<br>10kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
        </div>
        <div class="clear pad-15"></div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/apf-1kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">All Purpose Flour (No. 1)<br>1kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/apf-2kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">All Purpose Flour (No. 1)<br>2kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/apf-10kg.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">All Purpose Flour (No. 1)<br>10kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
        </div>
        <div class="clear pad-15"></div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/chakiata-01.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Chakki Atta (Whole Wheat Flour)<br>1kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/chakiata-02.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Chakki Atta (Whole Wheat Flour)<br>5kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/chakiata-03.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Chakki Atta (Whole Wheat Flour)<br>10kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
        </div>
        <div class="clear pad-15"></div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/whiteflour.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Self Raising White Flour<br>2kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
            <div class="col-sm-4 text-center">
                <img src="{{asset("assets/images/harees.png")}}" class="img-center">
                <div class="clear pad-10"></div>
                <p class="text_20 font_smbold">Harees<br>2.5kg</p>
                <a href="#" class="text_blck under_line" data-toggle="modal" data-target="#prd-popup">More details</a>
            </div>
        </div>
    </div>
</div>
@stop
<!-- end container section -->
<!-- popup form start --->
@section('popup-form')
<div class="modal fade" id="prd-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">        	
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div id="carousel-product" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-offset-1 col-sm-4 text-center"><img src="{{asset("assets/images/flour-04.jpg")}}" class="img-center"></div>
                                <div class="col-sm-7">
                                    <h3 class="mt-0">Flour Consumer Packs - Flour No 2</h3>
                                    <div class="clear pad-5"></div>
                                    <h4>Available Sizes</h4>
                                    <p>Retail Range: 1 kg – 2kg – 10 kg<br>Trade Range: 50 kg</p>
                                    <div class="clear pad-5"></div>
                                    <h4>Flour Description</h4>
                                    <p>A high quality wheat flour that contains fine bran, which adds delicious and special taste to recipes.</p>
                                    <div class="clear pad-5"></div>
                                    <h4>Common Uses</h4>
                                    <p>Brown flour is used in a variety of baked goods such as breads, rolls, and pastries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-offset-1 col-sm-4 text-center"><img src="{{asset("assets/images/flour-04.jpg")}}" class="img-center"></div>
                                <div class="col-sm-7">
                                    <h3 class="mt-0">Flour Consumer Packs - Flour No 2</h3>
                                    <div class="clear pad-5"></div>
                                    <h4>Available Sizes</h4>
                                    <p>Retail Range: 1 kg – 2kg – 10 kg<br>Trade Range: 50 kg</p>
                                    <div class="clear pad-5"></div>
                                    <h4>Flour Description</h4>
                                    <p>A high quality wheat flour that contains fine bran, which adds delicious and special taste to recipes.</p>
                                    <div class="clear pad-5"></div>
                                    <h4>Common Uses</h4>
                                    <p>Brown flour is used in a variety of baked goods such as breads, rolls, and pastries.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#carousel-product" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-product" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- end container section -->




