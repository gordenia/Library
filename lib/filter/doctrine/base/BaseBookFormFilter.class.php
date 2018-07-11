<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Book filter form base class.
 *
 * @package    filters
 * @subpackage Book *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseBookFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_author'    => new sfWidgetFormDoctrineChoice(array('model' => 'Author', 'add_empty' => true)),
      'id_genre'     => new sfWidgetFormDoctrineChoice(array('model' => 'Genre', 'add_empty' => true)),
      'rating'       => new sfWidgetFormFilterInput(),
      'date_insert'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'name'         => new sfWidgetFormFilterInput(),
      'illustration' => new sfWidgetFormFilterInput(),
      'fact'         => new sfWidgetFormFilterInput(),
      'year_create'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_author'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Author', 'column' => 'id_author')),
      'id_genre'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Genre', 'column' => 'id_genre')),
      'rating'       => new sfValidatorInteger(array('required' => false)),
      'date_insert'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'name'         => new sfValidatorPass(array('required' => false)),
      'illustration' => new sfValidatorPass(array('required' => false)),
      'fact'         => new sfValidatorPass(array('required' => false)),
      'year_create'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('book_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Book';
  }

  public function getFields()
  {
    return array(
      'id_book'      => 'Number',
      'id_author'    => 'ForeignKey',
      'id_genre'     => 'ForeignKey',
      'rating'       => 'Number',
      'date_insert'  => 'Date',
      'name'         => 'Text',
      'illustration' => 'Text',
      'fact'         => 'Text',
      'year_create'  => 'Text',
    );
  }
}