<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <?php if (file_exists($root . "/interface/include/headtitle.php")) : ?>
  <?php require_once $root . '/interface/include/headtitle.php'; ?>
  <?php endif; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <link rel="shortcut icon" href="/assets/images/general/favicon.jpg" type="image/ico">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/addstyle.css">
</head>

<body>
  <div class="page-wrap">

    <header class="header">
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-100 flex justify-between items-center">
              <div class="flex items-center">
                <a href="/">
                  <div class="mainlogo-wrap">
                    <img src="/assets/images/general/logo-main.jpg" class="logo-main" alt="">
                  </div>
                </a>
                <ul class="ourname display-none display-block--lg">
                  <li>Завод</li>
                  <li>Металлоконструкций</li>
                  <li>МАМИ</li>
                </ul>
              </div>
              <nav class="desktop-nav">
                <div class="desktop-nav-inner">
                  <ul class="main-menu display-none flex--lg">
                    <li class="menu-item"><a href="/vacancy/">Список вакансий</a></li>
                    <!-- <li class="menu-item"><a href="/news/">Новости</a></li> -->
                    <li class="menu-item btn-item"><a href="/contacts/">Связаться</a></li>
                  </ul>
                  <button class="header-toggle js-nav-toggle">
                    <span class="header-toggle-icon">
                      <i class="header-toggle-icon-line"></i>
                      <i class="header-toggle-icon-line"></i>
                      <i class="header-toggle-icon-line"></i>
                    </span>
                  </button>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <nav class="mobil-nav">
      <div class="mobil-nav-inner font-light">
        <ul class="menu-mobil">
          <li class="menu-item"><a href="/">Главная</a></li>
          <li class="menu-item"><a href="/vacancy/">Список вакансий</a></li>
          <!-- <li class="menu-item"><a href="/news/">Новости</a></li> -->
          <li class="menu-item"><a href="/contacts/">Контакты</a></li>
        </ul>
      </div>
    </nav>

    <div class="content-wrap">