<?php
    include_once "../basetest.php";
    echo $_POST;
    print_r ($_POST);
    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Jobb->del($id);
            $Jobb->del(['parent']);
        }else{
            $row=$Jobb->find($id);
            $row['requirement']=$_POST['requirement'][$key];
            
            

            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Jobb->save($row);
        }



    }
    to("../backend.php?do=jobb");
?>