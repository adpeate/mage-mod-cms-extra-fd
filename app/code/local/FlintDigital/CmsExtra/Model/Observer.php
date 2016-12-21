<?php

class FlintDigital_CmsExtra_Model_Observer
{

    //Method to add the alt_meta_title field to the form fields collection
    public function altMetaTitle($observer)
    {
        
        $model = Mage::registry('cms_page');
        
        $form = $observer->getForm();

        $fieldset = $form->getElement('meta_fieldset');
        		
        $fieldset->addField('alt_meta_title', 'text', array(
            'name'      => 'alt_meta_title',
            'label'     => Mage::helper('cms')->__('Meta Title'),
            'title'     => Mage::helper('cms')->__('Meta Title'),
            'disabled'  => false,            
            'value'     => $model->getAltMetaTitle()
        ));

    }
    
    /*
     * This is a workaround to override Creare SEO that uses the same method to override the title
     */ 
    public function setTitle($observer) {
		$request = Mage::app()->getRequest();
        $module = $request->getModuleName();
        $controller = $request->getControllerName();
        $action = $request->getActionName();
        
		$actionName = "{$module}_{$controller}_{$action}";
		
		if ($actionName == "cms_index_index" || $actionName == "cms_page_view") {
			$altMetaTitle = Mage::getSingleton('cms/page')->getAltMetaTitle();
			if($altMetaTitle){
				$layout = Mage::app()->getLayout();
				if ($head = $layout->getBlock('head')) {
					$head->setTitle($altMetaTitle);
				}
			}
			
		}
	}
}
