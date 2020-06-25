<?php
  $arrayBD = json_decode($customCampos['valores'] ,true);
?> 

<div class="form-group col-md-6 col-xs-12">
    <label for="exampleInputEmail1"><?php echo$customCampos['nombreCampo']?></label>
    <div class="input-group col-xs-4">
        <span class="input-group-addon"></span>
        <select class="form-control borderinput kt-selectpicker" style="height:40px;" multiple data-actions-box="true"
                data-live-search="true" name="response_Mul[]" id="conferencista_id" <?php echo$required?>>
            <?php
                foreach ($arrayBD as $db)
                {
            ?>   
                <option value="<?php echo$db['nombre']?>"><?php echo$db['nombre']?></option>
            <?php
                }
            ?> 
        </select>

    </div>
</div>
<input type="hidden" name="idFormularioM[]" value="<?php echo$customCampos['idFormulario']?>">

