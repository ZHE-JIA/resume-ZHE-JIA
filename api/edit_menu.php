<?php
    include_once "../basetest.php";
    print_r($_POST);
    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Menu2->del($id);
        }else{
            $row=$Menu2->find($id);
            $row['project']=$_POST['project'][$key];

            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Menu2->save($row);
        }



    }
    to("../backend.php?do=menu");
?>