<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\BaseUrl;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Pest and Diseases Search Engine';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>APADIS</h1>


            <!-- 
            IMAGE SEARCH FORM MODULE
            -->


            <div class = 'image-module row'>

                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'image-form'] ]);?>

                    <!-- <img id="preview" src="#" /> -->

                    <div class='input-container row'>

                        <div class='imagesearch-upper'>

                            <div class='button-close'>
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </div>

                            <p class='imagesearch-head' >Search by Image</p>
                            <p class='imagesearch-desc'>Search APADIS with an image instead of text.</p>
                        
                        </div>
                        <?= $form->field($imageSearchModel, 'file', array('labelOptions' => array('label' => false)))->fileInput(); ?>

                    </div>

                    <input type="hidden" id="type-image" name="type" value=""/>
                    <?= Html::button('Pest', ['class' => 'pest-btn-image btn btn-primary disabled','disabled'=>'true']) ?>
                    <?= Html::button('Disease', ['class' => 'disease-btn-image btn btn-primary disabled', 'disabled'=>'true']) ?>

                    <!-- <?= $form->field($imageSearchModel,'type')->radioList(["pest"=>"Pest","disease"=>"Disease"]); ?> -->

                    <?php ActiveForm::end(); ?>

            </div>



            <!-- 
            TEXT SEARCH FORM MODULE
            -->

            <div class='text-module row'>

                <?php $form = ActiveForm::begin(['options' => ['id' => 'text-form'] ]); ?>

                    <div class='input-group'>
                        <?= $form->field($textSearchModel, 'search',array(
                            'labelOptions' => array('label' => false),
                            'options' => array('class' => 'text-search')
                        )) ;

                        ?>
                    
                        <span class='input-group-btn'>
                            <button type="button" class="image-toggle btn btn-default" aria-label="Left Align">
                              <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>

                    <input type="hidden" id="type-text" name="type" value=""/>
                    <?= Html::button('Pest', ['class' => 'pest-btn-text btn btn-primary']) ?>
                    <?= Html::button('Disease', ['class' => 'disease-btn-text btn btn-primary']) ?>

                <?php ActiveForm::end(); ?>
            
            </div>

    </div>

    <div class="body-content">


    </div>
</div>
