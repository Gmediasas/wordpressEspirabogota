<?php
    function generarInfo(){
        $postHeaders = array('Content-Type: application/json');
        $apiUrl = "https://prod.gevents.co/public/api/get_api_ticketTecnalia" ;
        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $postHeaders);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        
        $response = json_decode($json, true);
        
        curl_close($curl); 
        
        $nombre_archivo = "tecnaliaplano.txt"; 
    
        if(file_exists($nombre_archivo)){$mensaje = "El Archivo $nombre_archivo se ha modificado";}  
        else{$mensaje = "El Archivo $nombre_archivo se ha creado";}
    
        if($archivo = fopen($nombre_archivo, "w+"))
        {
            fwrite($archivo, "");
            if($response)
            {
                foreach ($response as &$valor) { 
                    
                    fwrite($archivo, $valor['nombre'].';'.$valor['email'].';'.$valor['empresa'].';'.$valor['cargo'].';'.$valor['QRCode']. "\n");  
                    
                }/* echo "Se ha ejecutado correctamente"; */
            }
            else
            {
                echo "Ha habido un problema al crear el archivo";
            }
    
            fclose($archivo);
        } 
    }
  ?>