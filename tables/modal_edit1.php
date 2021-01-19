<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

				<form name="edit_product" id="edit_product">
          <div class="modal-header">

          <div class="col-lg-12 text-center">
             <img src="../../img/cocjant.jpg" alt="" class="img-fluid img-responsive">
          </div>

          </div>
					<div class="modal-body">
              <div class="form-row">
						<div class="form-group col-md-6">
              <input type="text" name="edit_act" id="edit_act" >

              <?php

                $conexion=mysqli_connect('localhost','root','Jhon**34','cocjan_requerimientos');

                $id=$_POST['edit_act'];
                echo $id;
                $sql2="select * from agenda where Id='$id'";
                //$sql2="select * from agenda";
                $resultado2=mysqli_query($conexion,$sql2);
                $Registros2=mysqli_fetch_array($resultado2);

               ?>
							<label><small>Bodega</small></label>
              <select class="form-control input-sm" style="font-size:11px;">
                <option selected='selected' ><?php echo $Registros2['Bodega']; ?></option>
                <?php
                    $sql1="select * from ecas";
                    $resultado=mysqli_query($conexion,$sql1);
                    while ($Registros=mysqli_fetch_array($resultado)) {
                         echo '<option value="'.$Registros['NombreEca'].'">'.$Registros['NombreEca'].'</option>';
                       }
                    ?>
              </select>




						</div>
						<div class="form-group col-md-6">
							<label><small>Direccion</small></label>
							<input type="text" name="edit_name" id="edit_name" class="form-control input-sm" style="font-size:11px;" placeholder="este es uno">
						</div>
						<div class="form-group col-md-6">
							<label><small>Zona</small></label>
							<input type="text" name="edit_category" id="edit_category" class="form-control input-sm" style="font-size:11px;">
						</div>
						<div class="form-group col-md-6">
              <label><small>Persona a cargo</small></label>
              <select class="form-control input-sm" name="edit_stock" id="edit_stock" style="font-size:11px;">
                <option selected='selected' ><?php echo $Registros2['Responsable']; ?></option>
                <?php
                    $sql1="select * from agenda";
                    $resultado=mysqli_query($conexion,$sql1);
                    while ($Registros=mysqli_fetch_array($resultado)) {
                         echo '<option value="'.$Registros['Responsable'].'">'.$Registros['Responsable'].'</option>';
                       }
                    ?>
              </select>
						</div>
            <div class="form-group col-md-6">
							<label><small>Confirmado</small></label>
							<input type="text" name="edit_price"  id="edit_price" class="form-control input-sm" style="font-size:11px;">

						</div>
						<div class="form-group col-md-6">
							<label><small>Fecha</small></label>
							<input type="text" name="edit_fech" id="edit_fech" class="form-control input-sm" style="font-size:11px;">
						</div>
            <div class="form-group col-md-6">
							<label><small>Hora</small></label>
							<input type="text" name="edit_hor"  id="edit_hor" class="form-control input-sm" style="font-size:11px;">

						</div>
						<div class="form-group col-md-6">
							<label><small>Descripcion</small></label>
							<input type="text" name="edit_desc" id="edit_desc" class="form-control input-sm" style="font-size:11px;">
						</div>

              <div class="form-group col-md-12">
                <label for="nove"><small>Novedad</small></label>
                <textarea type="text" class="form-control input-sm" name="edit_nov" id="edit_nov" style="font-size:11px;"></textarea>
              </div>


					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Actualizar">
					</div>
				</form>
      </div>
      </div>
			</div>
		</div>
	</div>


  <script type="text/javascript">

  $("#edit_code").change(function () {
      //$('#nomenclatura2').show();
      id_estado = $(this).val();
      $.post("PosDireccion.php", { id_estado: id_estado }, function(data){

        var direccion = data.split("_")[0];
        var comuna = data.split("_")[1];
        $("#edit_name").val(direccion);
        $("#edit_category").val(comuna);


        //$("#hola2").html2(data);
      });

  })

  </script>
