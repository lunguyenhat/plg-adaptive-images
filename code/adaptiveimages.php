<?php
/**
 * @package     AdaptiveImages
 * @subpackage  Plugin
 *
 * @copyright   Copyright (C) 2014 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

// No direct access
defined('_JEXEC') or die;

// Import library dependencies
jimport('joomla.plugin.plugin');
jimport('joomla.filesystem.file');
jimport('joomla.environment.browser');

/**
 * AdaptiveImages plugin
 *
 * @package     Joomla.Plugin
 * @subpackage  System.AdaptiveImages
 * @since       0.1
 */
class PlgSystemAdaptiveImages extends JPlugin
{
	/**
	 * Change image solution
	 * stuff breaks.
	 *
	 * @return  void
	 *
	 * @since   0.1
	 */
	public function onAfterRender()
	{
		$app = JFactory::getApplication();
		$browser = JBrowser::getInstance();

		if ($app->isSite())
		{
			$body = JResponse::getBody();
			$body = preg_match_all('/<img[^>]+>/i',$body, $result);

			print_r($result);
			exit();

		}
	}

	private function generateImage($source_file, $cache_file, $resolution)
	{

	}
}


