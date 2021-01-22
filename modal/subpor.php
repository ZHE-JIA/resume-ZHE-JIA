<h1>作品集</h1>
<form action="api/add_por.php" method="post" enctype="multipart/form-data"  >
    <table>
        <tr>
            <td>作品名稱：<input type="text" name="name[]"></td>
        </tr>
        <tr>
            <td>作品照片：<input type="file" name="img[]"></td>
        </tr>
        <tr>
            <td>作品說明：<input type="text" name="textarea[]"></td>
        </tr>
        <tr>
            <td>作品連結：<input type="text" name="href[]"></td>
        </tr>
        <tr id="btn" >
        <td>
        <input type="button" value="新增項目" onclick="more()" >
        </td>
        
        </tr>
        
    </table>
    <div >
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>

</form>

<script>
    function more(){
        let str=
        `
        <tr>
            <td>作品名稱：<input type="text" name="name[]"></td>
        </tr>
        <tr>
            <td>作品照片：<input type="file" name="img[]"></td>
        </tr>
        <tr>
            <td>作品說明：<input type="text" name="textarea[]"></td>
        </tr>
        <tr>
            <td>作品連結：<input type="text" name="href[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>