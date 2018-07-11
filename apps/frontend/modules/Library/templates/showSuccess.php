  <header>
    <?php include_partial('header') ?>
  </header>
  <section class="sidebar">
    <?php include_partial( 'sidebar',  ['genre_list' => $genre_list]) ?>
  </section>
  <section class="main clearfix">
  <div class = "card">
    <h2>Интересные факты о произведении</h2>
    <div class="book-caption pull-left">
      <input id="bookId" type="hidden" name = "bookId" value = "<?= $book->getid_book() ?>"/>
      <img src="<?= $book->getillustration() ?>" alt="<?= $book->getname() ?>" title="<?= $book->getname() ?>" class="book-img shadow">
      <div class="book-description">
        <input type="hidden" class = "url" value = "<?= 'view' ?>"/>
        <div class="book-name"><?= $book->getname() ?></div>
        <div class="book-autor"><?= $book->Author->name ?></div>
        <div class="book-autor">Жанр: <?= $book->Genre->name ?> </div>
        <div class="book-autor">Впервые издано: <?= $book->getyear_create() ?> г.</div>
        <select class="star">
          <option value=""></option>
          <?php for ($i = 1; $i <= 5; $i++) {
            $selected = '';
            if ($i == $book->getrating())
              $selected = 'selected'?>
            <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
          <?php } ?>
        </select>
      </div>
      <?php if ($user->Role->role == "admin"): ?>
        <div class="btn-card"><a  class="btn btn-default" title="Редактировать книгу" href="<?= url_for('Library/edit?id_book='.$book->getid_book()) ?>">Редактировать книгу</a></div>
        <div class="btn-card"><a  class="btn btn-default" title="Удалить книгу" href="<?= url_for('Library/delete?id_book='.$book->getid_book(), ['method' => 'delete']) ?>">Удалить книгу</a></div>
      <?php endif; ?>
    </div>
    <div class="text"><?= $book->getfact() ?></div>
    <div class="clearfix"></div>
    <?php if($sf_user->isAuthenticated()): ?>
      <?php include_partial( 'book_comment',  ['book_comment_list' => $book_comment_list, 'user' => $user, 'book' => $book]) ?>
    <?php endif; ?>
  </div>
  </section>

