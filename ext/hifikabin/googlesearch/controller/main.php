<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\controller;

class main
{


	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/* @var \phpbb\controller\helper */
	protected $helper;


	public function __construct(\phpbb\template\template $template,  \phpbb\user $user, \phpbb\controller\helper $helper)
	{

	$this->template = $template;
	$this->user = $user;
	$this->helper = $helper;
	}

	public function base()
	{
		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME' 	=> ($this->user->lang['GOOGLE']),
		));

	return $this->helper->render('googlesearch.html', $this->user->lang['GOOGLE']);
	}
}
