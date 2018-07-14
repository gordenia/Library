<table class="table table-hover">
  <thead>
    <tr>
      <th>Имя</th>
      <th>Логин</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <? foreach ($userList as $user): ?>
      <tr>
        <input type="hidden" class = "user_id" value = "<?= $user->getUserId() ?>"/>
        <input type="hidden" class = "url" value = "<?= 'deleteUser' ?>"/>
        <td>
          <img src="<?= $user->getUserAvatar() ?>" alt="<?= $user->getUserName() ?>" class="icon-user img-circle">
          <?= $user->getUserName() ?>
        </td>
        <td class="vertical-align"><?= $user->getUserLogin() ?></td>
        <td class="vertical-align btn-link btn-del-user">Удалить профиль</td>
      </tr>
    <? endforeach; ?>
  </tbody>
</table>