<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_Adminhtml_LoginController extends Mage_Adminhtml_Controller_Action
{
    /**
     * key list
     *
     * @return void
     */
    public function indexAction()
    {
        $this->_title($this->__('System'))->_title($this->__('Sesame Keys'));

        $this->loadLayout();
        $this->_setActiveMenu('system/sesame');
        $this->renderLayout();
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
