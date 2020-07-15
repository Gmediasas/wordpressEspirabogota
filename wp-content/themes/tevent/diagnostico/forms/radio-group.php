<?php   $checkr = json_decode($cuestionariof3['valores'] ,true);
    foreach($checkr as $checkSelect) {
        ?>
        <label>
            <input type="radio" value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?>>
            <p><?php echo $checkSelect['label']?></p>
        </label>
<?php } ?>

 	