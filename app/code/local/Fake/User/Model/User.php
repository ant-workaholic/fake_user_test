<?php

class Fake_User_Model_User extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('fake_user/user');
    }
}
