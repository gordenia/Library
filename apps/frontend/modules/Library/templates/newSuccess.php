<body>
  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Добавить новую книгу</h2>
      <? include_partial('add_book', ['genreList' => $genreList, 'authorList' => $authorList] ) ?>
    </div>
  </section>
</body>