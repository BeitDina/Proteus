<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\migrations;

class googlesearch_update extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\googlesearch\migrations\googlesearch_data');
	}

	public function update_data()
	{
		return array(
		// Add configs
		array('config.add', array('googlesearch_position2', '')),
		array('config.add', array('googlesearch_position3', '')),
		array('config.update', array('googlesearch_version', '2.6.0')),
		);
	}
}
