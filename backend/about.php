<h1>關於我</h1>
<form action="api/edit_about.php" method="post"  >
    <table>
        <tr>
            <td>項目</td>
            <td>內容</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $abouts=$About->all(['parent'=>0]);
        foreach($abouts as $about){
            
        
        ?>
        <tr>
            <td><input type="text" name="title[]" value="<?=$about['title']?>"></td>
            <td><input type="text" name="text[]" value="<?=$about['text']?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?=$about['id']?>" <?=($about['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$about['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$about['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subabout.php')"value="新增選單">
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
