<? foreach ($commentList as $comment): ?>
  <div class="comment">
    <div class="user-data">
      <strong class="text-muted">
        <a href="<?= url_for('Library/show?bookId='.$comment->getBookId()) ?>" title="Карточка книги">
          <?= $comment->getBookName() ?>
          <small class="text-muted date-comment"><?= $comment->getDateInsert() ?></small>
        </a>
      </strong>
    </div>

    <select class="star">
      <option value=""></option>
      <? for ($i = 1; $i <= 5; $i++) {
        $selected = '';
        if ($i == $comment->getBookRating())
          $selected = 'selected'?>
        <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
      <? } ?>
    </select>

    <p class="text"><?= $comment->getTextComment() ?></p>
    <input type="hidden" class = "comment_id" value = "<?= $comment->getCommentId() ?>"/>
    <a class="btn-link btn-del" title="Удалить отзыв">X</a>
  </div>
<? endforeach; ?>