<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * User filter form base class.
 *
 * @package    filters
 * @subpackage User *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(),
      'login'    => new sfWidgetFormFilterInput(),
      'password' => new sfWidgetFormFilterInput(),
      'id_role'  => new sfWidgetFormDoctrineChoice(array('model' => 'Role', 'add_empty' => true)),
      'avatar'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'login'    => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'id_role'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Role', 'column' => 'id_role')),
      'avatar'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id_user'  => 'Number',
      'name'     => 'Text',
      'login'    => 'Text',
      'password' => 'Text',
      'id_role'  => 'ForeignKey',
      'avatar'   => 'Text',
    );
  }
}