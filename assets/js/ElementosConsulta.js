$('#Modulo1').hide();
$('#CampoVacio').hide();
$('#Etiqueta1').click(function(){
  $('#Modulo1').show();
  $('#ImagenPresentacion').hide();
  $('#jhonrod').hide();
  $('#CampoVacio').hide();
});




$('#CampoVacio').hide();
$('#ContendioForm').hide();
function traeNombre() {
  var Cedula=$('#cedula1').val();
    if (Cedula=='') {
        $('#CampoVacio').toggle('slow');
    }else{
       $('#CampoVacio').hide();
       $.ajax({
       url: 'Form.php',
       type: 'POST',
       success: function(respuesta) {
          $('#ContendioForm').show();
          $("#ContendioForm").load("Form.php",{Cedula});
          $('#CampoVacio').hide();
       },

       })
    }
 };

 
