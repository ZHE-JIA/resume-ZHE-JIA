<?php
    include_once "../basetest.php";
    
    // $data['img']=$_FILES['img']['name'];
    // move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$data['img']);
    // $data['name']=$_POST['name'];
    // $data['href']=$_POST['href'];
    // $data['textarea']=$_POST['textarea'];

    // $Por->save($data);
    print_r($_POST);
    if(isset($_POST['name'])){
        foreach($_POST['name'] as $key => $value){
            print_r($_POST);
            $add=[];
            $add['name']=$value;
            $add['href']=$_POST['href'][$key];
            $add['textarea']=$_POST['textarea'][$key];
            $add['sh']=1;
            $add['img']=$_FILES['img']['name'][$key];
            move_uploaded_file($_FILES['img']['tmp_name'][$key],'../img/'.$add['img']);
            $Por->save($add);
        }
    }

    to("../backend.php?do=por");

?>