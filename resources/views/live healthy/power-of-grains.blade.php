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
    <h1>The Power of Grain</h1>

    <div class="faq">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
                <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            10 Slices of "Wheat and Flour" Technology
                        </a> 
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/power-of-grain.png")}}">
                        </div>
                        <div class="col-md-4">
                            <div class="roboto">

                                3000BC Egyptians used yeast and developed more effective ovens for baking.
                                <br><br>
                                150BC Romans founded first bakers' guild and used donkey power for first mechanical bread mixer. 
                                <br><br>
                                600AD Windmills developed in Iran. 
                                <br><br>
                                800AD Vikings made bread with a hole in the middle which could be stored on poles. 
                                <br><br>                             
                                1709: Legislation in Britain permits only three types of bread, "white", "wheaten" (brown) and "household" (low-grade). 
                                <br><br>
                                1834: Rollermills invented in Switzerland, making it easier to produce high-quality flour for white bread. 
                                <br><br>
                                1912: Slicing and wrapping machine invented.
                                <br><br>
                                1919: Modern pop-up toaster invented. 
                                <br><br>
                                1941: Calcium added to bread in Britain. 
                                <br><br>
                            </div>        
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text roboto">
                                <h5>Use Your Loaf</h5>
                                <p>"The best thing since sliced bread." Otto Rohwedder invented a machine to slice and wrap bread in 1912, but this was not exhibited until 1928. This proved a great success with the public and only five years later 80 per cent of the US bread market was taken by sliced loaves. In Britain, the first sliced loaves appeared in 1930, called Wonderbread. </p>
                                <p>"Baker's dozen": There were tough penalties in the Middle Ages against bakers who tried to cheat customers with underweight loaves. To ensure that there was no short-changing, bakers added a 13th loaf to the dozen. This extra loaf was known as the "vantage".</p>
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

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            Wheat Milling Process
                        </a> 
                    </h4>
                </div>
                <div id="collapse11" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/wheat-milling.png")}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text roboto">
                                <h5>The Milling Process</h5>
                                <p>"The best thing since sliced bread." Otto Rohwedder invented a machine to slice and wrap bread in 1912, but this was not exhibited until 1928. This proved a great success with the public and only five years later 80 per cent of the US bread market was taken by sliced loaves. In Britain, the first sliced loaves appeared in 1930, called Wonderbread. </p>           
                                <strong>Wheat seeds get milled into flour. The process follows these basic steps; however, milling is far more complex than this simplified view conveys:</strong> 
                                <br><br>
                                <strong>Preparing the Wheat</strong>- Where the wheat is weighed inspected and graded.
                                <br><br>                             
                                <strong>Cleaning</strong>&nbsp;-&nbsp;the removal of impurities like stones, dirt, metals and other seeds. 
                                <br><br>
                                <strong>Tempering</strong>&nbsp;-&nbsp;during this stage the wheat is soaked in water to make it easier to remove the outer bran layer
                                <br><br>
                                <strong>Gristing</strong>&nbsp;-<&nbsp;this involves mixing different wheat to create a specific kind of flour.  
                                <br><br>
                                <strong>Milling</strong>&nbsp;-&nbsp;involves a number of repeated steps: 
                                <br><br>
                                The wheat is ground by a machine equipped with rollers that break it into pieces.  
                                <br><br>
                                <p>Then it is put through sifters. The resulting meal starts out coarse and with repeated grinding and sifting becomes fine white flour, wheat bran and wheat germ. The milling process can either produce distinct products—wheat bran, refined white flour, wheat germ—that can be packaged and sold separately, milled together to produce a whole grain flour, or blended to form different flours.</p>
                            </div>        
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text roboto">
                                <h5></h5>
                                <strong>Blending</strong>&nbsp;-&nbsp;different components are blended back together to form different flours. For example, whole wheat flour is a blend of white flour and wheat bran. 
                                <br><br>
                                <strong>Enriching & Fortifying</strong>&nbsp;-&nbsp;the addition of vitamins and minerals identified in government regulations.
                                <br><br>
                                <h5>Interesting Facts about wheat and flour</h5>
                                <p>A wheat seed begins to sprout in about a week and breaks through the soil a few days later. When the wheat is golden in color and the kernels have dried and hardened, the wheat is ripe and ready to be harvested.</p>
                                <p>One bushel of wheat makes enough flour for 73 one-pound loaves of white bread. Flour that is milled to keep the bran and germ is considered whole grain flour. </p>
                                <br>
                                <h5>Enrichment and Fortification</h5>
                                <div class="row accordion-text-milling">
                                    <div class="col-md-4">
                                        <h5 class="text-left">Term</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5>Enrichment</h5>
                                    </div>
                                </div>  
                                <div class="row accordion-text">
                                    <div class="col-md-4">
                                        <h5 class="text-left">Definition</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>the practice of adding back only those micronutrients that are lost during milling and for which there is good evidence that a deficiency exists within the general population.</p>
                                    </div>
                                </div>
                                <div class="row accordion-text-milling">
                                    <div class="col-md-4">
                                        <h5 class="text-left">Term</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5>Fortification</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-left">Definition</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <p>the addition of nutrients whether or not they are present in the food or the addition of levels that are much higher than the natural content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
                <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            Cultural and Political Importance of Bread
                        </a> 
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <img class="img-responsive accordion-text" src="{{asset("assets/images/cultural-1.png")}}">
                            <img class="img-responsive accordion-text" src="{{asset("assets/images/cultural-2.png")}}">
                            <img class="img-responsive accordion-text" src="{{asset("assets/images/cultural-3.png")}}">
                        </div>
                        <div class="col-md-4">
                            <div class="roboto">
                                <p>As a foodstuff of great historical and contemporary importance, in many cultures in the West and Near and Middle East bread has a significance beyond mere nutrition. The Lord's Prayer, for example, contains the line 'Give us today our daily bread'; here, 'bread' is commonly understood to mean necessities in general.<p><br>
                                <p>In Cockney Rhyming Slang, bread means money and is derived from the phrase bread and honey. The word bread is now commonly used around the world in English speaking countries as a synonym for money (as also is the case with the word dough.) The cultural importance of 'bread' goes beyond slang, however, to serve as a metaphor for basic necessities and living conditions in general. A 'bread-winner' is a household's main economic contributor and has little to do with actual bread-provision, for example. This also goes along with the phrase "putting bread on the table." A remarkable or revolutionary innovation is often referred to as "the greatest thing since sliced bread."</p><br>  
                                <p>In the USSR in 1917, Lenin and his fellow Bolsheviks promised "Peace, Land, and Bread."In Newfoundland, bread was seen as having the power to protect against fairies. The term "breadbasket" is often used to denote an agriculturally productive region. In Slavic cultures bread and salt is offered as a welcome to all guests. Arab cultures use the proverb "eating bread and salt together" to indicate a familial relationship between people. In India, life's basic necessities are often referred to as "roti, kapra aur makan" (bread, cloth and house).</p>
                            </div>        
                        </div>
                        <div class="col-md-4">
                            <div class="roboto">
                                <p>The political significance of bread is considerable. In Britain in the nineteenth century the inflated price of bread due to the Corn Laws caused major political and social divisions, and was central to debates over free trade and protectionism. The Assize of Bread and Ale in the thirteenth century showed the importance of bread in medieval times by setting heavy punishments for short-changing bakers, and bread appeared in Magna Carta a half-century earlier.</p><br><br>
                                <p>In contrast, in various parts of Asia rice is much more prominent as a staple and much of the connotations of bread as a cultural symbol of basic necessities are replaced by rice. To the more conservative elderly generations of Chinese in southern China, the appearance of rice on the table is a fundamental constituent of a meal — in contrast to central and northern China, where wheat products are the main staple (since only the warm sub-tropical climates of southern China is suitable to growing rice).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
                <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            Health Benefits of Whole Grain Flour
                        </a> 
                    </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
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

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            Wheat Products
                        </a> 
                    </h4>
                </div>
                <div id="collapse13" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{asset("assets/images/wheat-product.png")}}">
                        </div>
                        <div class="col-md-4">
                            <div class="roboto">    
                                <p>We eat wheat in many forms. Wheat is the basis for a vast array of foods which are a regular part of our diet. For example, there are breads, biscuits, rolls, crackers, muffins, pancakes, breakfast cereals, pasta, cookies and cakes made from wheat flour. </p>
                                <br>
                                <h5>Flour</h5>
                                <p>The wheat flour can be white enriched or whole wheat … and the food label will tell you which it is. We can choose from a range of wheat flours for our cooking and baking needs:</p>
                                <br>
                                <ul class="roboto accordion-power-margin accordion-wheat-margin">
                                    <li><p>Enriched white all purpose flour</p></li>
                                    <li><p>Cake and pastry flour (also enriched) that produces a lighter texture—great for cakes</p></li>
                                    <li><p>Whole wheat that is a good source of fiber</p></li>
                                    <li><p>Whole grain wheat flour—contains all three parts of the wheat kerne</p></li>
                                    <li><p>Unbleached white flour</p></li>
                                    <li><p>Bread flour that has a higher gluten contentfor bread-making</p></li>
                                    <li><p>Self-rising flour that has added bakingpowder and salt</p></li>
                                </ul>
                                <div class="flour-images">
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-1.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-2.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-3.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-4.png")}}">
                                    </div>
                                </div>
                                <br><br><br><br><br>
                                <h5>Bread</h5>
                                <p>Today’s grocery shelves are stocked with numerous varieties of bread—enriched white, whole wheat, whole grain, multi-grain, ones with special flavoring such as honey, bran bread, fruit breads, sourdough, soda breads, flat breads, crusty breads, steamed breads and more. There is a bread to satisfy everyone’s taste preferences.</p>
                                <div class="flour-images">
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-1.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-2.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-3.png")}}">
                                    </div>
                                    <div class="col-md-3">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/flour-4.png")}}">
                                    </div>
                                </div>

                            </div>        
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text roboto">
                                <h5>Semolina</h5>

                                <div class="inner-text">
                                    <div class="col-md-9 no-padding">
                                        <p>
                                            Semolina is the end product from the milling of durum wheat. High-quality durum semolina is used to make long pasta such as spaghetti. Short pasta can be made from semolina or a combination of semolina and all purpose flour. Couscous is made from steamed durum semolina and is often served with spices, vegetables and meat</p>
                                    </div>
                                    <div class="right-img col-md-3 no-padding">
                                        <img src="{{asset("assets/images/semolina.png")}}">
                                    </div>
                                </div>

                                <h5>Bulgur,Wheat Germ and Wheat Bran</h5>
                                <br>
                                <p>Bulgur is made from cracked parboiled wheat. Durum wheat is used for making bulgur, even though it can me made from other regular types of wheat. Bulgur is used in making the famous vegetable salad "Tabouleh". </p>

                                <div class="semolina-images">        
                                    <div class="col-md-6">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/semolina2.png")}}">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-responsive img-wheat-border" src="{{asset("assets/images/semolina-3.png")}}">
                                    </div>
                                </div>
                                <br><br><br><br><br><br><br>
                                <p>Bulgur is made from cracked parboiled wheat. Durum wheat is used for making bulgur, even though it can me made from other regular types of wheat. Bulgur is used in making the famous vegetable salad "Tabouleh". </p>
                                <p>Wheat bran adds fiber to foods. Many recipes are available today that use wheat bran—everything from muffins to blended drinks. The bran is the outer layer of the wheat kernel that is removed during the milling process when refined white flour is made </p>
                                <br>
                                <h5>Interesting Facts</h5>
                                <p>Gluten is the protein found in wheat that gives bread its distinctive texture and chewiness. Different wheat plants produce different levels of gluten and the higher gluten types are prized for their bread-making power.</p>
                                <p>Wheat products don’t stop with food. Wheat’s gluten and starch content also make it useful in the following products:</p>
                                <ul class="roboto accordion-power-margin accordion-wheat-margin">
                                    <li><p>Animal Feed</p></li>
                                    <li><p>Concrete</p></li>
                                    <li><p>Paper Products</p></li>
                                    <li><p>Adhesives</p></li>
                                    <li><p>Cosmetics</p></li>
                                    <li><p>Plastic Film and Bags</p></li>
                                    <li><p>Soaps</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>


</div>

<div class="clear pad-50"></div>


@stop