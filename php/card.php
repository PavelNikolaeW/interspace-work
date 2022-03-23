<?php
include_once "db.php";
$jobs = get_jobs();

foreach ($jobs as $job) : ?>
  <?php $employer = get_employer_by_id($job['id_employer']); ?>
  <div class="card mt-5 my-card">
    <div class="card__sections">
      <div class="card__remain">
        <!-- card-body -->
        <div class="card-body">
          <h3 class="card-title h3"><?php echo $job['title'] ?></h3>
          <!-- dropdown -->
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              $salary = get_monthly_salary($job);
              echo $salary[" PLN "]; ?>
            </button>
            <ul class="dropdown-menu text-center ">
              <li><?php echo $salary[" USD ≈ "] ?></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><?php echo $salary[" BLR ≈ "] ?></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><?php echo $salary[" RUB ≈ "] ?></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><?php echo $salary[" UAH ≈ "] ?></li>
            </ul>
          </div>
          <!-- list -->
          <ul class="list-group ">
            <li class="list-group-item p-2">
              <div class="city">
                <img class="city__icon" src='./img/icons/geo-alt.svg' alt="icon ">
                <a class="city__link" target="_blank " href=https://www.google.ru/maps/place/<?php echo $job['city'] ?>>
                  <img class="city__flag" src='./img/flags/Poland.png' alt="flag poland">
                  <?php echo $job['city'] ?>
                </a>
              </div>
            </li>
            <li class="list-group-item p-2">
              <img src='./img/icons/calendar2-week.svg' alt="icon ">
              <?php echo get_work_time($job) ?>
            </li>
            <li class="list-group-item p-2">
              <img src='./img/icons/cash-stack.svg' width="20px " alt="icon ">
              <?php echo get_hoverly_pay($job) ?>
            </li>
            <li class="list-group-item p-2"><img src='./img/icons/house-fill.svg' alt="icon ">
              <?php echo get_price_home($job) ?>
            </li>
            <li class="list-group-item p-2">
              <ul class="icons">
                <a class="btn btn-outline-secondary icons__item" href="<?php echo $employer['facebook']?>" target="_blank"><img src="./img/messengers/Facebook.png" alt="Facebook" class="icon__img"></a>
                <a class="btn btn-outline-secondary icons__item" href="tg://resolve?domain=<?php echo $employer['telegram']?>" target="_blank"><img src="./img/messengers/Telegram.png" alt="Telegram" class="icon__img"></a>

                <a class="btn btn-outline-secondary icons__item" href="https://wa.me/<?php echo $employer['whatsapp']?>" target="_blank"><img src="./img/messengers/WhatsApp.png" alt="WhatsApp" class="icon__img"></a>

                <a class="btn btn-outline-secondary icons__item" href="viber://add?number=<?php echo $employer['viber']?>" target="_blank"><img src="./img/messengers/Viber.png" alt="Viber" class="icon__img"></a>
              </ul>
            </li>
          </ul>
          <!-- messages -->
          <h4 class="card-title h4">Описание</h4>
          <div class="card-text">
            <?php echo mb_substr($job['job_des'], 0, 280, "utf-8") . " ... &#8595;"; ?>
          </div>
        </div>
      </div>
      <div class="card__slider">
        <!-- slider -->
        <?php include "./php/slider.php" ?>
      </div>
    </div>
    <!-- footer -->
    <div class="card-footer">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="<?php echo "#card_id_" . $job['id'] ?>">
        Подробней
      </button>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="<?php echo "card_id_" . $job['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h3" id="exampleModalLabel"><?php echo $job['title'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="popup__column">
            <div class="popup__job">
              <div class="requirements">
                <h4 class="h4">Описание вакансии</h4>
                <p><?php echo $job['job_des'] ?></p>
              </div>
              <div class="requirements">
                <h4 class="h4">Требования</h4>
                <ul class="requirements__list">
                  <li class="requirements__item">
                    <p>По биометр. паспорту</p>
                    <p><?php echo $job['passport'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Опыт работы</p>
                    <p><?php echo $job['opyt'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Возраст</p>
                    <p><?php echo $job['age'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Язык</p>
                    <p><?php echo $job['lang'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>График</p>
                    <p><?php echo get_work_time($job) ?></p>
                  </li>
                </ul>
              </div>
              <div class="requirements">
                <h4 class="h4">Мы предлогаем</h4>
                <ul class="requirements__list">
                  <li class="requirements__item">
                    <p>Питание</p>
                    <p><?php echo $job['food'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Жилье</p>
                    <p><?php echo $job['price_home'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Транспорт до работы</p>
                    <p><?php echo $job['transfer'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Рабочая одежда</p>
                    <p><?php echo $job['work_clothes'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Помощь с документами</p>
                    <p><?php echo $job['help_documents'] ?></p>
                  </li>
                  <li class="requirements__item">
                    <p>Форма трудоустройства</p>
                    <p><?php echo $job['form_employment'] ?></p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="employer">
              <div class="employer__head">
                <h2 class="employer__title">
                  <?php echo $employer['title']?>
                  <img class="employer__img __ibg" src="./img/employer/<?php echo $employer['img']?>" alt="лого организации">
                </h2>
                <a class="employer__licence" target="_blank" href="https://krs-pobierz.pl/szukaj?q=<?php echo str_replace(" ", "+", $employer['title'])?>">NIP:<?php echo $employer['nip']?></a>
              </div>
              <ul class="employer__body">
                <li class="employer__item">
                  <h3>сайт органиции</h3>
                  <a class="employer__link" href="https://<?php echo $employer['site']?>"><?php echo $employer['site']?></a>
                </li>
                <li class="employer__item">
                  <h3>Контактное лицо<h3>
                      <p><?php echo $employer['person']?></p>
                </li>
                <li class="employer__item">
                  <h3>Номер телефона</h3>
                  <p><?php echo $employer['tel']?></p>

                </li>
                <li class="employer__item">
                  <h3>Email</h3>
                  <p><?php echo $employer['email']?></p>
                </li>
              </ul>
              <p class="employer__face"></p>

            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <ul class="icons">
            <a class="btn btn-outline-secondary icons__item" href="#" target="_blank"><img src="./img/messengers/Facebook.png" alt="Facebook" class="icon__img"></a>
            <a class="btn btn-outline-secondary icons__item" href="#" target="_blank"><img src="./img/messengers/Telegram.png" alt="Telegram" class="icon__img"></a>
            <a class="btn btn-outline-secondary icons__item" href="#" target="_blank"><img src="./img/messengers/WhatsApp.png" alt="WhatsApp" class="icon__img"></a>
            <a class="btn btn-outline-secondary icons__item" href="#" target="_blank"><img src="./img/messengers/Viber.png" alt="Viber" class="icon__img"></a>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>