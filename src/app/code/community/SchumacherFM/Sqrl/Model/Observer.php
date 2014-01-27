<?php
/**
 * @category    SchumacherFM_Sqrl
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     Open Software License (OSL 3.0) http://opensource.org/licenses/osl-3.0.php
 */
class SchumacherFM_Sqrl_Model_Observer
{
    /**
     * adminhtml_block_html_before
     *
     * @param Varien_Event_Observer $observer
     *
     * @return null
     */
    public function injectSqrl(Varien_Event_Observer $observer)
    {
        $block = $observer->getEvent()->getBlock();
        if (get_class($block) !== 'Mage_Adminhtml_Block_Page_Head') {
            return NULL;
        }
        $transport = $observer->getEvent()->getTransport();

        $html = $transport->getHtml();
        $transport->setHtml(
            $this->_getCss() .
            $this->_getJs() .
            $html
        );
    }

    /**
     * @return string
     */
    protected function _getCss()
    {
        return '<style type="text/css">' .
        $this->_getFile('themes/' . Mage::helper('magesqrl')->getThemeFileName()) .
        Mage::helper('magesqrl')->getCustomCSS()
        . '</style>';
    }

    /**
     * @return string
     */
    protected function _getJs()
    {
        return '<script type="text/javascript">' .
        $this->_getFile('sqrl.min.js')
        . '</script>';
    }

    /**
     * @param string $file
     *
     * @return string
     */
    protected function _getFile($file)
    {
        $path = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_SKIN) . DS . 'adminhtml' . DS . 'default' . DS . 'default' . DS . 'sqrl' . DS;
        return file_get_contents($path . $file);
    }
}