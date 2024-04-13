<?php if (file_exists($root . '/template/forms/formsection.php')) : ?>
<?php require_once $root . '/template/forms/formsection.php'; ?>
<?php endif; ?>

</div>

<footer class="footer">
  <div class="container">
    <div class="row footer-nav justify-center">
      <ul class="col-100 menu">
        <li class="menu-item flex items-center"><span>&#9990;</span><a href="tel:+79687102812">+7 (968) 710-28-12</a>
        </li>
        <li class="menu-item flex items-center"><span>&#128386;</span><a
            href="mailto:shchetinin.v@zmk-mami.ru">shchetinin.v@zmk-mami.ru</a></li>
      </ul>
    </div>
    <div class="row footer-copyright justify-center">
      <ul class="col-100 address">
        <li>ZMK MAMI</li>
        <li>ИНН 0715970734</li>
        <li>Офис: МО, г. Пушкино, Московский проспект 57 корп. 4</li>
        <li>Зарегистрирован в России</li>
      </ul>
    </div>
    <div class="row justify-center mt-2">
      <ul class="col-100 flex footer-copyright-author mt-2">
        <li>&copy; 2024 ZMK MAMI</li>
        <li>
          <a class="logo-author" href="https://vschetinin.ru/" target="_blank" rel="noopener nofollow"
            title="Разработка сайта Владлен Щетинин">Разработка <span>vschetinin.ru</span></a>
        </li>
      </ul>
    </div>
    <div class="row text-center">
      <div class="col-100 logo-footer">
        <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
        <span class="logo-footer-link flex justify-center" href="/">
          <img src="/assets/images/general/logo-main.jpg" class="logo-main" alt="logo-main">
        </span>
        <?php else : ?>
        <a class="logo-footer-link flex justify-center" href="/">
          <img src="/assets/images/general/logo-main.jpg" class="logo-main" alt="logo-main">
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

</div>

<script type="module" crossorigin src="/assets/js/script.js"></script>
<?php if ($_SERVER["REQUEST_URI"] == '/vacancy/'): ?>
<script type="module" crossorigin src="/assets/js/addscript.js"></script>
<?php endif;?>

</body>

</html>
