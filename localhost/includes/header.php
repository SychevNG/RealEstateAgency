<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    <span class="fs-4">Риелторское агенство</span>
  </a>
<?php if($_COOKIE['user'] == ''): ?>
  <ul class="nav nav-pills">
    <li class="nav-item me-2"><a href="http://localhost/" class="nav-link active" aria-current="page">Главная</a></li>
    <li class="nav-item me-2"><a href="logpage.php" class="nav-link active" aria-current="page">Войти</a></li>
  </ul>
<?php  else: ?>
  <ul class="nav nav-pills">
    <li class="nav-item me-2"><a href="http://localhost/" class="nav-link active" aria-current="page">Главная</a></li>
    <li class="nav-item me-2"><a href="management.php" class="nav-link active" aria-current="page">Управление</a></li>
    <li class="nav-item me-2"><a href="regorlogin\exit.php" class="nav-link active" aria-current="page">Выйти</a></li>
  </ul>
<?php  endif; ?> 
</header>