<?php

/* URL */
if (explode('/',$_SERVER['REQUEST_URI'])[1] != null){
    $REQUEST_URI = explode('/',$_SERVER['REQUEST_URI'])[1].'/';
} else{
    $REQUEST_URI = '';
}
$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/'.$REQUEST_URI;
define('URL' , $url);


/* session_start */
session_start();


/* fa_number */
function fa_number($value=''){
    $en = array('0','1','2','3','4','5','6','7','8','9');
    $fa = array('۰','۱','۲','۳','۴','۵','۶','۷','۸','۹');
    return str_replace($en , $fa , $value);
}

/* Error 404 */
function E404(){
    return header('location: '.URL.'view/error_page/404.php');
}