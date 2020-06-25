 
<div class="form-group select-wrapper col-sm-6">
    <span class="wpcf7-form-control-wrap ticket-type">
        <select name="responseSelectLoc[]" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
            aria-required="true" aria-invalid="false" id="typeDocument"  <?php echo $required?>>
            <option value=""><?php echo $customCampos['placeholder']?></option>
            <?php    
            foreach($responseForm['localidades'] as $localidades)
                {         
            ?> 
                <option value="<?php echo $localidades['id']?>"><?php echo $localidades['name']?></option>
            <?php 
                }
            ?> 
        </select>
    </span>
</div>

<input type="hidden" name="idFormularioL[]" value="<?php echo $customCampos['idFormulario']?>">
