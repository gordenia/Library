<form enctype="multipart/form-data" action="<?= url_for('Library/ChangeBook?id_book='.$book->getid_book()) ?>" method="POST">
  <input type="hidden" name = "bookId" value = " <?= $book->getid_book() ?>"/>
  <img src="<?= $book->getillustration() ?>" alt="<?= $book->getname() ?>" title="<?= $book->getname() ?>" class="img-change">
  <div class="image-upload-container">
    <label for="image-upload-click" class="image-label">Сменить картинку</label>
    <div class="image-preview">
      <input type="file" name="image" id="image-upload-click" class="image-upload" />
    </div>
  </div>
  <div class="book-description">
    <div class="form-group">
      <label class="сontrol-label">Название книги</label>
      <input type="text" name="bookName" class="form-control" value="<?= $book->getname() ?>">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Автор</label>
      <input type="hidden" name = "AuthorId" value = " <?= $book->getid_author() ?>"/>
      <select name="bookAuthor" class="form-control">
        <?php foreach ($author_list as $author): {
          $selected = '';
          if ($author->getname() == $book->Author->name)
            $selected = 'selected'?>
          <option value = <?= $author->getid_author() ?> <?= $selected ?> > <?= $author->getname() ?> </option>
        <?php } endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label class="сontrol-label">Год первого издания</label>
      <input type="text" name="bookYear" class="form-control" value="<?= $book->getyear_create() ?>">
    </div>
    <div class="form-group">
      <label class="сontrol-label">Жанр</label>
      <select name="bookGenre" class="form-control">
        <?php foreach ($genre_list as $genre): {
          $selected = '';
          if ($genre->getname() == $book->Genre->name)
            $selected = 'selected'?>
          <option value = <?= $genre->getid_genre() ?> <?= $selected ?> > <?= $genre->getname() ?> </option>
        <?php } endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="сontrol-label">Интересные факты о книге</label>
    <textarea type="text" name="bookFact" class="form-control" id="resize"><?= $book->getfact() ?></textarea>
  </div>
  <div class="clear"></div>
  <input class="btn btn-default" type="submit" value="Сохранить" />
  <a class="btn btn-default pull-right" href="<?= url_for('Library/show?id_book='.$book->getid_book()) ?>">отмена</a>
</form>
