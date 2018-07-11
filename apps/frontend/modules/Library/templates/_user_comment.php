<?php foreach ($comment_list as $comment): ?>
  <div class="comment">
    <div class="user-data">
      <strong class="text-muted">
        <a href="<?= url_for('Library/show?id_book='.$comment->getid_book()) ?>" title="Карточка книги">
          <?= $comment->Book->name ?>
          <small class="text-muted date-comment"><?= $comment->getdate_insert() ?></small>
        </a>
      </strong>
    </div>

    <select class="star">
      <option value=""></option>
      <?php for ($i = 1; $i <= 5; $i++) {
        $selected = '';
        if ($i == $comment->getrating())
          $selected = 'selected'?>
        <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
      <?php } ?>
    </select>

    <p class="text"><?= $comment->getcomment() ?></p>
    <input type="hidden" class = "comment_id" value = "<?= $comment->getid_comment() ?>"/>
    <a class="btn-link btn-del" title="Удалить отзыв">X</a>
  </div>
<?php endforeach; ?>