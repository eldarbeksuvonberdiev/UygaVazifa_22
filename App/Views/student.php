<h1>CategoryController about controller</h1>
<form action="/screate" method="post" enctype="multipart/form-data">
    <h3>Talaba Create</h3>
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="number" name="tel" placeholder="Telefon raqami"><br><br>
    <input type="text" name="manzil" placeholder="Manzil"><br><br>
    <input type="file" name="img"><br><br>
    <input type="submit" name="ok" value="Save"><br>
</form><br>
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