<?php
    include_once "basetest.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mycss.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css'/>
    <script src="js/myjs.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
                .imho{
            transition: 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .imho::before{
            content: "";
            background: rgba(44, 73, 100, 0.6);
            position: absolute;
            left: 30px;
            right: 30px;
            top: 30px;
            bottom: 30px;
            transition: all ease-in-out 0.3s;
            z-index: 2;
            opacity: 0;
        }
        .imho:hover::before{
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 1;
        }
        img{
            width: 100%;
            height: 10em;
        }
    </style>
</head>
<body>
    <header class="bg-dark fixed-top" id="minMenu">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <button class="navbar-toggler" type="button" data-toggle="#minMenu" >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="minMenu">
              <a class="navbar-brand" href="#">ZHE -JIA</a>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">

                <li class="nav-item ">
                  <a class="nav-link" href="#autobio" class="fas">自傳 </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#jobb" class="fas">求職條件 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#skill" class="fas ">技能</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#por" class="fas ">作品集</a>
                  </li>
                  <li class="nav-item">
                    <?php
                                                if(isset($_SESSION['admin'])==1){

                                                
                    ?>
                    <a class="nav-link" href="backend.php?do=about" class="fas ">管理</a>
                    <?php
                    }else{
                        ?>
                        <a class="nav-link" href="backend.php?do=account" class="fas ">登入</a>
                        <?php
                    }
                    ?>
                  </li>
              </ul>
            </div>
          </nav>
        </header>
    <div class="bg" style="display: flex;justify-content: center;align-items: center;">
        <div style="display: flex;flex-direction: column;align-items: center;">
            <img src="img/aa.jpg" style="width:200px;height:200px;border-radius: 50%;">

        <p style="width:auto;text-align:center;padding: 30px;font-size: 21px;">
                    <?php
                    $abouts=$About->all(['sh'=>1]);
                        foreach($abouts as $about){
                            echo $about['title'].":".$about['text']."<br>";
                        }
                        ?>
                        </p>

        
        </div>
        
        
    </div>
        <?php
            
            if($Menu2->count(['project'=>'autobio','sh'=>1])){

            
        ?>
    <div class="bg-dark " style="height: auto;padding-bottom: 50px;" >
        <div class="container" id="autobio">
        <div class="container  text-white about titletext fb" style="padding-top:50px;margin-bottom:30px;" >自傳</div>
        <div class="mx-3" style="color:white;text-align:center;font-size: 21px;">
            <?php
                $autobios=$Autobio->all(['sh'=>1]);
                        foreach($autobios as $autobio){
                            echo $autobio['text'];
                        }
                    
            ?>

            
            
        </div>
        </div>
    </div>
    <?php
    }
    if($Menu2->count(['project'=>'jobb','sh'=>1])){
    ?>

    <div class="bg-dark " style="height: auto;" id="jobb" >
        <div class="container">
        <div class="container  text-white about titletext fb "  >求職條件</div>
        <div class="row pt-5">
        <?php
            $ifonts=$Jobb->all(['parent'=>0,'sh'=>1]);
            foreach($ifonts as $ifont){
        ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="a2 ">
                        <div class="a22"><?=$ifont['ifont']?></i></div>
                            <div><?=$ifont['requirement']?></div>
                        <?php
                            if($Jobb->count(['parent'=>$ifont['id']])>0 ){
                                $jobs=$Jobb->all(['parent'=>$ifont['id']]);
                                foreach($jobs as $job){
                        ?>

                            <p class="ap"><?=$job['content']?></p>

                        <?php
                                }
                            }
                        
                        ?>

                    </div>
                </div>
                <?php
            }
        ?>

            
            
        </div>
        </div>
    </div>
    <?php
    }
    if($Menu2->count(['project'=>'skill','sh'=>1])){
    ?>

    <div class="skill " id="skill">
        <div  class="container" style="">
        <div class="titletext fb "  > 專業技能 </div>
        <div class=" row" style="justify-content:center">
                <div class="col-md-6 row " style="display: flex;justify-content: center;margin-top: 40px;margin-bottom: 100px;">
                <div class="skillOutt">
                    <?php
                    $skills=$Skill->all(['sort'=>'front','sh'=>1]);
                    foreach($skills as $skill){
                        
                    ?>  
                            <div class="skillTxt"><?=$skill['skill']?>

                            <div class="skillOut">
                            <div style="background:rgba(145,81,82);height:10px;width:<?=$skill['score']?>%;"></div>
                            </div>
                            <h4 class="skillh3"><?=$skill['score']?>%</h4>
                            </div>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-md-6 row " style="display: flex;justify-content: center;margin-top: 40px;margin-bottom: 100px; ">
                <div class="skillOutt">
                    <?php
                    $skills=$Skill->all(['sort'=>'backend','sh'=>1]);
                    foreach($skills as $skill){
                        
                    ?>  
                        
                            <div class="skillTxt"><?=$skill['skill']?>

                            <div class="skillOut ">
                            <div style="background:rgba(145,81,82);height:10px;width:<?=$skill['score']?>%;"></div>
                            </div>
                            <h4 class="skillh3" ><?=$skill['score']?>%</h4>
                            </div>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    if($Menu2->count(['project'=>'por','sh'=>1])){
    
        
    ?>

    <div class="skill" id="por">
        <div  class="container titletext fb "   >作品集</div>

        <div class="container" >
        <div class="row">
                    <?php
                        $pors=$Por->all(['sh'=>1]);
                        foreach($pors as $por){

                        
                    ?>
            
              <div class="card col-lg-4 col-md-6" style="margin-bottom:30px;box-shadow: 1px 3px 10px #000;" >
              <div class=" card-group" style="margin:15px"  >
                <div>
                  <div class="imho">
                      <img src="img/<?=$por['img']?>" class="img">
                      <div class="imfont"><h4 ><?=$por['name']?></h4></div>
                  </div>
              </div>

                <div class="card-body">
                  <h5 class="card-title"><?=$por['name']?></h5>
                  <p class="card-text"><?=$por['textarea']?></p>
                </div>
                <div class="card-footer" style="width:100%">
                  <small class=""><a href="http://www.google.com"><i class="fas fa-link"></i></a></small>
                </div>
              </div>
                </div>
                <?php
                    }
                ?>
                    </div>
                    </div>
                    </div>
                    <?php
    }
                    ?>

                    <div class="footer" style="width:100%;height:100px"> <div class="footerbg" style="width:100%;height:100px"></div></div>

</body>

</html>

