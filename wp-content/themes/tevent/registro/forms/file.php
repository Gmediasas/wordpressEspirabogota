<div class="form-group col-sm-12">
    <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;"><?php echo $customCampos['placeholder']?></label>
    <span class="wpcf7-form-control-wrap your-name">
        <input type="file" name="responseFile[]" id="archivo_<?php echo$customCampos['idFormulario']?>" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpg,.doc,.docx,.xlsx,.pdf,.zip"
            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white" aria-required="true" aria-invalid="false" <?php echo $required?>>
    </span>
</div>
<input type="hidden" name="idFormularioF[]" value="<?php echo$customCampos['idFormulario']?>">

