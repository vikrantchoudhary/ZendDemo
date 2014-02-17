<?php
/**
 * Created by PhpStorm.
 * User: Vikranth
 * Date: 2/13/14
 * Time: 5:57 PM
 */
  class Application_Model_News extends Zend_Db_Table_Abstract {
      protected $_name = 'news';
      protected $_primary = 'id';
      public function fetchLatest()
      {
          return $this->fetchAll();
      }
      public function createNews($array) {
          $this->insert($array);
      }
  }