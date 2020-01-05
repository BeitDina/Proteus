<?php
﻿/**
 * Language file [/acp/common.php]
 * 
 * @package language
 * @author admin
 * @version d: /acp/common.php,v 1.0 2018/05/31 17:52:25 admin Exp $
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v2
 * @link http://www.phpbb.com
 * Encoding: UTF-8
 * 1 tab = 4 spaces
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge( $lang, array( // #
	'ACP_ADMINISTRATORS'							=> 'Administradores',
	'ACP_ADMIN_LOGS'								=> 'Registro de administradores',
	'ACP_ADMIN_ROLES'								=> 'Roles de admins',
	'ACP_ATTACHMENTS'								=> 'Adjuntos',
	'ACP_ATTACHMENT_SETTINGS'						=> 'Configuraci??n de adjuntos',
	'ACP_AUTH_SETTINGS'							=> 'Autenticaci??n',
	'ACP_AUTOMATION'								=> 'Automatizaci??n',
	'ACP_AVATAR_SETTINGS'							=> 'Configuraci??n de avatar',
	'ACP_BACKUP'									=> 'Copia de seguridad',
	'ACP_BAN'										=> 'Exclusiones',
	'ACP_BAN_EMAILS'								=> 'Excluir emails',
	'ACP_BAN_IPS'									=> 'Excluir IPs',
	'ACP_BAN_USERNAMES'							=> 'Excluir usuarios',
	'ACP_BBCODES'									=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'						=> 'Configuraci??n del Sitio',
	'ACP_BOARD_FEATURES'							=> 'Caracter??sticas del Sitio',
	'ACP_BOARD_MANAGEMENT'						=> 'Administraci??n del Sitio',
	'ACP_BOARD_SETTINGS'							=> 'Configuraci??n del Sitio',
	'ACP_BOTS'									=> 'Spiders/Robots',
	'ACP_CAPTCHA'									=> 'CAPTCHA',
	'ACP_CAT_CUSTOMISE'							=> 'Personalizar',
	'ACP_CAT_DATABASE'							=> 'Base de datos',
	'ACP_CAT_DOT_MODS'							=> 'Extensiones',
	'ACP_CAT_FORUMS'								=> 'Foros',
	'ACP_CAT_GENERAL'								=> 'General',
	'ACP_CAT_MAINTENANCE'							=> 'Mantenimiento',
	'ACP_CAT_PERMISSIONS'							=> 'Permisos',
	'ACP_CAT_POSTING'								=> 'Mensajes',
	'ACP_CAT_STYLES'								=> 'Estilos',
	'ACP_CAT_SYSTEM'								=> 'Sistema',
	'ACP_CAT_USERGROUP'							=> 'Usuarios y grupos',
	'ACP_CAT_USERS'								=> 'Usuarios',
	'ACP_CLIENT_COMMUNICATION'					=> 'Comunicaci??n cliente',
	'ACP_COOKIE_SETTINGS'							=> 'Configuraci??n de cookies',
	'ACP_CONTACT'									=> 'P??gina de contacto',
	'ACP_CONTACT_SETTINGS'						=> 'Ajustes de la p??gina de contacto',
	'ACP_CRITICAL_LOGS'							=> 'Registro de errores',
	'ACP_CUSTOM_PROFILE_FIELDS'					=> 'Campos personalizados',
	'ACP_DATABASE'								=> 'Administraci??n de base de datos',
	'ACP_DISALLOW'								=> 'Deshabilitar',
	'ACP_DISALLOW_USERNAMES'						=> 'Deshabilitar nombres de usuario',
	'ACP_EMAIL_SETTINGS'							=> 'Configuraci??n de email',
	'ACP_EXTENSION_GROUPS'						=> 'Grupos de extensiones',
	'ACP_EXTENSION_MANAGEMENT'					=> 'Administrar Extensi??n',
	'ACP_EXTENSIONS'								=> 'Administrar Extensiones',
	'ACP_FORUM_BASED_PERMISSIONS'					=> 'Permisos basados en foros',
	'ACP_FORUM_LOGS'								=> 'Registro de foros',
	'ACP_FORUM_MANAGEMENT'						=> 'Administraci??n de foros',
	'ACP_FORUM_MODERATORS'						=> 'Moderadores de foros',
	'ACP_FORUM_PERMISSIONS'						=> 'Permisos de foros',
	'ACP_FORUM_PERMISSIONS_COPY'					=> 'Copiar los permisos de foro',
	'ACP_FORUM_ROLES'								=> 'Roles de foros',
	'ACP_GENERAL_CONFIGURATION'					=> 'Configuraci??n general',
	'ACP_GENERAL_TASKS'							=> 'Tareas generales',
	'ACP_GLOBAL_MODERATORS'						=> 'Moderadores globales',
	'ACP_GLOBAL_PERMISSIONS'						=> 'Permisos globales',
	'ACP_GROUPS'									=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'				=> 'Permisos de los grupos en los foros',
	'ACP_GROUPS_MANAGE'							=> 'Administrar grupos',
	'ACP_GROUPS_MANAGEMENT'						=> 'Administraci??n de grupos',
	'ACP_GROUPS_PERMISSIONS'						=> 'Permisos de grupos',
	'ACP_GROUPS_POSITION'							=> 'Administrar posici??n de los grupos',
	'ACP_HELP_PHPBB'								=> 'Ayuda de soporte phpBB',
	'ACP_ICONS'									=> 'Iconos del tema',
	'ACP_ICONS_SMILIES'							=> 'Iconos/Emoticonos del tema',
	'ACP_INACTIVE_USERS'							=> 'Usuarios inactivos',
	'ACP_INDEX'									=> 'Indice del PCA',
	'ACP_JABBER_SETTINGS'							=> 'Configuraci??n de Jabber',
	'ACP_LANGUAGE'								=> 'Administraci??n de idiomas',
	'ACP_LANGUAGE_PACKS'							=> 'Paquetes de idiomas',
	'ACP_LOAD_SETTINGS'							=> 'Configuraci??n de carga',
	'ACP_LOGGING'									=> 'Conexi??n',
	'ACP_MAIN'									=> 'Panel principal de Administraci??n',
	'ACP_MANAGE_ATTACHMENTS'						=> 'Administrar adjuntos',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'				=> 'Aqu?? puede ver la lista y eliminar los ficheros adjuntos de los mensajes, y los mensajes privados.',
	'ACP_MANAGE_EXTENSIONS'						=> 'Administrar extensiones de adjuntos',
	'ACP_MANAGE_FORUMS'							=> 'Administrar foros',
	'ACP_MANAGE_RANKS'							=> 'Administrar rangos',
	'ACP_MANAGE_REASONS'							=> 'Administrar informes/razones',
	'ACP_MANAGE_USERS'							=> 'Administrar usuarios',
	'ACP_MASS_EMAIL'								=> 'Email masivo',
	'ACP_MESSAGES'								=> 'Mensajes',
	'ACP_MESSAGE_SETTINGS'						=> 'Configuraci??n de mensajes privados',
	'ACP_MODULE_MANAGEMENT'						=> 'Administraci??n de m??dulos',
	'ACP_MOD_LOGS'								=> 'Registro de moderadores',
	'ACP_MOD_ROLES'								=> 'Roles de moderador',
	'ACP_NO_ITEMS'								=> 'A??n no hay elementos.',
	'ACP_ORPHAN_ATTACHMENTS'						=> 'Adjuntos hu??rfanos',
	'ACP_PERMISSIONS'								=> 'Permisos',
	'ACP_PERMISSION_MASKS'						=> 'M??scaras de permisos',
	'ACP_PERMISSION_ROLES'						=> 'Permisos de roles',
	'ACP_PERMISSION_TRACE'						=> 'Rastrear permisos',
	'ACP_PHP_INFO'								=> 'Informaci??n de PHP',
	'ACP_POST_SETTINGS'							=> 'Configuraci??n de mensaje',
	'ACP_PRUNE_FORUMS'							=> 'Purgar foros',
	'ACP_PRUNE_USERS'								=> 'Purgar usuarios',
	'ACP_PRUNING'									=> 'Purga',
	'ACP_QUICK_ACCESS'							=> 'Acceso r??pido',
	'ACP_RANKS'									=> 'Rangos',
	'ACP_REASONS'									=> 'Razones',
	'ACP_REGISTER_SETTINGS'						=> 'Configuraci??n de registro de usuarios',
	'ACP_RESTORE'									=> 'Restaurar',
	'ACP_FEED'									=> 'Gesti??n de Feeds',
	'ACP_FEED_SETTINGS'							=> 'Configuraci??n de Feeds',
	'ACP_SEARCH'									=> 'Configuraci??n del buscador',
	'ACP_SEARCH_INDEX'							=> 'Indice de b??squeda',
	'ACP_SEARCH_SETTINGS'							=> 'Configuraci??n de b??squeda',
	'ACP_SECURITY_SETTINGS'						=> 'Configuraci??n de seguridad',
	'ACP_SERVER_CONFIGURATION'					=> 'Configuraci??n del servidor',
	'ACP_SERVER_SETTINGS'							=> 'Configuraci??n del servidor',
	'ACP_SIGNATURE_SETTINGS'						=> 'Configuraci??n de firma',
	'ACP_SMILIES'									=> 'Emoticonos',
	'ACP_STYLE_MANAGEMENT'						=> 'Administraci??n de estilos',
	'ACP_STYLES'									=> 'Estilos',
	'ACP_STYLES_CACHE'							=> 'Limpiar Cache',
	'ACP_STYLES_INSTALL'							=> 'Instalar estilos',
	'ACP_SUBMIT_CHANGES'							=> 'Aplicar cambios',
	'ACP_TEMPLATES'								=> 'Plantillas',
	'ACP_THEMES'									=> 'Temas',
	'ACP_UPDATE'									=> 'Actualizaci??n',
	'ACP_USERS_FORUM_PERMISSIONS'					=> 'Permisos de los usuarios en los foros',
	'ACP_USERS_LOGS'								=> 'Registro de usuarios',
	'ACP_USERS_PERMISSIONS'						=> 'Permisos de usuario',
	'ACP_USER_ATTACH'								=> 'Adjuntos',
	'ACP_USER_AVATAR'								=> 'Avatar',
	'ACP_USER_FEEDBACK'							=> 'Observaciones',
	'ACP_USER_GROUPS'								=> 'Grupos',
	'ACP_USER_MANAGEMENT'							=> 'Administraci??n de usuarios',
	'ACP_USER_OVERVIEW'							=> 'Vista general',
	'ACP_USER_PERM'								=> 'Permisos',
	'ACP_USER_PREFS'								=> 'Preferencias',
	'ACP_USER_PROFILE'							=> 'Perfil',
	'ACP_USER_RANK'								=> 'Rango',
	'ACP_USER_ROLES'								=> 'Roles de usuario',
	'ACP_USER_SECURITY'							=> 'Seguridad de usuario',
	'ACP_USER_SIG'								=> 'Firma',
	'ACP_USER_WARNINGS'							=> 'Avisos',
	'ACP_VC_SETTINGS'								=> 'Medidas contra el Spam',
	'ACP_VC_CAPTCHA_DISPLAY'						=> 'CAPTCHA vista previa',
	'ACP_VERSION_CHECK'							=> 'Verificar actualizaciones',
	'ACP_VIEW_ADMIN_PERMISSIONS'					=> 'Ver permisos de Administradores',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'				=> 'Ver permisos de Moderadores',
	'ACP_VIEW_FORUM_PERMISSIONS'					=> 'Ver permisos de Foros',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'				=> 'Ver permisos de Moderadores globales',
	'ACP_VIEW_USER_PERMISSIONS'					=> 'Ver permisos de Usuarios',
	'ACP_WORDS'									=> 'Palabras censuradas',
	'ACTION'										=> 'Acci??n',
	'ACTIONS'										=> 'Acciones',
	'ACTIVATE'									=> 'Activar',
	'ADD'											=> 'A??adir',
	'ADMIN'										=> 'Administraci??n',
	'ADMIN_INDEX'									=> '??ndice de Administraci??n',
	'ADMIN_PANEL'									=> 'Panel de Control de Administraci??n (PCA)',
	'ADM_LOGOUT'									=> 'Desconectarse??del??PCA',
	'ADM_LOGGED_OUT'								=> 'Se desconect?? con ??xito del Panel de Control de Administraci??n (PCA)',
	'BACK'										=> 'Volver',
	'CANNOT_CHANGE_FILE_GROUP'					=> 'Incapaz de cambiar el grupo de archivos',
	'CANNOT_CHANGE_FILE_PERMISSIONS'				=> 'Incapaz de cambiar los permisos de archivos',
	'CANNOT_COPY_FILES'							=> 'Incapaz de copiar archivos',
	'CANNOT_CREATE_SYMLINK'						=> 'Incapaz de crear un enlace simb??lico',
	'CANNOT_DELETE_FILES'							=> 'Incapaz de borrar los archivos del sistema',
	'CANNOT_DUMP_FILE'							=> 'Incapaz de volvar el archivo',
	'CANNOT_MIRROR_DIRECTORY'						=> 'Incapaz de reflejar el directorio',
	'CANNOT_RENAME_FILE'							=> 'Incapaz de renombrar un archivo del sistema',
	'CANNOT_TOUCH_FILES'							=> 'Incapaz de determinar si el archivo existe',
	'CONTAINER_EXCEPTION'							=> 'phpBB.com&lt;/a&gt; para soporte.&quot;&gt;phpBB encontr?? un error al construir el contenedor debido a una extensi??n instalada. Por esta raz??n, todas las extensiones se han desactivado temporalmente. Por favor, intente purgar el cach?? del foro. Todas las extensiones ser??n autom??ticamente habilitadas de nuevo una vez que se resuelva el error del contenedor. Si este error contin??a, por favor visite &lt;a href=&quot;https://www.phpbb.com/support&quot;&gt;phpBB.com&lt;/a&gt; para soporte.',
	'EXCEPTION'									=> 'Excepci??n',
	'COLOUR_SWATCH'								=> 'Paleta de colores WWW',
	'CONFIG_UPDATED'								=> 'Configuraci??n actualizada correctamente.',
	'CRON_LOCK_ERROR'								=> 'No se ha podido obtener bloqueo de cron.',
	'CRON_NO_SUCH_TASK'							=> 'No se pudo encontrar la tarea cron ???%s???.',
	'CRON_NO_TASK'								=> 'No hay tareas cron que necesiten ejecutarse en estos momentos.',
	'CRON_NO_TASKS'								=> 'No se han podido encontrar tareas cron.',
	'CURRENT_VERSION'								=> 'Versi??n actual',
	'DEACTIVATE'									=> 'Desactivar',
	'DIRECTORY_DOES_NOT_EXIST'					=> 'La ruta introducida &quot;%s&quot; no existe.',
	'DIRECTORY_NOT_DIR'							=> 'La ruta introducida &quot;%s&quot; no es un directorio.',
	'DIRECTORY_NOT_WRITABLE'						=> 'La ruta introducida &quot;%s&quot; no se puede escribir.',
	'DISABLE'										=> 'Deshabilitar',
	'DOWNLOAD'									=> 'Descargar',
	'DOWNLOAD_AS'									=> 'Descargar como',
	'DOWNLOAD_STORE'								=> 'Descargar o guardar archivo',
	'DOWNLOAD_STORE_EXPLAIN'						=> 'Puede descargar el archivo directamente o guardarlo en la carpeta &lt;samp&gt;store/&lt;/samp&gt;.',
	'DOWNLOADS'									=> 'Descargas',
	'EDIT'										=> 'Editar',
	'ENABLE'										=> 'Habilitar',
	'EXPORT_DOWNLOAD'								=> 'Descargar',
	'EXPORT_STORE'								=> 'Guardar',
	'GENERAL_OPTIONS'								=> 'Opciones generales',
	'GENERAL_SETTINGS'							=> 'Configuraci??n general',
	'GLOBAL_MASK'									=> 'M??scara de permisos global',
	'INSTALL'										=> 'Instalar',
	'IP'											=> 'IP del usuario',
	'IP_HOSTNAME'									=> 'Direcciones de IP o nombres de host',
	'LATEST_VERSION'								=> '??ltima versi??n',
	'LOAD_NOTIFICATIONS'							=> 'Mostrar Notificaciones',
	'LOAD_NOTIFICATIONS_EXPLAIN'					=> 'Mostrar la lista de Notificaciones en todas las p??ginas (por lo general en la cabecera).',
	'LOGGED_IN_AS'								=> 'Se identific?? como:',
	'LOGIN_ADMIN'									=> 'Para Administrar el Sitio ha de ser un usuario identificado.',
	'LOGIN_ADMIN_CONFIRM'							=> 'Para Administrar el Sitio ha de introducir su contrase??a otra vez.',
	'LOGIN_ADMIN_SUCCESS'							=> 'Ha sido autentificado y ser?? llevado al Panel de Control de Administraci??n (PCA)',
	'LOOK_UP_FORUM'								=> 'Elija un Foro',
	'LOOK_UP_FORUMS_EXPLAIN'						=> 'Puede seleccionar m??s de un foro.',
	'MANAGE'										=> 'Administrar',
	'MENU_TOGGLE'									=> 'Ocultar o mostrar el men?? lateral',
	'MORE'										=> 'M??s',
	'MORE_INFORMATION'							=> 'M??s informaci??n ??',
	'MOVE_DOWN'									=> 'Bajar',
	'MOVE_UP'										=> 'Subir',
	'NOTIFY'										=> 'Notificaci??n',
	'NO_ADMIN'									=> 'No est?? autorizado para Administrar este Sitio.',
	'NO_EMAILS_DEFINED'							=> 'La direcci??n de email no es v??lida',
	'NO_FILES_TO_DELETE'							=> 'No existen los adjuntos que usted seleccion?? para su eliminaci??n.',
	'NO_PASSWORD_SUPPLIED'						=> 'Necesita introducir su contrase??a para acceder al Panel de Control de Administraci??n (PCA).',
	'OFF'											=> 'Off',
	'ON'											=> 'On',
	'PARSE_BBCODE'								=> 'Reconocer BBCode',
	'PARSE_SMILIES'								=> 'Reconocer emoticonos',
	'PARSE_URLS'									=> 'Reconocer enlaces',
	'PERMISSIONS_TRANSFERRED'						=> 'Permisos transferidos',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'				=> '&lt;strong&gt;revertir sus permisos&lt;/strong&gt;&lt;/a&gt; cuando quiera.&quot;&gt;Ahora tiene los permisos de %1$s. Puede navegar por el Sitio con los permisos de este usuario pero no acceder al Panel de Control de Administraci??n ya que los permisos administrativos no han sido transferidos. Est?? autorizado para &lt;a href=&quot;%2$s&quot;&gt;&lt;strong&gt;revertir sus permisos&lt;/strong&gt;&lt;/a&gt; cuando quiera.',
	'PROCEED_TO_ACP'								=> '%sIr al Panel de Control de Administraci??n (PCA)%s',
	'RELEASE_ANNOUNCEMENT'						=> 'Anuncio',
	'REMIND'										=> 'Recordar',
	'REPARSE_LOCK_ERROR'							=> 'El re-an??lisis ya est?? en funcionando con otro proceso.',
	'RESYNC'										=> 'Resincronizar',
	'RUNNING_TASK'								=> 'Ejecutando tarea: %s.',
	'SELECT_ANONYMOUS'							=> 'Seleccionar usuario an??nimo',
	'SELECT_OPTION'								=> 'Seleccionar opci??n',
	'SETTING_TOO_LOW'								=> 'El valor introducido para el par??metro ???%1$s??? es demasiado bajo. El valor m??nimo permitido es %2$d.',
	'SETTING_TOO_BIG'								=> 'El valor introducido para el par??metro ???%1$s??? es demasiado alto. El valor m??ximo permitido es %2$d.',
	'SETTING_TOO_LONG'							=> 'El valor introducido para el par??metro ???%1$s??? es demasiado largo. La longitud m??xima permitida es %2$d.',
	'SETTING_TOO_SHORT'							=> 'El valor introducido para el par??metro ???%1$s??? no es suficientemente largo. La longitud m??nima permitida es %2$d.',
	'SHOW_ALL_OPERATIONS'							=> 'Mostrar todas las operaciones',
	'TASKS_NOT_READY'								=> 'Tarea no preparada:',
	'TASKS_READY'									=> 'Tarea preparada:',
	'TOTAL_SIZE'									=> 'Tama??o total',
	'UCP'											=> 'Panel de Control del Usuario',
	'USERNAMES_EXPLAIN'							=> 'Inserte cada nombre de usuario en una l??nea diferente',
	'USER_CONTROL_PANEL'							=> 'Panel de Control del Usuario',
	'UPDATE_NEEDED'								=> 'El foro no est?? actualizado.',
	'UPDATE_NOT_NEEDED'							=> 'El foro est?? actualizado.',
	'UPDATES_AVAILABLE'							=> 'Actualizaciones disponibles:',
	'WARNING'										=> 'Advertencia',
	'ACP_PHP_INFO_EXPLAIN'						=> 'usuarios del equipo oficial&lt;/a&gt; en su Foro de Soporte.&quot;&gt;Esta p??gina muestra informaci??n de la versi??n de PHP instalada en el servidor. Incluye detalles de m??dulos cargados, variables disponibles y par??metros por defecto. Esta informaci??n puede ser ??til para diagnosticar problemas. Por favor observe que algunas empresas de hosting pueden limitar la informaci??n que se muestre aqu?? por razones de seguridad. Le advertimos que no deber??a proporcionar ning??n detalle de esta p??gina excepto cuando lo requiera el &lt;a href=&quot;https://www.phpbb.com/about/team/&quot;&gt;usuarios del equipo oficial&lt;/a&gt; en su Foro de Soporte.',
	'NO_PHPINFO_AVAILABLE'						=> 'La informaci??n sobre su configuraci??n PHP no se puede determinar. Phpinfo() ha sido deshabilitado por razones de seguridad.',
	'ACP_ADMIN_LOGS_EXPLAIN'						=> 'Listado de las acciones realizadas por administradores. Puede ordenarlas por nombre de usuario, fecha, IP o acci??n. Si tiene los permisos apropiados puede borrar acciones individuales o incluso el registro completo.',
	'ACP_CRITICAL_LOGS_EXPLAIN'					=> 'Listado de las acciones realizadas por el Sitio en s?? mismo. Este log le proporciona informaci??n que le puede ser ??til para resolver problemas espec??ficos, por ejemplo emails no enviados. Podr?? ordenarlas por nombre de usuario, fecha, IP o acci??n. Si tiene los permisos apropiados puede borrar acciones individuales o incluso el registro completo.',
	'ACP_MOD_LOGS_EXPLAIN'						=> 'Listado de las acciones realizadas por moderadores, elija un foro del combo desplegable. Puede ordenarlas por nombre de usuario, fecha, IP o acci??n. Si tiene los permisos apropiados puede borrar acciones individuales o incluso el registro completo.',
	'ACP_USERS_LOGS_EXPLAIN'						=> 'Listado de las acciones realizadas por usuarios o sobre usuarios.',
	'ALL_ENTRIES'									=> 'Todas las entradas',
	'DISPLAY_LOG'									=> 'Mostrar entradas previas',
	'NO_ENTRIES'									=> 'No hay entradas en este per??odo',
	'SORT_IP'										=> 'Direcci??n IP',
	'SORT_DATE'									=> 'Fecha',
	'SORT_ACTION'									=> 'Acci??n',
	'ADMIN_INTRO'									=> 'Gracias por elegir phpBB como su foro. Esta pantalla le proporciona una visi??n general de las estad??sticas del Sitio. Los enlaces a la izquierda le permiten un control completo del mismo. Cada p??gina tiene instrucciones de c??mo emplear las distintas herramientas.',
	'ADMIN_LOG'									=> 'Movimientos de los Administradores',
	'ADMIN_LOG_INDEX_EXPLAIN'						=> 'Visi??n general de las ??ltimas cinco acciones llevadas a cabo por los Administradores del Sitio. Puede ver el registro completo en el men?? correspondiente o siguiendo el enlace de abajo.',
	'AVATAR_DIR_SIZE'								=> 'Tama??o de la carpeta de avatares',
	'BOARD_STARTED'								=> 'Sitio Inaugurado',
	'BOARD_VERSION'								=> 'Versi??n del Sitio',
	'DATABASE_SERVER_INFO'						=> 'Servidor de base de datos',
	'DATABASE_SIZE'								=> 'Tama??o de la base de datos',
	'ERROR_MBSTRING_FUNC_OVERLOAD'				=> 'Las funciones de sobrecarga no est?? configurado correctamente',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '&lt;var&gt;mbstring.func_overload&lt;/var&gt; se debe establecer en 0 o 4. Usted puede comprobar el valor actual en la p??gina de &lt;samp&gt;Informaci??n de PHP&lt;/samp&gt;.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Codificaci??n de caracteres transparentes no est?? configurado correctamente',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '&lt;var&gt;mbstring.encoding_translation&lt;/var&gt; se debe establecer en 0. Usted puede comprobar el valor actual en la p??gina de &lt;samp&gt;Informaci??n de PHP&lt;/samp&gt;.',
	'ERROR_MBSTRING_HTTP_INPUT'					=> 'HTTP conversi??n de caracteres de entrada no est?? configurado correctamente',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'			=> '&lt;var&gt;mbstring.http_input&lt;/var&gt; se debe establecer en &lt;samp&gt;pass&lt;/samp&gt;. Usted puede comprobar el valor actual en la p??gina de &lt;samp&gt;Informaci??n de PHP&lt;/samp&gt;.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP conversi??n de caracteres de salida no est?? configurado correctamente',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '&lt;var&gt;mbstring.http_output&lt;/var&gt; se debe establecer en &lt;samp&gt;pass&lt;/samp&gt;. Usted puede comprobar el valor actual en la p??gina de &lt;samp&gt;Informaci??n de PHP&lt;/samp&gt;.',
	'FILES_PER_DAY'								=> 'Adjuntos por d??a',
	'FORUM_STATS'									=> 'Estad??sticas de foros',
	'GZIP_COMPRESSION'							=> 'Compresi??n GZip',
	'NO_SEARCH_INDEX'								=> 'El motor de b??squeda seleccionado no tiene un ??ndice de b??squeda.&lt;br /&gt;
Por favor, cree el ??ndice ???%1$s??? en la secci??n %2$s??ndice de B??squeda%3$s .',
	'NOT_AVAILABLE'								=> 'No disponible',
	'NUMBER_FILES'								=> 'N??mero de adjuntos',
	'NUMBER_POSTS'								=> 'N??mero de mensajes',
	'NUMBER_TOPICS'								=> 'N??mero de temas',
	'NUMBER_USERS'								=> 'N??mero de usuarios',
	'NUMBER_ORPHAN'								=> 'Adjuntos hu??rfanos',
	'PHP_VERSION'									=> 'Versi??n PHP',
	'PHP_VERSION_OLD'								=> 'La versi??n de PHP de este servidor (%1$s) no recibir?? soporte en futuras versiones de phpBB. La versi??n m??nima requerida ser?? PHP %2$s. %3$sDetalles%4$s',
	'POSTS_PER_DAY'								=> 'Mensajes por d??a',
	'PURGE_CACHE'									=> 'Limpiar la cach??',
	'PURGE_CACHE_CONFIRM'							=> '??Est?? seguro de que quiere limpiar la cach???',
	'PURGE_CACHE_EXPLAIN'							=> 'Limpiar todos los elementos relacionados con la cach??, incluyendo cualquier plantilla o consulta cacheada.',
	'PURGE_CACHE_SUCCESS'							=> 'Cach?? limpiado correctamente.',
	'PURGE_SESSIONS'								=> 'Purgar todas las sesiones',
	'PURGE_SESSIONS_CONFIRM'						=> '??Est?? seguro de que quiere purgar todas las sesiones? Esto desconectar?? a todos los usuarios.',
	'PURGE_SESSIONS_EXPLAIN'						=> 'Purgar todas las sesiones. Esto desconectar?? a todos los usuarios al limpiar la tabla de sesiones.',
	'PURGE_SESSIONS_SUCCESS'						=> 'Sesiones limpiadas correctamente.',
	'RESET_DATE'									=> 'Reiniciar fecha comienzo Sitio',
	'RESET_DATE_CONFIRM'							=> '??Est?? seguro de que quiere reiniciar la fecha de comienzo del Sitio?',
	'RESET_DATE_SUCCESS'							=> 'Fecha de inicio del Foro reiniciada',
	'RESET_ONLINE'								=> 'Reiniciar contador usuarios m??ximos identificados',
	'RESET_ONLINE_CONFIRM'						=> '??Est?? seguro de que quiere reiniciar el contador de mayor cantidad de usuarios en l??nea?',
	'RESET_ONLINE_SUCCESS'						=> 'Reiniciar mayor cantidad de usuarios en l??nea',
	'RESYNC_POSTCOUNTS'							=> 'Sincronizar recuento de mensajes',
	'RESYNC_POSTCOUNTS_EXPLAIN'					=> 'Se tomar??n en consideraci??n mensajes existentes. No se cuentan los mensajes purgados.',
	'RESYNC_POSTCOUNTS_CONFIRM'					=> '??Est?? seguro de que quiere resincronizar la cantidad de mensajes?',
	'RESYNC_POSTCOUNTS_SUCCESS'					=> 'Resincronizar la cantidad de mensajes',
	'RESYNC_POST_MARKING'							=> 'Sincronizar temas marcados',
	'RESYNC_POST_MARKING_CONFIRM'					=> '??Est?? seguro de que quiere resincronizar los temas marcados?',
	'RESYNC_POST_MARKING_EXPLAIN'					=> 'Primero desmarca todos los temas y luego marca correctamente los temas que han tenido actividad en los ??ltimos seis meses.',
	'RESYNC_POST_MARKING_SUCCESS'					=> 'Resincronizar temas marcados',
	'RESYNC_STATS'								=> 'Sincronizar estad??sticas',
	'RESYNC_STATS_CONFIRM'						=> '??Est?? seguro de que quiere resincronizar las estad??sticas?',
	'RESYNC_STATS_EXPLAIN'						=> 'Recalcula el n??mero total de mensajes, temas, usuarios y archivos.',
	'RESYNC_STATS_SUCCESS'						=> 'Resincronizar estad??sticas',
	'RUN'											=> 'Ejecutar',
	'STATISTIC'									=> 'Estad??stica',
	'STATISTIC_RESYNC_OPTIONS'					=> 'Resincronizar o reiniciar las estad??sticas',
	'TIMEZONE_INVALID'							=> 'La zona horaria que ha seleccionado no es v??lida.',
	'TIMEZONE_SELECTED'							=> '(actualmente seleccionado)',
	'TOPICS_PER_DAY'								=> 'Temas por d??a',
	'UPLOAD_DIR_SIZE'								=> 'Tama??o de la carpeta de adjuntos',
	'USERS_PER_DAY'								=> 'Usuarios por d??a',
	'VALUE'										=> 'Valor',
	'VERSIONCHECK_FAIL'							=> 'Fall?? el intento de obtener informaci??n sobre la ??ltima versi??n.',
	'VERSIONCHECK_FORCE_UPDATE'					=> 'Volver a comprobar la versi??n',
	'VERSION_CHECK'								=> 'Comprobar versi??n',
	'VERSION_CHECK_EXPLAIN'						=> 'Comprobar si su instalaci??n de phpBB est?? actualizada.',
	'VERSIONCHECK_INVALID_ENTRY'					=> 'La informaci??n de versi??n m??s reciente contiene una entrada no admitida.',
	'VERSIONCHECK_INVALID_URL'					=> 'La informaci??n de versi??n m??s reciente contiene URL no v??lida.',
	'VERSIONCHECK_INVALID_VERSION'				=> 'La informaci??n de versi??n m??s reciente contiene una versi??n no v??lida.',
	'VERSION_NOT_UP_TO_DATE_ACP'					=> 'Su instalaci??n phpBB no est?? actualizada.&lt;br /&gt;
A continuaci??n se muestra un enlace al anuncio de la versi??n, que contiene m??s informaci??n, as?? como instrucciones sobre la actualizaci??n.',
	'VERSION_NOT_UP_TO_DATE_TITLE'				=> 'Su instalaci??n phpBB no est?? actualizada.',
	'VERSION_UP_TO_DATE_ACP'						=> 'Su instalaci??n de phpBB est?? actualizada. No hay actualizaciones disponibles en este momento.',
	'VIEW_ADMIN_LOG'								=> 'Ver registro de Administradores',
	'VIEW_INACTIVE_USERS'							=> 'Ver usuarios inactivos',
	'WELCOME_PHPBB'								=> 'Bienvenido a phpBB',
	'WRITABLE_CONFIG'								=> 'chmod&lt;/a&gt; 644 config.php).&quot;&gt;En este momento su archivo de configuraci??n (config.php) permite escritura a todos. Le recomendamos de forma especial que cambie los permisos a 640 ?? al menos 644 (por ejemplo: &lt;a href=&quot;http://es.wikipedia.org/wiki/Chmod&quot; rel=&quot;external&quot;&gt;chmod&lt;/a&gt; 644 config.php).',
	'INACTIVE_DATE'								=> 'Fecha inactividad',
	'INACTIVE_REASON'								=> 'Raz??n',
	'INACTIVE_REASON_MANUAL'						=> 'Cuenta desactivada por La Administraci??n',
	'INACTIVE_REASON_PROFILE'						=> 'Datos del perfil cambiados',
	'INACTIVE_REASON_REGISTER'					=> 'Cuenta registrada nuevamente',
	'INACTIVE_REASON_REMIND'						=> 'Recordar activaci??n de cuenta de usuario',
	'INACTIVE_REASON_UNKNOWN'						=> 'Desconocido',
	'INACTIVE_USERS'								=> 'Usuarios inactivos',
	'INACTIVE_USERS_EXPLAIN'						=> 'Esta es una lista de usuarios registrados, pero con cuentas inactivas. Puede activar, borrar o record??rselo (enviando un e-mail) si quiere.',
	'INACTIVE_USERS_EXPLAIN_INDEX'				=> 'Esta es una lista de los ??ltimos 10 usuarios registrados que tienen cuentas inactivas. Las cuentas est??n inactivas, ya sea porque la activaci??n de la cuenta fue activada en la configuraci??n de registro de usuarios, y las cuentas de estos usuarios a??n no han sido activadas, o debido a que estas cuentas se han desactivado. Una lista completa est?? disponible desde el men?? o siguiendo el enlace donde puede activar, borrar o record??rselo (enviando un e-mail) si quiere.',
	'NO_INACTIVE_USERS'							=> 'No hay usuarios inactivos',
	'SORT_INACTIVE'								=> 'Inactividad',
	'SORT_LAST_VISIT'								=> '??ltima visita',
	'SORT_REASON'									=> 'Raz??n',
	'SORT_REG_DATE'								=> 'Fecha de registro',
	'SORT_LAST_REMINDER'							=> '??ltimo recordado',
	'SORT_REMINDER'								=> 'Recordatorio enviado',
	'USER_IS_INACTIVE'							=> 'Usuario inactivo',
	'EXPLAIN_SEND_STATISTICS'						=> 'Por favor env??e informaci??n sobre su servidor y configuraciones del foro a phpBB para an??lisis estad??sticos. Toda informaci??n que pueda identificarle o a su web ha sido eliminada - los datos son completamente &lt;strong&gt;an??nimos&lt;/strong&gt;. Basamos las decisiones sobre futuras versiones de phpBB en esta informaci??n. Las estad??sticas se ofrecen p??blicamente. Tambi??n compartimos estos datos con el proyecto PHP, el lenguaje de programaci??n con el que est?? hecho phpBB.',
	'EXPLAIN_SHOW_STATISTICS'						=> 'Usando el bot??n de abajo puede tener una vista previa de todas las variables que ser??n transmitidas.',
	'DONT_SEND_STATISTICS'						=> 'Vuelva al PCA si no desea enviar informaci??n estad??stica a phpBB.',
	'GO_ACP_MAIN'									=> 'Ir a la p??gina inicial del PCA',
	'HIDE_STATISTICS'								=> 'Ocultar detalles',
	'SEND_STATISTICS'								=> 'Enviar estad??sticas',
	'SEND_STATISTICS_LONG'						=> 'Enviar informaci??n estad??stica',
	'SHOW_STATISTICS'								=> 'Mostrar detalles',
	'THANKS_SEND_STATISTICS'						=> 'Gracias por enviar su informaci??n.',
	'FAIL_SEND_STATISTICS'						=> 'phpBB no pudo enviar estad??sticas',
	'LOG_ACL_ADD_USER_GLOBAL_U_'					=> '&lt;strong&gt;A??adidos o editados: permisos de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'					=> '&lt;strong&gt;A??adidos o editados: permisos de grupo de usuarios&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'					=> '&lt;strong&gt;A??adidos o editados: permisos de Moderador global&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'					=> '&lt;strong&gt;A??adidos o editados: permisos de grupos de Moderadores globales&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'					=> '&lt;strong&gt;A??adidos o editados: permisos de Administrador&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'					=> '&lt;strong&gt;A??adidos o editados: permisos de grupos de Administradores&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'					=> '&lt;strong&gt;A??adidos o editados: Administradores&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'					=> '&lt;strong&gt;A??adidos o editados: Moderadores globales&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_ADD_USER_LOCAL_F_'					=> '&lt;strong&gt;A??adidos o editados: acceso a foro de usuarios&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'					=> '&lt;strong&gt;A??adidos o editados: acceso a foro de moderadores&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'					=> '&lt;strong&gt;A??adidos o editados: acceso a foro de grupos de usuarios&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'					=> '&lt;strong&gt;A??adidos o editados: acceso a foro de grupos de moderadores&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_ADD_MOD_LOCAL_M_'					=> '&lt;strong&gt;A??adidos o editados: Moderadores&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'					=> '&lt;strong&gt;A??adidos o editados: permisos de foros&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'					=> '&lt;strong&gt;Borrado: Administradores&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'					=> '&lt;strong&gt;Borrado: Moderadores Globales&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'					=> '&lt;strong&gt;Borrado: Moderadores&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'					=> '&lt;strong&gt;Borrado: Permisos de foro Usuario/Grupo &lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_ACL_TRANSFER_PERMISSIONS'				=> '&lt;strong&gt;Permisos transferidos de&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ACL_RESTORE_PERMISSIONS'					=> '&lt;strong&gt;Permisos propios restaurados despu??s de usar permisos de&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ADMIN_AUTH_FAIL'							=> '&lt;strong&gt;Fall?? autenticaci??n de Administrador&lt;/strong&gt;',
	'LOG_ADMIN_AUTH_SUCCESS'						=> '&lt;strong&gt;Autenticaci??n de Administrador correcta&lt;/strong&gt;',
	'LOG_ATTACHMENTS_DELETED'						=> '&lt;strong&gt;Adjuntos usuario eliminados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXT_ADD'							=> '&lt;strong&gt;Agregados o editados: extensiones de adjuntos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXT_DEL'							=> '&lt;strong&gt;Borrado: extensi??n de adjuntos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXT_UPDATE'						=> '&lt;strong&gt;Actualizado: extensiones de adjuntos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXTGROUP_ADD'						=> '&lt;strong&gt;Agregado: grupo de extensiones&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXTGROUP_EDIT'					=> '&lt;strong&gt;Editado: grupo de extensiones&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_EXTGROUP_DEL'						=> '&lt;strong&gt;Borrado: grupo de extensiones&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ATTACH_FILEUPLOAD'						=> '&lt;strong&gt;Archivo hu??rfano subido a Mensaje&lt;/strong&gt;&lt;br /&gt;
?? ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'						=> '&lt;strong&gt;Archivo hu??rfano borrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BAN_EXCLUDE_USER'						=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s &quot;&gt;&lt;strong&gt;Usuario quitado de exclusi??n&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_BAN_EXCLUDE_IP'							=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s &quot;&gt;&lt;strong&gt;IP quitada de exclusi??n&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_BAN_EXCLUDE_EMAIL'						=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s &quot;&gt;&lt;strong&gt;Email quitado de exclusi??n&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_BAN_USER'								=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s &quot;&gt;&lt;strong&gt;Excluido: usuario&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_BAN_IP'									=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s&quot;&gt;&lt;strong&gt;Excluida: IP&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_BAN_EMAIL'								=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s&quot;&gt;&lt;strong&gt;Excluido: email&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_UNBAN_USER'								=> '&lt;strong&gt;Quitado excluido: usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_UNBAN_IP'								=> '&lt;strong&gt;Quitado excluida: IP&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_UNBAN_EMAIL'								=> '&lt;strong&gt;Quitado excluido: email&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BBCODE_ADD'								=> '&lt;strong&gt;A??adido: nuevo BBCode&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BBCODE_EDIT'								=> '&lt;strong&gt;Editado: BBCode&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BBCODE_DELETE'							=> '&lt;strong&gt;Borrado: BBCode&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BOT_ADDED'								=> '&lt;strong&gt;A??adido: robot&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BOT_DELETE'								=> '&lt;strong&gt;Borrado: robot&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BOT_UPDATED'								=> '&lt;strong&gt;Actualizado robot existente&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_CLEAR_ADMIN'								=> '&lt;strong&gt;Limpiado: registro admin&lt;/strong&gt;',
	'LOG_CLEAR_CRITICAL'							=> '&lt;strong&gt;Limpiado: registro errores&lt;/strong&gt;',
	'LOG_CLEAR_MOD'								=> '&lt;strong&gt;Limpiado: registro moderadores&lt;/strong&gt;',
	'LOG_CLEAR_USER'								=> '&lt;strong&gt;Limpiado: registro usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_CLEAR_USERS'								=> '&lt;strong&gt;Limpiado: registro de usuarios&lt;/strong&gt;',
	'LOG_CONFIG_ATTACH'							=> '&lt;strong&gt;Modificado: configuraci??n de adjuntos&lt;/strong&gt;',
	'LOG_CONFIG_AUTH'								=> '&lt;strong&gt;Modificado: configuraci??n de autentificaci??n&lt;/strong&gt;',
	'LOG_CONFIG_AVATAR'							=> '&lt;strong&gt;Modificado: configuraci??n de avatar&lt;/strong&gt;',
	'LOG_CONFIG_COOKIE'							=> '&lt;strong&gt;Modificado: configuraci??n de cookie&lt;/strong&gt;',
	'LOG_CONFIG_EMAIL'							=> '&lt;strong&gt;Modificado: configuraci??n de email&lt;/strong&gt;',
	'LOG_CONFIG_FEATURES'							=> '&lt;strong&gt;Modificado: propiedades del Sitio&lt;/strong&gt;',
	'LOG_CONFIG_LOAD'								=> '&lt;strong&gt;Modificado: configuraci??n de carga&lt;/strong&gt;',
	'LOG_CONFIG_MESSAGE'							=> '&lt;strong&gt;Modificado: configuraci??n de mensaje privado&lt;/strong&gt;',
	'LOG_CONFIG_POST'								=> '&lt;strong&gt;Modificado: configuraci??n de mensaje&lt;/strong&gt;',
	'LOG_CONFIG_REGISTRATION'						=> '&lt;strong&gt;Modificado: configuraci??n de registro de usuario&lt;/strong&gt;',
	'LOG_CONFIG_FEED'								=> '&lt;strong&gt;Configuraci??n de Syndication Feeds modificada&lt;/strong&gt;',
	'LOG_CONFIG_SEARCH'							=> '&lt;strong&gt;Modificado: configuraci??n de b??squeda&lt;/strong&gt;',
	'LOG_CONFIG_SECURITY'							=> '&lt;strong&gt;Modificado: configuraci??n de seguridad&lt;/strong&gt;',
	'LOG_CONFIG_SERVER'							=> '&lt;strong&gt;Modificado: configuraci??n del servidor&lt;/strong&gt;',
	'LOG_CONFIG_SETTINGS'							=> '&lt;strong&gt;Modificado: configuraci??n del Sitio&lt;/strong&gt;',
	'LOG_CONFIG_SIGNATURE'						=> '&lt;strong&gt;Modificado: configuraci??n de firma&lt;/strong&gt;',
	'LOG_CONFIG_VISUAL'							=> '&lt;strong&gt;Modificado: configuraci??n Anti-Spambot&lt;/strong&gt;',
	'LOG_APPROVE_TOPIC'							=> '&lt;strong&gt;Tema aprobado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_BUMP_TOPIC'								=> '&lt;strong&gt;Tema reactivado por usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DELETE_POST'								=> '&lt;strong&gt;Mensaje borrado ???%1$s??? escrito por ???%2$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %3$s',
	'LOG_DELETE_SHADOW_TOPIC'						=> '&lt;strong&gt;Tema sombreado eliminado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DELETE_TOPIC'							=> '&lt;strong&gt;Tema eliminado ???%1$s??? escrito por ???%2$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %3$s',
	'LOG_FORK'									=> '&lt;strong&gt;Tema copiado &lt;/strong&gt;&lt;br /&gt;
?? de %s',
	'LOG_LOCK'									=> '&lt;strong&gt;Tema cerrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_LOCK_POST'								=> '&lt;strong&gt;Mensaje cerrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MERGE'									=> '&lt;strong&gt;Mensajes unidos&lt;/strong&gt; al tema&lt;br /&gt;
?? %s',
	'LOG_MOVE'									=> '&lt;strong&gt;Tema movido&lt;/strong&gt;&lt;br /&gt;
?? de %1$s a %2$s',
	'LOG_MOVED_TOPIC'								=> '&lt;strong&gt;Tema movido&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PM_REPORT_CLOSED'						=> '&lt;strong&gt;Informe de MP cerrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PM_REPORT_DELETED'						=> '&lt;strong&gt;Informe de MP eliminado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_POST_APPROVED'							=> '&lt;strong&gt;Mensajes aprobados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_POST_DISAPPROVED'						=> '&lt;strong&gt;Mensaje desaprobado ???%1$s??? escrito por ???%3$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_POST_EDITED'								=> '&lt;strong&gt;Mensaje editado ???%1$s??? escrito por ???%2$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %3$s',
	'LOG_POST_RESTORED'							=> '&lt;strong&gt;Mensaje restaurado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REPORT_CLOSED'							=> '&lt;strong&gt;Informe cerrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REPORT_DELETED'							=> '&lt;strong&gt;Informe borrado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_RESTORE_TOPIC'							=> '&lt;strong&gt;Tema restaurado ???%1$s??? escrito por&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_SOFTDELETE_POST'							=> '&lt;strong&gt;Soft mensaje borrado ???%1$s??? escrito por ???%2$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %3$s',
	'LOG_SOFTDELETE_TOPIC'						=> '&lt;strong&gt;Soft tema borrado ???%1$s??? escrito por ???%2$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %3$s',
	'LOG_SPLIT_DESTINATION'						=> '&lt;strong&gt;Mensajes divididos movidos&lt;/strong&gt;&lt;br /&gt;
?? a %s',
	'LOG_SPLIT_SOURCE'							=> '&lt;strong&gt;Mensajes divididos&lt;/strong&gt;&lt;br /&gt;
?? de %s',
	'LOG_TOPIC_APPROVED'							=> '&lt;strong&gt;Tema aprobado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TOPIC_RESTORED'							=> '&lt;strong&gt;Tema restaurado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TOPIC_DISAPPROVED'						=> '&lt;strong&gt;Tema desaprobado ???%1$s??? escrito por ???%3$s??? por la siguiente raz??n&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_TOPIC_RESYNC'							=> '&lt;strong&gt;Resincronizados contadores de temas&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TOPIC_TYPE_CHANGED'						=> '&lt;strong&gt;Cambiado: tipo de tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_UNLOCK'									=> '&lt;strong&gt;Abierto: tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_UNLOCK_POST'								=> '&lt;strong&gt;Abierto: mensaje&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DISALLOW_ADD'							=> '&lt;strong&gt;A??adido: deshabilitar nombre de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DISALLOW_DELETE'							=> '&lt;strong&gt;Borrado: deshabilitar nombre de usuario&lt;/strong&gt;',
	'LOG_DB_BACKUP'								=> '&lt;strong&gt;Base de datos: copia de seguridad&lt;/strong&gt;',
	'LOG_DB_DELETE'								=> '&lt;strong&gt;Copia de Seguridad de base de datos borrada&lt;/strong&gt;',
	'LOG_DB_RESTORE'								=> '&lt;strong&gt;Base de datos: restauraci??n&lt;/strong&gt;',
	'LOG_DOWNLOAD_EXCLUDE_IP'						=> '&lt;strong&gt;Exclu??do IP/hostname de la lista de descarga&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DOWNLOAD_IP'								=> '&lt;strong&gt;A??adido: IP/hostname a la lista de descarga&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_DOWNLOAD_REMOVE_IP'						=> '&lt;strong&gt;Borrado: IP/hostname de la lista de descarga&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ERROR_JABBER'							=> '&lt;strong&gt;Error Jabber&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ERROR_EMAIL'								=> '&lt;strong&gt;Error Email&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_ERROR_CAPTCHA'							=> '&lt;strong&gt;Error CAPTCHA&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_ADD'								=> '&lt;strong&gt;Creado: Nuevo foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_COPIED_PERMISSIONS'				=> '&lt;strong&gt;Permisos de foro copiados&lt;/strong&gt; de %1$s&lt;br /&gt;
?? %2$s',
	'LOG_FORUM_DEL_FORUM'							=> '&lt;strong&gt;Borrado: foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_DEL_FORUMS'						=> '&lt;strong&gt;Borrado: foro y subforos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'					=> '&lt;strong&gt;Borrado: foro y movidos subforos&lt;/strong&gt; a %1$s&lt;br /&gt;
?? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'					=> '&lt;strong&gt;Borrado: foro y movidos mensajes &lt;/strong&gt; a %1$s&lt;br /&gt;
?? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'				=> '&lt;strong&gt;Borrado: foro y subforos, mensajes movidos&lt;/strong&gt; a %1$s&lt;br /&gt;
?? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'		=> '&lt;strong&gt;Borrado: foro, mensajes movidos&lt;/strong&gt; a %1$s &lt;strong&gt;y subforos&lt;/strong&gt; a %2$s&lt;br /&gt;
?? %3$s',
	'LOG_FORUM_DEL_POSTS'							=> '&lt;strong&gt;Borrado: foro y sus mensajes&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'					=> '&lt;strong&gt;Borrado: foro, subforos y mensajes&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'				=> '&lt;strong&gt;Borrado: foro y sus mensajes, subforos movidos&lt;/strong&gt; a %1$s&lt;br /&gt;
?? %2$s',
	'LOG_FORUM_EDIT'								=> '&lt;strong&gt;Editado: detalles foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_FORUM_MOVE_DOWN'							=> '&lt;strong&gt;Movido: foro&lt;/strong&gt; %1$s &lt;strong&gt;de abajo&lt;/strong&gt; %2$s',
	'LOG_FORUM_MOVE_UP'							=> '&lt;strong&gt;Movido: foro&lt;/strong&gt; %1$s &lt;strong&gt;encima de&lt;/strong&gt; %2$s',
	'LOG_FORUM_SYNC'								=> '&lt;strong&gt;Foro resincronizado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_GENERAL_ERROR'							=> '&lt;strong&gt;Ha ocurrido un error general&lt;/strong&gt;: %1$s &lt;br /&gt;
?? %2$s',
	'LOG_GROUP_CREATED'							=> '&lt;strong&gt;: nuevo grupo de usuarios&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_GROUP_DEFAULTS'							=> '&lt;strong&gt;Groupo ???%1$s??? por defecto para usuarios&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_GROUP_DELETE'							=> '&lt;strong&gt;Borrado grupo de usuarios&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_GROUP_DEMOTED'							=> '&lt;strong&gt;Responsables depuestos en grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_GROUP_PROMOTED'							=> '&lt;strong&gt;Usuarios promovidos a responsables en grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_GROUP_REMOVE'							=> '&lt;strong&gt;Usuarios eliminados de grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_GROUP_UPDATED'							=> '&lt;strong&gt;Actualizado: detalles de grupo de usuarios&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MODS_ADDED'								=> '&lt;strong&gt;Agregados responsables de grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_USERS_ADDED'								=> '&lt;strong&gt;Agregados nuevos usuarios a grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_USERS_APPROVED'							=> '&lt;strong&gt;Usuarios aprobados en el grupo&lt;/strong&gt; %1$s&lt;br /&gt;
?? %2$s',
	'LOG_USERS_PENDING'							=> '&lt;strong&gt;Usuarios que pidieron unirse al grupo ???%1$s??? y necesitan ser aprobados&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_IMAGE_GENERATION_ERROR'					=> '&lt;strong&gt;Error al crear la imagen&lt;/strong&gt;&lt;br /&gt;
?? Error en %1$s en la l??nea %2$s: %3$s',
	'LOG_INACTIVE_ACTIVATE'						=> '&lt;strong&gt;Activados: usuarios inactivos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_INACTIVE_DELETE'							=> '&lt;strong&gt;Borrado: usuarios inactivos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_INACTIVE_REMIND'							=> '&lt;strong&gt;Enviado email recordatorio a usuarios inactivos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_INSTALL_CONVERTED'						=> '&lt;strong&gt;Migrado de %1$s a phpBB %2$s&lt;/strong&gt;',
	'LOG_INSTALL_INSTALLED'						=> '&lt;strong&gt;Instalado phpBB %s&lt;/strong&gt;',
	'LOG_IP_BROWSER_FORWARDED_CHECK'				=> '%1$s&lt;/em&gt;&quot; verificada contra sesi??n &quot;&lt;em&gt;%2$s&lt;/em&gt;&quot;, navegador de usuario &quot;&lt;em&gt;%3$s&lt;/em&gt;&quot; verificado contra sesi??n &quot;&lt;em&gt;%4$s&lt;/em&gt;&quot;	usuario X_FORWARDED_FOR &quot;&lt;em&gt;%5$s&lt;/em&gt;&quot; verificado contra sesi??n X_FORWARDED_FOR	&quot;&lt;em&gt;%6$s&lt;/em&gt;&quot;.&quot;&gt;&lt;strong&gt;Fall?? identificaci??n de sesi??n IP/browser/X_FORWARDED_FOR &lt;/strong&gt;&lt;br /&gt;
??IP de usuario &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot; verificada contra sesi??n &quot;&lt;em&gt;%2$s&lt;/em&gt;&quot;, navegador de usuario &quot;&lt;em&gt;%3$s&lt;/em&gt;&quot; verificado contra sesi??n &quot;&lt;em&gt;%4$s&lt;/em&gt;&quot;	usuario X_FORWARDED_FOR &quot;&lt;em&gt;%5$s&lt;/em&gt;&quot; verificado contra sesi??n X_FORWARDED_FOR	&quot;&lt;em&gt;%6$s&lt;/em&gt;&quot;.',
	'LOG_JAB_CHANGED'								=> '&lt;strong&gt;Jabber: cuenta cambiada&lt;/strong&gt;',
	'LOG_JAB_PASSCHG'								=> '&lt;strong&gt;Jabber: contrase??a cambiada&lt;/strong&gt;',
	'LOG_JAB_REGISTER'							=> '&lt;strong&gt;Jabber: cuenta registrada&lt;/strong&gt;',
	'LOG_JAB_SETTINGS_CHANGED'					=> '&lt;strong&gt;Jabber: par??metros cambiados&lt;/strong&gt;',
	'LOG_LANGUAGE_PACK_DELETED'					=> '&lt;strong&gt;Borrado: paquete de idioma&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_LANGUAGE_PACK_INSTALLED'					=> '&lt;strong&gt;Instalado: paquete de idioma&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_LANGUAGE_PACK_UPDATED'					=> '&lt;strong&gt;Actualizado: detalles de paquete de idioma&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_LANGUAGE_FILE_REPLACED'					=> '&lt;strong&gt;Reemplazado: archivo de idioma&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'					=> '&lt;strong&gt;Archivo de idioma enviado a la carpeta store&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MASS_EMAIL'								=> '&lt;strong&gt;Enviado: email masivo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MCP_CHANGE_POSTER'						=> '&lt;br /&gt;
?? de %2$s a %3$s&quot;&gt;&lt;strong&gt;Cambiado remitente en el tema &quot;%1$s&quot;&lt;/strong&gt;&lt;br /&gt;
?? de %2$s a %3$s',
	'LOG_MODULE_DISABLE'							=> '&lt;strong&gt;M??dulo deshabilitado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MODULE_ENABLE'							=> '&lt;strong&gt;M??dulo habilitado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MODULE_MOVE_DOWN'						=> '&lt;strong&gt;M??dulo movido abajo&lt;/strong&gt;&lt;br /&gt;
?? %1$s abajo %2$s',
	'LOG_MODULE_MOVE_UP'							=> '&lt;strong&gt;M??dulo movido arriba&lt;/strong&gt;&lt;br /&gt;
?? %1$s arriba %2$s',
	'LOG_MODULE_REMOVED'							=> '&lt;strong&gt;M??dulo eliminado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MODULE_ADD'								=> '&lt;strong&gt;M??dulo a??adido&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_MODULE_EDIT'								=> '&lt;strong&gt;M??dulo editado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_A_ROLE_ADD'								=> '&lt;strong&gt;A??adido: rol de admin&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_A_ROLE_EDIT'								=> '&lt;strong&gt;Editado: rol de admin&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_A_ROLE_REMOVED'							=> '&lt;strong&gt;Eliminado: rol de admin&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_F_ROLE_ADD'								=> '&lt;strong&gt;Agredado: rol de foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_F_ROLE_EDIT'								=> '&lt;strong&gt;Editado: rol de foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_F_ROLE_REMOVED'							=> '&lt;strong&gt;Eliminado: rol de foro&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_M_ROLE_ADD'								=> '&lt;strong&gt;Agregado: rol de moderador&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_M_ROLE_EDIT'								=> '&lt;strong&gt;Editado: rol de moderador&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_M_ROLE_REMOVED'							=> '&lt;strong&gt;Eliminado: rol de moderador&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_U_ROLE_ADD'								=> '&lt;strong&gt;Agregado: rol de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_U_ROLE_EDIT'								=> '&lt;strong&gt;Editado: rol de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_U_ROLE_REMOVED'							=> '&lt;strong&gt;Eliminado: rol de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PLUPLOAD_TIDY_FAILED'					=> '&lt;strong&gt;No se puede abrir %1$s para ordenarlo, compruebe los permisos.&lt;/strong&gt;&lt;br /&gt;
Excepci??n: %2$s&lt;br /&gt;
Rastro: %3$s',
	'LOG_PROFILE_FIELD_ACTIVATE'					=> '&lt;strong&gt;Activado: campo de perfil&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PROFILE_FIELD_CREATE'					=> '&lt;strong&gt;A??adido: campo de perfil&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'				=> '&lt;strong&gt;Desactivado: campo de perfil&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PROFILE_FIELD_EDIT'						=> '&lt;strong&gt;Cambiado: campo de perfil&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PROFILE_FIELD_REMOVED'					=> '&lt;strong&gt;Eliminado: campo de perfil&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PRUNE'									=> '&lt;strong&gt;Purgados: foros&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_AUTO_PRUNE'								=> '&lt;strong&gt;Auto-purgados: foros&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PRUNE_SHADOW'							=> '&lt;strong&gt;Auto-purgados: temas sombreados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PRUNE_USER_DEAC'							=> '&lt;strong&gt;Desactivados: usuarios&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PRUNE_USER_DEL_DEL'						=> '&lt;strong&gt;Usuarios purgados y mensajes borrados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PRUNE_USER_DEL_ANON'						=> '&lt;strong&gt;Usuarios purgados y mensajes retenidos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_PURGE_CACHE'								=> '&lt;strong&gt;Cach?? limpiado&lt;/strong&gt;',
	'LOG_PURGE_SESSIONS'							=> '&lt;strong&gt;Sesiones limpiadas&lt;/strong&gt;',
	'LOG_RANK_ADDED'								=> '&lt;strong&gt;A??adido: rango&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_RANK_REMOVED'							=> '&lt;strong&gt;Borrado: rango&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_RANK_UPDATED'							=> '&lt;strong&gt;Actualizado: rango&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REASON_ADDED'							=> '&lt;strong&gt;A??adido: informe/raz??n denegado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REASON_REMOVED'							=> '&lt;strong&gt;Borrado: informe/raz??n denegado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REASON_UPDATED'							=> '&lt;strong&gt;Actualizado: informe/raz??n denegado&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_REFERER_INVALID'							=> '&lt;strong&gt;Validaci??n del Referido fallida&lt;/strong&gt;&lt;br /&gt;
??El Referido era ???&lt;em&gt;%1$s&lt;/em&gt;???. La petici??n fue rechazada y se finaliz?? la sesi??n.',
	'LOG_RESET_DATE'								=> '&lt;strong&gt;Reiniciar fecha inicio Sitio&lt;/strong&gt;',
	'LOG_RESET_ONLINE'							=> '&lt;strong&gt;Reiniciar n??mero m??ximo de usuarios conectados&lt;/strong&gt;',
	'LOG_RESYNC_FILES_STATS'						=> '&lt;strong&gt;Resincronizado: Estad??sticas de archivo&lt;/strong&gt;',
	'LOG_RESYNC_POSTCOUNTS'						=> '&lt;strong&gt;Resincronizado: Cantidad de mensajes&lt;/strong&gt;',
	'LOG_RESYNC_POST_MARKING'						=> '&lt;strong&gt;Resincronizado: Temas marcados&lt;/strong&gt;',
	'LOG_RESYNC_STATS'							=> '&lt;strong&gt;Resincronizado: Mensajes, temas y estad??sticas de usuarios&lt;/strong&gt;',
	'LOG_SEARCH_INDEX_CREATED'					=> '&lt;strong&gt;??ndice de b??squeda creado por&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_SEARCH_INDEX_REMOVED'					=> '&lt;strong&gt;??ndice de b??squeda borrado por&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_SPHINX_ERROR'							=> '&lt;strong&gt;Error en Sphinx&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_STYLE_ADD'								=> '&lt;strong&gt;A??adido: estilo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_STYLE_DELETE'							=> '&lt;strong&gt;Borrado: estilo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_STYLE_EDIT_DETAILS'						=> '&lt;strong&gt;Editado: estilo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_STYLE_EXPORT'							=> '&lt;strong&gt;Exportado estilo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_ADD_DB'							=> '&lt;strong&gt;A??adida: plantilla a base de datos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_ADD_FS'							=> '&lt;strong&gt;A??adida: plantilla a sistema	de archivos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_CACHE_CLEARED'					=> '&lt;strong&gt;Borrado: versiones cacheadas de archivos de conjunto de plantillas &lt;em&gt;%1$s&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_TEMPLATE_DELETE'							=> '&lt;strong&gt;Borrado: conjunto de plantillas&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_EDIT'							=> '&lt;strong&gt;Editado: conjunto de plantillas &lt;em&gt;%1$s&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;
?? %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'					=> '&lt;strong&gt;Editado: detalle de plantillas&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_EXPORT'							=> '&lt;strong&gt;Exportado: conjunto de plantillas&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_TEMPLATE_REFRESHED'						=> '&lt;strong&gt;Actualizado: conjunto de plantillas&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_ADD_DB'							=> '&lt;strong&gt;A??adido: tema a base de datos&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_ADD_FS'							=> '&lt;strong&gt;A??adido: tema a filesystem&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_DELETE'							=> '&lt;strong&gt;Borrado: tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_EDIT_DETAILS'						=> '&lt;strong&gt;Editado: detalles de tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_EDIT'								=> '&lt;strong&gt;Editado: tema &lt;em&gt;%1$s&lt;/em&gt;&lt;/strong&gt;',
	'LOG_THEME_EDIT_FILE'							=> '&lt;strong&gt;Editado: tema &lt;em&gt;%1$s&lt;/em&gt;&lt;/strong&gt;&lt;br /&gt;
?? Modificado: archivo &lt;em&gt;%2$s&lt;/em&gt;',
	'LOG_THEME_EXPORT'							=> '&lt;strong&gt;Exportado tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_THEME_REFRESHED'							=> '&lt;strong&gt;Actualizado: tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_UPDATE_DATABASE'							=> '&lt;strong&gt;Actualizado: Base de datos de versi??n %1$s a versi??n %2$s&lt;/strong&gt;',
	'LOG_UPDATE_PHPBB'							=> '&lt;strong&gt;Actualizado: phpBB de versi??n %1$s a versi??n %2$s&lt;/strong&gt;',
	'LOG_USER_ACTIVE'								=> '&lt;strong&gt;Activado: usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_BAN_USER'							=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s&quot;&gt;&lt;strong&gt;Excluido: usuario, v??a administraci??n de usuarios&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_USER_BAN_IP'								=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s&quot;&gt;&lt;strong&gt;Excluida: IP, v??a administraci??n de usuarios&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_USER_BAN_EMAIL'							=> '%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s&quot;&gt;&lt;strong&gt;Excluido: email, v??a administraci??n de usuarios&lt;/strong&gt; por raz??n &quot;&lt;em&gt;%1$s&lt;/em&gt;&quot;&lt;br /&gt;
?? %2$s',
	'LOG_USER_DELETED'							=> '&lt;strong&gt;Borrado: usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_DEL_ATTACH'							=> '&lt;strong&gt;Borrado: todos los adjuntos hechos por el usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_DEL_AVATAR'							=> '&lt;strong&gt;Borrado: avatar de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_DEL_OUTBOX'							=> '&lt;strong&gt;Bandeja de salida del usuario vaciada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_DEL_POSTS'							=> '&lt;strong&gt;Borrado: todos los mensajes hechos por el usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_DEL_SIG'							=> '&lt;strong&gt;Borrado: firma de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_INACTIVE'							=> '&lt;strong&gt;Desactivado: usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_MOVE_POSTS'							=> '&lt;strong&gt;Movido: mensajes &lt;/strong&gt;&lt;br /&gt;
?? hechos por &quot;%1$s&quot; a foro &quot;%2$s&quot;',
	'LOG_USER_NEW_PASSWORD'						=> '&lt;strong&gt;Cambiada: clave de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_REACTIVATE'							=> '&lt;strong&gt;Forzada: reactivaci??n de cuenta de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_REMOVED_NR'							=> '&lt;strong&gt;Marca de Nuevo Usuario Registrado eliminada del usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_UPDATE_EMAIL'						=> '&lt;br /&gt;
?? de &quot;%2$s&quot; a &quot;%3$s&quot;&quot;&gt;&lt;strong&gt;Usuario &quot;%1$s&quot; cambi?? email&lt;/strong&gt;&lt;br /&gt;
?? de &quot;%2$s&quot; a &quot;%3$s&quot;',
	'LOG_USER_UPDATE_NAME'						=> '&lt;strong&gt;Cambiado: nombre de usuario&lt;/strong&gt;&lt;br /&gt;
?? de &quot;%1$s&quot; a &quot;%2$s&quot;',
	'LOG_USER_USER_UPDATE'						=> '&lt;strong&gt;Actualizado: detalles de usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_ACTIVE_USER'						=> '&lt;strong&gt;Cuenta de usuario activada&lt;/strong&gt;',
	'LOG_USER_DEL_AVATAR_USER'					=> '&lt;strong&gt;Avatar de usuario eliminado&lt;/strong&gt;',
	'LOG_USER_DEL_SIG_USER'						=> '&lt;strong&gt;Firma de usuario eliminado&lt;/strong&gt;',
	'LOG_USER_FEEDBACK'							=> '&lt;strong&gt;A??adido: observaciones usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GENERAL'							=> '&lt;strong&gt;Entrada a??adida:&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_INACTIVE_USER'						=> '&lt;strong&gt;Cuenta de usuario desactivada&lt;/strong&gt;',
	'LOG_USER_LOCK'								=> '&lt;strong&gt;Usuario bloque?? su propio tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_MOVE_POSTS_USER'					=> '&lt;strong&gt;Movido: todos los mensajes al foro&lt;/strong&gt;?? %s',
	'LOG_USER_REACTIVATE_USER'					=> '&lt;strong&gt;Reactivaci??n de cuenta de usuario forzada&lt;/strong&gt;',
	'LOG_USER_UNLOCK'								=> '&lt;strong&gt;Usuario desbloque?? su propio tema&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_WARNING'							=> '&lt;strong&gt;A??adido: advertencia a usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_WARNING_BODY'						=> '&lt;strong&gt;La siguiente advertencia fue hecha al usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GROUP_CHANGE'						=> '&lt;strong&gt;Usuario cambi?? grupo por defecto&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GROUP_DEMOTE'						=> '&lt;strong&gt;Usuario depuesto del grupo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GROUP_JOIN'							=> '&lt;strong&gt;Usuario ingres?? en el grupo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GROUP_JOIN_PENDING'					=> '&lt;strong&gt;Usuario ingres?? en el grupo y necesita aprobaci??n&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_USER_GROUP_RESIGN'						=> '&lt;strong&gt;Usuario renunci?? al grupo&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_WARNING_DELETED'							=> '&lt;strong&gt;Avisos de usuario eliminados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_WARNINGS_DELETED'						=> 'Array
(
	[1] =&gt; &lt;strong&gt;Eliminado aviso del usuario&lt;/strong&gt;&lt;br /&gt;?? %1$s
	[2] =&gt; &lt;strong&gt;Eliminados %2$d avisos del usuario&lt;/strong&gt;&lt;br /&gt;?? %1$s
)',
	'LOG_WARNINGS_DELETED_ALL'					=> '&lt;strong&gt;Eliminados todos los avisos del usuario&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_WORD_ADD'								=> '&lt;strong&gt;A??adida: palabra censurada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_WORD_DELETE'								=> '&lt;strong&gt;Borrada: palabra censurada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_WORD_EDIT'								=> '&lt;strong&gt;Editada: palabra censurada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_EXT_ENABLE'								=> '&lt;strong&gt;Extensi??n habilitada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_EXT_DISABLE'								=> '&lt;strong&gt;Extensi??n deshabilitada&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_EXT_PURGE'								=> '&lt;strong&gt;Datos de Extensi??n borrados&lt;/strong&gt;&lt;br /&gt;
?? %s',
	'LOG_EXT_UPDATE'								=> '&lt;strong&gt;Extensi??n actualizada&lt;/strong&gt;&lt;br /&gt;
?? %s',
));

//
// That's all Folks!
// -------------------------------------------------