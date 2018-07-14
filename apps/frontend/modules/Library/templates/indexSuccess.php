<body>
  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
    <? foreach ($bookList as $book): ?>
      <? include_partial( 'book', ['book' => $book]) ?>
    <? endforeach; ?>
    <div class="clearfix"></div>
  </section>
</body>
