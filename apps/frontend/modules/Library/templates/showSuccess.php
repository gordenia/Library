  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
  <div class = "card">
    <h2>Интересные факты о произведении</h2>
    <div class="book-caption pull-left">
      <input id="bookId" type="hidden" name = "bookId" value = "<?= $book->getBookId() ?>"/>
      <img src="<?= $book->getBookIllustration() ?>" alt="<?= $book->getBookName() ?>" title="<?= $book->getBookName() ?>" class="book-img shadow">
      <div class="book-description">
        <input type="hidden" class = "url" value = "<?= 'view' ?>"/>
        <div class="book-name"><?= $book->getBookName() ?></div>
        <div class="book-autor"><?= $book->getAuthorName() ?></div>
        <div class="book-autor">Жанр: <?= $book->getGenreName() ?> </div>
        <div class="book-autor">Впервые издано: <?= $book->getYearCreate() ?> г.</div>
        <select class="star">
          <option value=""></option>
          <? for ($i = 1; $i <= 5; $i++) {
            $selected = '';
            if ($i == $book->getBookRating())
              $selected = 'selected'?>
            <option value = <?= $i ?> <?= $selected ?> > <?= $i ?> </option>
          <? } ?>
        </select>
      </div>
      <? if ($sf_user->isAuthenticated() && $user->getUserRole() == "admin"): ?>
        <div class="btn-card"><a  class="btn btn-default" title="Редактировать книгу" href="<?= url_for('Library/edit?bookId='.$book->getBookId()) ?>">Редактировать книгу</a></div>
        <div class="btn-card"><a  class="btn btn-default" title="Удалить книгу" href="<?= url_for('Library/delete?bookId='.$book->getBookId(), ['method' => 'delete']) ?>">Удалить книгу</a></div>
      <? endif; ?>
    </div>
    <div class="text"><?= $book->getTextFact() ?></div>
    <div class="clearfix"></div>
    <? if($sf_user->isAuthenticated()): ?>
      <? include_partial( 'book_comment',  ['bookCommentList' => $bookCommentList, 'user' => $user, 'book' => $book]) ?>
    <? endif; ?>
  </div>
  </section>

