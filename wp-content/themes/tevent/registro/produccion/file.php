<?php
if ($customCampos['orden'] == 15) {?>
    <div class="form-group col-sm-12">
        <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;">
            <?php echo $customCampos['placeholder']?>
        </label>
        <a style="color: #3c3fe2" href="http://entornobogota.com/wp-content/uploads/2020/07/ANEXO-1.-Formato-de-autorización-para-la-revisión-de-antecedentes..docx">
            Descarga el formato aquí
        </a>
        <span class="wpcf7-form-control-wrap your-name">
            <progress id="progressBar_<?php echo$customCampos['idFormulario']?>" value="0" max="100" style="width:100%;margin-bottom: -10px;" aria-placeholder="hola"></progress>
            <input onchange="uploadFile(<?php echo$customCampos['idFormulario']?>);" type="file"  id="archivo_<?php echo$customCampos['idFormulario']?>" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpg,.doc,.docx,.xlsx,.pdf,.zip"
                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white" aria-required="true" aria-invalid="false" <?php echo $required?> >
        </span>
    </div>
    <input type="hidden" name="idFormularioF[]" value="<?php echo$customCampos['idFormulario']?>">
     

<?php   } elseif ($customCampos['orden'] == 16) {?>
    <div class="form-group col-sm-12">
        <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;"><?php echo $customCampos['placeholder']?></label>
        <a style="color: #3c3fe2" href="http://entornobogota.com/wp-content/uploads/2020/07/ANEXO-2.-Carta-de-compromiso-empresa-beneficiaria.docx">
            Descarga el formato aquí
        </a>
        <span class="wpcf7-form-control-wrap your-name">
            <progress id="progressBar_<?php echo$customCampos['idFormulario']?>" value="0" max="100" style="width:100%;margin-bottom: -10px;" aria-placeholder="hola"></progress>
            <input onchange="uploadFile(<?php echo$customCampos['idFormulario']?>);" type="file"  id="archivo_<?php echo$customCampos['idFormulario']?>" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpg,.doc,.docx,.xlsx,.pdf,.zip"
                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white" aria-required="true" aria-invalid="false" <?php echo $required?>>
            </span>
    </div>

    <input type="hidden" name="idFormularioF[]" value="<?php echo$customCampos['idFormulario']?>">
    
<?php   } else { ?>

    <div class="form-group col-sm-12">
    
        <label for="archivo" style="font-size:14px;font-weight:400;min-height:44px;"><?php echo $customCampos['placeholder']?></label>
        <span class="wpcf7-form-control-wrap your-name">
            <progress id="progressBar_<?php echo$customCampos['idFormulario']?>" value="0" max="100" style="width:100%;margin-bottom: -10px;" aria-placeholder="hola"></progress>
            <input onchange="uploadFile(<?php echo$customCampos['idFormulario']?>);" type="file"  id="archivo_<?php echo$customCampos['idFormulario']?>" size="40" placeholder="Nombre de la persona de contacto" accept="image/png, image/jpg,.doc,.docx,.xlsx,.pdf,.zip"
                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control form-control--white" aria-required="true" aria-invalid="false" <?php echo $required?>>
            </span>
    </div>
    <input type="hidden" name="idFormularioF[]" value="<?php echo$customCampos['idFormulario']?>">
   
<?php   }
?>