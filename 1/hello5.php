<?php
    function hello_user($name){
        return  "こんにちは、".$name."さん\n";
    }
    $hello=hello_user("ユーザ");
    echo  $hello;
?>