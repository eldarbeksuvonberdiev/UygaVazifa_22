<h2>Talaba ma'lumotlarini tahrirlash</h2>
<form action="/supdate" method="post">
    ID: <br><input type="text" name="id" value="<?= $models->id ?>" readonly><br><br>
    Name: <br><input type="text" name="name" value="<?= $models->name ?>"><br><br>
    Password: <br><input type="text" name="password" value="<?= $models->password ?>"><br><br>
    Telefon: <br><input type="number" name="tel" value="<?= $models->tel ?>"><br><br>
    Manzil: <br><input type="text" name="manzil" value="<?= $models->manzil ?>"><br><br>
    Rasm: <br><img src="<?=$models->img?>" alt="" width="150px"><br><br>
    Yangi rasm: <br><input type="file" name="img"><br><br>
    <input type="hidden" name="rasm" value="<?=$models->img?>">
    <input type="submit" name='ok' value="Save">
</form>