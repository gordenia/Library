<?php

/**
 * Genre form base class.
 *
 * @package    form
 * @subpackage genre
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseGenreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_genre' => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id_genre' => new sfValidatorDoctrineChoice(array('model' => 'Genre', 'column' => 'id_genre', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('genre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Genre';
  }

}