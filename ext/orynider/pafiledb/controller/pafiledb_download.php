<?php
/**
*
* @package phpBB Extension - Download Manager
* @copyright (c) 2016 orynider - http://mxpcms.sourceforge.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace orynider\pafiledb\controller;

use phpbb\exception\http_exception;

class pafiledb_download
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var string */
	protected $root_path;

	/**
	* The database tables
	*
	* @var string
	*/
	protected $pa_files_table;

	protected $pa_cat_table;

	/**
	* Constructor
	*
	* @param \phpbb\auth\auth				$auth
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\request\request		 	$request
	* @param string						$root_path
	* @param string						$pa_files_table
	* @param string						$pa_cat_table
	*
	*/
	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\db\driver\driver_interface $db,
		\phpbb\request\request $request,
		$root_path,
		$pa_files_table,
		$pa_cat_table)
	{
		$this->auth 			= $auth;
		$this->db 				= $db;
		$this->request 			= $request;
		$this->root_path 		= $root_path;
		$this->pa_files_table 	= $pa_files_table;
		$this->pa_cat_table 	= $pa_cat_table;
	}

	public function handle_download()
	{
		$file_id = $this->request->variable('file_id', 0, true);

		if ($file_id)
		{
			$sql = 'SELECT d.*, c.*
				FROM ' . $this->pa_files_table . ' d
				LEFT JOIN ' . $this->pa_cat_table . ' c
					ON d.download_cat_id = c.cat_id
				WHERE d.download_id = ' . (int) $file_id;
			$result = $this->db->sql_query($sql);
			$row = $this->db->sql_fetchrow($result);

			if (!$this->auth->acl_get('u_pa_files_download'))
			{
				throw new http_exception(401, 'FILES_NO_DOWNLOAD');
			}

			if (!$row)
			{
				throw new http_exception(400, 'FILES_DL_NOEXISTS');
			}

			$download_sub_path = $row['cat_sub_dir'];
			$download_filename = $row['download_filename'];

			$url = $this->root_path . 'ext/orynider/pafiledb/files/' . $download_sub_path . '/' . $download_filename;

			$sql = 'UPDATE ' . $this->pa_files_table . '
				SET download_count = download_count + 1
				WHERE download_id = ' . (int) $file_id;
			$result=$this->db->sql_query($sql);

			$this->db->sql_freeresult($result);

			header('Content-type: application/octet-stream');
			header("Content-disposition: attachment; filename=\"" . $download_filename . "\"");
			header('Content-Length: ' . filesize($url));
			ob_end_flush();
			readfile($url);
		}
		else
		{
			throw new http_exception(400, 'FILES_NO_ID');
		}
	}
}
