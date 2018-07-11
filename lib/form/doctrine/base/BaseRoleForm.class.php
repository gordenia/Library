<?php

/**
 * Role form base class.
 *
 * @package    form
 * @subpackage role
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseRoleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_role' => new sfWidgetFormInputHidden(),
      'role'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id_role' => new sfValidatorDoctrineChoice(array('model' => 'Role', 'column' => 'id_role', 'required' => false)),
      'role'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('role[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Role';
  }

}