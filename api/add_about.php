<?php
    include_once "../basetest.php";
    if(isset($_POST['title'])){
        foreach($_POST['title'] as $key => $value){
            $add=[];
            $add['title']=$value;
            $add['text']=$_POST['text'][$key];
            $add['sh']=1;
            $About->save($add);
        }
    }
    if(isset($_POST['title2'])){
        foreach($_POST['title2'] as $key => $value){
            $add2=[];
            $add2['title']=$value;
            $add2['text']=$_POST['text2'][$key];
            $add2['parent']=$_POST['parent'];
            $About->save($add2);
            
        }
    }

    to("../backend.php?do=about");

?>