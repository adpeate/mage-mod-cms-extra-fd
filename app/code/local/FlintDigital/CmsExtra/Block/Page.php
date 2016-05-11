<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Cms
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Cms page content block
 *
 * @category   Mage
 * @package    Mage_Cms
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class FlintDigital_CmsExtra_Block_Page extends Mage_Cms_Block_Page
{

    /**
     * We need to overwrite this method so we can set the page title to alt_meta_title.
     *
     * @return Mage_Cms_Block_Page
     */
    protected function _prepareLayout()
    {
        //Call original functionality
        parent::_prepareLayout();

        //Get CMS Page Model
        $page = $this->getPage();

        //Check if alt_meta_title is set
        if($page->getAltMetaTitle()) {
            //Get the Layout Head Element and set the title to alg_meta_title
            $head = $this->getLayout()->getBlock('head');
            if ($head) {
                $head->setTitle($page->getAltMetaTitle());
            }
        }

        //Mage_Cms_Block_Page->_prepareLayout() returns the result of its parent's _prepareLayout() method, which returns $this.
        //So let's return $this as well.
        return $this;
    }
}
