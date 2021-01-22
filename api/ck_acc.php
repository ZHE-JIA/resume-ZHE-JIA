<?php
    include_once "../basetest.php";

    $chk=$Account->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

        
        if($chk > 0){
            $_SESSION['admin']=1;
            to("../backend.php?do=menu");
        }else{
            echo "帳號密碼錯誤";
        }



?>