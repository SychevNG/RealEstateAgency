<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Риэлторское агентство</title>
    <!-- стили -->
    <?php include "includes/allstyles.php" ?>
</head>
<body >
    <!-- хэдер -->
    <?php include "includes/header.php" ?>
    <!-- блок объевлений -->
    <div class="container">
    <!-- кнопки объявлений -->
    <div class="row mb-5">
        <div class="col-1 ">
            <a href="add_card.php" class="nav-link active unic_button" aria-current="page">Добавить</a>
        </div>
        <div class="col-1 ">
            <a href="delete_card.php" class="nav-link active unic_button" aria-current="page">Удалить</a>
        </div>
        <div class="col-1 ">
            <a href="edit_card.php" class="nav-link active unic_button" aria-current="page">Изменить</a>
        </div>
    </div>
        <?php
            $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
            $result = $mysql->query("SELECT * FROM `realty_info`");
            while($row = $result->fetch_assoc()){
                echo '
                    <div class="realty_list">
                        <div class="row mb-5">
                            <div class="col-md-3"><img src="' . $row[img] . '" alt=""></div>
                            <div class="col ms-2">
                                <h3 class="realty_item_title">' . $row[title] . ' id: ' . $row[id] . '</h3>
                                <p class="realty_item_address">' . $row[address] . '</p>
                                <p class="realty_item_description">' . $row[description] . '</p>
                                <p class="realty_item_price h5 mb-4">' . $row[price] . '  руб.</p>
                                <h4>' . $row[relevance] . '</h4>
                            </div>
                        </div>
                    </div>';
        }
            $mysql->close();
        ?>        
    </div>
    <?php include "includes/footer.php"?>  
    <!-- jquery and bootstrap -->
    <?php include "includes/allscripts.php" ?>
</body>
</html>