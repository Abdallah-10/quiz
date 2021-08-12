
$(document).ready(function() {
	'use strict';

  var currentStep = $('.current-step').html();
  var totalStep = $('.total-step').html();

  function checkStep() {

    if(currentStep == totalStep) {
      $('.step-count').addClass('final-step');

    } else if(currentStep > totalStep) {
      $('.typeform-header').addClass('no-step');
      $('.step-count').removeClass('final-step');

    } else {
      $('.step-count').removeClass('final-step');
      $('.typeform-header').removeClass('no-step');
    }

  }

  $('.test-step .button').on('click', function(e) {
  	e.preventDefault();

    currentStep++;
    $('.current-step').html(currentStep);
    checkStep();

    $(this).parents('.test-step').next().addClass('active');
    $(this).parents('.test-step').removeClass('active');

  })

  $('.test-step .prev-btn').on('click', function(e) {

    e.preventDefault();

    currentStep--;
    $('.current-step').html(currentStep);
    checkStep();

    $(this).parents('.test-step').prev().addClass('active');
    $(this).parents('.test-step').removeClass('active');

  })

})
$(document).on("keypress", ":input:not(textarea)", function(event) {
  return event.keyCode != 13;
});
var start = document.getElementById('mainForm0');


$('#mainForm0').click(function(){
  if (document.getElementById('prenom').value == "" || document.getElementById('nom').value == "" ||
      document.getElementById('email').value == ""){
      $('.oblig').html("<p class='obligatoire'>Veuillez entrer tous les champs obligatoire!</p>")
      die( "click", start )
  }
  else{
    start.style.pointerEvents = "auto";
    $('.oblig').html("")
  }
});
$('.step-1 .form-group').click(function(){
   $('#mainForm1').removeClass('display')
});
$('.step-2 .form-group').click(function(){
  $('#mainForm2').removeClass('display')
});
$('.step-3 .form-group').click(function(){
  $('#mainForm3').removeClass('display')
});
$('.step-4 .form-group').click(function(){
  $('#mainForm4').removeClass('display')
});$('.step-5 .form-group').click(function(){
  $('#mainForm5').removeClass('display')
});$('.step-6 .form-group').click(function(){
  $('#mainForm6').removeClass('display')
});$('.step-7 .form-group').click(function(){
  $('#mainForm7').removeClass('display')
});$('.step-8 .form-group').click(function(){
  $('#mainForm8').removeClass('display')
});$('.step-9 .form-group').click(function(){
  $('#mainForm9').removeClass('display')
});$('.step-10 .form-group').click(function(){
  $('#mainForm10').removeClass('display')
});$('.step-11 .form-group').click(function(){
  $('#mainForm11').removeClass('display')
});$('.step-12 .form-group').click(function(){
  $('#mainForm12').removeClass('display')
});$('.step-13 .form-group').click(function(){
  $('#mainForm13').removeClass('display')
});$('.step-14 .form-group').click(function(){
  $('#mainForm14').removeClass('display')
});
$('.step-15 .form-group').click(function(){
  $('#mainForm15').removeClass('display')
});
$('.step-16 .form-group').click(function(){
  $('#mainForm16').removeClass('display')
});
$('.step-17 .form-group').click(function(){
  $('#mainForm17').removeClass('display')
});
$('.step-18 .form-group').click(function(){
  $('#mainForm18').removeClass('display')
});
$('.step-19 .form-group').click(function(){
  $('#mainForm19').removeClass('display')
});
$('.step-20 .form-group').click(function(){
  $('#mainForm20').removeClass('display')
});
$('.step-21 .form-group').click(function(){
  $('#mainForm21').removeClass('display')
});
$('.step-22 .form-group').click(function(){
  $('#mainForm22').removeClass('display')
});$('.step-24 .form-group').click(function(){
  $('#mainForm24').removeClass('display')
});
$('.step-25 .form-group').click(function(){
  $('#mainForm25').removeClass('display')
});
$('.step-26 .form-group').click(function(){
  $('#mainForm26').removeClass('display')
});
$('.step-23 .form-group').click(function(){
  $('#mainForm23').removeClass('display')
});

$('#mainForm2').click(function(){
  let q1 = $("input[name='package-q1']:checked").val();
 if (q1=="a" || q1 == "b" || q1=="c" || q1=="i"){
    $('.step-Q1bis').addClass("display");
    $('.step-q2').addClass("active");
    $("input[name='categOne']").attr("value","prevOne");
 }else{
   $('.step-Q1bis').removeClass("display");
   $('.step-Q1ter').removeClass("display active");
   $('.step-Q1bis').addClass("active");
   $('.step-q2').removeClass("active");
   $("input[name='categOne']").attr("value","prevTwo");
 }
});

$('#mainForm3').click(function(){
  let q1 = $("input[name='package-bis']:checked").val();
  if (q1!="c" ){
    $('.step-Q1ter').addClass("display");
    $('.step-q2').addClass("active");
  }else{

  }
});

$('#prev5').click(function(){
  let p1 = $("input[name='categOne']").val();
  if (p1=="prevOne"){
    $('.step-Q1ter').addClass("display");
    $('.step-Q1ter').removeClass("active");
    $('.step-q1').addClass("active");
  }else{
    $('.step-Q1ter').addClass("display");
    $('.step-Q1bis').addClass("active");
  }
});







