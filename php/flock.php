<?php


function putFile($file,$str){
    $fb = fopen($file,'w+');
    if(flock($fb,LOCK_EX)){
        fputs($fb,$str);
        flock($fb,LOCK_UN);
    }
    fclose($fb);
}

putFile('aa.txt','mmm');

function getFile($file){
    $result = '';
    $fb = fopen($file,'r+');
    if(flock($fb,LOCK_SH)){
        $result = fgets($fb);
        flock($fb,LOCK_UN);
    }
    fclose($fb);
    return $result;
}
$a = getFile('aa.txt');
var_dump($a);exit;