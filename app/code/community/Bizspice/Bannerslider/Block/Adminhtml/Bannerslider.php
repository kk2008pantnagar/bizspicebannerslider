<?php
class Bizspice_Bannerslider_Block_Adminhtml_Bannerslider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_bannerslider';
        $this->_blockGroup = 'bannerslider';
        $this->_headerText = Mage::helper('bannerslider')->__('Slides Manager');
        $this->_addButtonLabel = Mage::helper('bannerslider')->__('Add a Slide');
        parent::__construct();
    }
}