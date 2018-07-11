<?php

/**
 * User form base class.
 *
 * @package    form
 * @subpackage user
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_user'  => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInput(),
      'login'    => new sfWidgetFormInput(),
      'password' => new sfWidgetFormInput(),
      'id_role'  => new sfWidgetFormDoctrineSelect(array('model' => 'Role', 'add_empty' => true)),
      'avatar'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id_user'  => new sfValidatorDoctrineChoice(array('model' => 'User', 'column' => 'id_user', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 45)),
      'login'    => new sfValidatorString(array('max_length' => 45)),
      'password' => new sfValidatorString(array('max_length' => 20)),
      'id_role'  => new sfValidatorDoctrineChoice(array('model' => 'Role', 'required' => false)),
      'avatar'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}