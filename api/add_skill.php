<?php
    include_once "../basetest.php";

        // if(!empty($_FILES['skill']['tmp_name'])){
        //     $_POST['skill']=$_FILES['skill']['name'];
        //     move_uploaded_file($_FILES['skill']['tmp_name'],'../img/'.$_POST['skill']);
        // }
        if(isset($_POST['skill'])){
            foreach($_POST['skill'] as $key => $value){
                $add=[];
                $add['skill']=$value;
                $add['score']=$_POST['score'][$key];
                $add['sort']=$_POST['sort'][$key];
                $Skill->save($add);
            }
        }
        to("../backend.php?do=skill");
?>