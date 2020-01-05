<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\acp;

class googlesearch_info
{
	function module()
	{
		return array(
		'filename'	=> '\hifikabin\googlesearch\acp\googlesearch_module',
		'title'	=> 'ACP_GOOGLESEARCH',
		'modes'	=> array(
		'config'	=> array('title' => 'ACP_GOOGLESEARCH_CONFIG', 'auth' => 'ext_hifikabin/googlesearch && acl_a_board', 'cat' => array('ACP_GOOGLESEARCH')),
			),
		);
	}
}
