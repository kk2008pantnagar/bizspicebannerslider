<?php
     
class Bizspice_Bannerslider_Block_Adminhtml_Bannerslider_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
		$form = new Varien_Data_Form(array(
                                       'id' => 'edit_form',
                                       'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
                                       'method' => 'post',
                                    )
            );
       $form->setUseContainer(true);
       $this->setForm($form);
	   $fieldset = $form->addFieldset('bannerslider_form', array('legend'=>Mage::helper('bannerslider')->__('Slide information')));
		
	   
      $fieldset->addField('title', 'text', array(
                'label'     => Mage::helper('bannerslider')->__('Title'),
                'class'     => 'required-entry',
                'required'  => true,
                'name'      => 'title',
      ));
     
        $fieldset->addField('status', 'select', array(
                'label'     => Mage::helper('bannerslider')->__('Status'),
                'name'      => 'status',
                'values'    => array(
                    array(
                        'value'     => 1,
                        'label'     => Mage::helper('bannerslider')->__('Active'),
                    ),
     
                    array(
                        'value'     => 0,
                        'label'     => Mage::helper('bannerslider')->__('Inactive'),
                    ),
                ),
        ));
		$wysiwygConfig = Mage::getSingleton('cms/wysiwyg_config')->getConfig(); 
		
		
           
        $fieldset->addField('page_content', 'editor', array(
                'name'      => 'page_content',
				'config'    => $wysiwygConfig,
                'wysiwyg'   =>true,
				'value'		=> 'page_content'

        ));
           
        if ( Mage::getSingleton('adminhtml/session')->getBannersliderData() )
        {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getBannersliderData());
            Mage::getSingleton('adminhtml/session')->setBannersliderData(null);
        } 
		elseif ( Mage::registry('bannerslider_data') ) 
		{
                $form->setValues(Mage::registry('bannerslider_data')->getData());
        }
           
	   
       return parent::_prepareForm();
    }
}