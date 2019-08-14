<?php
/*------------------------------------------------------------------------
 # SM Twitter - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Twitter_Helper_Data extends Mage_Core_Helper_Abstract {
	public function __construct(){
		$this->defaults = array(
			/* General setting */
			'isenabled'		=> '1',
			'title' 		=> 'SM Twitter',
			/* Module setting */
			'theme' 			=> 'light',	
			'limit' 		=> '3',
			'href' 		=> 'https://twitter.com/magentech',
			'widgets_id' 		=> '334892754301755392',
			//'footer_text' 		=> 'Tweets by @magentech',			
			/* advanced setting */
			'pretext'			=> '',
			'posttext'			=> ''
		);
	}

	function get($attributes=array())
	{
		$data = $this->defaults;
		$general 					= Mage::getStoreConfig("twitter_cfg/general");
		$module_setting				= Mage::getStoreConfig("twitter_cfg/module_setting");
		$advanced 					= Mage::getStoreConfig("twitter_cfg/advanced");
		if (!is_array($attributes)) {
			$attributes = array($attributes);
		}
		if (is_array($general))					$data = array_merge($data, $general);
		if (is_array($module_setting)) 			$data = array_merge($data, $module_setting);
		if (is_array($advanced)) 				$data = array_merge($data, $advanced);
		return array_merge($data, $attributes);;
	}
}
?>