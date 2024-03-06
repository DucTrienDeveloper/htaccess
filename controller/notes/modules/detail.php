<?php
if(!empty($_GET['hovaten'])){
    $module = $_GET['hovaten'];
    $path = 'modules/'.$module.'.php' ;
    echo $path;
}

?>