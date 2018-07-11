<?php foreach ($view_list as $view): ?>
  <div class ="comment user-data">
    <strong class="text-muted">
      <a href="<?= url_for('Library/show?id_book='.$view->getid_book()) ?>">
        <?= $view->Book->name ?>
        <small class="text-muted date-comment"><?= $view->getdate_insert() ?></small>
      </a>
    </strong>
  </div>
<?php endforeach; ?>