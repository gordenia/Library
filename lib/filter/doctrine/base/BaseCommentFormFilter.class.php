<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Comment filter form base class.
 *
 * @package    filters
 * @subpackage Comment *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseCommentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment'     => new sfWidgetFormFilterInput(),
      'id_user'     => new sfWidgetFormDoctrineChoice(array('model' => 'User', 'add_empty' => true)),
      'id_book'     => new sfWidgetFormDoctrineChoice(array('model' => 'Book', 'add_empty' => true)),
      'rating'      => new sfWidgetFormFilterInput(),
      'date_insert' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'comment'     => new sfValidatorPass(array('required' => false)),
      'id_user'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'User', 'column' => 'id_user')),
      'id_book'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Book', 'column' => 'id_book')),
      'rating'      => new sfValidatorInteger(array('required' => false)),
      'date_insert' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('comment_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comment';
  }

  public function getFields()
  {
    return array(
      'id_comment'  => 'Number',
      'comment'     => 'Text',
      'id_user'     => 'ForeignKey',
      'id_book'     => 'ForeignKey',
      'rating'      => 'Number',
      'date_insert' => 'Date',
    );
  }
}