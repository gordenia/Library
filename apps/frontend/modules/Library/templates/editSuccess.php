<body>
  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Редактирование книги</h2>
      <? include_partial('edit_book', ['genreList' => $genreList, 'book' => $book, 'authorList' => $authorList] ) ?>
    </div>
  </section>
</body>
