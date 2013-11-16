<?php

class SchumacherFM_Sesame_Block_Adminhtml_Token extends Mage_Adminhtml_Block_Abstract
{

    public function getLoginParamJson()
    {
        $token = Mage::getSingleton('sesame/token')->setIsAdmin();
        $json  = array(
            'url'           => $token->getTokenUrl(),
            'token'           => $token->getToken(),
            'checkLoginUrl' => Mage::helper('adminhtml')->getUrl('adminhtml/sesame/check', array('_nosecret' => TRUE)),
            'timeout'       => $token->getTimeOut(),
            'checkInterval'  => 2,
        );
        return Zend_Json_Encoder::encode($json);
    }

    public function getSesameJsBaseUrl()
    {
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS) . 'sesame/adminhtml/';
    }
}