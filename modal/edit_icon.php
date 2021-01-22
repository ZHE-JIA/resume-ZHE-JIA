<?php 
    include_once "../basetest.php";
    
?>
<h3>ICON更新</h3>
<hr>
<form action="./api/edit_icon.php" method="post" >
<table>
    <tr>
        <td>Font Awesome</td>
        <td><input type="text" name="ifont" id=""></td>
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