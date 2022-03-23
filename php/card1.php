  <!-- Modal change employer -->
  <div class="modal " id="<?php echo "employer_id_change" . $employer['id'] ?>" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Вы хотите изменить: <?php echo $employer['title'] . " ID: " . $employer['id'] ?> </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="change_employer" action="./actions/changeEmployer.php" method='post'>
            <div class="modal-body">
              <div class="my-item">
                <label>
                  Название:
                </label>
                <input type="text" name="title" value="<?php echo $employer['title']; ?>" />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <input type="hidden" name="id" value=<?php echo $employer['id'] ?>>
                <button type="sumbit" class="btn btn-danger">Применить</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal dell employer -->
    <div class="modal " id="<?php echo "employer_id_dell" . $employer['id'] ?>" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h3">Удаление</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body h3">
            <p>Вы хотите удалить: <br> <?php echo $employer['title'] . " ID: " . $employer['id'] . "?" ?> </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <form id="dell_employer" action="./actions/dellEmployer.php" method='post'>
              <input type="hidden" name="dell" value=<?php echo $employer['id'] ?>>
              <button type="sumbit" class="btn btn-danger">Удалить</button>
            </form>
          </div>
        </div>
      </div>
    </div>