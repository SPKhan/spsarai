<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\BaseUrl;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'Pest and Diseases Search Engine';

?>
<div class="site-index">

	<div class='text-module row'>
        <h2>APADIS</h2>

        <?php $form = ActiveForm::begin(['options' => ['id' => 'text-form'] ]); ?>

                <?= $form->field($textSearchModel, 'search',array(
                    'labelOptions' => array('label' => false),
                    'options' => array('class' => 'text-search')
                )) ;

                ?>
                  
        <?php ActiveForm::end(); ?>
            
    </div>

    <div class="body-content">
        <div class="btn-group" role="group" aria-label="...">
            <span class='input-group-btn'>
                <button type="button" class="th-btn btn btn-primary" aria-label="Left Align">
                    <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                </button>
            </span>
            <span class='input-group-btn'>
                <button type="button" class="list-btn btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </button>
            </span>
        </div>
    	

        <div class="thumbnail-format row">


          <div class="col-xs-6 col-md-4">
            <div class="thumbnail entry entry-1">
              <img src="uploads/1672.png" />
            </div>
            <div class="caption caption-1">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div href="#" class="thumbnail entry entry-2">
              <img src="uploads/6521.png" />
            </div>
            <div class="caption caption-2">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div href="#" class="thumbnail entry entry-3">
              <img src="uploads/8572.jpg" />
            </div>
            <div class="caption caption-3">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>

          <div class="col-xs-6 col-md-4">
            <div href="#" class="thumbnail entry entry-4">
              <img src="uploads/1672.png" />
            </div>
            <div class="caption caption-4">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div href="#" class="thumbnail entry entry-5">
              <img src="uploads/1672.png" />
            </div>
            <div class="caption caption-5">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div href="#" class="thumbnail entry entry-6">
              <img src="uploads/1672.png" />
            </div>
            <div class="caption caption-6">
                <h3>Lorem Ipsum</h3>
                <p>Scientific Name: Lorem Ipsum</p>
                <p>Filipino Name: Lorem Ipsum</p>
                <button type="button" class="btn btn-primary">
                    Read More
                </button>
                <button type="button" class="btn btn-default caption-close-btn">
                    Close
                </button>
            </div>
          </div>



        </div>


        <div class='list-format'>
            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>

            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>

            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>

            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>

            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>

            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                  <img class='media-object' src="uploads/1672.png" />
                </a>
              </div>
              <div class="media-body">
                <a><h4 class="media-heading">Lorem Ipsum</h4></a>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan lectus quis condimentum molestie. Aliquam vel orci ac orci tristique fringilla. Aliquam nec venenatis arcu, nec vulputate arcu. Nulla facilisi. Morbi eget quam vitae augue ornare porttitor. Curabitur pretium nibh sed mi ornare faucibus. Nunc eros ipsum, laoreet sed dui et, rhoncus dictum erat. Quisque blandit leo vel ligula suscipit aliquet in eu nibh. In sit amet sapien odio. Duis a elit id velit rutrum suscipit et et turpis. Mauris sagittis malesuada ex, ac aliquet dolor porttitor et. Vestibulum sit amet eros maximus, posuere lacus nec, posuere lectus. Mauris nec nunc eu lacus efficitur suscipit vitae non nulla. Cras a diam felis. 
              </div>
            </div>

            <hr/>
            
        </div>
    	
    </div>
</div>
