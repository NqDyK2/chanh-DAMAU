<?php

    function insert_sanpham(){
        $sql = "INSERT INTO ";
        pdo_execute($sql);
    }  
    
    function delete_sanpham($id) {
        $sql = "DELETE from pet where id=".$id;
        pdo_execute($sql);
    }
?>