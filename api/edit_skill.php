<?php
    include_once "../basetest.php";
    print_r($_POST);
    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Skill->del($id);
        }else{
            $row=$Skill->find($id);
            $row['skill']=$_POST['skill'][$key];
            $row['score']=$_POST['score'][$key];
            $row['sort']=$_POST['sort'][$key];

            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Skill->save($row);
        }



    }
    to("../backend.php?do=skill");
?>