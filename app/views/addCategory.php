<form autocomplete="off" action="<?= BASE_URL ?>/category/insertCategory" method="POST">

    <table>
        <tr>
            <td>Title:</td>
            <td><input type="text" required="1" name="title"></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" required="1" name="desc" ></td>
        </tr>
        <tr>
            <td><input type="submit" name="addCategory" value="Insert"></td>
        </tr>
    </table>
</form>