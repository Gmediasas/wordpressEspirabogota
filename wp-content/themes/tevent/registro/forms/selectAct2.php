<div class="form-group select-wrapper col-sm-6">
    <span class="wpcf7-form-control-wrap ticket-type">
        <select name="responseSelectAct2[]" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control responseSelectAct2"
            aria-required="true" aria-invalid="false" id=""  <?php echo $required?>>
             <option value="">Actividad secundaria*</option>
            <?php
            foreach($responseForm['codigoCIIU'] as $codigoCIIU)
            {
                ?>
                <option value="<?php echo $codigoCIIU['id']?>"><?php echo "(".$codigoCIIU['codigo'].") ".$codigoCIIU['name']?></option>
                <?php
            }
            ?>
        </select>
    </span>
</div>

<input type="hidden" name="idFormularioA2[]" value="<?php echo $customCampos['idFormulario']?>">
