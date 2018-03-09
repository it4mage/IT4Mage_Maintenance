<?php
class It4mage_Maintenance_Model_System_Config_Source_Show
{
    const MODE_CMS = 'cms';
    const MODE_MSG = 'msg';

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::MODE_CMS, 'label'=>Mage::helper('it4magemnt')->__('Cms Page')),
            array('value' => self::MODE_MSG, 'label'=>Mage::helper('it4magemnt')->__('Custom Message')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            self::MODE_MSG => Mage::helper('it4magemnt')->__('Custom Message'),
            self::MODE_CMS => Mage::helper('it4magemnt')->__('Cms Page'),
        );
    }

}
