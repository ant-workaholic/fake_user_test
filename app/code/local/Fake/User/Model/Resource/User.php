<?php

class Fake_User_Model_Resource_User extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('fake_user/user', 'id');
    }
}