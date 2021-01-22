<?php
    include_once "../basetest.php";
    if(isset($_POST['text'])){
        foreach($_POST['text'] as $key => $value){
            $add=[];
            $add['text']=$value;
            $add['sh']=1;
            $Autobio->save($add);
        }
    }


    to("../backend.php?do=autobio");

?>