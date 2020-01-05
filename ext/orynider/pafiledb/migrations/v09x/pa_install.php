<?php
/**
 *
* @package phpBB2 Mod - pafileDB
* @version $Id: pa_install.php,v 1.2 2008/10/26 08:36:06 orynider Exp $
* @copyright (c) 2002-2006 [Jon Ohlsson, Mohd Basri, wGEric, PHP Arena, pafileDB, CRLin] MXP Project Team
* @license http://opensource.org/licenses/gpl-license.php GNU General Public License v2
 *
 */
 
/**#@+
* @ignore
*/
namespace orynider\pafiledb\migrations\v09x;

use \phpbb\db\migration\container_aware_migration;
/**#@-*/
class pa_install extends \phpbb\db\migration\container_aware_migration
{
	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return void
	 * @access public
	 */
	static public function depends_on()
	{
		//return array('\phpbb\db\migration\data\v31x\v314');
		return array('\phpbb\db\migration\data\v320\v320');
	}

	/**
	 * Add the pafiledb table schema to the database
	 *
	 * @return void
	 * @access public
	 */
	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				// --------------------------------------------------------
				// Table structure for table `phpbb_pa_files`			
				$this->table_prefix . 'pa_files'	=> array(
					'COLUMNS'	=> array(
						'download_id'		=> array('UINT:8', null, 'auto_increment'),
						'download_count'	=> array('UINT:8', 0),
						'download_title'	=> array('VCHAR:255', ''),
						'download_filename'	=> array('VCHAR:255', ''),
						'download_desc'		=> array('MTEXT_UNI',	''),
						'download_version'	=> array('VCHAR:10', 0),
						'download_cat_id'	=> array('UINT:8', 0),
						'bbcode_bitfield'	=> array('VCHAR:255', ''),
						'bbcode_uid'		=> array('VCHAR:8', ''),
						'bbcode_options'	=> array('VCHAR:255', ''),
						'upload_time'		=> array('UINT:8', 0),
						'last_changed_time'	=> array('UINT:8', 0),
						'cost_per_dl'		=> array('DECIMAL:10', 0.00),
						'filesize'			=> array('INT:11', 0),
						'points_user_id'	=> array('INT:8', 0),
					),
					'PRIMARY_KEY'	=> 'download_id',
				),
				// --------------------------------------------------------
				// Table structure for table `phpbb_pa_cat`				
				$this->table_prefix . 'pa_cat'	=> array(
					'COLUMNS'	=> array(
						'cat_id'			=> array('UINT:8', null, 'auto_increment'),
						'parent_id'			=> array('UINT:8', 0),
						'left_id'			=> array('UINT:8', 0),
						'right_id'			=> array('UINT:8', 0),
						'cat_parents'		=> array('MTEXT_UNI',	''),
						'cat_name'			=> array('VCHAR', 0),
						'cat_name_show'		=> array('TINT:1', 0),						
						'cat_desc'			=> array('MTEXT_UNI', 0),
						'cat_sub_dir'		=> array('VCHAR:255', ''),
						'cat_desc_uid'		=> array('VCHAR:8', ''),
						'cat_desc_bitfield'	=> array('VCHAR:8', 0),
						'cat_desc_options'	=> array('UINT:8', 0),						
					),
					'PRIMARY_KEY'	=> 'cat_id',
				),
				// --------------------------------------------------------
				// Table structure for table `phpbb_pa_config`				
				$this->table_prefix . 'pa_config'	=> array(
					'COLUMNS'	=> array(
						'pagination_acp'		=> array('TINT:3', 0),
						'pagination_user'		=> array('TINT:3', 0),
						'costs_per_dl'			=> array('DECIMAL:10', 0.00),
						'announce_enable'		=> array('TINT:1', 0),
						'announce_forum'		=> array('INT:10', 0),
						'pagination_acp' 		=> array('TINT:3', 0),
						'pagination_user' 		=> array('TINT:3', 0),
						'pagination_downloads'	=> array('TINT:3', 0),
						'pa_module_version' 	=> array('VCHAR:255', ''),						
						'announce_lock_enable'	=> array('TINT:1', 0),						
					),
				),
				// --------------------------------------------------------
				// Table structure for table 'phpbb_pa_comments'
				/* **/
				$this->table_prefix . 'pa_comments'	=> array(
					'COLUMNS'	=> array(
						'comments_id'			=> array('UINT:8', null, 'auto_increment'),
						'file_id' 				=> array('UINT:8', 0),
						'comments_text' 		=> array('MTEXT_UNI',	''),
						'comments_title' 		=> array('MTEXT_UNI',	''),
						'comments_time' 		=> array('INT:50', 0),
						'comment_bbcode_uid' 	=> array('VCHAR:10', 0),
						'poster_id' 			=> array('INT:8', 0),					
					),
					'PRIMARY_KEY'	=> 'comments_id',
					'FULLTEXT KEY'	=> 'comment_bbcode_uid',					
				),				
				/* **/
				// --------------------------------------------------------
				// Table structure for table 'phpbb_pa_customdata'
				$this->table_prefix . 'pa_customdata'	=> array(
					'COLUMNS'	=> array(				
					  'customdata_file' 		=> array('INT:50', 0),
					  'customdata_custom' 		=> array('INT:50', 0),
					  'data' 					=> array('TEXT',	''),
					),
				),

