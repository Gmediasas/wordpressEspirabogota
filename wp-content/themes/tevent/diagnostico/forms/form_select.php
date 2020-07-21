<?php
    $array = json_decode($customCampos['valores'] ,true);
    $selectId = 0;
    $selectRespuesta = '';
    for($i=0;$i< count($employee['respuesta']);$i++){
         if($employee['respuesta'][$i]['campo_form_custom_id'] == $customCampos['idFormulario']) {
             $selectId = $employee['respuesta'][$i]['response'];
             $selectRespuesta = $employee['respuesta'][$i]['id'];
         }
    }
?>

<div class="form-group col-sm-6">
    <label><?php echo $customCampos['nombreCampo'] ?></label>
    <select    aria-required="true" aria-invalid="false" readonly disabled>
        <option value=""><?php echo $customCampos['placeholder'] ?></option>
       <?php foreach($array as $dbA){?>
           <?php if($selectId == $dbA['nombre']){?>
                <option value="<?php echo $dbA['nombre'] ?>" selected><?php echo $dbA['nombre'] ?></option>
            <?php }else{?>
                <option value="<?php echo $dbA['nombre'] ?>"><?php echo $dbA['nombre'] ?></option>
            <?php }?>
       <?php }?>
    </select>
</div>
 
