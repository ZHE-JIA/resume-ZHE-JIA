<h1>關於我</h1>
<form action="api/add_about.php" method="post"  >
    <table>
        <tr>
            <td>項目</td>
            <td>內容</td>
        </tr>
        <tr>
            <td><input type="text" name="title[]">:</td>
            <td><input type="text" name="text[]"></td>
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
            <td><input type="text" name="title[]">:</td>
            <td><input type="text" name="text[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>