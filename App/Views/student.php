<h1>Talabalar</h1>
<form action="/tocreate" method="post">
    <input type="submit" name="ok" value="Create New">
</form><br>
<table width="80%" align="center" border="2" style="background-color: antiquewhite;">
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
            <td><img src="<?= $model->img ?>" alt="" width="100px"></td>
            <td>
                <form action="/sshow" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="SHOW">
                </form>


            </td>
            <td>
                <form action="/sedit" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="EDIT">
                </form>
            </td>
            <td>
                <form action="/sdelete" method="post">
                    <input type="hidden" name="id" value="<?= $model->id ?>">
                    <input type="submit" name="ok" value="DELETE">
                </form>
            </td>
        </tr>
    <?php }
    ?>
</table>