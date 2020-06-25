
<div class="form-group col-md-6 col-xs-12">
    <label for="exampleInputEmail1"><?php echo$customCampos['nombreCampo']?></label>
    <div class="input-group col-xs-4">
        <span class="input-group-addon"></span>
        <select class="form-control borderinput" id="tipodocumento" name="responsePais[]" <?php echo$required?>>
            <option value="">Seleccione un país</option>
            <?php foreach($country['response'] as $country) { ?>
                <option value="<?php echo$country['id']?>"><?php echo$country['pais']?></option>
            <?php } ?>

        </select>
    </div>
</div>
<input type="hidden" name="idFormularioP[]" value="<?php echo$customCampos['idFormulario']?>">
