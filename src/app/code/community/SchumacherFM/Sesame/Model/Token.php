<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Observer
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_Model_Token
{
    protected $_token = NULL;

    protected $_isAdmin = FALSE;

    /**
     * @var int seconds
     */
    protected $_timeOut = 180;

    public function __construct()
    {
        $this->_generateToken();
    }

    public function getTokenUrl()
    {
        return Mage::helper('adminhtml')->getUrl('adminhtml/sesame/login', array(
            '_nosecret' => TRUE,
            'token'     => $this->_token,
        ));
    }

    public function getToken()
    {
        return $this->_token;
    }

    public function setIsAdmin()
    {
        $this->_isAdmin = TRUE;
        return $this;
    }

    /**
     * @todo insert into DB, custom table
     *
     * @return $this
     */
    protected function _generateToken()
    {
        // if is admin bound db entry to admin
        $this->_token = Mage::helper('core')->getRandomString(32); //getHash

        return $this;
    }

    public function getTimeOut()
    {
        return (int)$this->_timeOut;
    }
}