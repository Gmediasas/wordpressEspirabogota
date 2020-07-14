<?php
$selecAct2 = '';
for($i=0;$i< count($employee['respuesta']);$i++){
    if($employee['respuesta'][$i]['campo_form_custom_id'] == $customCampos['idFormulario']) {
        $selecAct2 = $employee['respuesta'][$i]['response'];
    }
}
?>

<div class="col-md-6 mb-4">
    <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
    <?php
    foreach($custom['codigoCIIU'] as $codigoCIIU){
        if($selecAct2 == $codigoCIIU['id']){
            ?>
            <input type="text" value="<?php echo $codigoCIIU['codigo'].") ".$codigoCIIU['name'] ?>" disabled>
            <?php
        }
    }
    ?>
</div>