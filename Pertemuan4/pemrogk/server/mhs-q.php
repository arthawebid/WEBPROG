<?php
    //$output["error"] = true;
    if(isset($_GET['nim'])){
        include_once("dbkoneksi2.php");
        $q = $_GET['nim'];
        $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mhs WHERE NIM='".$q."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = $sql;
    }
    echo json_encode($output);