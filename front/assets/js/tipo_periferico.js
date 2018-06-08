$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controllers/Tipo_perifericoList.php'
  })
  .done(function(listas_rep){
    $('#tipo_periferico').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})