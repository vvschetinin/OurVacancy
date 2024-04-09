<section class="section-type send bg-gray" id="formsend">
  <div class="container">
    <div class="row">
      <div class="col-100 media-info">
        <figure class="form-img bg--cover" style="background-image: url(/assets/images/hero/form-img.jpg.webp);">
        </figure>
        <article class="cms-content">
          <h2 class="h2"><span>Ищете работу?</span></h2>
          <p>Отправьте нам свои данные, и мы свяжемся с вами</p>
          <form action="#" id="main-form" method="post" class="vacancy-form">
            <div class="form-body">
              <div class="success"><span></span></div>
              <ul class="form-enter">
                <li class="field-wrap">
                  <input type="text" name="name" placeholder="Ваше имя *" required>
                </li>
                <li class="field-wrap">
                  <input type="tel" name="phone" data-phone-pattern placeholder="Телефон *" required>
                </li>
                <li class="field-wrap">
                  <input type="email" name="email" placeholder="E-mail">
                </li>
                <li class="field-wrap">
                  <input type="text" name="vacancy" placeholder="Вакансия">
                </li>
                <li class="field-wrap">
                  <textarea name="message" rows="7" placeholder="Сообщение *" required></textarea>
                </li>
              </ul>
              <div class="checkbox-container flex mt-1">
                <input type="checkbox" name="formcheck" id="formcheck">
                <label for="formcheck">Я даю согласие на обработку предоставленных данных</label>
              </div>
            </div>
            <div class="form-footer mt-2">
              <button class="btn btn-bg--red btn-form" id="formbutton" disabled>
                <span class="btn-text">Отправить</span>&#10132;
              </button>
              <input type="hidden" class="form-hidden" name="project_name" value="Раздел вакансий ЗМК МАМИ">
              <input type="hidden" class="form-hidden" name="form_subject" value="Сообщение с формы обратной связи">
            </div>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>
