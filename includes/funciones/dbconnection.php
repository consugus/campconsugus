<?php
    // $host = 'localhost';
    // $usuario_DB = 'root';
    // $password_DB = 'root';
    // $database = 'gldwebcamp';

    $host = '159.89.159.137';// '159.89.159.137:3306';
    $usuario_DB = 'user-staging';
    $password_DB = 'qmRH40pQgtLMarP0';
    $database = 'camp_consugus';


    $conn = new mysqli($host, $usuario_DB, $password_DB, $database);

    // echo '<pre>';
    //     var_dump($conn);
    // echo '</pre>';


    if($conn->connect_error){
        echo $error->$conn->connect_error;
    };



?>