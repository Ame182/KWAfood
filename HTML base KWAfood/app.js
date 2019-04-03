$(document).ready(function() {
    $(".dia.l").hover( function(e) {
		e.preventDefault()
    	$('.hide.lun').toggle('hide')  
    });


    $(".dia.m").hover( function(e) {
		e.preventDefault()
    	$('.hide.mar').toggle('hide')

    });

    $(".dia.mi").hover( function(e) {
		e.preventDefault()
    	$('.hide.mie').toggle('hide')

    });

    $(".dia.ju").hover( function(e) {
		e.preventDefault()
    	$('.hide.jue').toggle('hide')

    });

    $(".dia.vi").hover( function(e) {
		e.preventDefault()
    	$('.hide.vie').toggle('hide')

    });

    $(".dia.sado").hover( function(e) {
		e.preventDefault()
    	$('.hide.sa').toggle('hide')

    });
    


//GALERIA

$(function(){
  $('.gall').click(function(){
      $('.satura').not(this).removeClass('satura');
      $(this).toggleClass('satura');
      

  });
});



//NOTICIAS

$(function () {
  $(".leerMas").bind("click", function () { });
});

$(function () {
  $(".leerMas").bind("click", function () {
    $(this).text($(this).text() == "Leer más" ? "Ocultar" : "Leer más");
    $(this).prev().slideToggle();
  });
});


});

