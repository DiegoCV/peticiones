$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../controllers/CargoList.php'
  })
  .done(function(listas_rep){
    $('#Cargo_id').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})