<?php
  $array = json_decode($customCampos['valores'] ,true);
?> 
 
<div class="form-group select-wrapper col-sm-6">
    <span class="wpcf7-form-control-wrap ticket-type">
        <select name="responseSelect[]" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
            aria-required="true" aria-invalid="false" id="typeDocument"  <?php echo $required?>>
            <option value=""><?php echo $customCampos['placeholder']?></option>
            <?php    
            foreach($array as $dbA)
                {         
            ?> 
                <option value="<?php echo $dbA['nombre']?>"><?php echo $dbA['nombre']?></option>
            <?php 
                }
            ?> 
        </select>
    </span>
</div>

<input type="hidden" name="idFormularioS[]" value="<?php echo $customCampos['idFormulario']?>">
