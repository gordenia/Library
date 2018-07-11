<?php

/**
 * Author form base class.
 *
 * @package    form
 * @subpackage author
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseAuthorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_author' => new sfWidgetFormInputHidden(),
      'name'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id_author' => new sfValidatorDoctrineChoice(array('model' => 'Author', 'column' => 'id_author', 'required' => false)),
      'name'      => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('author[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Author';
  }

}