				// --------------------------------------------------------
				// Table structure for table 'phpbb_pa_download_info'
				$this->table_prefix . 'pa_download_info'	=> array(
					'COLUMNS'	=> array(				
					  'file_id' 				=> array('UINT:8', 0),
					  'user_id' 				=> array('UINT:8', 0),
					  'downloader_ip'			=> array('VCHAR:10', ''),
					  'downloader_os' 			=> array('VCHAR:255', ''),
					  'downloader_browser' 		=> array('VCHAR:255', ''),
					  'browser_version' 		=> array('VCHAR:255', ''),
					),
				),

				// --------------------------------------------------------
				/* **/
				$this->table_prefix . 'pa_mirrors'	=> array(
					'COLUMNS'	=> array(
						'mirror_id'			=> array('UINT:8', null, 'auto_increment'),
						'file_id' 			=> array('UINT:8', 0),
						'unique_name' 		=> array('VCHAR:255', ''),
						'file_dir' 			=> array('VCHAR:255', ''),
						'file_dlurl' 		=> array('VCHAR:255', ''),
						'mirror_location' 	=> array('VCHAR:255', ''),					
					),
					'PRIMARY_KEY'	=> 'mirror_id',
				),				
				/** **/
				// Table structure for table 'phpbb_pa_license'
				$this->table_prefix . 'pa_license'	=> array(
					'COLUMNS'	=> array(
						'license_id'		=> array('UINT:8', null, 'auto_increment'),
						'license_name'		=> array('TEXT_UNI',	''),						
						'license_text'		=> array('TEXT_UNI', 0),					
					),
					'PRIMARY_KEY'	=> 'license_id',
				),
				
