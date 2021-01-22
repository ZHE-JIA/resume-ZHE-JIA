<?php
    include_once "../basetest.php";

    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Autobio->del($id);
        }else{
            $row=$Autobio->find($id);
            $row['text']=$_POST['text'][$key];

            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Autobio->save($row);
        }



    }
    to("../backend.php?do=autobio");
?>