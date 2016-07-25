<?php

class Fake_User_Block_Adminhtml_User_Grid
extends OnePica_AdminForm_Block_Widget_Grid
{
    /**
     * Set grid configuration identifier
     */
    public function __construct()
    {
        $this->_gridId = 'fake_user_grid';

        parent::__construct();
    }

    /**
     * Set name to select
     *
     * @return $this
     */
    protected function _prepareCollection()
    {
        $this->getCollection();
        parent::_prepareCollection();
        return $this;
    }
}