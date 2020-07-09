 
<div class="form-group col-sm-6">
    <span class="wpcf7-form-control-wrap your-name">
    <input type="<?php echo $customCampos['valores']?>" name="responseInput[]" id="cargo" size="40" placeholder="<?php echo $customCampos['placeholder']?>"  <?php echo $required?>
        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white"
        aria-required="true" aria-invalid="false">
    <input type="hidden" name="idFormularioI[]" value="<?php echo$customCampos['idFormulario']?>">
    <input type="hidden" name="unique[]" value="<?php echo$customCampos['unico']?>">
    </span>
</div>