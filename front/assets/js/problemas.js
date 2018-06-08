$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../dao/listar_Problemas.php'
  })
  .done(function(listas_rep){
    $('#lista_reproduccion').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })

})