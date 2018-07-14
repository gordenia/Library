<? foreach ($viewList as $view): ?>
  <div class ="comment user-data">
    <strong class="text-muted">
      <a href="<?= url_for('Library/show?bookId='.$view->getBookId()) ?>">
        <?= $view->getBookName() ?>
        <small class="text-muted date-comment"><?= $view->getDateInsert() ?></small>
      </a>
    </strong>
  </div>
<? endforeach; ?>