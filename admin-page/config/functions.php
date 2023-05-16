<?php 
function getFolderProyect(){

    if(strpos(__DIR__, '/') !== false){ /* Busca de una cadena de texto si existe un / si es != diferente hara */
      $folder = str_replace('C:\xampp\htdocs\calendario\config', '/', __DIR__); /* str_replace seleccione una cedena de texto*/
    } else {
      $folder= str_replace('C:\\xampp\\htdocs\\', '/', __DIR__); /**Folder a buscar */ 
    }
      $folder = str_replace('config', '', $folder);
        return $folder; /**Return, devuelve $folder  */
} 
/**Busca la posicion del archivo */
?>