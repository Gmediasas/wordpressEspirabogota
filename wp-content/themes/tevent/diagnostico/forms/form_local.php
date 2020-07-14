<?php
$responseLocal = '';
for($i=0;$i< count($employee['respuesta']);$i++){
    if($employee['respuesta'][$i]['campo_form_custom_id'] == $customCampos['idFormulario']) {
        $selectLocalId = $employee['respuesta'][$i]['response'];
    }
}
?>

<div class="col-md-6 mb-4">
    <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
    <?php
        foreach($custom['localidades'] as $localidades){
        if($selectLocalId == $localidades['id']){
                ?>
                <input type="text" value="<?php echo $localidades['name'] ?>" disabled>
                <?php
            }
        }
    ?>
</div>