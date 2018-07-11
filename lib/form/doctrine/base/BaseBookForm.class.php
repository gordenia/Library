<?php

/**
 * Book form base class.
 *
 * @package    form
 * @subpackage book
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseBookForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_book'      => new sfWidgetFormInputHidden(),
      'id_author'    => new sfWidgetFormDoctrineSelect(array('model' => 'Author', 'add_empty' => true)),
      'id_genre'     => new sfWidgetFormDoctrineSelect(array('model' => 'Genre', 'add_empty' => true)),
      'rating'       => new sfWidgetFormInput(),
      'date_insert'  => new sfWidgetFormDateTime(),
      'name'         => new sfWidgetFormInput(),
      'illustration' => new sfWidgetFormInput(),
      'fact'         => new sfWidgetFormTextarea(),
      'year_create'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id_book'      => new sfValidatorDoctrineChoice(array('model' => 'Book', 'column' => 'id_book', 'required' => false)),
      'id_author'    => new sfValidatorDoctrineChoice(array('model' => 'Author', 'required' => false)),
      'id_genre'     => new sfValidatorDoctrineChoice(array('model' => 'Genre', 'required' => false)),
      'rating'       => new sfValidatorInteger(array('required' => false)),
      'date_insert'  => new sfValidatorDateTime(array('required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'illustration' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fact'         => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'year_create'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('book[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }

}