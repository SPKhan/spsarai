<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\BaseUrl;
use yii\web\View;
/* @var $this yii\web\View */
$this->title = 'Pest and Diseases Image Search Results';
$this->registerJs('
	$("document").ready(function() {
	$.ajax({
		type:"POST",
		url:"http://128.199.184.238:5000/imageSearch",
		dataType:"json",
		data: 
			{
				filename:"../web/'.$model->filepath.'",
				type: "'.$model->type.'"
			},
		success: function(result){
			var result_container = $("#result-container");
			result_container.html(result.html);
			$.jqplot("histogram",  [result.histogram],
				{ 
					axes:{xaxis:{min:0, max:256},yaxis:{min:0}}
				}
			);
		},
		error: function(error){
			var result_container = $("#result-container");
			result_container.html(error);
		}
	});
});',View::POS_END, 'my-options');
?>
<div class="site-index">

    
    <div id="result-container" class="body-content">
    	
    </div>
</div>
