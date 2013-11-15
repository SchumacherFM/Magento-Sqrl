<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_LoginController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');

        /** @var SchumacherFM_Sesame_Block_Customer_PublicKey $block */
        $block = $this->getLayout()->getBlock('customer_sesame');
        if ($block) {
            $block->setRefererUrl($this->_getRefererUrl());
        }

        $this->getLayout()->getBlock('head')->setTitle($this->__('Sesame Key Management') . ' - ' . $this->getLayout()->getBlock('head')->getTitle());
        $this->renderLayout();
    }
}
