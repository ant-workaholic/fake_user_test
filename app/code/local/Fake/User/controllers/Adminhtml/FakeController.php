<?php

/**
 * Class Fake_User_Adminhtml_FakeController
 */
class Fake_User_Adminhtml_FakeController
    extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}