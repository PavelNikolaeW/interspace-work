    <div class="container">
      <div class="body">
        <!-- Button trigger modal job-->
        <button type="button" class="add btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_job">Добавить новую вакансию</button>
        <!-- Modal add new job -->
        <div class="modal fade " id="add_job" tabindex="-1">
          <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
              <form id="add_job" method="post" enctype="multipart/form-data" action="./actions/newJob.php">
                <div class="modal-header">
                  <h5 class="modal-title h4">Добавить новую вакансию.</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="h5">Описание</th>
                        <th class="h5">Поле ввода</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Название</td>
                        <td><input type="text" name="title" placeholder="Title" /></td>
                      </tr>
                      <tr>
                        <td>ID Работадателя</td>
                        <td>
                          <select name="id_employer" class="form-select">
                            <?php foreach ($employers as $employer) : ?>
                              <option value="<?php echo $employer['id'] ?>"><?php echo $employer['title'] ?></option>
                            <?php endforeach; 
                            unset($employer);
                            ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>Подробное описание вакансии</td>
                        <td><textarea class="my-textarea" type="text" rows="5" cols="80" name="job_des" placeholder=""></textarea></td>
                      </tr>
                      <tr>
                        <td>Город</td>
                        <td><input type="text" name="city" placeholder="Bytów (Бытув)" /></td>
                      </tr>
                      <tr>
                        <td>Минимальная оплата в час</td>
                        <td><input type="text" name="hoverly_pay_min" placeholder="12" /></td>
                      </tr>
                      <tr>
                        <td>Максимальная оплата в час</td>
                        <td><input type="text" name="hoverly_pay_max" placeholder="15" /></td>
                      </tr>
                      <tr>
                        <td>Количество рабочих дней в неделю мин.</td>
                        <td><input type="text" name="work_days_min" placeholder="5" /></td>
                      </tr>
                      <tr>
                        <td>Количество рабочих дней в неделю макс.</td>
                        <td><input type="text" name="work_days_max" placeholder="6" /></td>
                      </tr>
                      <tr>
                        <td>Количество рабочих часов в день мин.</td>
                        <td><input type="text" name="hour_min" placeholder="8" /></td>
                      </tr>
                      <tr>
                        <td>Количество рабочих часов в день макс.</td>
                        <td><input type="text" name="hour_max" placeholder="12" /></td>
                      </tr>
                      <tr>
                        <td>Фотографии (название файлов через пробел)</td>
                        <td><input type="text" name="job_image" placeholder="image.png" /></td>
                      </tr>
                      <tr>
                        <td>Загрузка фото</td>
                        <td><input type="file" name="img1" multiple /></td>
                      </tr>
                      <tr>
                        <td>Загрузка фото</td>
                        <td><input type="file" name="img2" /></td>
                      </tr>
                      <tr>
                        <td>Загрузка фото</td>
                        <td><input type="file" name="img3" /></td>
                      </tr>
                      <tr>
                        <td>Описание жилья</td>
                        <td><textarea class="my-textarea" type="text" name="housing_des" rows="4" cols="80" placeholder="Хослет рядом с работой"></textarea></td>
                      </tr>
                      <tr>
                        <td>Цена жилья</td>
                        <td><input type="text" name="price_home" placeholder="300 zl" /></td>
                      </tr>
                      <tr>
                        <td>Можно ли приехать на работу по биометр. паспорту</td>
                        <td><input type="text" name="passport" placeholder="Требуется виза" /></td>
                      </tr>
                      <tr>
                        <td>Нужен ли опыт работы</td>
                        <td><input type="text" name="opyt" placeholder="Без опыта" /></td>
                      </tr>
                      <tr>
                        <td>Подходящий возраст</td>
                        <td><input type="text" name="age" placeholder="От 18 - 50" /></label></td>
                      </tr>
                      <tr>
                        <td>Кто требуется на работу (мужчины, женщины, студенты)</td>
                        <td><input type="text" name="for_who" placeholder="Для мужчин/женщин" /></td>
                      </tr>
                      <tr>
                        <td>Нужно ли знание языка</td>
                        <td><input type="text" name="lang" placeholder="Знание языка не требуется" /></td>
                      </tr>
                      <tr>
                        <td>Предоставляеться ли фирмой питание</td>
                        <td><input type="text" name="food" placeholder="Питание не предоставляется" /></td>
                      </tr>
                      <tr>
                        <td>Есть ли транспорт до работы от фирмы</td>
                        <td><input type="text" name="transfer" placeholder="Жилье рядом с работой" /></td>
                      </tr>
                      <tr>
                        <td>Предоставляют ли рабочую одежду</td>
                        <td><input type="text" name="work_clothes" placeholder="Рабочая одежда не предоставляется" /></td>
                      </tr>
                      <tr>
                        <td>Предоставляют помощь в оформлении документов</td>
                        <td><input type="text" name="help_documents" placeholder="Помогаем в оформлении документов" /></td>
                      </tr>
                      <tr>
                        <td>Форма трудоустройства</td>
                        <td><input type="text" name="form_employment" placeholder="Трудовой договор" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-danger">Добавить</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Table job-->
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="h4">ID</th>
              <th class="h4">Вакансии</th>
              <th class="h4">Дата создания</th>
              <th class="h4">Дата изменения</th>
              <th class="h4">Изменить</th>
              <th class="h4">Удалить</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($jobs as $job) :
              $employers = get_employer();
            ?>
              <tr>
                <th scope="row"><?php echo $job['id'] ?></th>
                <td><?php echo $job['title'] ?></td>
                <td><?php echo $job['add_date'] ?></td>
                <td><?php echo $job['change_date'] ?></td>
                <td>
                  <!-- Button trigger modal change-->
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo "job_id_change" . $job['id'] ?>">Изменить</button>
                </td>
                <td>
                  <!-- Button trigger modal dell-->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo "job_id_dell" . $job['id'] ?>">Delite</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
        <!-- Кнопка-триггер модального окна employer -->
        <button type="button" class="add btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_employer">Добавить нового работадателя</button>
        <!-- Модальное окно -->
        <div class="modal fade" id="add_employer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить нового работадателя.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
              </div>
              <form id="add_employer" method="post" enctype="multipart/form-data" action="./actions/newEmployer.php">
                <div class="modal-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="h5">Описание</th>
                        <th class="h5">Поле ввода</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Название комании</td>
                        <td><input type="text" name="title_emp" placeholder="title " /></td>
                      </tr>
                      <tr>
                        <td>Название загружаемого изображения</td>
                        <td><input type="text" name="img" placeholder="file" /></td>
                      </tr>
                      <tr>
                        <td>Логотип комании</td>
                        <td><input type="file" name="img_file" /></td>
                      </tr>
                      <tr>
                        <td>NIP:</td>
                        <td><input type="text" name="nip" placeholder="NIP:" /></td>
                      </tr>
                      <tr>
                        <td>Сайт</td>
                        <td><input type="text" name="site" placeholder="www.example.com" /></td>
                      </tr>
                      <tr>
                        <td>Контактное лицо</td>
                        <td><input type="text" name="person" placeholder="Имя фамилия" /></td>
                      </tr>
                      <tr>
                        <td>Телеграмм контактного лица</td>
                        <td><input type="text" name="telegram" placeholder="@username" /></td>
                      </tr>
                      <tr>
                        <td>Фейсбук контактного лица</td>
                        <td><input type="text" name="facebook" placeholder="https://www.facebook.com/profile.php?id=4984654351" /></td>
                      </tr>
                      <tr>
                        <td>Ватсап контактного лица</td>
                        <td><input type="text" name="whatsapp" placeholder="+48999999999"/></td>
                      </tr>
                      <tr>
                        <td>Вайбер контактного лица</td>
                        <td><input type="text" name="viber" placeholder="+48999999999" /></td>
                      </tr>
                      <tr>
                        <td>Телефон компании</td>
                        <td><input type="text" name="tel" placeholder="+48999999999" /></td>
                      </tr>
                      <tr>
                        <td>Эмейл</td>
                        <td><input type="text" name="email" placeholder="email" /></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Table employer-->
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th class="h4">ID</th>
              <th class="h4">Работадатель</th>
              <th class="h4">Дата создания</th>
              <th class="h4">Дата изменения</th>
              <th class="h4">Изменить</th>
              <th class="h4">Удалить</th>
            </tr>
          </thead>
          <tbody>
            <?php $employers = get_employer(); ?>
            <?php foreach ($employers as $employer) : ?>
              <tr>
                <th scope="row"><?php echo $employer['id'] ?></th>
                <td><?php echo $employer['title'] ?></td>
                <td><?php echo $employer['add_date'] ?></td>
                <td><?php echo $employer['change_date'] ?></td>
                <td>
                  <!-- Button trigger modal change-->
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo "employer_id_change" . $employer['id'] ?>">Изменить</button>
                </td>
                <td>
                  <!-- Button trigger modal dell-->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo "employer_id_dell" . $employer['id'] ?>">Delite</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  
  <!-- modal job -->
  <?php
  $jobs = get_jobs();
  foreach ($jobs as $job) :
    $employers = get_employer(); ?>
    <div class="modal fade " id="<?php echo "job_id_change" . $job['id'] ?>" tabindex="-1">
      <div class="modal-dialog modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Вы хотите изменить: <?php echo $job['title'] . " ID: " . $job['id'] ?> </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="change_job" action="./actions/changeJob.php" method='post'>
            <div class="modal-body">
              <div class="my-item">
                <label>
                  Название:
                </label>
                <input type="text" name="title" value="<?php echo $job['title']; ?>" />
              </div>
              <div class="my-item">
                <label>
                  ID Работадателя:
                </label>
                <select name="id_employer" class="form-select">
                  <?php foreach ($employers as $employer) : ?>
                    <?php
                      if ($employer['id'] == $job['id_employer']) {
                        echo '<option selected value="'.$employer['id'].'">'.$employer['title'].'</option>';
                      } else {
                          echo '<option value="'.$employer['id'].'">'.$employer['title'].'</option>';
                      }
                      ?>
                  <?php endforeach; ?>

                </select>
              </div>
              <div class="my-item">
                <label>
                  Подробное описание вакансии:
                </label>
                <textarea type="text" name="job_des"><?php echo $job['job_des']; ?></textarea>
              </div>
              <div class=" my-item">
                <label>
                  Город:
                </label>
                <input type="text" name="city" value="<?php echo $job['city']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Для кого:
                </label>
                <input type="text" name="for_who" value="<?php echo $job['for_who']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Минимальная оплата в час:
                </label>
                <input type="text" name="hoverly_pay_min" value="<?php echo $job['hoverly_pay_min']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Максимальная оплата в час:
                </label>
                <input type="text" name="hoverly_pay_max" value="<?php echo $job['hoverly_pay_max']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Количество рабочих дней в неделю мин. :
                </label>
                <input type="text" name="work_days_min" value="<?php echo $job['work_days_min']; ?>" />
              </div>
              <div class="my-item">
                <label>
                  Количество рабочих дней в неделю макс. :
                </label>
                <input type="text" name="work_days_max" value="<?php echo $job['work_days_max']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Количество рабочих часов в день мин. :
                </label>
                <input type="text" name="hour_min" value="<?php echo $job['hour_min']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Количество рабочих часов в день макс.:
                </label>
                <input type="text" name="hour_max" value="<?php echo $job['hour_max']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Фотографии (название файлов через пробел):
                </label>
                <input type="text" name="job_image" value="<?php echo $job['job_image']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Описание жилья:
                </label>
                <textarea type="text" name="housing_des"><?php echo $job['housing_des']; ?></textarea>
              </div>
              <div class=" my-item">
                <label>
                  Цена жилья:
                </label>
                <input type="text" name="price_home" value="<?php echo $job['price_home']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Можно ли приехать на работу по биометр. паспорту:
                </label>
                <input type="text" name="passport" value="<?php echo $job['passport']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Нужен ли опыт работы:
                </label>
                <input type="text" name="opyt" value="<?php echo $job['opyt']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Подходящий возраст:
                </label>
                <input type="text" name="age" value="<?php echo $job['age']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Кто требуется на работу (мужчины, женщины, студенты):
                </label>
                <input type="text" name="for_who" value="<?php echo $job['for_who']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Нужно ли знание языка:
                </label>
                <input type="text" name="lang" value="<?php echo $job['lang']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Предоставляеться ли фирмой питание:
                </label>
                <input type="text" name="food" value="<?php echo $job['food']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Есть ли транспорт до работы от фирмы:
                </label>
                <input type="text" name="transfer" value="<?php echo $job['transfer']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Предоставляют ли рабочую одежду:
                </label>
                <input type="text" name="work_clothes" value="<?php echo $job['work_clothes']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Предоставляют помощь в оформлении документов:
                </label>
                <input type="text" name="help_documents" value="<?php echo $job['help_documents']; ?>" />
              </div>
              <div class=" my-item">
                <label>
                  Форма трудоустройства:
                </label>
                <input type="text" name="form_employment" value="<?php echo $job['form_employment']; ?>" />
              </div>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
              <input type="hidden" name="id" value="<?php echo $job['id'] ?>">
              <button type="sumbit" class="btn btn-danger">Применить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="<?php echo "job_id_dell" . $job['id'] ?>" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Удаление</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body h3">
            <p>Вы хотите удалить: <br> <?php echo "   ". $job['title'] . " ID: " . $job['id'] . "?" ?> </p>
          </div>
          <form id="dell_job" action="./actions/dellJob.php" method='post'>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
              <input type="hidden" name="dell" value="<?php echo $job['id'] ?>">
              <button type="sumbit" class="btn btn-danger">Удалить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  
  <!-- modal employers -->
  <?php $employers = get_employer(); ?>
  <?php foreach ($employers as $employer) : ?>
    <div class="modal fade " id="<?php echo "employer_id_change" . $employer['id'] ?>" tabindex="-1">
      <div class="modal-dialog modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Вы хотите изменить: <?php echo $employer['title'] . " ID: " . $employer['id'] ?> </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="change_employer" action="./actions/changeEmployer.php" method='post'>
            <div class="modal-body">
              <div class="my-item">
                <label>
                  Название комании:
                </label>
                <input type="text" name="title" value="<?php echo $employer['title']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Название загружаемого изображения:
                </label>
                <input type="text" name="img" value="<?php echo $employer['img']; ?>" />
              </div>
              <div class="my-item">
                <label>
                NIP:
                </label>
                <input type="text" name="nip" value="<?php echo $employer['nip']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Сайт:
                </label>
                <input type="text" name="site" value="<?php echo $employer['site']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Контактное лицо:
                </label>
                <input type="text" name="person" value="<?php echo $employer['person']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Телеграмм контактного лица:
                </label>
                <input type="text" name="telegram" value="<?php echo $employer['telegram']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Фейсбук контактного лица:
                </label>
                <input type="text" name="facebook" value="<?php echo $employer['facebook']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Ватсап контактного лица:
                </label>
                <input type="text" name="whatsapp" value="<?php echo $employer['whatsapp']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Вайбер контактного лица:
                </label>
                <input type="text" name="viber" value="<?php echo $employer['viber']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Телефон компании:
                </label>
                <input type="text" name="tel" value="<?php echo $employer['tel']; ?>" />
              </div>
              <div class="my-item">
                <label>
                Эмейл:
                </label>
                <input type="text" name="email" value="<?php echo $employer['email']; ?>" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
              <input type="hidden" name="id" value="<?php echo $employer['id'] ?>">
              <button type="sumbit" class="btn btn-danger">Применить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="<?php echo "employer_id_dell" . $employer['id'] ?>" tabindex="-1">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Удаление</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body h3">
            <p>Вы хотите удалить:  <?php echo "   ". $employer['title'] . " ID: " . $employer['id'] . "?" ?> </p>
          </div>
          <form id="dell_employer" action="./actions/dellEmployer.php" method='post'>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
              <input type="hidden" name="dell" value="<?php echo $employer['id'] ?>">
              <button type="sumbit" class="btn btn-danger">Удалить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>