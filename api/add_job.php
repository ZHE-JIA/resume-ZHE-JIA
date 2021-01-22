<?php
    include_once "../basetest.php";

        if(isset($_POST['job'])){
            foreach($_POST['job'] as $key => $value){
                $add=[];
                $add['job']=$value;
                $add['addr']=$_POST['addr'][$key];
                $add['license']=$_POST['license'][$key];
                $add['sh']=1;
                $Job->save($add);
            }
        }
        to("../backend.php?do=job");
?>