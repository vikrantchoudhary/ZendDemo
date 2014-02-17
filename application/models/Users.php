<?php
/**
 * Created by PhpStorm.
 * User: Vikranth
 * Date: 2/17/14
 * Time: 11:53 AM
 */
class Application_Model_Users extends Zend_Db_Table_Abstract
{
    protected $_name = 'users';
    protected $_primary = 'id';
   public function checkUnique($username)
    {
        $select = $this->_dbTable->select()
            ->from($this->_name,array('username'))
            ->where('username=?',$username);
        $stmt = $select->query();
        $result = $stmt->fetchAll();
        if($result){
            return true;
        }
        return false;
    }
    public function createUser($array) {
        $this->insert($array);
    }
}