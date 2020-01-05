#
# $Id$
#

# POSTGRES BEGIN #

# -- Config
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('active_sessions', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_attachments', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_autologin', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar_gravatar', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar_local', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar_remote', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar_remote_upload', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_avatar_upload', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_bbcode', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_birthdays', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_board_notifications', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_bookmarks', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_cdn', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_emailreuse', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_forum_notify', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_live_searches', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_mass_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_name_chars', 'USERNAME_CHARS_ANY', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_namechange', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_nocensors', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_password_reset', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_pm_attach', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_pm_report', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_post_flash', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_post_links', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_privmsg', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_quick_reply', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_bbcode', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_flash', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_img', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_links', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_sig_smilies', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_smilies', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allow_topic_notify', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('allowed_schemes_links', 'http,https,ftp', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('assets_version', '39', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('attachment_quota', '52428800', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_bbcode_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_flash_pm', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_img_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_method', 'db', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_bitly_key', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_bitly_secret', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_facebook_key', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_facebook_secret', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_google_key', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_google_secret', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_twitter_key', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_oauth_twitter_secret', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('auth_smilies_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_filesize', '6144', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_gallery_path', 'images/avatars/gallery', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_max_height', '90', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_max_width', '90', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_min_height', '20', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_min_width', '20', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('avatar_salt', '835327ff823bbdbdddfac0dfb42f783b', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_contact', 'orynider@rdslink.ro', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_contact_name', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_disable', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_disable_msg', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_email', 'orynider@rdslink.ro', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_email_form', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_email_sig', 'Gracias, La Administraci�n del Foro', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_hide_emails', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_index_text', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_startdate', '1520370928', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('board_timezone', 'Europe/Bucharest', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('browser_check', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('bump_interval', '10', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('bump_type', 'd', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cache_gc', '7200', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cache_last_gc', '1521115066', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_3d_noise', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_fonts', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_foreground_noise', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_wave', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_x_grid', '25', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_gd_y_grid', '25', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('captcha_plugin', 'core.captcha.plugins.gd', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('check_attachment_content', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('check_dnsbl', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('chg_passforce', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('confirm_refresh', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('contact_admin_form_enable', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cookie_domain', 'localhost', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cookie_name', 'phpbb3_li1e6', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cookie_path', '/', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cookie_secure', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('coppa_enable', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('coppa_fax', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('coppa_mail', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('cron_lock', '0', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('database_gc', '604800', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('database_last_gc', '1520403081', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('dbms_version', '5.5.24', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('default_dateformat', 'D, d M Y, H:i', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('default_lang', 'en', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('default_style', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('delete_time', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('display_last_edited', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('display_last_subject', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('display_order', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('edit_time', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('email_check_mx', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('email_enable', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('email_force_sender', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('email_max_chunk_size', '50', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('email_package_size', '20', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('enable_accurate_pm_button', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('enable_confirm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('enable_mod_rewrite', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('enable_pm_icons', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('enable_post_confirm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('extension_force_unstable', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_enable_on_install', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_json_file', 'composer-ext.json', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_packagist', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_purge_on_remove', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_repositories', '[]', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('exts_composer_vendor_dir', 'vendor-ext/', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_enable', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_forum', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_http_auth', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_item_statistics', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_limit_post', '15', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_limit_topic', '10', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_overall', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_overall_forums', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_topic', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_topics_active', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('feed_topics_new', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('flood_interval', '15', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('force_server_vars', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('form_token_lifetime', '7200', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('form_token_mintime', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('form_token_sid_guests', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('forward_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('forwarded_for_check', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('full_folder_action', '2', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_mysql_max_word_len', '254', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_mysql_min_word_len', '4', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_native_common_thres', '5', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_native_load_upd', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_native_max_chars', '14', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_native_min_chars', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_postgres_max_word_len', '254', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_postgres_min_word_len', '4', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_postgres_ts_name', 'simple', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_sphinx_id', '1c1505a86fd4f67a', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_sphinx_indexer_mem_limit', '512', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('fulltext_sphinx_stopwords', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('gzip_compress', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('help_send_statistics', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('help_send_statistics_time', '1520371383', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('hot_threshold', '25', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('icons_path', 'images/icons', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_create_thumbnail', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_display_inlined', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_imagick', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_link_height', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_link_width', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_max_height', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_max_thumb_width', '400', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_max_width', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('img_min_thumb_filesize', '12000', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ip_check', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ip_login_limit_max', '50', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ip_login_limit_time', '21600', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ip_login_limit_use_forwarded', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_enable', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_host', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_package_size', '20', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_password', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_port', '5222', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_use_ssl', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('jab_username', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('last_queue_run', '0', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_base_dn', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_email', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_password', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_port', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_server', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_uid', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_user', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ldap_user_filter', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('legend_sort_groupname', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('limit_load', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('limit_search_load', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_anon_lastread', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_birthdays', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_cpf_memberlist', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_cpf_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_cpf_viewprofile', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_cpf_viewtopic', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_db_lastread', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_db_track', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_jquery_url', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_jumpbox', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_moderators', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_notifications', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_online', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_online_guests', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_online_time', '5', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_onlinetrack', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_search', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_tplcompile', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_unreads_search', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_user_activity', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('load_user_activity_limit', '5000', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_attachments', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_attachments_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_autologin_time', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_filesize', '262144', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_filesize_pm', '262144', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_login_attempts', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_name_chars', '20', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_num_search_keywords', '10', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_pass_chars', '100', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_poll_options', '10', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_chars', '60000', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_font_size', '200', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_img_height', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_img_width', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_smilies', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_post_urls', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_quote_depth', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_reg_attempts', '5', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_chars', '255', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_font_size', '200', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_img_height', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_img_width', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_smilies', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('max_sig_urls', '5', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('mime_triggers', 'body|head|html|img|plaintext|a href|pre|script|table|title', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('min_name_chars', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('min_pass_chars', '6', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('min_post_chars', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('min_search_author_chars', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('mx_langtools_ask_admin', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('mx_langtools_ask_admin_last', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('new_member_group_default', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('new_member_post_limit', '3', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('newest_user_colour', 'AA0000', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('newest_user_id', '2', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('newest_username', 'admin', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('num_files', '0', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('num_posts', '1', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('num_topics', '1', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('num_users', '1', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('override_user_style', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('pass_complex', 'PASS_TYPE_ANY', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('plupload_last_gc', '0', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('plupload_salt', '8af74bbdb38ecd91038ccb2484346764', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('pm_edit_time', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('pm_max_boxes', '4', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('pm_max_msgs', '50', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('pm_max_recipients', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('posts_per_page', '10', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('print_pm', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('questionnaire_unique_id', '58ac0793f09d754a', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('queue_interval', '60', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('rand_seed', '8793c4329a1e3f75e09a0278b6c31b3f', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('rand_seed_last_update', '1520370943', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('ranks_path', 'images/ranks', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('read_notification_expire_days', '30', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('read_notification_gc', '86400', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('read_notification_last_gc', '1520900019', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('record_online_date', '1520373379', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('record_online_users', '1', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('referer_validation', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('remote_upload_verify', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('require_activation', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('script_path', '/rhea', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_anonymous_interval', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_block_size', '250', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_gc', '7200', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_indexing_state', '', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_interval', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_last_gc', '1521115284', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_store_results', '1800', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('search_type', '\\phpbb\\search\\fulltext_native', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('secure_allow_deny', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('secure_allow_empty_referer', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('secure_downloads', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('server_name', 'localhost', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('server_port', '80', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('server_protocol', 'https://', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('session_gc', '3600', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('session_last_gc', '1521115145', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('session_length', '3600', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('site_desc', 'Un breve texto para describir su Foro', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('site_home_text', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('site_home_url', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('sitename', 'sudominio.com', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smilies_path', 'images/smilies', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smilies_per_page', '50', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_auth_method', 'PLAIN', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_delivery', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_host', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_password', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_port', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('smtp_username', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('storage\\avatar\\config\\path', 'images/avatars/upload', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('storage\\avatar\\provider', 'phpbb\\storage\\provider\\local', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('teampage_forums', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('teampage_memberships', '1', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('topics_per_page', '25', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('tpl_allow_php', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('translator_ask_admin', '', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('translator_ask_admin_last', '1520574782', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('translator_choice_lang', 'fr,es,ro,it', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('translator_default_lang', 'en', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('upload_dir_size', '0', 1);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('upload_icons_path', 'images/upload_icons', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('upload_path', 'files', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('use_system_cron', '0', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('version', '3.3.0-a1-dev', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('warnings_expire_days', '90', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('warnings_gc', '14400', 0);
INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES('warnings_last_gc', '1521115542', 1);

# -- Forum related auth options
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_announce', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_announce_global', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_attach', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_bbcode', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_bump', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_delete', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_download', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_edit', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_email', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_flash', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_icons', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_ignoreflood', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_img', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_list', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_list_topics', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_noapprove', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_poll', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_post', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_postcount', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_print', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_read', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_reply', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_report', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_search', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_sigs', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_smilies', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_sticky', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_subscribe', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_user_lock', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_vote', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_votechg', 1);
INSERT INTO phpbb_acl_options (auth_option, is_local) VALUES ('f_softdelete', 1);

# -- Moderator related auth options
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_approve', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_chgposter', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_delete', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_edit', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_info', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_lock', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_merge', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_move', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_report', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_split', 1, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_softdelete', 1, 1);

# -- Global moderator auth option (not a local option)
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_ban', 0, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_pm_report', 0, 1);
INSERT INTO phpbb_acl_options (auth_option, is_local, is_global) VALUES ('m_warn', 0, 1);

# -- Admin related auth options
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_aauth', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_attach', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_authgroups', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_authusers', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_backup', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_ban', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_bbcode', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_board', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_bots', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_clearlogs', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_email', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_extensions', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_fauth', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_forum', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_forumadd', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_forumdel', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_group', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_groupadd', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_groupdel', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_icons', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_jabber', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_language', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_mauth', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_modules', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_names', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_phpinfo', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_profile', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_prune', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_ranks', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_reasons', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_roles', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_search', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_server', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_storage', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_styles', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_switchperm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_uauth', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_user', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_userdel', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_viewauth', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_viewlogs', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('a_words', 1);

# -- User related auth options
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_attach', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgavatar', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgcensors', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgemail', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chggrp', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgname', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgpasswd', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_chgprofileinfo', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_download', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_hideonline', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_ignoreflood', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_masspm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_masspm_group', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_attach', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_bbcode', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_delete', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_download', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_edit', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_emailpm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_flash', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_forward', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_img', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_printpm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_pm_smilies', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_readpm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_savedrafts', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_search', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_sendemail', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_sendim', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_sendpm', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_sig', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_viewonline', 1);
INSERT INTO phpbb_acl_options (auth_option, is_global) VALUES ('u_viewprofile', 1);


# -- standard auth roles
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ADMIN_STANDARD', 'ROLE_DESCRIPTION_ADMIN_STANDARD', 'a_', 1);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ADMIN_FORUM', 'ROLE_DESCRIPTION_ADMIN_FORUM', 'a_', 3);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ADMIN_USERGROUP', 'ROLE_DESCRIPTION_ADMIN_USERGROUP', 'a_', 4);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_ADMIN_FULL', 'ROLE_DESCRIPTION_ADMIN_FULL', 'a_', 2);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_FULL', 'ROLE_DESCRIPTION_USER_FULL', 'u_', 3);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_STANDARD', 'ROLE_DESCRIPTION_USER_STANDARD', 'u_', 1);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_LIMITED', 'ROLE_DESCRIPTION_USER_LIMITED', 'u_', 2);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_NOPM', 'ROLE_DESCRIPTION_USER_NOPM', 'u_', 4);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_NOAVATAR', 'ROLE_DESCRIPTION_USER_NOAVATAR', 'u_', 5);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_MOD_FULL', 'ROLE_DESCRIPTION_MOD_FULL', 'm_', 3);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_MOD_STANDARD', 'ROLE_DESCRIPTION_MOD_STANDARD', 'm_', 1);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_MOD_SIMPLE', 'ROLE_DESCRIPTION_MOD_SIMPLE', 'm_', 2);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_MOD_QUEUE', 'ROLE_DESCRIPTION_MOD_QUEUE', 'm_', 4);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_FULL', 'ROLE_DESCRIPTION_FORUM_FULL', 'f_', 7);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_STANDARD', 'ROLE_DESCRIPTION_FORUM_STANDARD', 'f_', 5);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_NOACCESS', 'ROLE_DESCRIPTION_FORUM_NOACCESS', 'f_', 1);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_READONLY', 'ROLE_DESCRIPTION_FORUM_READONLY', 'f_', 2);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_LIMITED', 'ROLE_DESCRIPTION_FORUM_LIMITED', 'f_', 3);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_BOT', 'ROLE_DESCRIPTION_FORUM_BOT', 'f_', 9);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_ONQUEUE', 'ROLE_DESCRIPTION_FORUM_ONQUEUE', 'f_', 8);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_POLLS', 'ROLE_DESCRIPTION_FORUM_POLLS', 'f_', 6);
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_LIMITED_POLLS', 'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS', 'f_', 4);

# 23
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_USER_NEW_MEMBER', 'ROLE_DESCRIPTION_USER_NEW_MEMBER', 'u_', 6);

# 24
INSERT INTO phpbb_acl_roles (role_name, role_description, role_type, role_order) VALUES ('ROLE_FORUM_NEW_MEMBER', 'ROLE_DESCRIPTION_FORUM_NEW_MEMBER', 'f_', 10);

# -- phpbb_styles
INSERT INTO phpbb_styles (style_name, style_copyright, style_active, style_path, bbcode_bitfield, style_parent_id, style_parent_tree) VALUES ('prosilver', '&copy; phpBB Limited', 1, 'prosilver', '//g=', 0, '');

# -- Forums
INSERT INTO phpbb_forums (forum_name, forum_desc, left_id, right_id, parent_id, forum_type, forum_posts_approved, forum_posts_unapproved, forum_posts_softdeleted, forum_topics_approved, forum_topics_unapproved, forum_topics_softdeleted, forum_last_post_id, forum_last_poster_id, forum_last_poster_name, forum_last_poster_colour, forum_last_post_time, forum_link, forum_password, forum_image, forum_rules, forum_rules_link, forum_rules_uid, forum_desc_uid, prune_days, prune_viewed, forum_parents) VALUES ('{L_FORUMS_FIRST_CATEGORY}', '', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 'Admin', 'AA0000', 972086460, '', '', '', '', '', '', '', 0, 0, '');

INSERT INTO phpbb_forums (forum_name, forum_desc, left_id, right_id, parent_id, forum_type, forum_posts_approved, forum_posts_unapproved, forum_posts_softdeleted, forum_topics_approved, forum_topics_unapproved, forum_topics_softdeleted, forum_last_post_id, forum_last_poster_id, forum_last_poster_name, forum_last_poster_colour, forum_last_post_subject, forum_last_post_time, forum_link, forum_password, forum_image, forum_rules, forum_rules_link, forum_rules_uid, forum_desc_uid, prune_days, prune_viewed, forum_parents, forum_flags) VALUES ('{L_FORUMS_TEST_FORUM_TITLE}', '{L_FORUMS_TEST_FORUM_DESC}', 2, 3, 1, 1, 1, 0, 0, 1, 0, 0, 1, 2, 'Admin', 'AA0000', '{L_TOPICS_TOPIC_TITLE}', 972086460, '', '', '', '', '', '', '', 0, 0, '', 48);

# -- Users / Anonymous user
INSERT INTO phpbb_users (user_type, group_id, username, username_clean, user_regdate, user_password, user_email, user_lang, user_style, user_rank, user_colour, user_posts, user_permissions, user_ip, user_birthday, user_lastpage, user_last_confirm_key, user_post_sortby_type, user_post_sortby_dir, user_topic_sortby_type, user_topic_sortby_dir, user_avatar, user_sig, user_sig_bbcode_uid, user_jabber, user_actkey, user_newpasswd, user_allow_massemail) VALUES (2, 1, 'Anonymous', 'anonymous', 0, '', '', 'en', 1, 0, '', 0, '', '', '', '', '', 't', 'a', 't', 'd', '', '', '', '', '', '', 0);

# -- username: Admin    password: admin (change this or remove it once everything is working!)
INSERT INTO phpbb_users (user_type, group_id, username, username_clean, user_regdate, user_password, user_email, user_lang, user_style, user_rank, user_colour, user_posts, user_permissions, user_ip, user_birthday, user_lastpage, user_last_confirm_key, user_post_sortby_type, user_post_sortby_dir, user_topic_sortby_type, user_topic_sortby_dir, user_avatar, user_sig, user_sig_bbcode_uid, user_jabber, user_actkey, user_newpasswd) VALUES (3, 5, 'Admin', 'admin', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin@yourdomain.com', 'en', 1, 1, 'AA0000', 1, '', '', '', '', '', 't', 'a', 't', 'd', '', '', '', '', '', '');

# -- Groups
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('GUESTS', 3, 0, '', 0, '', '', '', 5);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('REGISTERED', 3, 0, '', 0, '', '', '', 5);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('REGISTERED_COPPA', 3, 0, '', 0, '', '', '', 5);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('GLOBAL_MODERATORS', 3, 0, '00AA00', 2, '', '', '', 0);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('ADMINISTRATORS', 3, 1, 'AA0000', 1, '', '', '', 0);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('BOTS', 3, 0, '9E8DA7', 0, '', '', '', 5);
INSERT INTO phpbb_groups (group_name, group_type, group_founder_manage, group_colour, group_legend, group_avatar, group_desc, group_desc_uid, group_max_recipients) VALUES ('NEWLY_REGISTERED', 3, 0, '', 0, '', '', '', 5);

# -- Teampage
INSERT INTO phpbb_teampage (group_id, teampage_name, teampage_position, teampage_parent) VALUES (5, '', 1, 0);
INSERT INTO phpbb_teampage (group_id, teampage_name, teampage_position, teampage_parent) VALUES (4, '', 2, 0);

# -- User -> Group
INSERT INTO phpbb_user_group (group_id, user_id, user_pending, group_leader) VALUES (1, 1, 0, 0);
INSERT INTO phpbb_user_group (group_id, user_id, user_pending, group_leader) VALUES (2, 2, 0, 0);
INSERT INTO phpbb_user_group (group_id, user_id, user_pending, group_leader) VALUES (4, 2, 0, 0);
INSERT INTO phpbb_user_group (group_id, user_id, user_pending, group_leader) VALUES (5, 2, 0, 1);

# -- Ranks
INSERT INTO phpbb_ranks (rank_title, rank_min, rank_special, rank_image) VALUES ('{L_RANKS_SITE_ADMIN_TITLE}', 0, 1, '');

# -- Roles data

# Standard Admin (a_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 1, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'a_%' AND auth_option NOT IN ('a_switchperm', 'a_jabber', 'a_phpinfo', 'a_server', 'a_backup', 'a_styles', 'a_clearlogs', 'a_modules', 'a_language', 'a_email', 'a_bots', 'a_search', 'a_aauth', 'a_roles');

# Forum admin (a_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 2, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'a_%' AND auth_option IN ('a_', 'a_authgroups', 'a_authusers', 'a_fauth', 'a_forum', 'a_forumadd', 'a_forumdel', 'a_mauth', 'a_prune', 'a_uauth', 'a_viewauth', 'a_viewlogs');

# User and Groups Admin (a_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 3, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'a_%' AND auth_option IN ('a_', 'a_authgroups', 'a_authusers', 'a_ban', 'a_group', 'a_groupadd', 'a_groupdel', 'a_ranks', 'a_uauth', 'a_user', 'a_viewauth', 'a_viewlogs');

# Full Admin (a_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 4, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'a_%';

# All Features (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 5, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%';

# Standard Features (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 6, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option NOT IN ('u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_flash', 'u_pm_forward');

# Limited Features (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 7, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option NOT IN ('u_attach', 'u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_attach', 'u_pm_emailpm', 'u_pm_flash', 'u_savedrafts', 'u_search', 'u_sendemail', 'u_sendim', 'u_masspm', 'u_masspm_group');

# No Private Messages (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 8, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option IN ('u_', 'u_chgavatar', 'u_chgcensors', 'u_chgemail', 'u_chgpasswd', 'u_download', 'u_hideonline', 'u_sig', 'u_viewprofile');
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 8, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option IN ('u_readpm', 'u_sendpm', 'u_masspm', 'u_masspm_group');

# No Avatar (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 9, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option NOT IN ('u_attach', 'u_chgavatar', 'u_viewonline', 'u_chggrp', 'u_chgname', 'u_ignoreflood', 'u_pm_attach', 'u_pm_emailpm', 'u_pm_flash', 'u_savedrafts', 'u_search', 'u_sendemail', 'u_sendim', 'u_masspm', 'u_masspm_group');
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 9, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option IN ('u_chgavatar');

# Full Moderator (m_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 10, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'm_%';

# Standard Moderator (m_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 11, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'm_%' AND auth_option NOT IN ('m_ban', 'm_chgposter');

# Simple Moderator (m_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 12, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'm_%' AND auth_option IN ('m_', 'm_delete', 'm_softdelete', 'm_edit', 'm_info', 'm_report', 'm_pm_report');

# Queue Moderator (m_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 13, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'm_%' AND auth_option IN ('m_', 'm_approve', 'm_edit');

# Full Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 14, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%';

# Standard Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 15, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option NOT IN ('f_announce', 'f_announce_global', 'f_flash', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock');

# No Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 16, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option = 'f_';

# Read Only Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 17, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option IN ('f_', 'f_download', 'f_list', 'f_list_topics', 'f_read', 'f_search', 'f_subscribe', 'f_print');

# Limited Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 18, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option NOT IN ('f_announce', 'f_announce_global', 'f_attach', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock', 'f_votechg');

# Bot Access (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 19, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option IN ('f_', 'f_download', 'f_list', 'f_list_topics', 'f_read', 'f_print');

# On Moderation Queue (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 20, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option NOT IN ('f_announce', 'f_announce_global', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_poll', 'f_sticky', 'f_user_lock', 'f_votechg', 'f_noapprove');
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 20, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option IN ('f_noapprove');

# Standard Access + Polls (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 21, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option NOT IN ('f_announce', 'f_announce_global', 'f_flash', 'f_ignoreflood', 'f_sticky', 'f_user_lock');

# Limited Access + Polls (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 22, auth_option_id, 1 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option NOT IN ('f_announce', 'f_announce_global', 'f_attach', 'f_bump', 'f_delete', 'f_flash', 'f_icons', 'f_ignoreflood', 'f_sticky', 'f_user_lock', 'f_votechg');

# New Member (u_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 23, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option LIKE 'u_%' AND auth_option IN ('u_sendpm', 'u_masspm', 'u_masspm_group', 'u_chgprofileinfo');

# New Member (f_)
INSERT INTO phpbb_acl_roles_data (role_id, auth_option_id, auth_setting) SELECT 24, auth_option_id, 0 FROM phpbb_acl_options WHERE auth_option LIKE 'f_%' AND auth_option IN ('f_noapprove');


# Permissions

# GUESTS - u_download and u_search ability
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) SELECT 1, 0, auth_option_id, 0, 1 FROM phpbb_acl_options WHERE auth_option IN ('u_', 'u_download', 'u_search');

# Admin user - full user features
INSERT INTO phpbb_acl_users (user_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (2, 0, 0, 5, 0);

# ADMINISTRATOR Group - full user features
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, 0, 5, 0);

# ADMINISTRATOR Group - standard admin
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, 0, 1, 0);

# REGISTERED and REGISTERED_COPPA having standard user features
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (2, 0, 0, 6, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (3, 0, 0, 6, 0);

# GLOBAL_MODERATORS having full user features
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (4, 0, 0, 5, 0);

# GLOBAL_MODERATORS having full global moderator access
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (4, 0, 0, 10, 0);

# Giving all groups read only access to the first category
# since administrators and moderators are already within the registered users group we do not need to set them here
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (1, 1, 0, 17, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (2, 1, 0, 17, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (3, 1, 0, 17, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (6, 1, 0, 17, 0);

# Giving access to the first forum

# guests having read only access
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (1, 2, 0, 17, 0);

# registered and registered_coppa having standard access
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (2, 2, 0, 15, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (3, 2, 0, 15, 0);

# global moderators having standard access + polls
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (4, 2, 0, 21, 0);

# administrators having full forum and full moderator access
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 2, 0, 14, 0);
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 2, 0, 10, 0);

# Bots having bot access
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (6, 2, 0, 19, 0);

# NEW MEMBERS are not allowed to send private messages
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (7, 0, 0, 23, 0);

# NEW MEMBERS on the queue
INSERT INTO phpbb_acl_groups (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (7, 2, 0, 24, 0);


# -- Demo Topic
INSERT INTO phpbb_topics (topic_title, topic_poster, topic_time, topic_views, topic_posts_approved, topic_posts_unapproved, topic_posts_softdeleted, forum_id, topic_status, topic_type, topic_first_post_id, topic_first_poster_name, topic_first_poster_colour, topic_last_post_id, topic_last_poster_id, topic_last_poster_name, topic_last_poster_colour, topic_last_post_subject, topic_last_post_time, topic_last_view_time, poll_title, topic_visibility) VALUES ('{L_TOPICS_TOPIC_TITLE}', 2, 972086460, 0, 1, 0, 0, 2, 0, 0, 1, 'Admin', 'AA0000', 1, 2, 'Admin', 'AA0000', '{L_TOPICS_TOPIC_TITLE}', 972086460, 972086460, '', 1);

# -- Demo Post
INSERT INTO phpbb_posts (topic_id, forum_id, poster_id, icon_id, post_time, post_username, poster_ip, post_subject, post_text, post_checksum, bbcode_uid, post_visibility) VALUES (1, 2, 2, 0, 972086460, '', '127.0.0.1', '{L_TOPICS_TOPIC_TITLE}', '{L_DEFAULT_INSTALL_POST}', '5dd683b17f641daf84c040bfefc58ce9', '', 1);

# -- Admin posted to the demo topic
INSERT INTO phpbb_topics_posted (user_id, topic_id, topic_posted) VALUES (2, 1, 1);

# -- Smilies
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':D', 'icon_e_biggrin.gif', '{L_SMILIES_VERY_HAPPY}', 15, 17, 1);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-D', 'icon_e_biggrin.gif', '{L_SMILIES_VERY_HAPPY}', 15, 17, 2);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':grin:', 'icon_e_biggrin.gif', '{L_SMILIES_VERY_HAPPY}', 15, 17, 3);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':)', 'icon_e_smile.gif', '{L_SMILIES_SMILE}', 15, 17, 4);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-)', 'icon_e_smile.gif', '{L_SMILIES_SMILE}', 15, 17, 5);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':smile:', 'icon_e_smile.gif', '{L_SMILIES_SMILE}', 15, 17, 6);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (';)', 'icon_e_wink.gif', '{L_SMILIES_WINK}', 15, 17, 7);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (';-)', 'icon_e_wink.gif', '{L_SMILIES_WINK}', 15, 17, 8);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':wink:', 'icon_e_wink.gif', '{L_SMILIES_WINK}', 15, 17, 9);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':(', 'icon_e_sad.gif', '{L_SMILIES_SAD}', 15, 17, 10);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-(', 'icon_e_sad.gif', '{L_SMILIES_SAD}', 15, 17, 11);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':sad:', 'icon_e_sad.gif', '{L_SMILIES_SAD}', 15, 17, 12);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':o', 'icon_e_surprised.gif', '{L_SMILIES_SURPRISED}', 15, 17, 13);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-o', 'icon_e_surprised.gif', '{L_SMILIES_SURPRISED}', 15, 17, 14);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':eek:', 'icon_e_surprised.gif', '{L_SMILIES_SURPRISED}', 15, 17, 15);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':shock:', 'icon_eek.gif', '{L_SMILIES_SHOCKED}', 15, 17, 16);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':?', 'icon_e_confused.gif', '{L_SMILIES_CONFUSED}', 15, 17, 17);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-?', 'icon_e_confused.gif', '{L_SMILIES_CONFUSED}', 15, 17, 18);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':???:', 'icon_e_confused.gif', '{L_SMILIES_CONFUSED}', 15, 17, 19);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES ('8-)', 'icon_cool.gif', '{L_SMILIES_COOL}', 15, 17, 20);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':cool:', 'icon_cool.gif', '{L_SMILIES_COOL}', 15, 17, 21);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':lol:', 'icon_lol.gif', '{L_SMILIES_LAUGHING}', 15, 17, 22);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':x', 'icon_mad.gif', '{L_SMILIES_MAD}', 15, 17, 23);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-x', 'icon_mad.gif', '{L_SMILIES_MAD}', 15, 17, 24);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':mad:', 'icon_mad.gif', '{L_SMILIES_MAD}', 15, 17, 25);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':P', 'icon_razz.gif', '{L_SMILIES_RAZZ}', 15, 17, 26);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-P', 'icon_razz.gif', '{L_SMILIES_RAZZ}', 15, 17, 27);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':razz:', 'icon_razz.gif', '{L_SMILIES_RAZZ}', 15, 17, 28);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':oops:', 'icon_redface.gif', '{L_SMILIES_EMARRASSED}', 15, 17, 29);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':cry:', 'icon_cry.gif', '{L_SMILIES_CRYING}', 15, 17, 30);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':evil:', 'icon_evil.gif', '{L_SMILIES_EVIL}', 15, 17, 31);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':twisted:', 'icon_twisted.gif', '{L_SMILIES_TWISTED_EVIL}', 15, 17, 32);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':roll:', 'icon_rolleyes.gif', '{L_SMILIES_ROLLING_EYES}', 15, 17, 33);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':!:', 'icon_exclaim.gif', '{L_SMILIES_EXCLAMATION}', 15, 17, 34);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':?:', 'icon_question.gif', '{L_SMILIES_QUESTION}', 15, 17, 35);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':idea:', 'icon_idea.gif', '{L_SMILIES_IDEA}', 15, 17, 36);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':arrow:', 'icon_arrow.gif', '{L_SMILIES_ARROW}', 15, 17, 37);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':|', 'icon_neutral.gif', '{L_SMILIES_NEUTRAL}', 15, 17, 38);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':-|', 'icon_neutral.gif', '{L_SMILIES_NEUTRAL}', 15, 17, 39);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':mrgreen:', 'icon_mrgreen.gif', '{L_SMILIES_MR_GREEN}', 15, 17, 40);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':geek:', 'icon_e_geek.gif', '{L_SMILIES_GEEK}', 17, 17, 41);
INSERT INTO phpbb_smilies (code, smiley_url, emotion, smiley_width, smiley_height, smiley_order) VALUES (':ugeek:', 'icon_e_ugeek.gif', '{L_SMILIES_UBER_GEEK}', 17, 18, 42);

# -- icons
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('misc/fire.gif', 16, 16, 1, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('smile/redface.gif', 16, 16, 9, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('smile/mrgreen.gif', 16, 16, 10, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('misc/heart.gif', 16, 16, 4, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('misc/star.gif', 16, 16, 2, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('misc/radioactive.gif', 16, 16, 3, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('misc/thinking.gif', 16, 16, 5, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('smile/info.gif', 16, 16, 8, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('smile/question.gif', 16, 16, 6, 1);
INSERT INTO phpbb_icons (icons_url, icons_width, icons_height, icons_order, display_on_posting) VALUES ('smile/alert.gif', 16, 16, 7, 1);

# -- reasons
INSERT INTO phpbb_reports_reasons (reason_title, reason_description, reason_order) VALUES ('warez', '{L_REPORT_WAREZ}', 1);
INSERT INTO phpbb_reports_reasons (reason_title, reason_description, reason_order) VALUES ('spam', '{L_REPORT_SPAM}', 2);
INSERT INTO phpbb_reports_reasons (reason_title, reason_description, reason_order) VALUES ('off_topic', '{L_REPORT_OFF_TOPIC}', 3);
INSERT INTO phpbb_reports_reasons (reason_title, reason_description, reason_order) VALUES ('other', '{L_REPORT_OTHER}', 4);

# -- extension_groups
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('IMAGES', 1, 1, 1, '', 0, '');
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('ARCHIVES', 0, 1, 1, '', 0, '');
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('PLAIN_TEXT', 0, 0, 1, '', 0, '');
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('DOCUMENTS', 0, 0, 1, '', 0, '');
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('FLASH_FILES', 5, 0, 1, '', 0, '');
INSERT INTO phpbb_extension_groups (group_name, cat_id, allow_group, download_mode, upload_icon, max_filesize, allowed_forums) VALUES ('DOWNLOADABLE_FILES', 0, 0, 1, '', 0, '');

# -- extensions
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'gif');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'png');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'jpeg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'jpg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'tif');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'tiff');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (1, 'tga');

INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'gtar');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'gz');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'tar');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'zip');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'rar');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'ace');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'torrent');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'tgz');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, 'bz2');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (2, '7z');

INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'txt');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'c');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'h');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'cpp');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'hpp');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'diz');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'csv');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'ini');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'log');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'js');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (3, 'xml');

INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'xls');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'xlsx');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'xlsm');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'xlsb');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'doc');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'docx');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'docm');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'dot');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'dotx');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'dotm');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'pdf');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'ai');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'ps');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'ppt');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'pptx');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'pptm');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'odg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'odp');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'ods');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'odt');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (4, 'rtf');

