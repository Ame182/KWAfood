$(document).ready(function() {
    $(".dia.l").hover( function(e) {
		e.preventDefault()
    	$('.hide.lun').toggle('hide')  
    });
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

$(document).ready(function() {
$(function(){
  $('.gall').click(function(){
      $('.satura').not(this).removeClass('satura');
      $(this).toggleClass('satura');
      

		});
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



//COMENTARIOS
$('#boton').on("click", function() {
  var url = 'https://jsonplaceholder.typicode.com';

  var id = parseInt(Math.random() * 100);

  $.ajax({
    url: url + '/posts/' + id,
    method: 'GET'
  }).then(function(data) {
      $('#tabla').prepend('<tr> <td>' + data.title + '</td><td>' + '<p>' + data.body + '</p>' + '</td></tr>')
    });
});

//menu
  $(document).ready(function() {
  $('#menu-mi_menu li').addClass('nav-item').children(this).addClass('nav-link js_scroll-trigger');

  $('.nav-item:last-of-type a').addClass('btn btn-secondary').removeClass('js-scroll-trigger');
  });


//animate
$('.title').hover(function () {
  $(this).addClass('bounce');
});


//AOS
AOS.init();


