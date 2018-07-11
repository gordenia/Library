<?php

/**
 * Comment form base class.
 *
 * @package    form
 * @subpackage comment
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_comment'  => new sfWidgetFormInputHidden(),
      'comment'     => new sfWidgetFormTextarea(),
      'id_user'     => new sfWidgetFormDoctrineSelect(array('model' => 'User', 'add_empty' => false)),
      'id_book'     => new sfWidgetFormDoctrineSelect(array('model' => 'Book', 'add_empty' => false)),
      'rating'      => new sfWidgetFormInput(),
      'date_insert' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_comment'  => new sfValidatorDoctrineChoice(array('model' => 'Comment', 'column' => 'id_comment', 'required' => false)),
      'comment'     => new sfValidatorString(array('max_length' => 2147483647)),
      'id_user'     => new sfValidatorDoctrineChoice(array('model' => 'User')),
      'id_book'     => new sfValidatorDoctrineChoice(array('model' => 'Book')),
      'rating'      => new sfValidatorInteger(array('required' => false)),
      'date_insert' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

}