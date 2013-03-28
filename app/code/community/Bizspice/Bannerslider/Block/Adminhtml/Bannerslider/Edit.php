<?php
class Bizspice_Bannerslider_Block_Adminhtml_Bannerslider_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                   
        $this->_objectId = 'id';
        $this->_blockGroup = 'bannerslider';
        $this->_controller = 'adminhtml_bannerslider';
     
        $this->_updateButton('save', 'label', Mage::helper('bannerslider')->__('Save Slide'));
        $this->_updateButton('delete', 'label', Mage::helper('bannerslider')->__('Delete Slide'));
    }
     
    public function getHeaderText()
    {
        if( Mage::registry('bannerslider_data') && Mage::registry('bannerslider_data')->getId() ) {
            return Mage::helper('bannerslider')->__("Edit Slider '%s'", $this->htmlEscape(Mage::registry('bannerslider_data')->getTitle()));
        } else 
		{
             return Mage::helper('bannerslider')->__('Add Slider');
        }
    }
}