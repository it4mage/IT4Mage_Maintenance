<?php
class It4mage_Maintenance_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $body = Mage::helper('it4magemnt')->getCustomMessage();
        $this->getResponse()->setBody($body);
    }
}
