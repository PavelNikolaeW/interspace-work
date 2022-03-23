<header class="header" id="header ">
  <div class="header__body ">
    <div class="header__container container">
      <div class="header__content">
        <a href="https://interspace-work.ru/" class="header__logo logo "><img class=" logo__img " src=" ./img/logo.png "></a>
        <nav class=" header__nav">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#upload_file">
            фото
          </button>
          <form action=" ../admin.php" method="post">
            <input type="hidden" name="exit" value="1">
            <button type="submit" class="btn btn-danger">Выйти</button>
          </form>
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="upload_file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Загрузка фото</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./actions/uploadFile.php" method="post" enctype="multipart/form-data">
        <div class="modal-body upload">
          <label for="job">Фото для вакансии
            <input type="radio" name="folder" id="job" value="job" checked>
          </label>
          <label for="employer">Фото для работадателя
            <input type="radio" name="folder" value="employer" id="employer">
          </label>
          <input type="file" name="file">
          <input type="file" name="file">
          <input type="file" name="file">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>