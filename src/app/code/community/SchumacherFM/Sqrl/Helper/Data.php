<?php

/**
 * @category    SchumacherFM_Sqrl
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     Open Software License (OSL 3.0) http://opensource.org/licenses/osl-3.0.php
 */
class SchumacherFM_Sqrl_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return string
     */
    public function getThemeFileName()
    {
        return Mage::getStoreConfig('system/magesqrl/sqrl_theme');
    }

    /**
     * @return string
     */
    public function getCustomCSS()
    {
        return (string)Mage::getStoreConfig('system/magesqrl/custom_css');
    }
}