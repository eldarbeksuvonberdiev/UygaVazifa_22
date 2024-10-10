<form action="/update" method="post">
    <input type="text" name="id" value="<?=$models->id?>" readonly>
    <input type="text" name="name" value="<?=$models->name?>">
    <input type="submit" name='ok' value="Save">
</form>