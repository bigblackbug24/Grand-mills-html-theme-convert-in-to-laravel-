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
<!-- end inner banner section -->
<!-- start container section -->

@section('container')
<div class="clear pad-15"></div>

<div class="container">
	<h1 class="roboto">Tips & Tricks</h1>
    	
<div class="faq">
    <div class="panel-group" id="accordion">
         
          <div class="panel panel-default animated out" data-delay="10" data-animation="fadeInUp">
            <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            Food Presentation Tips
                        </a> 
                    </h4>
            </div>
            <div id="collapse10" class="panel-collapse collapse in">
                <div class="panel-body">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <p>The following are a list of general tips to help you create fantastic meals every time. </p>
                                <p>Ingredients. It is impossible to create a great dish by using poor ingredients. Always make sure that the food that you buy is of good quality; Perishables such as fruit, vegetables, dairy, meat and fish must be fresh at time of purchase and once home stored correctly. Remember to check the expiry date on non perishables as well, and store according to instructions.</p>
                                <p>Preparation. It is important to use reliable recipes to ensure good results. Accurate measurements are important, especially when baking so make sure that you have a reliable set of kitchen scales, measuring cups and spoons.  When it comes to cooking, as with most things, “practice makes perfect.”</p>
                                <p>Cooking. It is important that you “get to know” your oven as some ovens seem to cook more efficiently than others. Read the instruction manual to find the best rack position and function for baking, roasting, grilling etc. If you are unsure on the accuracy of your oven, invest in a thermometer that attaches to the rack, for peace of mind. Most chefs use a probe type thermometer to ensure that meat is cooked perfectly.</p>
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                               <li><p>Other benefits include better weight control, reduction in belly fat, and significant drops in blood pressure.</p></li>
                               <li><p>Research has shown that children who eat whole grains have a lower risk of obesity and diabetes, lower cholesterol, reduced risk of asthma, and may have reduced acne. Whole grains help children maintain their energy levels and feel fuller longer.</p></li>
                               <li><p>For elderly people, consuming more whole grains has shown to be beneficial in decreasing BMI (Body Mass Index), weight gain, total cholesterol and LDL cholesterol, and in improving glucose response</p></li>
                           </ul>
                        </div>
                </div>
            </div>
        </div>
        
          <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        27 Tips to healthier life 
                    </a> 
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <h5 class="mr-10">Chew Your Food Well</h5>
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <p>The following are a list of general tips to help you create fantastic meals every time. </p>
                                <p>Ingredients. It is impossible to create a great dish by using poor ingredients. Always make sure that the food that you buy is of good quality; Perishables such as fruit, vegetables, dairy, meat and fish must be fresh at time of purchase and once home stored correctly. Remember to check the expiry date on non perishables as well, and store according to instructions.</p>
                                <p>Preparation. It is important to use reliable recipes to ensure good results. Accurate measurements are important, especially when baking so make sure that you have a reliable set of kitchen scales, measuring cups and spoons.  When it comes to cooking, as with most things, “practice makes perfect.”</p>
                                <p>Cooking. It is important that you “get to know” your oven as some ovens seem to cook more efficiently than others. Read the instruction manual to find the best rack position and function for baking, roasting, grilling etc. If you are unsure on the accuracy of your oven, invest in a thermometer that attaches to the rack, for peace of mind. Most chefs use a probe type thermometer to ensure that meat is cooked perfectly.</p>
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                               <li><p>Other benefits include better weight control, reduction in belly fat, and significant drops in blood pressure.</p></li>
                               <li><p>Research has shown that children who eat whole grains have a lower risk of obesity and diabetes, lower cholesterol, reduced risk of asthma, and may have reduced acne. Whole grains help children maintain their energy levels and feel fuller longer.</p></li>
                               <li><p>For elderly people, consuming more whole grains has shown to be beneficial in decreasing BMI (Body Mass Index), weight gain, total cholesterol and LDL cholesterol, and in improving glucose response</p></li>
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
                        14 Tips for Lncreasing Calerois While keeping Healthy Diet
                    </a> 
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/health-benefits.png")}}">
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <li><p>Health benefits of whole grain flour(great harvest.com)</p></li>
                                <li><p>Consuming food rich in fiber, such as whole grains, as part of a healthy diet, reduces the risk of coronary heart disease and constipation.</p></li>
                                <li><p>People who eat whole grains reduce serioushealth risks</p></li>
                                <li><p>Risk of heart disease drops 25-36%M</p></li>
                                <li><p>Risk of type 2 diabetes drops 21-27%</p></li>
                                <li><p>Risk of digestive cancers drops 21-43%</p></li>
                                <li><p>Risk of stroke drops 37%</p></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                               <li><p>Other benefits include better weight control, reduction in belly fat, and significant drops in blood pressure.</p></li>
                               <li><p>Research has shown that children who eat whole grains have a lower risk of obesity and diabetes, lower cholesterol, reduced risk of asthma, and may have reduced acne. Whole grains help children maintain their energy levels and feel fuller longer.</p></li>
                               <li><p>For elderly people, consuming more whole grains has shown to be beneficial in decreasing BMI (Body Mass Index), weight gain, total cholesterol and LDL cholesterol, and in improving glucose response</p></li>
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
                        10 Tips for Eating Fiber-packed Foods
                    </a> 
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <li><p>Eat the number of Grain Products Food Guide Servings recommended for you each day in MyPyramid guidelines.</p></li>
                                <li><p>Make at least half of your grain products whole grain each day. Whole grains include whole wheat, whole oats/oatmeal, whole rye, whole grain corn, brown and wild rice, buckwheat, triticale, barley, bulgur (cracked wheat), and quinoa. Multigrain and 100% wheat products are not always "whole grain" so read the label.</p></li>
                                <li><p>Eat breads and rolls made with whole grains such as whole wheat, wheat bran, mixed grains, dark rye or pumpernickel Have bran, oatmeal or whole-grain muffins. </p></li>
                                <li><p>Choose whole grain or whole wheat bagels, pita bread, and flour tortilla wraps. Eat cereals containing whole grains, wheat bran, or oat bran.</p></li>
                                <li><p>Check the Nutrition Facts table on package labels to find higher fiber products. Foods labeled “whole grain” are not always high in fiber. To be considered a “high” source of fiber products should contain 4 grams of fiber per serving or more.</p></li>
                               
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                               <li><p>Try brown rice, as well as pasta and couscous made with whole wheat.</p></li>
                               <li><p>. Substitute whole wheat flour for some or all of the white flour in your recipes. Add dried fruit to muffins and cookies.</p></li>
                               <li><p>Eat the number of Vegetables and Fruit Food Guide Servings recommended for you each day in MyPyramid guidelines. Berries, pears, green peas, Brussels sprouts and sweet potatoes are some high-fiber choices.</p></li>
                               <li><p>Keep the skins and peels on some vegetables and fruit, and have the fruit or vegetable more often than its juice. </p></li>
                               <li><p>Enjoy more meals made with beans, peas, and lentils (e.g. baked beans in tomato sauce, vegetarian chili, bean burritos, three-bean salad, and falafel). Add beans, peas or lentils to soups and salads.</p></li>
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
                        21 Easy Way To Cut Fat in Cooking 
                    </a> 
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <li><p>Use nonstick cooking spray instead of butter or oil; or at least choose liquid oils over solid fats (preferably canola oil or olive oil) </p></li>
                                <li><p>Choose extra-lean meat and skinless chicken breasts, lower fat milk, and lower fat snacks</p></li>
                                <li><p>Trim all visible fat from meat</p></li>
                                <li><p>Grill, broil, bake, braise, steam, poach, slow-cook, and microwave foods instead of frying them. Sautéing is ok with minimal amounts of oil, or use nonstick spray, or broth instead</p></li>
                                <li><p>Drain fat from cooked meats and blot them with kitchen paper if necessary</p></li>
                                <li><p>Use vegetables, beans or whole grains to replace some of the meat content of burgers, meatloaf, and chili </p></li>
                                <li><p>Coat chicken and fish in breadcrumbs rather than batter, and bake them instead of frying them</p></li>
                                <li><p>Choose chicken or turkey sausages instead of beef sausages</p></li>
                                <li><p>Use one egg and two egg whites per person in your favorite egg dishes or cakes; or cut fat and cholesterol completely by using egg substitute</p></li>
                                <li><p>Substitute two meat dishes each week for fish or vegetarian meals</p></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                       <li><p>Use fat-free chicken broth or fat-free milk in mashed potatoes, soups, gravies and stews </p></li>
                       <li><p>Try fat-free evaporated milk in creamy soups and casseroles instead of heavy cream</p></li>
                       <li><p>Top your pies or line your tarts with phyllo dough instead of regular pastry </p></li>
                       <li><p>Oven-fry potatoes instead of making or buying French fries</p></li>
                       <li><p>Use herbs, spices, fruits and salsas to flavor your food</p></li>
                       <li><p>Substitute reduced fat cheeses for full-fat ones, and cut the amount you use</p></li>
   <li><p>Choose reduced fat sour cream or yogurt instead of full-fat versions for stews, dips, spreads, and dressings </p></li>
                        <li><p>Use reduced fat or fat-free cream cheese instead of the regular version for cheesecakes</p></li>
             <li><p>Replace some of the fat in baked goods with applesauce, plain nonfat yogurt or low fat buttermilk.</p></li>
                        <li><p>Read food labels and choose the lower fat foods.</p></li>
                      <li><p>Flavor foods without adding fat by using lemon, salsa, mustard, ketchup, herbs and spices.</p></li>
                           </ul>
                        </div>
                </div>
            </div>
        </div>
         
          <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        11 Tips to Increase Physical Activity
                    </a> 
                </h4>
            </div>
            <div id="collapse9" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/health-benefits.png")}}">
                                        
                        </div>
                        <div class="col-md-4">
                            <ul class="roboto accordion-power-margin">
                                <li><p>Health benefits of whole grain flour(great harvest.com)</p></li>
                                <li><p>Consuming food rich in fiber, such as whole grains, as part of a healthy diet, reduces the risk of coronary heart disease and constipation.</p></li>
                                <li><p>People who eat whole grains reduce serioushealth risks</p></li>
                                <li><p>Risk of heart disease drops 25-36%M</p></li>
                                <li><p>Risk of type 2 diabetes drops 21-27%</p></li>
                                <li><p>Risk of digestive cancers drops 21-43%</p></li>
                                <li><p>Risk of stroke drops 37%</p></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                           <ul class="roboto accordion-power-margin">
                               <li><p>Other benefits include better weight control, reduction in belly fat, and significant drops in blood pressure.</p></li>
                               <li><p>Research has shown that children who eat whole grains have a lower risk of obesity and diabetes, lower cholesterol, reduced risk of asthma, and may have reduced acne. Whole grains help children maintain their energy levels and feel fuller longer.</p></li>
                               <li><p>For elderly people, consuming more whole grains has shown to be beneficial in decreasing BMI (Body Mass Index), weight gain, total cholesterol and LDL cholesterol, and in improving glucose response</p></li>
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
