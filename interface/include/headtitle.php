<?php if ($_SERVER["REQUEST_URI"] == '/'): ?>
<title>ЗМК МАМИ Вакансии | Главная</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/'): ?>
<title>ЗМК МАМИ Вакансии | Список вакансий</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php elseif ($_SERVER["REQUEST_URI"] == '/news/'): ?>
<title>ЗМК МАМИ Вакансии | Новости</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php elseif ($_SERVER["REQUEST_URI"] == '/contacts/'): ?>
<title>ЗМК МАМИ Вакансии | Контакты</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<!-- Детальные вакансии -->

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/welder/'): ?>
<title>ЗМК МАМИ Вакансии | Сварщик на полуавтомат</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/painter/'): ?>
<title>ЗМК МАМИ Вакансии | Маляр по металлу</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/packer/'): ?>
<title>ЗМК МАМИ Вакансии | Упаковщик на производство</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/otc-head/'): ?>
<title>ЗМК МАМИ Вакансии | Начальник ОТК</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/normalizer/'): ?>
<title>ЗМК МАМИ Вакансии | Инженер-нормировщик</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/metalassembler/'): ?>
<title>ЗМК МАМИ Вакансии | Сборщик металлоконструкций</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/cranedriver/'): ?>
<title>ЗМК МАМИ Вакансии | Машинист крана</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/cnc-operator/'): ?>
<title>ЗМК МАМИ Вакансии | Оператор станков ЧПУ</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">

<!-- Error Page -->

<?php else: ?>
<title>Error Page | Страница 404</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php endif; ?>
