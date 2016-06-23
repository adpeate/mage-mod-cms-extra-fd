##Magento CMS Custom Meta Title Module.
Adds custom attribute Meta Title to CMS Pages. Often the Magento CMS page title is not the best option for the Meta Title. We often name the pages in a way that makes it easier to organize in the grid (especially on foreign language or multi store instances.) This module adds a new field that will override the default magento behavior for the Meta Title. 

###Installation

Using Modgit

`modgit add mage-mod-cms-extra-fd git@github.com:flintdigital/mage-mod-cms-extra-fd.git`

Clear Cache
`rm -Rf var/cache`

###Usage
1. Goto the Content->Custom tab in the CMS page edit view.
2. Enter the the new Meta Title value in the # Alternative Meta Title Field #
3. Click Save. 
4. On the frontend of the site if you view source you should see value you just entered in the `<title> `
5. blah

###Dependancies
None. This module overrides the default meta title behaviour. 

###References
Used some ideas here http://inchoo.net/magento/change-any-page-title-in-magento

Original Request M7 https://flint.assembla.com/spaces/method-seven/tickets/603-cms-page-name-changes/details
