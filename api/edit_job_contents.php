<?php
    include_once "../basetest.php";
    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Jobb->del($id);
            $Jobb->del(['parent']);
        }else{
            $row=$Jobb->find($id);
            $row['content']=$_POST['content'][$key];
            $Jobb->save($row);
            
        }

    }

    if(isset($_POST['content2'])){
        foreach($_POST['content2'] as $key =>$value){
            $row=[];
            $row['content']=$value;
            $row['parent']=$_POST['parent'];
            $Jobb->save($row);
        }
    }
    to("../backend.php?do=jobb");
?>