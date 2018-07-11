<?php

/**
 * View form base class.
 *
 * @package    form
 * @subpackage view
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseViewForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_view'     => new sfWidgetFormInputHidden(),
      'id_book'     => new sfWidgetFormDoctrineSelect(array('model' => 'Book', 'add_empty' => false)),
      'id_user'     => new sfWidgetFormDoctrineSelect(array('model' => 'User', 'add_empty' => false)),
      'date_insert' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_view'     => new sfValidatorDoctrineChoice(array('model' => 'View', 'column' => 'id_view', 'required' => false)),
      'id_book'     => new sfValidatorDoctrineChoice(array('model' => 'Book')),
      'id_user'     => new sfValidatorDoctrineChoice(array('model' => 'User')),
      'date_insert' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('view[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'View';
  }

}