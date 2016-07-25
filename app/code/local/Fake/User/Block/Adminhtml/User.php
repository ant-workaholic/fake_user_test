<?php

class Fake_User_Block_Adminhtml_User
    extends OnePica_AdminForm_Block_Widget_Grid_Container
{
    /**
     * Prepare block container
     */
    public function __construct()
    {
        $this->_headerText = $this->__('Fake users');
        $this->_addButtonLabel = $this->__('Add Fake User');
        parent::__construct();
    }
}