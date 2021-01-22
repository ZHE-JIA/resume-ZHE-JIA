<?php 
    include_once "../basetest.php";
    print_r($_GET);
?>
<h3>作品圖片</h3>
<hr>
<form action="./api/edit_img.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>作品圖片</td>
        <td><input type="file" name="img" id=""></td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <input type="submit" value="更新">
            
        </td>

    </tr>
</table>
    
    

</form>