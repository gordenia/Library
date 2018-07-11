<div class=" col-sm-4 col-md-1-5 work">
  <a href="<?= url_for('Library/show?id_book='.$book->getid_book()) ?>" title="Карточка книги">
    <img src = "<?= $book->getillustration() ?>" alt="<?= $book->getname() ?>" title= "<?= $book->getname() ?>" class="book-image"/>
    <div class="book-description">
      <div class="book-name"><?= $book->getname() ?></div>
      <div class="book-autor"><?= $book->Author->name ?></div>
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
    <div class="caption">
      <div class="work_title">
        <p>Интересные факты о книге</p>
      </div>
    </div>
  </a>
</div>

