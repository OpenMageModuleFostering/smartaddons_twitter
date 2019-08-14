<?php
/*------------------------------------------------------------------------
 # SM Twitter - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Twitter_Model_System_Config_Source_ListTheme
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'light', 'label'=>Mage::helper('twitter')->__('Light')),
		array('value'=>'dark', 'label'=>Mage::helper('twitter')->__('Dark')),
		);
	}
}
