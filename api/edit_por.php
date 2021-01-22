<?php
    include_once "../basetest.php";
    print_r($_POST);

    foreach($_POST['id'] as $key =>$id){
        if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $Por->del($id);
        }else{
            $row=$Por->find($id);
            $row['name']=$_POST['name'][$key];
            $row['href']=$_POST['href'][$key];
            $row['textarea']=$_POST['textarea'][$key];
            if(!empty($_POST['sh'])){
                if(is_array($_POST['sh'])){
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }else{
                    $row['sh']=in_array($id,$_POST['sh'])?1:0;
                }
            }

            $Por->save($row);
        }



    }
    to("../backend.php?do=por");
?>