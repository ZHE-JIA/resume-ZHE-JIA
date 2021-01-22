<h1>求職條件</h1>
<form action="api/edit_jobb.php" method="post"  >
    <table>
        <tr>
            <td>項目</td>
            <td>圖案</td>
            <td>內容</td>
            <td>圖案</td>
            <td>顯示</td>
            <td>刪除</td>
            
        </tr>
        <?php
        $jobbs=$Jobb->all(['parent'=>0]);
        $num=1;
        foreach($jobbs as $jobb){
            
        
        ?>
        <tr>
            <td><input type="text" name="requirement[]" value="<?=$jobb['requirement']?>"></td>
            <td><?=$jobb['ifont']?></td>
            <td><input type="button"onclick="op('#cover','#cvr','./modal/job_contents.php?id=<?=$jobb['id']?>')"value="新增內容"></td>
            <td><input type="button"onclick="op('#cover','#cvr','./modal/edit_icon.php?id=<?=$jobb['id']?>')"value="更新Icon"></td>
            <td><input type="checkbox" name="sh[]" value="<?=$jobb['id']?>" <?=($jobb['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$jobb['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$jobb['id']?>"></td>
            

        </tr>
        <?php
            $num++;
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subjobb.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>
<script>
    $("#mysel1").change(function(){
        let opt=$(" option:selected").val();
            $("#ifont1").removeClass();
            $("#ifont1").addClass("fas fa-address-card");
        
        if(opt == 'two'){
            $("#ifont1").removeClass();
            $("#ifont1").addClass("fas fa-ambulance");
        }else if(opt == 'three') {
            $("#ifont1").removeClass();
            $("#ifont1").addClass("fas fa-anchor");
        }
        
        
    })

    


</script>
