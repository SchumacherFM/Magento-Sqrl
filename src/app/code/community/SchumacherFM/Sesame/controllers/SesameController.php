<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Controller
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_SesameController extends Mage_Core_Controller_Front_Action
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
