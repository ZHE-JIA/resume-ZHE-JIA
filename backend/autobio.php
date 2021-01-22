<h1>自傳</h1>
<form action="api/edit_autobio.php" method="post"  >
    <table style="width:100%">
        <tr>
            <td>自傳內容</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $autobios=$Autobio->all();
        foreach($autobios as $autobio){
            
        
        ?>
        <tr>
            <td><textarea name="text[]" style="width:100%;height:70px" ><?=$autobio['text']?></textarea></td>
            <td><input type="checkbox" name="sh[]" value="<?=$autobio['id']?>" <?=($autobio['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$autobio['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$autobio['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subautobio.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>