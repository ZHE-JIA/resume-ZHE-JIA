<h1>履歷項目</h1>
<form action="api/edit_menu.php" method="post"  >
    <table>
        <tr>
            <td>履歷項目</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $menus=$Menu2->all();
        foreach($menus as $menu){
            
        
        ?>
        <tr>
            <td><input type="text" name="project[]" value="<?=$menu['project']?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?=$menu['id']?>" <?=($menu['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$menu['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$menu['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/submenu.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>