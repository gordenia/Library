<ul class="media-list">
  <?php foreach ($last_comment_list as $last_comment): ?>
    <li class="media">
      <div class="comment">
        <div class="pull-left">
          <img src="<?= $last_comment->User->avatar ?>" alt="<?= $last_comment->User->name ?>" class="icon-user img-circle">
        </div>
        <div class="media-body">
          <div class="user-data">
            <strong class="text-muted"><?= $last_comment->User->name ?></strong>
            <span class="text-muted date-comment">
              <small class="text-muted"><?= $last_comment->getdate_insert() ?></small>
            </span>
          </div>
          <div class="user-data">
            <strong class="text-muted">
              <a href="<?= url_for('Library/show?id_book='.$last_comment->getid_book()) ?>"><?= $last_comment->Book->name ?></a>
            </strong>
          </div>

          <select class="star">
            <option value=""></option>
            <?php for ($i = 1; $i <= 5; $i++) {
              $selected = '';
              if ($i == $last_comment->getrating())
                $selected = 'selected'?>
              <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
            <?php } ?>
          </select>

          <p class="text">
            <?= $last_comment->getcomment() ?>
          </p>
        </div>
        <input type="hidden" class = "comment_id" value = "<?= $last_comment->getid_comment() ?>"/>
        <input type="hidden" class = "url" value = "<?= 'deleteComment' ?>"/>
        <a class="btn-link btn-del" title="Удалить отзыв">X</a>
        <div class="clearfix"></div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>