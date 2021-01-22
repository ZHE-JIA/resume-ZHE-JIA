<h1>求職條件</h1>
<form action="api/add_jobb.php" method="post"  >
    <table>
        <tr>
            <td>條件</td>
            <td>Font Awesome</td>
        </tr>
        <tr>
            <td><input type="text" name="requirement[]"></td>
            <td><input type="text" name="ifont[]"></td>
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
            <td><input type="text" name="requirement[]"></td>
            <td><input type="text" name="ifont[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>