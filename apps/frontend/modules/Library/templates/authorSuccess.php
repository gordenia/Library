<body>
  <header>
    <?php include_partial('header') ?>
  </header>
  <section class="sidebar">
    <?php include_partial( 'sidebar',  ['genre_list' => $genre_list]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Авторы</h2>
      <nav>
        <ul class="list-group">
          <?php foreach ($author_list as $author): ?>
            <li class="list-group-item"><a class="author" href="<?= url_for('Library/AuthorBook?id_author='.$author->getid_author())?>" title="Книги автора"><?= $author->getname() ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </section>
</body>