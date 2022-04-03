<?php
    if(isset($_GET["txNIM"])){
        echo $_GET["txNIM"];
        echo $_GET["txNAMA"];
        echo $_GET["txTGLMASUK"];
    }else{
        header("Location: Pert4Latihan01.php");
    }