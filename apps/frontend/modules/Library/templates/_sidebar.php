<div id="menu_icon"></div>
<div class="registration">
  <?
    $url = 'Library/Registration';
    $title = "Войти/Зарестрироваться";

    if ($sf_user->isAuthenticated())
    {
      $url = 'Library/userProfile';
      $title = "Личный кабинет";
    }
  ?>
  <a id="showFormRegistration" href=<?= url_for($url) ?> title=<?= $title ?> ><?= $title ?></a>
</div>

<div class="search">
  <form name="form-search" class="search" action="<?= url_for('Library/Search') ?>" method="POST">
    <div class="input-group">
      <input type="text" class="form-control" name="strSearch">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Поиск</button>
      </span>
    </div>
  </form>
</div>

<nav>
  <ul>
    <li><a title="Топ 100" href="<?= url_for('Library/Top?top=100') ?>">Топ 100</a></li>
    <li><a title="Новинки" href="<?= url_for('Library/New?new=1') ?>">Новинки</a></li>
    <li><a title="Авторы" href="<?= url_for('Library/Author') ?>">Авторы</a></li>
    <li><a title="все жанры" href="<?= url_for('@homepage') ?>">Жанры</a></li>
      <ul class="list-genres">
        <? foreach ($genreList as $genre): ?>
          <li>
            <a title="Жанр" href="<?= url_for('Library/Genre?genreId='.$genre->getGenreId())  ?>"><?= $genre->getGenreName() ?> </a>
          </li>
        <? endforeach; ?>
      </ul>
  </ul>
</nav>
