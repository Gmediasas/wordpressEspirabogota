
<div class="form-group col-md-6 col-xs-12">
    <label for="exampleInputEmail1"><?php echo $customCampos['nombreCampo']?></label>
    <div class="input-group col-xs-4">
        <span class="input-group-addon"></span>
        <select class="form-control borderinput" id="tipodocumento" name="responseDocum[]" <?php echo $required?>>
            <option value="">Seleccione un tipo de documento</option>
            <?php foreach($idType['tipoIdentificacion'] as $typeId){?>
                <option value="<?php echo $typeId['abreviatura']?>"> <?php echo $typeId['tipo']?></option>
            <?php } ?>

        </select>
    </div>
</div>
<input type="hidden" name="idFormularioDocu[]" value="<?php echo $customCampos['idFormulario']?>">
