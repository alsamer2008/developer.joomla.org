<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_code
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\Language\Text;

/**
 * Code component helper.
 */
class CodeHelper extends ContentHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  The name of the active view.
	 *
	 * @return  void
	 */
	public static function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(
			Text::_('COM_CODE_ABOUT'),
			'index.php?option=com_code&view=about',
			$vName == 'about'
		);

		JHtmlSidebar::addEntry(
			Text::_('COM_CODE_TRACKERS'),
			'index.php?option=com_code&view=trackers',
			$vName == 'trackers'
		);
	}
}
