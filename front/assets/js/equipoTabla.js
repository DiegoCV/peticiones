$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controllers/EquipoList.php'
  })
  .done(function(listas_rep){
    $('#equipoTabla').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})