<?php
    include_once "../basetest.php";
?>

<h1>新增內容</h1>
<form action="api/edit_job_contents.php" method="post"  >
    <table>
        <tr>
            <td>內容</td>
            <td>刪除</td>
        </tr>
        <?php
            $contents=$Jobb->all(['parent'=>$_GET['id']]);
            
            foreach($contents as $content){
                
        ?>

        <tr >
            <td><input type="text" name="content[]" value="<?=$content['content']?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$content['id']?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$content['id']?>"></td>
            
        </tr>
        <?php
            }
        ?>
        <tr id="btn">
        
            <td>
                <input type="hidden" name="parent" value="<?=$_GET['id']?>">
                <input type="button" value="新增內容" onclick="more()" >
                <input type="submit" value="修改確定">
            </td>
        
        </tr>
        
        
    </table>

</form>

<script>
    function more(){
        let str=
        `
        <tr>
            <td><input type="text" name="content2[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>