<?php

/**
 * @category    SchumacherFM_Sqrl
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     Open Software License (OSL 3.0) http://opensource.org/licenses/osl-3.0.php
 */
class SchumacherFM_Sqrl_Adminhtml_SqrlController extends Mage_Adminhtml_Controller_Action
{
    /**
     * @see Mage_Adminhtml_IndexController::forgotpassword action
     * @return void
     */
    public function loginAction()
    {
        Zend_Debug::dump($_REQUEST);
        exit;
        //
    }

    /**
     * ajax requests per second
     */
    public function checkAction()
    {
        $token = $this->getRequest()->getParam('token', '');
        Zend_Debug::dump($_REQUEST);
        exit;
        $this->getResponse()->setBody($html);
    }

    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return TRUE; // Mage::getSingleton('admin/session')->isAllowed('system/sqrl');
    }
}
