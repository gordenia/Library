<div class="panel panel-default user-comment">
  <div class="panel-heading">
    Отзывы пользователей
  </div>
  <div class="panel-body comments">
    <form enctype="multipart/form-data" action="<?= url_for('Library/AddNewComment') ?>" method="POST">
      <input type="hidden" name = "bookId" value = "<?= $book->getid_book() ?>"/>
      <input type="hidden"  name="userId" value = "<?= $user->getid_user() ?>"/>
      <div class="form-group">
        <select name="rating" class="star-edit">
          <option value=""></option>
          <?php for ($i = 1; $i <= 5; $i++) { ?>
            <option value = <?= $i ?>> <?= $i ?> </option>
          <?php } ?>
        </select>
      </div>
      <textarea type="text" name="newComment"  class="form-control" placeholder="Оставьте Ваш отзыв" rows="5"></textarea>
      <br>
      <button type="submit" class="btn btn-default pull-right">Добавить отзыв</button>
    </form>

    <div class="clearfix"></div>
    <hr>
    <ul class="media-list">
      <?php foreach ($book_comment_list as $book_comment): ?>
        <li class="media">
          <div class="comment">
            <div class="pull-left">
              <img src="<?= $book_comment->User->avatar ?>" alt="<?= $book_comment->User->name ?>" class="icon-user img-circle">
            </div>
            <div class="media-body">
              <div class="user-data">
                <strong class="text-muted"><?= $book_comment->User->name ?></strong>
                <span class="text-muted date-comment">
                  <small class="text-muted"><?= $book_comment->getdate_insert() ?></small>
                </span>
              </div>
              <select class="star">
                <option value=""></option>
                <?php for ($i = 1; $i <= 5; $i++) {
                  $selected = '';
                  if ($i == $book_comment->getrating())
                    $selected = 'selected'?>
                  <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
                <?php } ?>
              </select>
              <p class="text">
                <?= $book_comment->getcomment() ?>
              </p>
            </div>
            <input type="hidden" class = "comment_id" value = "<?= $book_comment->getid_comment() ?>"/>
            <?php if (($user->Role->role == "admin") or ($user->getid_user() == $book_comment->getid_user())): ?>
              <a class="btn-link btn-del" title="Удалить отзыв">X</a>
            <?php endif; ?>
            <div class="clearfix"></div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
