<form enctype="multipart/form-data" action="<?= url_for('Library/create') ?>" method="POST">
  <div class="image-upload-container">
   <label for="image-upload-click" class="image-label">Загрузить обложку</label>
    <div class="image-preview">
      <input type="file" name="image" id="image-upload-click" class="image-upload" />
    </div>
  </div>
  <div class="book-description">
    <div class="form-group">
      <label class="сontrol-label">Название книги</label>
      <input type="text" name="bookName" class="form-control" placeholder="...">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Автор</label>
      <input type="hidden" name = "AuthorId" />
      <select name="bookAuthor" class="form-control">
        <option disabled selected="selected">Выберите Автора</option>
        <? foreach ($authorList as $author): ?>
          <option value = <?= $author->getAuthorId()?>>  <?= $author->getAuthorName() ?> </option>
        <? endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="сontrol-label">Год первого издания</label>
      <input type="text" name="bookYear" class="form-control" placeholder="...">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Жанр</label>
      <select name="bookGenre" class="form-control">
        <option disabled selected="selected">Выберите жанр</option>
        <? foreach ($genreList as $genre): ?>
          <option value = <?= $genre->getGenreId()?>>  <?= $genre->getGenreName() ?> </option>
        <? endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="сontrol-label">Интересные факты о книге</label>
    <textarea type="text" name="bookFact" class="form-control" placeholder="..."></textarea>
  </div>
  <div class="clear"></div>
  <input class="btn btn-default" type="submit" value="Сохранить" />
  <a class="btn btn-default pull-right" href="<?= url_for('Library/Profile') ?>">отмена</a>
</form>


