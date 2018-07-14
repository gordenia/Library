<body>
  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Авторы</h2>
      <nav>
        <ul class="list-group">
          <? foreach ($authorList as $author): ?>
            <li class="list-group-item"><a class="author" href="<?= url_for('Library/AuthorBook?authorId='.$author->getAuthorId())?>" title="Книги автора"><?= $author->getAuthorName() ?></a></li>
          <? endforeach; ?>
        </ul>
      </nav>
    </div>
  </section>
</body>