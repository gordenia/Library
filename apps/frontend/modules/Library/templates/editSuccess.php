<body>
  <header>
    <?php include_partial('header') ?>
  </header>
  <section class="sidebar">
    <?php include_partial( 'sidebar',  ['genre_list' => $genre_list]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Редактирование книги</h2>
      <?php include_partial('edit_book', ['genre_list' => $genre_list, 'book' => $book, 'author_list' => $author_list] ) ?>
    </div>
  </section>
</body>
