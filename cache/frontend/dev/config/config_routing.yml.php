<?php
// auto-generated by sfRoutingConfigHandler
// date: 2018/07/11 18:42:03
return array(
'homepage' => new sfRoute('/', array (
  'module' => 'Library',
  'action' => 'index',
), array (
), array (
)),
'find_by_genre' => new sfDoctrineRoute('/Library/Genre/*', array (
  'module' => 'Library',
  'action' => 'index',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'find_by_author' => new sfDoctrineRoute('/Library/AuthorBook/*', array (
  'module' => 'Library',
  'action' => 'index',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'author' => new sfDoctrineRoute('/Library/Auhor', array (
  'module' => 'Library',
  'action' => 'author',
), array (
), array (
  'model' => 'Author',
  'type' => 'object',
)),
'search' => new sfDoctrineRoute('/Library/Search', array (
  'module' => 'Library',
  'action' => 'search',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'top' => new sfDoctrineRoute('/Library/Top/*', array (
  'module' => 'Library',
  'action' => 'index',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'new' => new sfDoctrineRoute('/Library/New/*', array (
  'module' => 'Library',
  'action' => 'index',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'form_registartion' => new sfDoctrineRoute('/Library/Registration', array (
  'module' => 'Library',
  'action' => 'registration',
), array (
), array (
  'model' => 'User',
  'type' => 'object',
)),
'user_profile' => new sfDoctrineRoute('/Library/Profile', array (
  'module' => 'Library',
  'action' => 'userProfile',
), array (
), array (
  'model' => 'User',
  'type' => 'object',
)),
'change_book' => new sfDoctrineRoute('/Library/ChangeBook', array (
  'module' => 'Library',
  'action' => 'changeBook',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'add_book' => new sfDoctrineRoute('/Library/create', array (
  'module' => 'Library',
  'action' => 'create',
), array (
), array (
  'model' => 'Book',
  'type' => 'object',
)),
'log_out' => new sfDoctrineRoute('/Library/LogOut', array (
  'module' => 'Library',
  'action' => 'logOut',
), array (
), array (
  'model' => 'User',
  'type' => 'object',
)),
'delete_user' => new sfRoute('/Library/deleteUser', array (
  'module' => 'Library',
  'action' => 'deleteUser',
), array (
), array (
)),
'change_avatar_user' => new sfRoute('/Library/changeAvatarUser', array (
  'module' => 'Library',
  'action' => 'changeAvatarUser',
), array (
), array (
)),
'view' => new sfRoute('/Library/view', array (
  'module' => 'Library',
  'action' => 'view',
), array (
), array (
)),
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
);
