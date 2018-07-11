<body>
  <header>
    <?php include_partial('header') ?>
  </header>
  <section class="sidebar">
    <?php include_partial( 'sidebar',  ['genre_list' => $genre_list]) ?>
  </section>
  <section class="main clearfix">
    <div class = "card">
      <h2>Привет, <?= $user->getname() ?></h2>
      <a class="btn-escape" title="Выйти из личного кабинета" href="<?= url_for('Library/LogOut') ?>">Выход</a>
      <img src="<?= $user->getavatar() ?>" alt="<?= $user->getname() ?>" title="<?=  $user->getname() ?>" class="img-change">
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
          <?php if ($user->Role->role == "admin"): ?>
            <li><a href="#admin" data-toggle="tab">Администратор</a></li>
          <?php endif; ?>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="home">
            <?php include_partial( 'user_comment',  ['comment_list' => $comment_list]) ?>
          </div>
          <div class="tab-pane fade" id="profile">
            <?php include_partial( 'user_view',  ['view_list' => $view_list]) ?>
          </div>
          <div class="tab-pane fade" id="admin">
            <?php include_partial( 'panel_admin', ['user_list' => $user_list, 'last_comment_list' => $last_comment_list]) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>