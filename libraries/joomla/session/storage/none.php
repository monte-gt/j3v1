<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Session
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * File session handler for PHP
 *
 * @see    http://www.php.net/manual/en/function.session-set-save-handler.php
 * @since  11.1
 */
class JSessionStorageNone extends JSessionStorage
{
	/**
	 * Register the functions of this class with PHP's session handler
	 *
	 * @return  void
	 *
	 * @since   11.1
	 */
	public function register()
	{
		ini_set('session.save_handler', 'files');
	}
}