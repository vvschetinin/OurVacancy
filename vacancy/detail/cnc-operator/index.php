<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/shared/header.php'; ?>

<section class="hero hero-inner vacancy-hero">
  <article class="hero-caption inner-page">
    <div class="hero-caption-inner">
      <div class="container">
        <div class="row">
          <div class="col-100">
            <h1 class="h1"><span>Вакансия</span></h1>
            <h3 class="subtitle">Оператор станков ЧПУ</h3>
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
            <p>График работы - 5/2 или 6/1 (по согласованию)</p>
            <p>Возможность работы вахтой - обсуждается</p>
            <p>Оплата сдельная: оклад + премия + 13-я зарплата</p>
            <p>Уровень зарплаты: от 55 000 до 70 000 рублей</p>
            <p>Оформление официальное, по трудовому законодательству РФ</p>
            <p>Предоставление жилья по необходимости</p>
            <p>Возможно дотирование расходов на съемное жилье</p>
          </div>
          <div class="description-block">
            <h4>Время работы:</h4>
            <p>с 6.00 до 15.00 часов</p>
            <p>с 15.00 до 24.00 часов</p>
            <p>Предусмотрено время на обед + перерывы</p>
            <p>Ротация смен по неделям</p>
          </div>
          <div class="description-block">
            <h4>Обязанности:</h4>
            <p>Обработка изделий на станке</p>
            <p>Работка с программами</p>
            <p>Чтение и прорисовка чертежей</p>
            <p>Загрузка, выгрузка металла</p>
            <p>Контроль за расходными материалами</p>
            <p>Проведение наладок станка</p>
            <p>Контроль за параметрами обработки металла</p>
            <p>Соблюдение норм выработки</p>
            <p>Выполнение поставленных задач</p>
          </div>
          <div class="description-block">
            <h4>Требования к кандидату:</h4>
            <p>Подтвержденный опыт работы по аналогичной специальности не менее 3 лет</p>
            <p>Знание правил наладки и технической эксплуатации обслуживаемого оборудования</p>
            <p>Знание электрических схем управления агрегатов</p>
          </div>
          <div class="description-block">
            <h4>Возможности обучения</h4>
            <p>Ты молод и полон сил, но у тебя пока мало опыта?</p>
            <p>Хочешь стать частью захватывающего мира сварки?</p>
            <p>Тогда у нас для тебя отличная новость!</p>
          </div>
          <p>При наличии достаточных базовых навыков и знаний - мы предоставим тебе возможность оплачиваемого обучения
            до
            профессионала высокого уровня!</p>
          <div class="description-epilog mt-05">
            <p>У нас ты получишь не только профессиональное обучение, но и возможность реализовать свой потенциал в
              динамичной и
              перспективной отрасли. Присоединяйся к нашей команде и стань частью увлекательного мира сварки!
              Подготовься к яркому
              будущему вместе с нами!</p>
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
