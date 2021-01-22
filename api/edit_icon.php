<?php
    include_once "../basetest.php";
    
    $data=$Jobb->find($_POST['id']);

    if(!empty($_POST['ifont'])){
        $data['ifont']=$_POST['ifont'];
    }

    $Jobb->save($data);

    to("../backend.php?do=jobb");

?>