<?php

/**
 * @category    SchumacherFM_Sqrl
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     Open Software License (OSL 3.0) http://opensource.org/licenses/osl-3.0.php
 */

class SchumacherFM_Sqrl_SqrlController extends Mage_Core_Controller_Front_Action
{

    /**
     * @todo
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
