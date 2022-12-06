<?php
function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

debug($_POST);
debug($_FILES);