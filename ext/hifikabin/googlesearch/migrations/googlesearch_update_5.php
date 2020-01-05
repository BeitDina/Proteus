<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\migrations;

class googlesearch_update_5 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\googlesearch\migrations\googlesearch_update_4');
	}

	public function update_data()
	{
		return array(
		// Add configs
		array('config.add', array('googlesearch_verification_code', '')),
		array('config.update', array('googlesearch_version', '3.1.0')),
		);
	}
}
