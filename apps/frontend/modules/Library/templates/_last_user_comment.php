<ul class="media-list">
  <? foreach ($lastCommentList as $lastComment): ?>
    <li class="media">
      <div class="comment">
        <div class="pull-left">
          <img src="<?= $lastComment->getUserAvatar() ?>" alt="<?= $lastComment->getUserName() ?>" class="icon-user img-circle">
        </div>
        <div class="media-body">
          <div class="user-data">
            <strong class="text-muted"><?= $lastComment->getUserName() ?></strong>
            <span class="text-muted date-comment">
              <small class="text-muted"><?= $lastComment->getDateInsert() ?></small>
            </span>
          </div>
          <div class="user-data">
            <strong class="text-muted">
              <a href="<?= url_for('Library/show?bookId='.$lastComment->getBookId()) ?>"><?= $lastComment->getBookName() ?></a>
            </strong>
          </div>

          <select class="star">
            <option value=""></option>
            <? for ($i = 1; $i <= 5; $i++) {
              $selected = '';
              if ($i == $lastComment->getBookRating())
                $selected = 'selected'?>
              <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
            <? } ?>
          </select>

          <p class="text">
            <?= $lastComment->getCommentId() ?>
          </p>
        </div>
        <input type="hidden" class = "comment_id" value = "<?= $lastComment->getTextComment() ?>"/>
        <input type="hidden" class = "url" value = "<?= 'deleteComment' ?>"/>
        <a class="btn-link btn-del" title="Удалить отзыв">X</a>
        <div class="clearfix"></div>
      </div>
    </li>
  <? endforeach; ?>
</ul>