<div class="form-group select-wrapper col-sm-6">
    <span class="wpcf7-form-control-wrap ticket-type">
        <select name="responseSelectAct[]" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control responseSelectAct"
            aria-required="true" aria-invalid="false" id="responseSelectAct"  <?php echo $required?>>
            <option value=""><?php echo $customCampos['placeholder']?></option>           
        </select>
    </span>
</div>

<input type="hidden" name="idFormularioA[]" value="<?php echo $customCampos['idFormulario']?>">
