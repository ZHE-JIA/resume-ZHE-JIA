<h1>自傳</h1>
<form action="api/add_job.php" method="post"  >
    <table>
        <tr>
            <td>工作</td>
            <td>地點</td>
            <td>證照</td>
        </tr>
        <tr>
            <td><input type="text" name="job[]"></td>
            <td><input type="text" name="addr[]"></td>
            <td><input type="text" name="license[]"></td>

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
            <td><input type="text" name="job[]"></td>
            <td><input type="text" name="addr[]"></td>
            <td><input type="text" name="license[]"></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>