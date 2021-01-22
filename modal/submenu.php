<h1>履歷項目</h1>
<form action="api/add_menu.php" method="post"  >
    <table>
        <tr>
            <td>履歷項目</td>

        </tr>
        <tr>
            <td><input type="text" name="project[]"></td>
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
            <td><input type="text" name="project[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>