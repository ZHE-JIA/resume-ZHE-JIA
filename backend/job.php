<h1>求職條件</h1>
<form action="api/edit_job.php" method="post"  >
    <table>
        <tr>
            <td>工作</td>
            <td>地點</td>
            <td>證照</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>
        <?php
        $jobs=$Job->all();
        foreach($jobs as $job){
            
        
        ?>
        <tr>
            <td><input type="text" name="job[]" value="<?=$job['job']?>"></td>
            <td><input type="text" name="addr[]" value="<?=$job['addr']?>"></td>
            <td><input type="text" name="license[]" value="<?=$job['license']?>"></td>
            <td><input type="checkbox" name="sh[]" value="<?=$job['id']?>" <?=($job['sh']==1)?'checked':'';?>></td>
            <td><input type="checkbox" name="del[]" value="<?=$job['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$job['id']?>"></td>
            

        </tr>
        <?php
        }
        ?>
        
    </table>
    <div style="display:flex">
        <div style="width:34%">
            <input type="button"onclick="op('#cover','#cvr','./modal/subjob.php')"value="新增選單">
        </div>
        <div>
            <input  type="submit" value="修改確認">
            
        </div>
    </div>
        

</form>