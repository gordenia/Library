<body>
  <header>
    <?php include_partial('header') ?>
  </header>
  <section class="sidebar">
    <?php include_partial( 'sidebar',  ['genre_list' => $genre_list]) ?>
  </section>
  <section class="main clearfix">
    <?php foreach ($book_list as $book): ?>
      <?php include_partial( 'book', ['book' => $book]) ?>
    <?php endforeach; ?>
    <div class="clearfix"></div>
  </section>
</body>
