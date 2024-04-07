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
<?php elseif ($_SERVER["REQUEST_URI"] == '/vacancy/detail/welder/'): ?>
<title>ЗМК МАМИ Вакансии | Сварщик на полуавтомат</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php else: ?>
<title>Error Page | Страница 404</title>
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="description" content="">
<?php endif; ?>
