<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление недвижимости</title>
    <?php include "includes/allstyles.php" ?>
</head>
<body >    
    <div class="row">
        <div class="col">   
            <div class="container mt-5">
                <div class="form_container">
                    <h2>Форма удаления недвижимости</h2>
                <form action="cardconfig/deleteconfig.php" method="post" class="reg_form mt-5">
                    <input type="text" class="form-control mb-3" name="id" id="id" placeholder="Введите id"></br>
                    <button class="button-success btn btn-info mb-2" type="submit">Удалить</button>
                    <div><a href="/">Главная</a></div>
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- jquery and bootstrap -->
<?php include "includes/allscripts.php" ?>
</body>
</html>