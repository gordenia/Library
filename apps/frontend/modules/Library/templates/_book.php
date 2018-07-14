<div class=" col-sm-4 col-md-1-5 work">
  <a href="<?= url_for('Library/show?bookId='.$book->getBookId()) ?>" title="Карточка книги">
    <img src = "<?= $book->getBookIllustration() ?>" alt="<?= $book->getBookName() ?>" title= "<?= $book->getBookName() ?>" class="book-image"/>
    <div class="book-description">
      <div class="book-name"><?= $book->getBookName() ?></div>
      <div class="book-autor"><?= $book->getAuthorName() ?></div>
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
    <div class="caption">
      <div class="work_title">
        <p>Интересные факты о книге</p>
      </div>
    </div>
  </a>
</div>

