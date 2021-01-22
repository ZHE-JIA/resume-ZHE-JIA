<?php
    include_once "../basetest.php";
    if(isset($_POST['requirement'])){
        foreach($_POST['requirement'] as $key => $value){
            $add=[];
            $add['requirement']=$value;
            $add['sh']=1;
            $add['parent']=0;
            $add['content']="";
            $add['ifont']=$_POST['ifont'][$key];
            $Jobb->save($add);
        }
    }
    if(isset($_POST['requirement2'])){
        foreach($_POST['requirement2'] as $key => $value){
            $add2=[];
            $add2['requirement']=$value;
            $add2['ifont']=$_POST['ifont2'][$key];
            $add2['parent']=$_POST['parent'];
            $Jobb->save($add2);
            
        }
    }

    to("../backend.php?do=jobb");

?>