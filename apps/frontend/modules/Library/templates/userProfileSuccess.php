<body>
  <header>
    <? include_partial('header') ?>
  </header>
  <section class="sidebar">
    <? include_partial( 'sidebar',  ['genreList' => $genreList]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Привет, <?= $user->getUserName() ?></h2>
      <a class="btn-escape" title="Выйти из личного кабинета" href="<?= url_for('Library/LogOut') ?>">Выход</a>
      <img src="<?= $user->getUserAvatar() ?>" alt="<?= $user->getUserName() ?>" title="<?=  $user->getUserName() ?>" class="img-change">
      <input type="hidden" class = "url" value = "<?= 'changeAvatarUser' ?>"/>
      <div class="image-upload-container avatar">
        <label for="image-upload-click" class="image-label">Сменить картинку</label>
        <div class="image-preview">
          <input type="file" name="image" id="image-upload-click" class="image-upload avatar-user" />
        </div>
      </div>
      <div class="panel-user">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a href="#home" data-toggle="tab">Ваши отзывы</a></li>
          <li><a href="#profile" data-toggle="tab">Ваши просмотры</a></li>
          <? if ($user->getUserRole() == "admin"): ?>
            <li><a href="#admin" data-toggle="tab">Администратор</a></li>
          <? endif; ?>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <? include_partial( 'user_comment',  ['commentList' => $commentList]) ?>
          </div>
          <div class="tab-pane fade" id="profile">
            <? include_partial( 'user_view',  ['viewList' => $viewList]) ?>
          </div>
          <div class="tab-pane fade" id="admin">
            <? include_partial( 'panel_admin', ['userList' => $userList, 'lastCommentList' => $lastCommentList]) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>