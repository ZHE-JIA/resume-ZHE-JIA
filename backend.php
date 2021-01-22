<?php
    include_once "basetest.php";
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>履歷後台</title>
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/js.js"></script>
</head>

<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>
    <div id="main">
        <a title="" href="index.php">
            <div class="ti" style="background:url('img/title.jpg'); background-size:cover;"></div>
            
            <!-- 此處更改替代文字與圖片 -->
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">後台管理選單</span>
                    <?php
                        if(empty($_SESSION['admin'])){

                        ?>
                        <a style="color:#000; font-size:13px; text-decoration:none;"href="?do=account">
                        <div class="mainmu">帳號登入 </div>
                    </a>
                        <?php
                        }else{
                            
                        
                    ?>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
                        <div class="mainmu">
                            履歷項目管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=about">
                        <div class="mainmu">
                            關於我管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=skill">
                        <div class="mainmu">
                            專業技能管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=por">
                        <div class="mainmu">
                            作品集管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=autobio">
                        <div class="mainmu">
                            自傳管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=jobb">
                        <div class="mainmu">
                            求職條件管理 </div>
                    </a>
                    <?php
                        }
                    ?>
                

                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <!-- <span class="t">進站總人數 :</span> -->
                </div>
            </div>
            <div class="di"
                style="height:660px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><a href="backend/logout.php">管理登出</a></td>
                        </tr>
                    </tbody>
                </table>
                <?php   

                        $do=(isset($_GET['do']))?$_GET['do']:'account';
                        $file="backend/".$do.".php";
                        if(file_exists($file)){
                            include $file;
                        }else{
                            include ("backend/account.php");
                        }
                    ?>
            </div>
            <div id="alt"
                style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
            </div>
            <script>
            $(".sswww").hover(
                function() {
                    $("#alt").html("" + $(this).children(".all").html() + "").css({
                        "top": $(this).offset().top - 50
                    })
                    $("#alt").show()
                }
            )
            $(".sswww").mouseout(
                function() {
                    $("#alt").hide()
                }
            )
            </script>
        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"></span>
            
        </div>
    </div>

</body>

</html>