<table class="table table-hover">
  <thead>
    <tr>
      <th>Имя</th>
      <th>Логин</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user_list as $user): ?>
      <tr>
        <input type="hidden" class = "user_id" value = "<?= $user->getid_user() ?>"/>
        <input type="hidden" class = "url" value = "<?= 'deleteUser' ?>"/>
        <td>
          <img src="<?= $user->getavatar() ?>" alt="<?= $user->getname() ?>" class="icon-user img-circle">
          <?= $user->getname() ?>
        </td>
        <td class="vertical-align"><?= $user->getlogin() ?></td>
        <td class="vertical-align btn-link btn-del-user">Удалить профиль</td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>