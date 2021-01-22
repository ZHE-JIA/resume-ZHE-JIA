<h1>作品集</h1>
<form action="api/edit_por.php"  method="post" enctype="multipart/form-data"  >
    <table>
        <tr>
            <td>作品名稱</td>
            <td>作品照片</td>
            <td>作品連結</td>
            <td>作品說明</td>
            <td>顯示</td>
            <td>刪除</td>
            <td>更換圖片</td>
        </tr>
        <?php
        $pors=$Por->all();
        foreach($pors as $por){
            
        
        ?>
        <tr>
            <td><input type="text" name="name[]" value="<?=$por['name']?>"></td>
            <td><img src="./img/<?=$por['img']?>" style="width:150px;height:100px"></td>
            <td><input type="text" name="href[]" value="<?=$por['href']?>"></td>
            <td><textarea name="textarea[]" style="width:100%;height:70px" ><?=$por['textarea']?></textarea></td>
            <td><input type="checkbox" name="sh[]" value="<?=$por['id']?>" <?=($por['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$por['id']?>"></td>
            <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/edit_img.php?table=<?=$do;?>&id=<?=$por['id'];?>')"></td>
            <td><input type="hidden" name="id[]" value="<?=$por['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subpor.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>