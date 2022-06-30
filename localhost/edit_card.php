<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление недвижимости</title>
    <?php include "includes/allstyles.php" ?>
</head>
<body >    
    <div class="row">
        <div class="col">   
            <div class="container mt-5">
                <div class="form_container">
                    <h2>Форма редактирования недвижимости</h2>
                <form action="cardconfig/editconfig.php" method="post" class="reg_form mt-5">
                    <h4>Id изменяемого объекта</h4>
                    <input type="text" class="form-control mb-3" name="id" id="id" placeholder="Введите id"></br>
                    <h4>Новые параметры объекта</h4>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Введите название"></br>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Введите адрес"></br>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Введите описание"></br>
                    <input type="text" class="form-control" name="img" id="img" placeholder="Расположение изобр"></br>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Введите цену"></br>
                    <input type="text" class="form-control" name="relevance" id="relevance" placeholder="Актуально/неактуально"></br>
                    <!--Фотки добавляются по пути, потому что так быстрее, хоть и не правильно-->
                    <button class="button-success btn btn-info mb-2" type="submit">Изменить</button>
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