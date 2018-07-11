<?php

//require_once 'C:\development\sfprojects\Library\lib\vendor\symfony\lib/autoload/sfCoreAutoload.class.php';
require_once(dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php');

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    // for compatibility / remove and enable only the plugins you want
    //$this->enableAllPluginsExcept(array('sfDoctrinePlugin', 'sfCompat10Plugin'));
    $this->enableAllPluginsExcept(array('sfPropelPlugin', 'sfCompat10Plugin'));
  }
}