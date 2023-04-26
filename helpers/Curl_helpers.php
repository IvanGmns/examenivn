<?php 
//Mandamos una peticion GET a la API
function jsonClienteGet($url) {    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request',
        curl_setopt($ch, CURLOPT_TIMEOUT, 10),
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'))
    ));
    $result = curl_exec($ch);
    if(curl_errno($ch)){
        echo 'Request Error:' . curl_error($ch).'<br/>';
        return false;
    }
    curl_close($ch);
    return $result;
}

function mercadoLista() {
    $producto=jsonClienteGet('https://api.mercadolibre.com/reviews/item/MLB1625519814');
    if(!empty($producto)){
        return json_decode($producto);
    }
}

function _review(){
    $review=jsonClienteGet('https://lit-chamber-70662.herokuapp.com/v1/reviews?apiKey=15cf8404-d551-4ca8-80d3-e52c84a5c53b&qty=5&country=es,gb&review=good');
    if(!empty($review)){
        return json_decode($review);
    }
}

function usuariosLista() {
    $usuarios=jsonClienteGet('https://reqres.in/api/users?page=1');    
    if(!empty($usuarios)){
        return json_decode($usuarios);
    }
}
?>