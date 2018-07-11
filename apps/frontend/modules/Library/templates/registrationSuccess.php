<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form user" role="form" action="<?= url_for('Library/Registration') ?>" method="POST">
        <input name="login" type="text" placeholder="логин"/>
        <input name=pass type="password" placeholder="пароль"/>
        <input name="userName" type="text" placeholder="имя"/>
        <button name="create">создать</button>
        <a class="cancel" href="<?= url_for('Library/index') ?>">отмена</a>
        <p class="message">Уже зарегистрированы? <a href="#">Войти в систему</a></p>
      </form>

      <form class="login-form user" role="form" action="<?= url_for('Library/Registration') ?>" method="POST">
        <input name="login" type="text" placeholder="логин"/>
        <input name="pass" type="password" placeholder="пароль"/>
        <button name="auth">войти</button>
        <a class="cancel" href="<?= url_for('Library/index') ?>">отмена</a>
        <p class="message">Еще не зарегистрированы? <a href="#">Создать профиль</a></p>
      </form>
    </div>
  </div>
</body>