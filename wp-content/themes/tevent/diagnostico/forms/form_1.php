<?php
$input = '';
for ($i = 0; $i < count($employee['respuesta']); $i++) {
    if ($employee['respuesta'][$i]['campo_form_custom_id'] == $customCampos['idFormulario']) {
        $input = $employee['respuesta'][$i]['response'];
    }
}
?>

<div class="col-md-6 mb-4">
    <label class="d-block px-3"><?php echo $customCampos['nombreCampo'] ?></label>
    <input type="text" value="<?php echo $input ?>" disabled>
</div>