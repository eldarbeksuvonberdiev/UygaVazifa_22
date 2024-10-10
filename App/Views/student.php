<h1>CategoryController about controller</h1>
<table width="80%" align="center" border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Telefon raqami</th>
        <th>Manzil</th>
        <th>Image</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach ($models as $model) { ?>
        <tr>
            <td><?= $model->id ?></td>
            <td><?= $model->name ?></td>
            <td><?= $model->tel ?></td>
            <td><?= $model->manzil ?></td>
            <td><?= $model->img ?></td>
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