				// --------------------------------------------------------
				// Table structure for table 'phpbb_pa_votes'
				$this->table_prefix . 'pa_votes'	=> array(
					'COLUMNS'	=> array(				
					  'user_id' 			=> array('UINT:8', 0),
					  'votes_ip' 			=> array('VCHAR:10', ''),
					  'votes_file' 			=> array('INT:50', 0),
					  'rate_point' 			=> array('TINT:3', 0),
					  'voter_os' 			=> array('VCHAR:255', ''),
					  'voter_browser' 		=> array('VCHAR:255', ''),
					  'browser_version' 	=> array('VCHAR:8',  0),
					),					  
					'KEY' 	=> 'user_id',
					'KEY' 	=> 'votes_file',
					'KEY' 	=> 'votes_ip',
					'KEY' 	=> 'voter_os',
					'KEY' 	=> 'voter_browser',
					'KEY' 	=> 'browser_version',
					'KEY' 	=> 'rate_point'
				),				
			),
		);
	}

	/**
	 * Add or update data in the database
	 *
	 * @return void
	 * @access public
	 */
	public function update_data()
	{
		return array(				
			
			// Add permissions
			array('permission.add', array('u_pa_files_use', true)),
			array('permission.add', array('u_pa_files_download', true)),
			array('permission.add', array('a_pa_files', true)),

			 // Set permissions
			array('permission.permission_set', array('REGISTERED', 'u_pa_files_use', 'group')),
			array('permission.permission_set', array('REGISTERED', 'u_pa_files_download', 'group')),
			array('permission.permission_set', array('ADMINISTRATORS', 'a_pa_files', 'group')),
			array('permission.permission_set', array('ADMINISTRATORS', 'u_pa_files_use', 'group')),
			array('permission.permission_set', array('ADMINISTRATORS', 'u_pa_files_download', 'group')),	
		
			// Insert sample knowledgebase data
			array('custom', array(array($this, 'insert_sample_data'))),	
			
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_PA_FILES')),

			// Add permission
			array('permission.add', array('u_pa_files_upload', true)),
			// Set permission
			array('permission.permission_set', array('ADMINISTRATORS', 'u_pa_files_upload', 'group')),	
				
			array('module.add', array(
				'acp', 'ACP_PA_FILES', array(
						'module_basename'	=> '\orynider\pafiledb\acp\pafiledb_module', 'modes' => array('config', 'categories', 'downloads'),
					),
				)
			),
		);	
	}

	/**
	 * Drop the pafiledb table schema from the database
	 *
	 * @return void
	 * @access public
	 */
	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'pa_cat',
				$this->table_prefix . 'pa_config',
				$this->table_prefix . 'pa_votes',
				$this->table_prefix . 'pa_license',
				$this->table_prefix . 'pa_comments',
				$this->table_prefix . 'pa_custom',
				$this->table_prefix . 'pa_customdata',
				$this->table_prefix . 'pa_download_info',
				$this->table_prefix . 'pa_mirrors',
				$this->table_prefix . 'pa_files',	
			),
		);
	}

	/**
	 * Custom function query permission roles
	 *
	 * @return void
	 * @access public
	 */
	private function role_exists($role)
	{
		$sql = 'SELECT role_id
			FROM ' . ACL_ROLES_TABLE . "
			WHERE role_name = '" . $this->db->sql_escape($role) . "'";
		$result = $this->db->sql_query_limit($sql, 1);
		$role_id = $this->db->sql_fetchfield('role_id');
		$this->db->sql_freeresult($result);

		return $role_id;
	}

	/**
	 * Custom function to add sample data to the database
	 *
	 * @return void
	 * @access public
	 */
	public function insert_sample_data()
	{
		$user = $this->container->get('user');
		
		add_log('admin', 'Download Manger mod Install/Upgrade', 'Version 0.9.0 Alfa');
		
		// Define sample category data
		$sample_data_cat = array(
			array(
				'cat_id'			=> 1,
				'parent_id'			=> 0,				
				'left_id'			=> 1,
				'right_id'			=> 2,
				'cat_parents'		=> '',				
				'cat_name'			=> 'Example Category 1',
				'cat_desc'			=> 'Example Category Description.',
				'cat_name_show'		=> 1,				
				'cat_sub_dir'		=> '',				
				'cat_desc_bitfield'	=> 'QQ==',
				'cat_desc_options'	=> 7,
				'cat_desc_uid'		=> 'a9fmpm6m',
			),
		);	
		
		// Define sample article data
		$sample_data_files = array(
			array(
				'download_id'				=> 1,
				//'download_poster_id'			=> $user->data['user_id'],
				//'download_poster_name'		=> $user->data['username'],
				//'download_poster_colour'		=> $user->data['user_colour'],				
				'upload_time'				=> time(),
				'last_changed_time'			=> 0,
				//''enable_bbcode'				=> 1,
				//''enable_smilies'			=> 1,
				//''enable_magic_url'			=> 1,
				'download_title'			=> 'Test File #1',
				'download_filename'			=> 'forum.gif',				
				'download_desc'				=> 'Sample file description: Test file for the pafileDB extension.',
				'download_version'			=> '1.0',
				'download_cat_id'			=> 1,				
				'bbcode_bitfield'			=> 'QQ==',
				'bbcode_uid'				=> '2p5lkzzx',
				'cost_per_dl'				=> '0.00',
				'filesize'					=> 1,
				'points_user_id'			=> $user->data['user_id'],				
				'download_count'			=> 1,
			),
		);
		
		// Define sample article <> category relationship data
		$sample_data_config = array(
			array(
				'pagination_acp' 		=> '5',
				'pagination_user' 		=> '3',
				'pagination_downloads' 	=> '25',
				'pa_module_version' 	=> '0.9.0',
			),
		);
	
		// Insert sample data
		$this->db->sql_multi_insert($this->table_prefix . 'pa_cat', $sample_data_cat);
		$this->db->sql_multi_insert($this->table_prefix . 'pa_files', $sample_data_files);
		$this->db->sql_multi_insert($this->table_prefix . 'pa_config', $sample_data_config);
	}
}
