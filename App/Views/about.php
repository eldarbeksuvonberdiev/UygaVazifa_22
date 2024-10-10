<h1>CategoryController about controller</h1>
<table width="80%" align="center" border="2">
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
            <td><?=$model->id?></td>
            <td><?=$model->name?></td>
            <td>
                <a href="/show"><button>Show</button></a>
            </td>
            <td>
            <a href="/edit"><button>Edit</button></a>
            </td>
            <td>
            <a href="/delete"><button>Delete</button></a>
            </td>
        </tr>
    <?php }
    ?>
</table>