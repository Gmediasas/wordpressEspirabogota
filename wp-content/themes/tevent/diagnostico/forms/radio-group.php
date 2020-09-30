<?php   $checkr = json_decode($cuestionariof3['valores'] ,true);
    foreach($checkr as $checkSelect) {if(  $checkSelect['value'] ==  $cuestionariof3['response']){ 
        ?>
        
            <div>
                <input type="radio" <?php echo "class='class_".$className." ".$classInteractive."'"?> value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> checked>
                <span><?php echo $checkSelect['label']?></span>
            </div>
        <?php   } else {  ?>
                <div>
                    <input type="radio" <?php echo "class='class_".$className." ".$classInteractive."'"?> value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> >
                    <span><?php echo $checkSelect['label']?></span>
                </div>
            
<?php } } ?> 
