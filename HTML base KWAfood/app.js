$(function(){
  $('.gall').click(function(){
      $('.satura').not(this).removeClass('satura');
      $(this).toggleClass('satura');
      

  })
})

$('.mensaje-diario').dailyMessages({
    monday: "Hoy es Lunes dia del Arepa!",
    tuesday: "Hoy es Martes, dia del Taco! ",
    wednesday: "Hoy es Miercoles dia del Ceviche!",
    thursday: "Hoy es Jueves dia del Asado!",
    friday: "Hoy es Viernes pasa un genial fin de semana!",
    saturday: "Hoy es Sabado como lo estas pasado?",
    sunday: "Ho es Domingo y celebramos el dia de la Madre",
    success: function() {
        console.log('Funciona!');
    },
    error: function(message) {
        console.log(message);
        $(this).remove();
    }
});