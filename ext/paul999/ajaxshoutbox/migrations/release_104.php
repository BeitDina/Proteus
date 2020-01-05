<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 Paul Sohier <http://www.ajax-shoutbox.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */
namespace paul999\ajaxshoutbox\migrations;

use phpbb\db\migration\migration;

class release_104 extends migration
{
	static public function depends_on()
	{
		return array(
			'\paul999\ajaxshoutbox\migrations\remove_push_config',
			'\paul999\ajaxshoutbox\migrations\release_102',
			'\phpbb\db\migration\data\v310\gold',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('ajaxshoutbox_version', '1.0.4'))
		);
	}
}
