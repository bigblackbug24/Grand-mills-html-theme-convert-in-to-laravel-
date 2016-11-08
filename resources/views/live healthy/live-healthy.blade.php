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
<!-- start container section -->
@section('container')

<div class="clear pad-15"></div>

<div class="container">
	<h1>Healthy Eating Guide</h1>
    	
<div class="faq">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                    <h4 class="panel-title"> 

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true"> 
                            <span><i class="fa fa-plus" ></i></span>
                            5 Causes of "Brain Fog"
                        </a> 
                    </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                        <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div><br><br><br>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
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
                        A Cup for Tea for What Ails You
                    </a> 
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        Aromatherapy Massage for Menstrual Pain
                    </a> 
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
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
                        Choosing foods for your Breakfast
                    </a> 
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        A Slightly Alkaline Body Is Beneficial For Good Health
                    </a> 
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="panel panel-default animated out" data-delay="0" data-animation="fadeInUp">
            <div class="panel-heading">
                <h4 class="panel-title"> 

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true"> 
                        <span><i class="fa fa-plus" ></i></span>
                        How Bad Is Your Breath?
                    </a> 
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="col-md-4">
                            <img class="img-responsive" src="{{asset('assets/images/brain-fog.png')}}">
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>By Brock Edelson, Natural Solutions magazine:</h5>
                                <p>Your mind feels like San Francisco in the springtime: The fog is rolling in and it might not leave again until fall, unless you do something about it. Here are five common causes of “brain fog” and what you can do to bring back the sunshine.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Stress</h5>
                                <p>Chronic stress over stimulates the brain. Turning down the symbolic volume helps repair damage done to brain and nerve cells. Adaptogens (such as ashwaganda, panax ginseng, and rhodiola) can help your body cope with stress. L-theanine has been shown to reduce anxiety and increase sleep quality.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Fibromyalgia and chronic fatigue syndrome:</h5>
                                <p>Both of these are relatively recently recognized disorders that can cause impaired mental function. Magnesium supplementation has been shown to alleviate symptoms of both disorders. Light to moderate exercise can boost the immune system and improve mood and sleep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="accordion-text">
                                <h5>Fatigue:</h5>
                                <p>As obvious as it sounds, fatigue affects the gray matter. Lack of sleep can cause symptoms mimicking mental illness. We need from seven to nine hours of sleep per night—and quality counts. Don’t check email or do work right before going to bed. Avoid drinking caffeinated drinks late in the day. Practice calming techniques, such as meditation or deep breathing.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Nutrient deficiencies: </h5>
                                <p>Your brain is cranking through nutrients at a furious pace. Make sure a steady supply is at hand. Vitamins C and E have been shown to delay the onset of Alzheimer’s disease. The B vitamins can help improve memory. Zinc, Co-Q10, and essential fatty acids also help maintain healthy brain function.</p>
                            </div>
                            <div class="accordion-text">
                                <h5>Depression:</h5>
                                <p>Almost 10 percent of Americans suffer from depression, which can cause difficulty concentrating, remembering, and making decisions. Neurotransmitter-boosting supplements, such as SAMe and 5-HTP, help lift levels of dopamine and serotonin.</p>
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