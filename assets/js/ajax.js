 $('#MensajeErrorVacio').hide();
 $('#MensajeExito').hide();
 $('#MensajeUsuarioErrado').hide();
 $('#ControlCaracteres').hide();
 $('#ControlEspecial').hide();
 $('#ControlPassword').hide();
 $('#IngresoModulos').click(function(){
    var user=$('#usuario').val();
    var clave=$('#contraseña').val();
    if ((user=='')||(clave=='')) {
      $('#MensajeUsuarioErrado').hide();
       $('#MensajeErrorVacio').toggle('slow');
    }else {
      var datos=$('#ValPerfil').serialize();
      $.ajax({
      url: 'AltaPerfil.php',
      type: 'POST',
      data: datos,
      success: function(respuesta) {
        if(respuesta==3){
           window.location.href="index.php";
        }else if(respuesta==4) {
          $('#MensajeErrorVacio').hide();
          $('#MensajeUsuarioErrado').toggle('slow');
        }
      },
         error: function() {
      }
      })
    }
 })

 $('#Regpelicula').click(function(){
   var pel=$('#tit').val();
   var sinopsis=$('#sinop').val();
   var anioact=$('#anio').val();
  if (pel=='') {
    Swal.fire(
        'Advertencia!',
     'Debe ingresar el titulo de la pelicula!',
        'error'
     )
 }else if (sinopsis=='') {
   Swal.fire(
       'Advertencia!',
       'Debe ingresar la sinopsis de la pelicula!',
       'error'
         )
    }else {
    var datos=$('#IngresoPeliculas').serialize();

     $.ajax({
     type:"POST",
     url:"RegistroPel.php",
     data:datos,
     success:function(r){
     if(r==1){
       Swal.fire(
           'Bien hecho!',
           'Los datos de la pelicula fueron registrados exitosamente!',
           'success'
             )
             $('#tit').val('');
             $('#sinop').val('');
             $('#anio').val('');
    }
  }
});
}
 return false;
 });




     $('#RegUsuario').click(function(){
      var nombre=$('#nom').val();
     	 var usuario=$('#user').val();
     	 var clave=$('#clave').val();

        var longitud=nombre.length;

        var expreg = new RegExp("^(?=.{5,})");
        var especial = new RegExp("^(?=.*[_])");
        var especial2 = new RegExp("^(?=.*[0-9])");
        var especial3 = new RegExp("^(?=.*[A-Z])");
        //var especial4 = new RegExp("^(?=.*[A-Z])");
        var prohibido = new RegExp("^(?=.*[!@#$&*])");
        var password = new RegExp("^(?=.*[A-Z])");
        var password2 = new RegExp("^(?=.*[0-9])");

        if (nombre=='') {
          Swal.fire(
            'Advertencia!',
            'Debe ingresar el nombre!',
            'error'
              )
        }else if (usuario=='') {
          Swal.fire(
            'Advertencia!',
            'Debe ingresar el usuario!',
            'error'
              )
        }else if (clave=='') {
          Swal.fire(
            'Advertencia!',
            'Debe ingresar la contraseña!',
            'error'
              )
        }else {

          if (!expreg.test(nombre)) {
           $('#ControlCaracteres').show();
         }else if ((!especial.test(usuario)) || (!especial2.test(usuario)) || (!especial3.test(usuario))) {
           $('#ControlEspecial').show();
         }else if (prohibido.test(usuario)){
           $('#ControlEspecial').show();
        }else if ((!password.test(clave)) || (!password2.test(clave))) {
           $('#ControlPassword').show();
        }else{
        $('#ControlCaracteres').hide();
        $('#ControlEspecial').hide();
        $('#ControlPassword').hide();
            var datos=$('#IngresoUsuarios').serialize();
           const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
           confirmButton: 'btn btn-success',
           cancelButton: 'btn btn-danger'
         },
         buttonsStyling: false
       })


       swalWithBootstrapButtons.fire({
         title: 'Esta a punto de registrar el usuario:' + ' ' + usuario,
         text: "Esta seguro que desea registrarlo?",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Si, Deseo ingresarlo',
         cancelButtonText: 'No, Cancelar!',
         reverseButtons: true
       }).then((result) => {
         if (result.value) {
         $.ajax({
         type:"POST",
         url:"RegistroUser.php",
         data:datos,
         success:function(r){
         if(r==1){
           Swal.fire(
             'En hora buena!',
             'El usuario quedo registrado correctamente!',
             'success'
               )

              setInterval("location.reload()",1000);

        }else if (r==3){
          Swal.fire(
            'Advertencia!',
            'El usuario ya se encuentra registrado!',
            'error'
              )
     	}else{
     		alert("Fallo en la conexion con el servidor");
        }
        }
      });

    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {

      }
    })

    }

     return false;
 }

     });

     $(function() {
     			load(1);
     		});
     		function load(page){
     			var query=$("#q").val();
     			var per_page=10;
     			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
     			$("#loader").fadeIn('slow');
     			$.ajax({
     				url:'ConsultAgendaRutas.php',
     				data: parametros,
     				 beforeSend: function(objeto){
     				$("#loader").html("Cargando...");
     			  },
     				success:function(data){
     					$(".outer_div").html(data).fadeIn('slow');
     					$("#loader").html("");
     				}
     			})
     		}



     $('#deleteUsuario').on('show.bs.modal', function (event) {
       var button = $(event.relatedTarget) // Button that triggered the modal
       var idelimuser = button.data('idelimuser')
       $('#idelimuser').val(idelimuser)
     })

       $('#editProductModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget) // Button that triggered the modal
         var cod = button.data('cod')
         $('#cod').val(cod)

         var nomb = button.data('nomb')
         $('#nomb').val(nomb)
         var users = button.data('users')
         $('#users').val(users)
         var clav = button.data('clav')
         $('#clav').val(clav)


       })

       $('#deleteRegPeli').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget) // Button that triggered the modal
         var ideliminpeli = button.data('ideliminpeli')
         $('#ideliminpeli').val(ideliminpeli)
       })

         $('#editPeli').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget) // Button that triggered the modal
           var idpeli = button.data('idpeli')
           $('#idpeli').val(idpeli)
           var titpeli = button.data('titpeli')
           $('#titpeli').val(titpeli)
           var sinopeli = button.data('sinopeli')
           $('#sinopeli').val(sinopeli)
           var anactual = button.data('anactual')
           $('#anactual').val(anactual)


         })









         $( "#edit_pelicula" ).submit(function( event ) {

              var parametros = $(this).serialize();
              const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
              swalWithBootstrapButtons.fire({
                text: "Esta seguro de que desea modificar el registro?!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Confirmar!',
                cancelButtonText: 'No, Cancelar!',
                reverseButtons: true
              }).then((result) => {
                if (result.value) {
              $.ajax({
                  type: "POST",
                  url: "EditarPeliculas.php",
                  data: parametros,
                   beforeSend: function(objeto){
                    $("#resultados").html("Enviando...");
                    },
                  success: function(datos){
                     Swal.fire(
                       'Bien hecho!',
                       'El registro se modifico con exito!',
                       'success'
                         )
                        setInterval("location.reload()",1000);
                     //$('#editProductModal').modal('hide');


                  }

              });

            }else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {

              }
            })

              event.preventDefault();
            });


             $( "#delete_pelicula" ).submit(function( event ) {
              var parametros = $(this).serialize();
              $.ajax({
                  type: "POST",
                  url: "EliminarPelicula.php",
                  data: parametros,
                   beforeSend: function(objeto){
                    $("#resultados").html("Enviando...");
                    },
                  success: function(datos){

                     Swal.fire(
                       'Bien hecho!',
                       'El registro fue eliminado con exito!',
                       'success'
                         )
                         setInterval("location.reload()",1000);
                  }
              });
              event.preventDefault();
            });


       $( "#edit_product" ).submit(function( event ) {

       		  var parametros = $(this).serialize();

                   const swalWithBootstrapButtons = Swal.mixin({
                 customClass: {
                   confirmButton: 'btn btn-success',
                   cancelButton: 'btn btn-danger'
                 },
                 buttonsStyling: false
               })
                   swalWithBootstrapButtons.fire({
                     text: "Esta seguro de que desea modificar el registro?!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonText: 'Si, Confirmar!',
                     cancelButtonText: 'No, Cancelar!',
                     reverseButtons: true
                   }).then((result) => {
                     if (result.value) {

                       $.ajax({
                  					type: "POST",
                  					url: "editar_producto1.php",
                  					data: parametros,
                  					 beforeSend: function(objeto){
                  						$("#resultados").html("Enviando...");
                  					  },
                  					success: function(datos){
                  					$("#resultados").html(datos);
                  					load(1);

                              $('#editProductModal').modal('hide');
                              Swal.fire(
                                'En hora buena!',
                                'El registro fue modificado con exito!',
                                'success'
                                  )
                                 setInterval("location.reload()",1000);

                     }

                  });

                    }else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                      ) {

                      }
                    })



       		  event.preventDefault();
       		});


           $( "#delete_user" ).submit(function( event ) {
       		  var parametros = $(this).serialize();
       			$.ajax({
       					type: "POST",
       					url: "Eliminar_usuario.php",
       					data: parametros,
       					 beforeSend: function(objeto){
       						$("#resultados").html("Enviando...");
       					  },
       					success: function(datos){
                   Swal.fire(
                     'Bien hecho!',
                     'El registro fue eliminado con exito!',
                     'success'
                       )
                       setInterval("location.reload()",1000);

       				  }
       			});
       		  event.preventDefault();
       		});

           toastr.options = {
           "closeButton": true,
           "debug": false,
           "newestOnTop": false,
           "progressBar": false,
           "positionClass": "toast-top-full-width",
           "preventDuplicates": false,
           "onclick": null,
           "showDuration": "300",
           "hideDuration": "1000",
           "timeOut": "5000",
           "extendedTimeOut": "1000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut"
           }
