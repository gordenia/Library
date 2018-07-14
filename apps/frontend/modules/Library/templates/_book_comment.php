<div class="panel panel-default user-comment">
  <div class="panel-heading">
    Отзывы пользователей
  </div>
  <div class="panel-body comments">
    <form enctype="multipart/form-data" action="<?= url_for('Library/AddNewComment') ?>" method="POST">
      <input type="hidden" name = "bookId" value = "<?= $book->getBookId() ?>"/>
      <input type="hidden"  name="userId" value = "<?= $user->getUserId() ?>"/>
      <div class="form-group">
        <select name="rating" class="star-edit">
          <option value=""></option>
          <? for ($i = 1; $i <= 5; $i++) { ?>
            <option value = <?= $i ?>> <?= $i ?> </option>
          <? } ?>
        </select>
      </div>
      <textarea type="text" name="newComment"  class="form-control" placeholder="Оставьте Ваш отзыв" rows="5"></textarea>
      <br>
      <button type="submit" class="btn btn-default pull-right">Добавить отзыв</button>
    </form>

    <div class="clearfix"></div>
    <hr>
    <ul class="media-list">
      <? foreach ($bookCommentList as $bookComment): ?>
        <li class="media">
          <div class="comment">
            <div class="pull-left">
              <img src="<?= $bookComment->getUserAvatar() ?>" alt="<?= $bookComment->getUserName() ?>" class="icon-user img-circle">
            </div>
            <div class="media-body">
              <div class="user-data">
                <strong class="text-muted"><?= $bookComment->getUserName() ?></strong>
                <span class="text-muted date-comment">
                  <small class="text-muted"><?= $bookComment->getDateInsert() ?></small>
                </span>
              </div>
              <select class="star">
                <option value=""></option>
                <? for ($i = 1; $i <= 5; $i++) {
                  $selected = '';
                  if ($i == $bookComment->getBookRating())
                    $selected = 'selected'?>
                  <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
                <? } ?>
              </select>
              <p class="text">
                <?= $bookComment->getTextComment() ?>
              </p>
            </div>
            <input type="hidden" class = "comment_id" value = "<?= $bookComment->getCommentId() ?>"/>
            <? if (($user->getUserRole() == "admin") or ($user->getUserId() == $bookComment->getUserId())): ?>
              <a class="btn-link btn-del" title="Удалить отзыв">X</a>
            <? endif; ?>
            <div class="clearfix"></div>
          </div>
        </li>
      <? endforeach; ?>
    </ul>
  </div>
</div>
