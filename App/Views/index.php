<h1>Fanlar</h1>
<h3>Yangi fan qo'shish</h3>
<form action="/create" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" name="ok" value="Save">
</form><br>
<table width="80%" align="center" border="2" style="background-color: antiquewhite;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($models as $model) { ?>
        <tr>
            <td><?= $model->id ?></td>
            <td><?= $model->name ?></td>
            <td>
                <form action="/show" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="SHOW">
                </form>
            </td>
            <td>
                <form action="/edit" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="EDIT">
                </form>
            </td>
            <td>
                <form action="/delete" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="DELETE">
                </form>
            </td>
        </tr>
    <?php }
    ?>
</table>