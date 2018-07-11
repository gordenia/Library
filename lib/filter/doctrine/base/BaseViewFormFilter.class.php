<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * View filter form base class.
 *
 * @package    filters
 * @subpackage View *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseViewFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_book'     => new sfWidgetFormDoctrineChoice(array('model' => 'Book', 'add_empty' => true)),
      'id_user'     => new sfWidgetFormDoctrineChoice(array('model' => 'User', 'add_empty' => true)),
      'date_insert' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'id_book'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Book', 'column' => 'id_book')),
      'id_user'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'User', 'column' => 'id_user')),
      'date_insert' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('view_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'View';
  }

  public function getFields()
  {
    return array(
      'id_view'     => 'Number',
      'id_book'     => 'ForeignKey',
      'id_user'     => 'ForeignKey',
      'date_insert' => 'Date',
    );
  }
}