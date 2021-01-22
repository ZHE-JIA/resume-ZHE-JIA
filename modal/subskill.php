<h1>自傳</h1>
<form action="api/add_skill.php" method="post"  >
    <table>
        <tr>
            <td>技能名稱</td>
            <td>技能分數</td>
            <td>分類</td>
        </tr>
        <tr>
            <td><input type="text" name="skill[]"></td>
            <td><input type="text" name="score[]"></td>
            <td>分類
            <select name="sort[]" >
                <option value="front">前端</option>
                <option value="backend">後端</option>
            </select></td>
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
            <td><input type="text" name="skill[]"></td>
            <td><input type="text" name="score[]"></td>
            <td>分類
            <select name="sort[]" >
                <option value="front">前端</option>
                <option value="backend">後端</option>
            </select></td>
        </tr>
        `
        $("#btn").before(str);
    }
</script>