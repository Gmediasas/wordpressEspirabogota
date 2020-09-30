<?php   $checkr = json_decode($cuestionariof3['valores'] ,true); ?>
 
    <select name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> <?php echo "class='class_".$className." ".$classInteractive."'"?>>
		<option value="">Seleccionar...</option>
        <?php foreach($checkr as $checkSelect) {if(  $checkSelect['value'] ==  $cuestionariof3['response']){ ?>
            <option value="<?php echo $checkSelect['value']?>" selected><?php echo $checkSelect['label']?></option>
        <?php       }else{ ?>
            <option value="<?php echo $checkSelect['value']?>"><?php echo $checkSelect['label']?></option>
        <?php       }
            } 
        ?>
    </select> 
