<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\googlesearch\acp;

class googlesearch_module
{
var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request;
		global $config;

		$this->tpl_name = 'acp_googlesearch_config';
		$this->page_title = $user->lang('GOOGLESEARCH_CONFIG');
		$form_name = 'acp_googlesearch_config';
		add_form_key($form_name);
      
	$submit = $request->is_set_post('submit');
	if ($submit)
		{
        if (!check_form_key('acp_googlesearch_config'))
        {
            trigger_error('FORM_INVALID');
        }
        $config->set('googlesearch_position', $request->variable('googlesearch_position', 0));
        $config->set('googlesearch_position2', $request->variable('googlesearch_position2', 0));
        $config->set('googlesearch_position3', $request->variable('googlesearch_position3', 0));
        $config->set('googlesearch_custom_code', $request->variable('googlesearch_custom_code', ''));
        $config->set('googlesearch_verification_code', $request->variable('googlesearch_verification_code', ''));

        trigger_error($user->lang('GOOGLESEARCH_CONFIG_SAVED') . adm_back_link($this->u_action));

        }
        $template->assign_vars(array(
        'GOOGLESEARCH_POSITION'         	=> (!empty($config['googlesearch_position'])) ? true : false,
        'GOOGLESEARCH_POSITION2'         	=> (!empty($config['googlesearch_position2'])) ? true : false,
        'GOOGLESEARCH_POSITION3'         	=> (!empty($config['googlesearch_position3'])) ? true : false,
        'GOOGLESEARCH_CUSTOM_CODE'        	=> (isset($config['googlesearch_custom_code'])) ? $config['googlesearch_custom_code'] : '',
        'GOOGLESEARCH_VERIFICATION_CODE'    => (isset($config['googlesearch_verification_code'])) ? $config['googlesearch_verification_code'] : '',
        'U_ACTION'                          => $this->u_action,
        ));
    }
}
