<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Helper
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return string
     */
    public function getThemeFileName()
    {
        return Mage::getStoreConfig('system/magesesame/sesame_theme');
    }

    /**
     * @return string
     */
    public function getCustomCSS()
    {
        return (string)Mage::getStoreConfig('system/magesesame/custom_css');
    }
}