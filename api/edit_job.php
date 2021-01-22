<?php
    include_once "../basetest.php";

    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Job->del($id);
        }else{
            $row=$Job->find($id);
            $row['job']=$_POST['job'][$key];
            $row['addr']=$_POST['addr'][$key];
            $row['license']=$_POST['license'][$key];

            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Job->save($row);
        }



    }
    to("../backend.php?do=job");
?>