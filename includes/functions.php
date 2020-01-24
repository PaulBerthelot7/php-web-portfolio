<?php
$data = require('data/gallery.php');

// fonction pour la page détails
function FindOneById($id) { 
    global $data;
        // Toutes les images
    foreach ($data as $datas) {
        // Id Image = Valeur du parametre id
        if ( $id == $datas['id']) {
            return $datas;
        }
    }

    return false;
}
// fonction pour la pagination
function getCount ($data){
return count($data);
    
}

 
//function pour gallery.php
function findPaged($limit,$offset){
    global $data;
    $img_select=[];
    $compteur=0;
    foreach($data as $dat){
        $img_select[]=$dat;
        $compteur++;
        if ($compteur==$limit) {
        break;
        }
    ;

    }
return $img_select;
}
//fonction pour index
function findLatest(int $limit){

}


?>