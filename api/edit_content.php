<?php
    include_once "../basetest.php";
    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $About->del($id);
            $About->del(['parent']);
        }else{
            $row=$About->find($id);
            $row['title']=$_POST['title'][$key];
            $row['text']=$_POST['text'][$key];
            $About->save($row);
            
        }

    }

    if(isset($_POST['title2'])){
        foreach($_POST['title2'] as $key =>$value){
            $row=[];
            $row['title']=$value;
            $row['text']=$_POST['text2'][$key];
            $row['parent']=$_POST['parent'];
            $About->save($row);
        }
    }
    to("../backend.php?do=about");
?>