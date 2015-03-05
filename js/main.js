


$('#imagesearchform-file').on('change',function(){

  $('.pest-btn-image').removeClass('disabled');
  $('.disease-btn-image').removeClass('disabled');

  $('.pest-btn-image').prop('disabled', false);
  $('.disease-btn-image').prop('disabled', false);

});

$('.pest-btn-image').on('click',function(){

  $("#type-image").val = "Pest";
  $("#image-form").submit();

});

$('.disease-btn-image').on('click',function(){

  $("#type-image").val = "Disease";
  $("#image-form").submit();

});

$('.pest-btn-text').on('click',function(){

  $("#type-text").val = "Pest";
  $("#text-form").submit();

});

$('.disease-btn-text').on('click',function(){

  $("#type-text").val = "Disease";
  $("#text-form").submit();

});

$('.image-toggle').on('click',function(){

  $('.text-module').css('display','none');
  $('.image-module').css('display','block');

});

$('.button-close').on('click',function(){

  $('.image-module').css('display','none');
  $('.text-module').css('display','block');

});

$('.th-btn').on('click', function(){

  $('.list-btn').removeClass('btn-primary');
  $('.th-btn').removeClass('btn-default');

  $('.list-btn').addClass('btn-default');
  $('.th-btn').addClass('btn-primary');

  $('.thumbnail-format').css('display','block');
  $('.list-format').css('display','none');

});

$('.list-btn').on('click', function(){

  $('.th-btn').removeClass('btn-primary');
  $('.list-btn').removeClass('btn-default');

  $('.th-btn').addClass('btn-default');
  $('.list-btn').addClass('btn-primary');

  $('.list-format').css('display','block');
  $('.thumbnail-format').css('display','none');

});

$('.entry').on('click', function(){

  var className = $(this).attr('class');
  var classNames = className.split(" ");
  for (i = 0; i < classNames.length; i++) {
    if(/entry-\d/.test(classNames[i])){
      var num = /\d/.exec(classNames[i]);

      $('.caption-' + num).css('display','block');

    }
  }

});

$('.caption-close-btn').on('click',function(){

  $(this).parent().css('display','none');

});