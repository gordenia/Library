<form enctype="multipart/form-data" action="<?= url_for('Library/ChangeBook?bookId='.$book->getBookId()) ?>" method="POST">
  <input type="hidden" name = "bookId" value = " <?= $book->getBookId() ?>"/>
  <img src="<?= $book->getBookIllustration() ?>" alt="<?= $book->getBookName() ?>" title="<?= $book->getBookName() ?>" class="img-change">
  <div class="image-upload-container">
    <label for="image-upload-click" class="image-label">Сменить картинку</label>
    <div class="image-preview">
      <input type="file" name="image" id="image-upload-click" class="image-upload" />
    </div>
  </div>
  <div class="book-description">
    <div class="form-group">
      <label class="сontrol-label">Название книги</label>
      <input type="text" name="bookName" class="form-control" value="<?= $book->getBookName() ?>">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Автор</label>
      <input type="hidden" name = "AuthorId" value = " <?= $book->getAuthorId() ?>"/>
      <select name="bookAuthor" class="form-control">
        <? foreach ($authorList as $author): {
          $selected = '';
          if ($author->getAuthorName() == $book->getAuthorName())
            $selected = 'selected'?>
          <option value = <?= $author->getAuthorId() ?> <?= $selected ?> > <?= $author->getAuthorName() ?> </option>
        <? } endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="сontrol-label">Год первого издания</label>
      <input type="text" name="bookYear" class="form-control" value="<?= $book->getYearCreate() ?>">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Жанр</label>
      <select name="bookGenre" class="form-control">
        <? foreach ($genreList as $genre): {
          $selected = '';
          if ($genre->getGenreName() == $book->getGenreName())
            $selected = 'selected'?>
          <option value = <?= $genre->getGenreId() ?> <?= $selected ?> > <?= $genre->getGenreName() ?> </option>
        <? } endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="сontrol-label">Интересные факты о книге</label>
    <textarea type="text" name="bookFact" class="form-control" id="resize"><?= $book->getTextFact() ?></textarea>
  </div>
  <div class="clear"></div>
  <input class="btn btn-default" type="submit" value="Сохранить" />
  <a class="btn btn-default pull-right" href="<?= url_for('Library/show?bookId='.$book->getBookId()) ?>">отмена</a>
</form>
