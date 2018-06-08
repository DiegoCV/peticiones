$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controllers/TipoEquipoList.php'
  })
  .done(function(listas_rep){
    $('#tipo_equipo').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})