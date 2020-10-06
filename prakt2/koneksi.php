<?php
    $host = "sql313.epizy.com";//"localhost";// 
    $user = "epiz_26770241"; //"root";//
    $psw = "fvnCbNffge"; //"";//
    $db_name= "epiz_26770241_J3C118154"; //"pabw";//
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('gagal terhubung dengan database:'.mysqli_connect_error());
    }
?>