INSERT INTO phpbb_extensions (group_id, extension) VALUES (5, 'swf');

INSERT INTO phpbb_extensions (group_id, extension) VALUES (6, 'mp3');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (6, 'mpeg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (6, 'mpg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (6, 'ogg');
INSERT INTO phpbb_extensions (group_id, extension) VALUES (6, 'ogm');

# Add default profile fields
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_location', 'profilefields.type.string', 'phpbb_location', '20', '2', '100', '', '', '.*', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0, '', '');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_website', 'profilefields.type.url', 'phpbb_website', '40', '12', '255', '', '', '', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 2, 1, 'VISIT_WEBSITE', '%s');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_interests', 'profilefields.type.text', 'phpbb_interests', '3|30', '2', '500', '', '', '.*', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, '', '');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_occupation', 'profilefields.type.text', 'phpbb_occupation', '3|30', '2', '500', '', '', '.*', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 4, 0, '', '');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_aol', 'profilefields.type.string', 'phpbb_aol', '40', '5', '255', '', '', '.*', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 5, 1, '', '');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_icq', 'profilefields.type.string', 'phpbb_icq', '20', '3', '15', '', '', '[0-9]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 6, 1, 'SEND_ICQ_MESSAGE', 'https://www.icq.com/people/%s/');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_yahoo', 'profilefields.type.string', 'phpbb_yahoo', '40', '5', '255', '', '', '.*', 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 8, 1, 'SEND_YIM_MESSAGE', 'ymsgr:sendim?%s');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_facebook', 'profilefields.type.string', 'phpbb_facebook', '20', '5', '50', '', '', '[\w.]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 9, 1, 'VIEW_FACEBOOK_PROFILE', 'http://facebook.com/%s/');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_twitter', 'profilefields.type.string', 'phpbb_twitter', '20', '1', '15', '', '', '[\w_]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 10, 1, 'VIEW_TWITTER_PROFILE', 'http://twitter.com/%s');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_skype', 'profilefields.type.string', 'phpbb_skype', '20', '6', '32', '', '', '[a-zA-Z][\w\.,\-_]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 11, 1, 'VIEW_SKYPE_PROFILE', 'skype:%s?userinfo');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_youtube', 'profilefields.type.string', 'phpbb_youtube', '20', '3', '60', '', '', '[a-zA-Z][\w\.,\-_]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 12, 1, 'VIEW_YOUTUBE_CHANNEL', 'http://youtube.com/user/%s');
INSERT INTO phpbb_profile_fields (field_name, field_type, field_ident, field_length, field_minlen, field_maxlen, field_novalue, field_default_value, field_validation, field_required, field_show_novalue, field_show_on_reg, field_show_on_pm, field_show_on_vt, field_show_on_ml, field_show_profile, field_hide, field_no_view, field_active, field_order, field_is_contact, field_contact_desc, field_contact_url) VALUES ('phpbb_googleplus', 'profilefields.type.googleplus', 'phpbb_googleplus', '20', '3', '255', '', '', '[\w]+', 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 13, 1, 'VIEW_GOOGLEPLUS_PROFILE', 'http://plus.google.com/%s');

# User Notification Options (for first user)
INSERT INTO phpbb_user_notifications (item_type, item_id, user_id, method) VALUES('notification.type.post', 0, 2, 'notification.method.board');
INSERT INTO phpbb_user_notifications (item_type, item_id, user_id, method) VALUES('notification.type.post', 0, 2, 'notification.method.email');
INSERT INTO phpbb_user_notifications (item_type, item_id, user_id, method) VALUES('notification.type.topic', 0, 2, 'notification.method.board');
INSERT INTO phpbb_user_notifications (item_type, item_id, user_id, method) VALUES('notification.type.topic', 0, 2, 'notification.method.email');

# POSTGRES COMMIT #