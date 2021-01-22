<h1>自傳</h1>
<form action="api/add_autobio.php" method="post"  >
    <table>
        <tr>
            <td>自傳內容</td>
        </tr>
        <tr>
            <td><textarea name="text[]" style="width:100%;height:70px"></textarea></td>
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
            <td><textarea name="text[]" style="width:100%;height:70px"></textarea></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>