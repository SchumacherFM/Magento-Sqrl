<?php
/**
 * @category    SchumacherFM_Sqrl
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     Open Software License (OSL 3.0) http://opensource.org/licenses/osl-3.0.php
 */
class SchumacherFM_Sqrl_Model_Config_Source_ThemeFiles
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $readDir = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_SKIN) . DS .
            'adminhtml' . DS . 'default' . DS . 'default' . DS . 'sqrl' . DS . 'themes' . DS;

        $files = glob($readDir . '*.css');

        $return = array();

        foreach ($files as $file) {
            $bFile    = basename($file);
            $return[] = array('value' => $bFile, 'label' => $bFile);
        }

        return $return;
    }
}
