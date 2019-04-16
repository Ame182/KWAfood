jQuery(document).ready(function() {
    jQuery(".dia.l").hover( function(e) {
		e.preventDefault()
    	jQuery('.hide.lun').toggle('hide')  
    });
  });


    jQuery(".dia").hover( function(e) {
		e.preventDefault()
    	jQuery(this).find('.hide').toggle('hide')

    });

    


//GALERIA

jQuery(document).ready(function() {
jQuery(function(){
  jQuery('.gall').click(function(){
      jQuery('.satura').not(this).removeClass('satura');
      jQuery(this).toggleClass('satura');
      

		});
	});
});



//NOTICIAS

jQuery(function () {
  jQuery(".leerMas").bind("click", function () { });
});

jQuery(function () {
  jQuery(".leerMas").bind("click", function () {
    jQuery(this).text(jQuery(this).text() == "Leer más" ? "Ocultar" : "Leer más");
    jQuery(this).prev().slideToggle();
  });
});



//COMENTARIOS
jQuery('#boton').on("click", function() {
  var url = 'https://jsonplaceholder.typicode.com';

  var id = parseInt(Math.random() * 100);

  jQuery.ajax({
    url: url + '/posts/' + id,
    method: 'GET'
  }).then(function(data) {
      jQuery('#tabla').prepend('<tr> <td>' + data.title + '</td><td>' + '<p>' + data.body + '</p>' + '</td></tr>')
    });
});

//menu
  jQuery(document).ready(function() {
  jQuery('#menu-mi_menu li').addClass('nav-item').children(this).addClass('nav-link js_scroll-trigger');

  jQuery('.nav-item:last-of-type a').addClass('btn btn-secondary').removeClass('js-scroll-trigger');
  });


//animate
jQuery('.title').hover(function () {
  jQuery(this).addClass('bounce');
});


//AOS
AOS.init();


//galeria
// Bind as an event handler
jQuery(document).on('click', '[data-lightbox]', lity);

//scroll
// Select all links with hashes
