<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\migrations;

class googlesearch_data extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\phpbb\db\migration\data\v31x\v314'
		);
	}

	public function update_data()
	{
		return array(
		// Add configs
			array('config.add', array('googlesearch_custom_code', '014009256459669723404:h-jorqudbre')),
			array('config.add', array('googlesearch_version', '2.5.0')),
			array('config.add', array('googlesearch_position', '')),


		// Add module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_GOOGLESEARCH')),
			array('module.add', array(
			'acp', 'ACP_GOOGLESEARCH', array(
			'module_basename' => '\hifikabin\googlesearch\acp\googlesearch_module', 'modes' => array('config'),
				),
			)),
		);
	}
}
