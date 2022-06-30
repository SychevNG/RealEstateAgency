<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Риэлторское агентство</title>
    <!-- стили -->
    <?php include "includes/allstyles.php"?>
</head>
<body>
    <!-- хэдер -->
    <?php include "includes/header.php" ?>
    <!-- блок объевлений -->
    <div class="container-xxl">
    <!-- кнопки для объявлений -->
        <div class="row mb-5">
          <div class="col-1 ">
              <a href="#" class="nav-link active unic_button expansive_button" aria-current="page">Дороже</a>
          </div>
          <div class="col-1 ">
              <a href="#" class="nav-link active unic_button cheap_button" aria-current="page">Дешевле</a>
          </div>                 
          <div class="col-5  ">
              <input type="text" placeholder="поиск по адресу" class="search_input" name="address" id="address">
              <button type="button" class="unic_button search_button">Поиск</button>
          </div>        
        </div>
    <!-- объявления -->
      <div class="realty_list" id="result">
      <?php 
          $mysql = new mysqli('localhost', 'root', 'root', 'realdy_db');
          $result = $mysql->query("SELECT * FROM `realty_info` WHERE `relevance`='актуально'"); 
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
      </div>
    </div>
  <!-- футер-->
  <?php include "includes/footer.php" ?>
  <!-- jquery, bootstrap, scriptjs -->
  <?php include "includes/allscripts.php" ?>
</body>
</html>