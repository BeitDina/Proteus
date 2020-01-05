<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\controller\helper */
	protected $helper;
 
	static public function getSubscribedEvents()
	{
		return array(
		'core.user_setup'   => 'load_language_on_setup',
		'core.page_header'   => 'add_page_header_link',
		);
	}

	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->config = $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'hifikabin/googlesearch',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}


	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
		'S_GOOGLESEARCH_POSITION'			=> $this->config['googlesearch_position'] ? true : false,
		'S_GOOGLESEARCH_POSITION2'			=> $this->config['googlesearch_position2'] ? true : false,
		'S_GOOGLESEARCH_POSITION3'			=> $this->config['googlesearch_position3'] ? true : false,
		'S_GOOGLESEARCH_CUSTOM_CODE'		=> (isset($this->config['googlesearch_custom_code'])) ? $this->config['googlesearch_custom_code'] : '',
		'S_GOOGLESEARCH_VERIFICATION_CODE'	=> (isset($this->config['googlesearch_verification_code'])) ? $this->config['googlesearch_verification_code'] : '',
		'U_GOOGLE_SEARCH'					=> $this->helper->route('hifikabin_googlesearch_controller'),
		));
	}
}
