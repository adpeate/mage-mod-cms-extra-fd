<?php

class FlintDigital_CmsExtra_Model_Observer
{

    //Method to add the alt_meta_title field to the form fields collection
    public function altMetaTitle($observer)
    {
        //get CMS model with data
        $model = Mage::registry('cms_page');

        //get form instance
        $form = $observer->getForm();

        $fieldset = $form->getElement('base_fieldset');
//        var_dump(get_class($fieldset));die('saprissa');

        //create new custom fieldset 'alt_meta_title'
        $fieldset = $form->addFieldset('atwix_content_fieldset', array('legend'=>Mage::helper('cms')->__('Custom'),'class'=>'fieldset-wide'));
//        add new field
        $fieldset->addField('alt_meta_title', 'text', array(
            'name'      => 'alt_meta_title',
            'label'     => Mage::helper('cms')->__('Alternative Meta Title'),
            'title'     => Mage::helper('cms')->__('Alternative Meta Title'),
            'disabled'  => false,
            //set field value
            'value'     => $model->getAltMetaTitle()
        ));


    }
}