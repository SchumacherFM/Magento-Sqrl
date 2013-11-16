<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_Adminhtml_SesameController extends Mage_Adminhtml_Controller_Action
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
        return TRUE; // Mage::getSingleton('admin/session')->isAllowed('system/sesame');
    }
}
