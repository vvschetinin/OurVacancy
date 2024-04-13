<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero-inner vacancy-hero">
  <article class="hero-caption inner-page">
    <div class="hero-caption-inner">
      <div class="container">
        <div class="row">
          <div class="col-100">
            <h1 class="h1"><span>Вакансия</span></h1>
            <h3 class="subtitle">Начальник ОТК</h3>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

<section class="section-type">
  <div class="container">
    <div class="row justify-center--lg">
      <article class="col-100 item-detail">
        <?php if (file_exists($root . '/template/components/employer.php')) : ?>
        <?php require_once $root . '/template/components/employer.php'; ?>
        <?php endif; ?>
        <div class="description bg-white">
          <h3>Описание вакансии</h3>
          <div class="description-block">
            <h4>Условия:</h4>
            <p>Работа на заводе металлоконструкций в г. Ивантеевка на улице Ленина 44</p>
            <p>График работы - 5/2</p>
            <p>Заработная плата - полностью белая, выплаты 2 раза в месяц на карту</p>
            <p>Выплаты 13-й зарплаты + ежемесячные премии по результатам работы</p>
            <p>Уровень зарплаты: от 80 000 до 100 000 рублей</p>
            <p>Оформление официальное, по трудовому кодексу РФ</p>
            <p>Возможно дотирование расходов на съемное жилье</p>
          </div>
          <div class="description-block">
            <h4>Время работы:</h4>
            <p>с 8.00 до 17.00 часов</p>
            <p>Предусмотрено время на обед + перерывы</p>
          </div>
          <div class="description-block">
            <h4>Обязанности:</h4>
            <p>Обеспечение контроля качества на всех стадиях производственного процесса</p>
            <p>Организация входной приемки металла от поставщиков</p>
            <p>Подготовка и разбор рекламаций</p>
            <p>Контроль за состоянием контрольно-измерительных средств</p>
            <p>Организация работ по оформлению результатов контрольных операций</p>
            <p>Ведение учета показателей качества продукции, брака и его причин</p>
          </div>
          <div class="description-block">
            <h4>Требования к кандидату:</h4>
            <p>Высшее техническое образование, знание технологий металлообработки</p>
            <p>Знание механического производства</p>
            <p>Знание нормативных и методических документов, регламентирующих профильные вопросы качества продукции</p>
            <p>Умение анализировать и разрабатывать нормативные документы</p>
            <p>Навыки работы с конструкторской документацией</p>
            <p>Опытный пользователь офисных программ</p>
            <p>Стаж работы по специальности на руководящих должностях от пяти лет</p>
          </div>
          <div class="description-epilog mt-05">
            <p>У нас вы получите возможность реализовать свой потенциал в динамичной и
              перспективной отрасли. Присоединяйтесь к нашей команде!</p>
            <h4 class="mt-1">Ждем твое резюме!</h4>
          </div>
          <div class="button-wrap mt-2">
            <a href="#formsend" class="btn btn-bg--contur">
              <span class="btn-text" style="padding-right: 0;">Откликнуться</span>
            </a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<?php require_once $root . '/template/shared/footer.php'; ?>
