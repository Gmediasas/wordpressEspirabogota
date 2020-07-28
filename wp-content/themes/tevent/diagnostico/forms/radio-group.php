<?php   $checkr = json_decode($cuestionariof3['valores'] ,true);
    foreach($checkr as $checkSelect) {if(  $checkSelect['value'] ==  $cuestionariof3['response']){ 
        ?>
        <div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
            <label>
                <input type="radio" <?php echo "class='class_".$className." ".$classInteractive."'"?> value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> checked>
                <p><?php echo $checkSelect['label']?></p>
            </label>
        </div> 
        <?php   } else {  ?>
            <div class="bg-purple radius p-lg-4 p-3 mt-4 c_options_question">
                <label>
                    <input type="radio" <?php echo "class='class_".$className." ".$classInteractive."'"?> value="<?php echo $checkSelect['value']?>" name="<?php echo $cuestionariof3['nombre_campo'] ?>" <?php echo $required?> >
                    <span><?php echo $checkSelect['label']?></span>
                </label>
            </div> 
<?php } } ?> 

 	