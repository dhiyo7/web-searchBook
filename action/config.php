<?php

try{
    $con = new PDO('mysql:host=localhost;dbname=db_book', 'royhan', '', array(PDO::ATTR_PERSISTENT => true));
    // include_once 'library.php';
    // $CRUD = new library($con);
}catch (Exception $ex){
    print($ex->getMessage());
}

?>
