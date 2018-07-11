<?php

/**
 * Temp form base class.
 *
 * @package    form
 * @subpackage temp
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseTempForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_temp' => new sfWidgetFormInputHidden(),
      'date'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_temp' => new sfValidatorDoctrineChoice(array('model' => 'Temp', 'column' => 'id_temp', 'required' => false)),
      'date'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('temp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Temp';
  }

}