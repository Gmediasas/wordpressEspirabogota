<div class="row">
    <div class="col-md-6 mb-4">
        <label class="d-block px-3"><?php echo strip_tags($cuestionariof3['nombreCampo']) ?></label>
        <input type="text" placeholder="<?php echo strip_tags($cuestionariof3['placeholder'])?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> value="<?php echo  $cuestionariof3['response'] ?>">
    </div>        
</div>