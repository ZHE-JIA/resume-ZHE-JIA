<h1>專業技能</h1>
<form action="api/edit_skill.php" method="post"  >
    <table>
        <tr>
            <td>技能名稱</td>
            <td>技能分數</td>
            <td>分類</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $skills=$Skill->all();
        foreach($skills as $skill){
            
        
        ?>
        <tr>
            <td><input type="text" name="skill[]" value="<?=$skill['skill']?>"></td>
            <td><input type="text" name="score[]" value="<?=$skill['score']?>"></td>
            <td>分類
            <select name="sort[]" >
                <option value="front" <?=($skill['sort']=='front')?"selected":'';?>>前端</option>
                <option value="backend" <?=($skill['sort']=='backend')?"selected":'';?>>後端</option>
            </select></td>
            <td><input type="checkbox" name="sh[]" value="<?=$skill['id']?>" <?=($skill['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$skill['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$skill['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subskill.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>