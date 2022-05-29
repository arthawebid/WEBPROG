<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIM"])){
        include_once("dbkoneksi2.php");
        $nim = $_POST["txNIM"];
        $sql = "DELETE FROM mhs WHERE NIM='$nim';";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);
