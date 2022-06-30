<?php 
    $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
    $result = $mysql->query("SELECT * FROM `realty_info` WHERE `relevance`='актуально' ORDER BY `price`  DESC"); 

    while($row = $result->fetch_assoc()){
        echo '
        <div class="row mb-5">
        <div class="col-md-3"><img src="' . $row[img] . '" alt=""></div>
        <div class="col">
            <h3 class="realty_item_title">' . $row[title] . '</h3>
            <p class="realty_item_address">' . $row[address] . '</p>
            <p class="realty_item_description">' . $row[description] . '</p>
            <p class="realty_item_price h5">' . $row[price] . '</p>
        </div>
        </div>';
    }
    $mysql->close();
?>

