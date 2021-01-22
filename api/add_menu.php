<?php
    include_once "../basetest.php";

        // if(!empty($_FILES['skill']['tmp_name'])){
        //     $_POST['skill']=$_FILES['skill']['name'];
        //     move_uploaded_file($_FILES['skill']['tmp_name'],'../img/'.$_POST['skill']);
        // }
        if(isset($_POST['project'])){
            foreach($_POST['project'] as $key => $value){
                $add=[];
                $add['project']=$value;
                $add['sh']=1;
                $Menu2->save($add);
            }
        }
        to("../backend.php?do=menu");
?>