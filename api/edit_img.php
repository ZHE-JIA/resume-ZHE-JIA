<?php
    include_once "../basetest.php";
    
    $data=$Por->find($_POST['id']);

    if(!empty($_FILES['img']['tmp_name'])){
    $data['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$data['img']);
    }

    $Por->save($data);

    to("../backend.php?do=por");

?>