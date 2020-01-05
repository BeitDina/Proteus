<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
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
//
// Some characters you may want to copy&paste:
// ’ » " " …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Traducción al Español Mexicano por <a href="http://www.phpbbmexico.com/">cisco007</a>',
	'DIRECTION'		=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'DATETIME_FORMAT'	=> '|d M Y, H:i|',	// 01 Jan 2007, 13:37 (with Relative days enabled)
	'USER_LANG'			=> 'es-mx',

	// You can define different rules for the determination of plural forms here.
	// See http://wiki.phpbb.com/Plural_Rules for more information
	// or ask the translation manager for help.
	'PLURAL_RULE'		=> 1,

	'1_DAY'			=> '1 día',
	'1_MONTH'		=> '1 mes',
	'1_YEAR'		=> '1 año',
	'2_WEEKS'		=> '2 semanas',
	'3_MONTHS'		=> '3 meses',
	'6_MONTHS'		=> '6 meses',
	'7_DAYS'		=> '7 días',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Tu cuenta ya ha sido activada',
	'ACCOUNT_DEACTIVATED'			=> 'Tu cuenta ha sido desactivada manualmente y solo puede ser reactivada por La Administración.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Tu cuenta todavía no ha sido activada',
	'ACP'							=> 'Ir al Panel de Control de Administración (PCA)',
	'ACP_SHORT'						=> 'PCA',
	'ACTIVE'						=> 'Activo',
	'ACTIVE_ERROR'					=> 'El usuario especificado está inactivo de momento. Si tienes problemas para activar tu cuenta por favor contacta a la Administración del Sitio.',
	'ADMINISTRATOR'					=> 'Administrador',
	'ADMINISTRATORS'				=> 'Administradores',
	'AGE'							=> 'Edad',
	'AIM'							=> 'AIM',
	'AJAX_ERROR_TITLE'				=> 'Error AJAX',
	'AJAX_ERROR_TEXT'				=> 'Algo salió mal al procesar tu solicitud.',
	'AJAX_ERROR_TEXT_ABORT'			=> 'Solicitud abortada por el usuario.',
	'AJAX_ERROR_TEXT_TIMEOUT'		=> 'Tu solicitud ha agotado el tiempo, por favor, inténtelo de nuevo.',
	'AJAX_ERROR_TEXT_PARSERERROR'	=> 'Algo salió mal con la solicitud y el servidor devuelve una respuesta no válida.',
	'ALLOWED'						=> 'Permitido',
	'ALL_FILES'						=> 'Todos los archivos',
	'ALL_FORUMS'					=> 'Todos los Foros',
	'ALL_MESSAGES'					=> 'Todos los mensajes',
	'ALL_POSTS'						=> 'Todos los mensajes',
	'ALL_TIMES'						=> 'Todos los horarios son <abbr title="%2$s">%1$s</abbr>',
	'ALL_TOPICS'					=> 'Todos los Temas',
	'AND'							=> 'Y',
	'ARE_WATCHING_FORUM'			=> 'Estás suscrito a recibir novedades en este Foro',
	'ARE_WATCHING_TOPIC'			=> 'Estás suscrito a recibir novedades en este Tema.',
	'ASCENDING'						=> 'Ascendente',
	'ATTACHMENTS'					=> 'Adjuntos',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'El archivo de imagen que ha intentaste adjuntar no es válido.',
	'AUTHOR'						=> 'Autor',
	'AUTH_NO_PROFILE_CREATED'		=> 'Falló la creación del perfil de usuario',
	'AUTH_PROVIDER_OAUTH_ERROR_INVALID_ENTRY'				=> 'Entrada de la base de datos no válida.',
	'AUTH_PROVIDER_OAUTH_ERROR_INVALID_SERVICE_TYPE'		=> 'Tipo de servicio no válido proporcionado al controlador de servicio de OAuth.',
	'AUTH_PROVIDER_OAUTH_ERROR_SERVICE_NOT_CREATED'			=> 'Servicio OAuth no creado',
	'AUTH_PROVIDER_OAUTH_SERVICE_BITLY'						=> 'Bitly',
	'AUTH_PROVIDER_OAUTH_SERVICE_FACEBOOK'					=> 'Facebook',
	'AUTH_PROVIDER_OAUTH_SERVICE_GOOGLE'					=> 'Google',
	'AUTH_PROVIDER_OAUTH_TOKEN_ERROR_NOT_STORED'			=> 'Muestra de OAuth no almacenado.',
	'AUTH_PROVIDER_OAUTH_TOKEN_ERROR_INCORRECTLY_STORED'	=> 'Muestra de OAuth incorrectamente almacenado.',
	'AVATAR_DISALLOWED_CONTENT'		=> 'La subida fue rechazada porque el archivo a subir fue identificado como un posible vector de ataque.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Este archivo no puede ser mostrado porque la extensión <strong>%s</strong> no está permitida',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'No se puede subir el avatar especificado ya que el archivo remoto parece inválido o corrupto.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'El avatar subido está vacío.',
	'AVATAR_INVALID_FILENAME'		=> '%s es un nombre de archivo no válido',
	'AVATAR_NOT_UPLOADED'			=> 'No se puede subir el avatar.',
	'AVATAR_NO_SIZE'				=> 'No se pudo determinar el ancho o el alto del avatar enlazado, por favor ingresa esos datos de forma manual.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'El archivo fue subido solo de forma parcial',
	'AVATAR_PHP_SIZE_NA'			=> 'El tamaño de archivo del avatar es muy grande.<br />No se puede determinar el tamaño máximo definido en php.ini por PHP.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'El tamaño del avatar es muy grande. El tamaño máximo de subida es %1$d %2$s.<br />Por favor observe que esto está definido en php.ini y no puede ser cambiado.',
	'AVATAR_REMOTE_UPLOAD_TIMEOUT'		=> 'El avatar especificado no se ha podido subir por la solicitud de tiempo de espera.',
	'AVATAR_URL_INVALID'			=> 'La URL que especificó no es válida.',
	'AVATAR_URL_NOT_FOUND'			=> 'No se puede encontrar el archivo especificado.',
	'AVATAR_WRONG_FILESIZE'			=> 'El avatar debe estar entre 0 y %1$d %2$s.',
	'AVATAR_WRONG_SIZE'				=> 'El avatar debe ser al menos %5$s de ancho, %6$s de alto y como máximo %1$s de ancho y %2$s de alto. El avatar enviado es %3$s de ancho y %4$s de alto.',

	'BACK_TO_TOP'			=> 'Arriba',
	'BACK_TO_PREV'			=> 'Regrese a la página anterior',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Esta exclusión ha sido impuesta a tu dirección de email.',
	'BAN_TRIGGERED_BY_IP'	=> 'Esta exclusión ha sido impuesta a tu dirección IP.',
	'BAN_TRIGGERED_BY_USER'	=> 'Esta exclusión ha sido impuesta a tu nombre de usuario.',
	'BBCODE_GUIDE'			=> 'Guía BBCode',
	'BCC'					=> 'CCO',
	'BIRTHDAYS'				=> 'Cumpleaños',
	'BOARD_BAN_PERM'		=> 'Has sido expulsado <strong>permanentemente</strong> de este sitio.<br /><br />Por favor contacta a %2$sLa Administración del Sitio%3$s para más información.',
	'BOARD_BAN_REASON'		=> 'Motivo de la exclusión: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Has sido excluido de este Sitio hasta <strong>%1$s</strong>.<br /><br />Por favor contacta a %2$sLa Administración del Sitio%3$s para más información.',
	'BOARD_DISABLE'			=> 'Disculpa. Este sitio no está disponible en este momento',
	'BOARD_DISABLED'		=> 'Este Sitio está deshabilitado por ahora',
	'BOARD_UNAVAILABLE'		=> 'Disculpa. Este Sitio no está disponible por ahora, por favor inténtelo de nuevo en unos minutos',
	'BROWSING_FORUM'      	=> 'Usuarios navegando por este Foro: %1$s',
	'BROWSING_FORUM_GUESTS'	=> array(
		1	=> 'Usuarios navegando por este Foro: %2$s y %1$d invitado',
		2	=> 'Usuarios navegando por este Foro: %2$s y %1$d invitados',
	),
	'BUTTON_EDIT'			=> 'Editar',
	'BUTTON_FORUM_LOCKED'	=> 'Cerrado',
	'BUTTON_NEW_TOPIC'		=> 'Nuevo Tema',
	'BUTTON_PM'				=> 'MP',
	'BUTTON_PM_FORWARD'		=> 'Reenviar',
	'BUTTON_PM_NEW'			=> 'Nuevo MP',
	'BUTTON_PM_REPLY'		=> 'Responder',
	'BUTTON_PM_REPLY_ALL'	=> 'Responder a Todos',
	'BUTTON_POST_REPLY'		=> 'Responder',
	'BUTTON_QUOTE'			=> 'Citar',
	'BUTTON_TOPIC_LOCKED'	=> 'Cerrado',
	'BYTES'					=> 'Bytes',
	'BYTES_SHORT'			=> 'B',

	'CANCEL'				=> 'Cancelar',
	'CHANGE'				=> 'Cambiar',
	'CHANGE_FONT_SIZE'		=> 'Cambiar tamaño de la fuente',
	'CHANGING_PREFERENCES'	=> 'Cambiando preferencias del foro',
	'CHANGING_PROFILE'		=> 'Cambiando preferencias del Perfil del Foro',
	'CHARACTERS'			=> array(
		1	=> '%d carácter',
		2	=> '%d caracteres',
	),
	'COLLAPSE_VIEW'			=> 'Contraer vista',
	'CLOSE_WINDOW'			=> 'Cerrar ventana',
	'COLOUR_SWATCH'			=> 'Paleta de Colores',
	'COLON'					=> ':',
	'COMMA_SEPARATOR'		=> ', ',	// Comma used to join lists into a single string, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Confirma',
	'CONFIRM_CODE'			=> 'Código de confirmación',
	'CONFIRM_CODE_EXPLAIN'	=> 'Introduzca el código exactamente como lo ve en la imagen. Las letras no son sensibles a las mayúsculas y minúsculas.',
	'CONFIRM_CODE_WRONG'	=> 'El código de confirmación que introdujo es incorrecto.',
	'CONFIRM_OPERATION'		=> '¿Estás seguro de querer realizar esta operación?',
	'CONFIRM_AVATAR_DELETE' => '¿Estás seguro de querer borrar este avatar?',
	'CONGRATULATIONS'		=> 'Felicidades para',
	'CONNECTION_FAILED'		=> 'Falló la conexión',
	'CONNECTION_SUCCESS'	=> '¡Conexión realizada correctamente!',
    'CONTACT'				=> 'Contactar',
    'CONTACT_USER'			=> 'Contactar %s',
	'CONTACT_US'			=> 'Contáctanos',
	'COOKIES_DELETED'		=> 'Todas las cookies del Sitio han sido borradas correctamente.',
	'CURRENT_TIME'			=> 'Fecha actual %s',

	'DAY'					=> 'Día',
	'DAYS'					=> 'Días',
	'DELETE'				=> 'Borrar',
	'DELETE_ALL'			=> 'Borrar todo',
	'DELETE_COOKIES'		=> 'Borrar todas las cookies del Sitio',
	'DELETE_MARKED'			=> 'Borrar marcados',
	'DELETE_POST'			=> 'Borrar mensaje',
	'DELIMITER'				=> 'Delimitador',
	'DESCENDING'			=> 'Descendente',
	'DISABLED'				=> 'Deshabilitado',
	'DISPLAY'				=> 'Mostrar',
	'DISPLAY_GUESTS'		=> 'Mostrar invitados',
	'DISPLAY_MESSAGES'		=> 'Mostrar mensajes previos',
	'DISPLAY_POSTS'			=> 'Mostrar mensajes previos',
	'DISPLAY_TOPICS'		=> 'Mostrar temas previos',
	'DOWNLOADED'			=> 'Descargado',
	'DOWNLOADING_FILE'		=> 'Descargando archivo',
	'DOWNLOAD_COUNTS'		=> array(
		0	=> 'No descargado aún',
		1	=> 'Descargado %d vez',
		2	=> 'Descargado %d veces',
	),

	'EDIT_POST'							=> 'Editar mensaje',
	'ELLIPSIS'							=>	'…',
	'EMAIL'								=> 'Email', // Forma corta de EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'Dirección de correo electrónico',
	'EMAIL_INVALID_EMAIL'				=> 'La dirección de correo electrónico que has introducido no es válida.',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Se produjeron problemas enviando email en la <strong>línea %1$s</strong>. Respuesta: %2$s',	
	'EMPTY_SUBJECT'	=> 'Debes especificar un asunto cuando publiques un nuevo tema.',
	'EMPTY_MESSAGE_SUBJECT'	=> 'Tienes que especificar un asunto cuando redactes un nuevo mensaje.',
	'ENABLED'	=> 'Habilitado',
	'ENCLOSURE'	=> 'Adjunto',
	'ENTER_USERNAME'					=> 'Introduce un nombre de usuario',
	'ERR_CHANGING_DIRECTORY'			=> 'Imposible cambiar de carpeta',
	'ERR_CONNECTING_SERVER'				=> 'Error conectando al servidor',
	'ERR_JAB_AUTH'						=> 'No se puedes autentificar en el servidor Jabber.',
	'ERR_JAB_CONNECT'					=> 'No se puedes conectar al servidor Jabber.',
	'ERR_UNABLE_TO_LOGIN'   			=> 'Error en identificación. El usuario o contraseña insertada es incorrecta.',
	'ERR_UNWATCHING'					=> 'Ocurrió un error al intentar dejar de seguir tema.',
	'ERR_WATCHING'						=> 'Ocurrió un error al intentar suscribirse.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'La ruta phpBB introducida parece no ser válida.',
	'ERROR'								=> 'Error',
	'EXPAND_VIEW'						=> 'Expandir vista',
	'EXTENSION'							=> 'Extensión',
	'EXTENSION_DISABLED'				=> 'La extensión <strong>%s</strong> no esta activada.',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'La extensión <strong>%s</strong> ha sido desactivada y no se mostrará en adelante',
	'EXTENSION_DOES_NOT_EXIST'			=> 'La extensión <strong>%s</strong> no existe.',

	'FACEBOOK'				=> 'Facebook',
	'FAQ'	=> 'FAQ',
	'FAQ_EXPLAIN'	=> 'Preguntas Frecuentes',
	'FILENAME'	=> 'Nombre',
	'FILESIZE'	=> 'Tamaño',
	'FILEDATE'	=> 'Fecha',
	'FILE_COMMENT'	=> 'Comentario',
 	'FILE_CONTENT_ERR'		=> 'No se pudo leer el contenido del archivo: %s',
 	'FILE_JSON_DECODE_ERR'	=> 'No se pudo descifrar el archivo json: %s',
	'FILE_NOT_FOUND'	=> 'No se puede encontrar el archivo requerido: %s',
	'FIND_USERNAME'	=> 'Buscar un usuario',
	'FOLDER'	=> 'Carpeta',
	'FORGOT_PASS'	=> 'Olvidé mi contraseña',
	'FORM_INVALID'			=> 'El formulario enviado no era válido. Intenta enviarlo de nuevo.',
	'FORUM'		=> 'Foro',
	'FORUMS'	=> 'Foros',
	'FORUMS_MARKED'			=> 'Los foros han sido marcados como leídos.',
	'FORUM_CAT'	=> 'Categoría de Foro',
	'FORUM_INDEX'	=> 'Índice general',
	'FORUM_LINK'	=> 'Enlace al Foro',
	'FORUM_LOCATION'	=> 'Localización del foro',
	'FORUM_LOCKED'	=> 'Foro cerrado',
	'FORUM_RULES'	=> 'Reglas del Foro',
	'FORUM_RULES_LINK'	=> 'Por favor, haz clic para ver las reglas del Foro',
	'FROM'	            => 'De',
	'FSOCK_DISABLED'	=> 'No se puede completar la operación porque las funciones fsock han sido deshabilitadas o el servidor no está disponible.',
	'FSOCK_TIMEOUT'			=> 'Se agotó el tiempo de lectura de la corriente de red.',
	
	'FTP_FSOCK_HOST'	=> 'Servidor FTP Fsock',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'Servidor FTP Fsock empleado para conectar a tu sitio',
	'FTP_FSOCK_PASSWORD'	=> 'Contraseña FTP Fsock',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Contraseña para tu Usuario FTP Fsock',
	'FTP_FSOCK_PORT'	=> 'Puerto FTP Fsock',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'Puerto usado para conectar Fsock a tu servidor',
	'FTP_FSOCK_ROOT_PATH'	=> 'Ruta Fsock a phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Ruta Fsock absoluta (desde root) a tu sitio phpBB',
	'FTP_FSOCK_TIMEOUT'	=> 'FTP Fsock timeout',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'La cantidad de tiempo, en segundos, que el sistema espera una respuesta Fsock de tu servidor',
	'FTP_FSOCK_USERNAME'	=> 'Usuario FTP Fsock',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Usuario para conectar a tu servidor FTP Fsock',

	'FTP_HOST'	=> 'Servidor FTP',
	'FTP_HOST_EXPLAIN'	=> 'Servidor FTP empleado para conectar a tu sitio',
	'FTP_PASSWORD'	=> 'Contraseña FTP',
	'FTP_PASSWORD_EXPLAIN'	=> 'Contraseña para tu Usuario FTP',
	'FTP_PORT'	=> 'Puerto FTP',
	'FTP_PORT_EXPLAIN'	=> 'Puerto usado para conectar a tu servidor',
	'FTP_ROOT_PATH'	=> 'Ruta a phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'Ruta absoluta (desde root) a tu sitio phpBB',
	'FTP_TIMEOUT'	=> 'FTP timeout',
	'FTP_TIMEOUT_EXPLAIN'	=> 'La cantidad de tiempo, en segundos, que el sistema espera una respuesta de tu servidor',
	'FTP_USERNAME'	=> 'Usuario FTP',
	'FTP_USERNAME_EXPLAIN'	=> 'Usuario para identificarse en tu servidor FTP',

	'GENERAL_ERROR'	=> 'Error General',	
	'GB'	=> 'GB',
	'GIB'	=> 'GiB',
	'GO'	=> 'Ir',
	'GOOGLEPLUS'				=> 'Google+',
	'GOTO_FIRST_POST'			=> 'Ir al primer mensaje',
	'GOTO_LAST_POST'			=> 'Ir al último mensaje',
	'GOTO_PAGE'	=> 'Ir a página',
	'GROUP'	=> 'Grupo',
	'GROUPS'	=> 'Grupos',
	'GROUP_ERR_TYPE'	=> 'Tipo de grupo inapropiado.',
	'GROUP_ERR_USERNAME'	=> 'No se especificó nombre de grupo.',
	'GROUP_ERR_USER_LONG'	=> 'El nombre del grupo es muy largo.',
	'GUEST'	=> 'Invitado',
	'GUEST_USERS_ONLINE'		=> array(
		1	=> 'Hay %d usuario invitado conectado',
		2	=> 'Hay %d usuarios invitados conectados',
	),
	'GUEST_USERS_TOTAL'			=> array(
		1	=> '%d invitado',
		2	=> '%d invitados',
	),
	'G_ADMINISTRATORS'	=> 'Administradores',
	'G_BOTS'	=> 'Robots',
	'G_GUESTS'	=> 'Invitados',
	'G_REGISTERED'	=> 'Usuarios registrados',
	'G_REGISTERED_COPPA'	=> 'Usuarios APPCO (COPPA) registrados',
	'G_GLOBAL_MODERATORS'	=> 'Moderadores globales',
	'G_NEWLY_REGISTERED'		=> 'Nuevos Usuarios Registrados',

	'HIDDEN_USERS_ONLINE'		=> array(
		1	=> '%d usuario oculto',
		2	=> '%d usuarios ocultos',
	),
	'HIDDEN_USERS_TOTAL'		=> array(
		1	=> '%d oculto',
		2	=> '%d ocultos',
	),
	'HIDE_GUESTS'	=> 'Ocultar invitados',
	'HIDE_ME'	=> 'Ocultar mi estado de conexión en esta sesión',
	'HOURS'	=> 'Horas',
	'HOME'	=> 'Inicio',

	'ICQ'	=> 'ICQ',
	'IF'	=> 'si',
	'IMAGE'	=> 'Imagen',
	'IMAGE_FILETYPE_INVALID'	=> 'Tipo de archivo de imagen %d de tipo mime %s no soportado.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Tipo de archivo no coinciden: se esperaba la extensión %1$s pero la extensión %2$s fue proporcionada.',
	'IN'	=> 'en',
	'INDEX'	=> 'Página principal',
	'INFORMATION'	=> 'Información',
	'INSECURE_REDIRECT'			=> 'Trataste de redirigir una URL potencialmente insegura.',
	'INTERESTS'	=> 'Aficiones',
	'INVALID_DIGEST_CHALLENGE'	=> 'Desafío Digest inválido',
	'INVALID_EMAIL_LOG'	=> '¿<strong>%s</strong> posiblemente una dirección de email inválida?',
	'INVALID_PLURAL_RULE'		=> 'La regla plural escogida no es válida. Los valores válidos son números enteros entre 0 y 15.',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'Tu IP %1$s ha sido bloqueada porque está en la lista negra. Para más detalles por favor lee <a href="%2$s">%2$s</a>.',

	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'Registrado',
	'JUMP_PAGE'	=> 'Introduzca el número de página al que desea ir',
	'JUMP_TO'	=> 'Ir a',
 	'JUMP_TO_PAGE'			=> 'Ir a la página',
 	'JUMP_TO_PAGE_CLICK'	=> 'Clic para ir a la página…',

	'KB'	=> 'KB',
	'KIB'	=> 'KiB',

	'LAST_POST'	=> 'Último mensaje',
	'LAST_UPDATED'	=> 'Ultima actualización',
	'LAST_VISIT'	=> 'La última visita fue',
	'LDAP_NO_LDAP_EXTENSION'	=> 'Extensión LDAP no disponible',
	'LDAP_NO_SERVER_CONNECTION'	=> 'No se puede conectar al servidor LDAP',
	'LDAP_SEARCH_FAILED'            => 'Ocurrió un error mientras se buscaba en el directorio LDAP.',
	'LEGEND'	=> 'Referencia',
    'LIVE_SEARCHES_NOT_ALLOWED'			=> 'Las búsquedas en directo no están permitidas.',
	'LOADING'							=> 'Cargando',
	'LOCATION'	=> 'Ubicación',
	'LOCK_POST'	=> 'Mensaje cerrado',
	'LOCK_POST_EXPLAIN'	=> 'Prevenir edición',
	'LOCK_TOPIC'	=> 'Cerrar Tema',
	'LOGIN'	=> 'Identificarte',
	'LOGIN_CHECK_PM'	=> 'Identifícate para leer tus mensajes privados',
	'LOGIN_CONFIRMATION'	=> 'Confirmación de conexión',
	'LOGIN_CONFIRM_EXPLAIN'	=> 'Para prevenir el forzado de cuentas La Administración del Sitio requiere que se introduzca un código de confirmación después de una cantidad máxima de identificaciones fallidas. El código se muestra en la imagen que deberías ver debajo. Si estás impedido visualmente o por cualquier motivo no puedes leer ese código por favor contacta a %sLa Administración del Sitio%s.', //no usuado
	'LOGIN_ERROR_ATTEMPTS'	=> 'Has excedido el número máximo permitido de intentos para identificarte. Además de tu nombre de usuario y contraseña ahora también tendrás que resolver el CAPTCHA de abajo.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'No has sido autenticado por Apache.',
	'LOGIN_ERROR_OAUTH_SERVICE_DOES_NOT_EXIST'	=> 'Ha solicitado un servicio OAuth inexistente.',
	'LOGIN_ERROR_PASSWORD'	=> 'Has especificado una contraseña incorrecta. Por favor verifica tu contraseña e inténtalo de nuevo. Si continúas teniendo problemas, por favor contacta a %sLa Administración del Sitio%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'No fue posible convertir tu contraseña cuando se actualizó el software de este Sitio. Por favor %ssolicita una nueva contraseña%s. Si sigues teniendo problemas por favor contacta a %sLa Administración del Sitio%s.',
	'LOGIN_ERROR_USERNAME'	=> 'Has especificado un nombre de usuario incorrecto. Por favor verifica tu nombre de usuario e inténtalo de nuevo. Si continúas teniendo problemas, por favor contacta a %sLa Administración del Sitio%s.',
	'LOGIN_FORUM'	=> 'Para ver o publicar en este foro debes introducir la contraseña.',
	'LOGIN_INFO'	=> 'Para identificarte debes estar registrado. Registrate te tomará solo unos pocos segundos y te permitirá un amplio acceso al sistema. La Administración del Sitio puede además otorgar permisos adicionales a los usuarios registrados. Antes de identificarte asegúrate de estar familiarizado con nuestros términos de uso y políticas relacionadas. Por favor lee las reglas de los foros mientras navegas por el Sitio.',
	'LOGIN_VIEWFORUM'	=> 'La Administración del Sitio requiere que estés registrado y te hayas identificado para ver este foro.',
	'LOGIN_EXPLAIN_EDIT'	=> 'Para editar mensajes en este foro debes estar registrado e identificado.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'Para ver la lista en línea debes estar registrado e identificado.',
	'LOGIN_REQUIRED'					=> 'Necesita loguearse para realizar esta acción.',
	'LOGOUT'				=> 'Desconectarse',
	'LOGOUT_USER'			=> 'Desconectarse [ %s ]',
	'LOG_ME_IN'				=> 'Recordar',

	'MAIN'					=> 'Principal',
	'MARK'					=> 'Marcar',
	'MARK_ALL'				=> 'Marcar todo',
	'MARK_ALL_READ'			=> 'Marcar todos como leídos',
	'MARK_FORUMS_READ'		=> 'Marcar todos los Foros como leídos',
	'MARK_READ'				=> 'Marcar como leído',
	'MARK_SUBFORUMS_READ'	=> 'Marcar todos los subforos como leídos',
	'MB'	=> 'MB',
	'MIB'	=> 'MiB',
	'MCP'	=> 'Panel de Control de Moderador',
	'MCP_SHORT'				=> 'Moderar',
	'MEMBERLIST'	=> 'Usuarios',
	'MEMBERLIST_EXPLAIN'	=> 'Ver lista completa de usuarios',
	'MERGE'	=> 'Unir',
	'MERGE_POSTS'	=> 'Mover mensajes',
	'MERGE_TOPIC'	=> 'Unir tema',
	'MESSAGE'	=> 'Mensaje',
	'MESSAGES'	=> 'Mensajes',
	'MESSAGES_COUNT'		=> array(
		1	=> '%d mensaje',
		2	=> '%d mensajes',
	),
	'MESSAGE_BODY'	=> 'Cuerpo del mensaje',
	'MINUTES'	=> 'Minutos',
	'MODERATE'	=> 'Moderar',
	'MODERATOR'	=> 'Moderador',
	'MODERATORS'	=> 'Moderadores',
	'MODULE_NOT_ACCESS'		=> 'Módulo no accesible',
	'MODULE_NOT_FIND'		=> 'No se puede encontrar el módulo %s',
	'MODULE_FILE_INCORRECT_CLASS'	=> 'El archivo de módulo %s no contiene la clase correcta [%s]',
	'MONTH'	=> 'Mes',
	'MOVE'	=> 'Mover',

	'NA'	=> 'No especificado',
	'NEWEST_USER'	=> 'Nuestro Miembro más reciente es <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'Nuevo mensaje',
	'NEW_MESSAGES'	=> 'Nuevos mensajes',
	'NEW_POST'	=> 'Nuevo mensaje',   // No usado más
	'NEW_POSTS'	=> 'Nuevos mensajes',   // No usado más
	'NEXT'	=> 'Siguiente',
	'NEXT_STEP'	=> 'Siguiente',
	'NEVER'	=> 'Nunca',
	'NO'	=> 'No',
	'NO_NOTIFICATIONS'			=> 'No tienes notificaciones',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'No tienes permitido administrar este grupo desde el "Panel de Administración (ACP)".',
	'NOT_AUTHORISED'	=> 'No estás autorizado para acceder a esta área.',
	'NOT_WATCHING_FORUM'	=> 'Ya no estás suscrito a novedades en este Foro.',
	'NOT_WATCHING_TOPIC'	=> 'Ya no estás suscrito a este tema.',
	'NOTIFICATIONS'				=> 'Notificaciones',
	// This applies for NOTIFICATION_BOOKMARK and NOTIFICATION_POST.
	// %1$s will return a list of users that's concatenated using "," and "and" - see STRING_LIST
	// Once the user count reaches 5 users or more, the list is trimmed using NOTIFICATION_X_OTHERS
    // Once the user count reaches 20 users or more, the list is trimmed using NOTIFICATION_MANY_OTHERS
	// Examples:
	// A replied...
	// A and B replied...
	// A, B and C replied...
	// A, B, C and 2 others replied...
    // A, B, C and others replied...
	'NOTIFICATION_BOOKMARK'				=> array(
		1	=> '<strong>Respuesta</strong> de %1$s en tema favorito:',
	),
 	'NOTIFICATION_FORUM'				=> '<em>Foro:</em> %1$s',
 	'NOTIFICATION_GROUP_REQUEST'		=> '<strong>Solicitud de grupo</strong> de %1$s para unirse al grupo %2$s.',
 	'NOTIFICATION_GROUP_REQUEST_APPROVED'	=> '<strong>Solicitud de grupo aprobada</strong> para unirse al grupo %1$s.',
 	'NOTIFICATION_PM'					=> '<strong>Mensaje privado</strong> de %1$s:',
	'NOTIFICATION_POST'					=> array(
		1	=> '<strong>Respuesta</strong> de %1$s en tema:',
	),
	'NOTIFICATION_POST_APPROVED'		=> '<strong>Mensaje aprobado</strong>:',
	'NOTIFICATION_POST_DISAPPROVED'		=> '<strong>Mensaje no aprobado</strong>:',
	'NOTIFICATION_POST_IN_QUEUE'		=> '<strong>Aprobación del mensaje </strong> requerida por %1$s:',
	'NOTIFICATION_QUOTE'				=> array(
		1	=> '<strong>Citado</strong> por %1$s en:',
	),
 	'NOTIFICATION_REFERENCE'			=> '"%1$s"',
 	'NOTIFICATION_REASON'				=> '<em>Razón:</em> %1$s.',
	'NOTIFICATION_REPORT_PM'			=> '<strong>Mensaje privado reportado</strong> por %1$s:',
	'NOTIFICATION_REPORT_POST'			=> '<strong>Mensaje reportado</strong> por %1$s:',
	'NOTIFICATION_REPORT_CLOSED'		=> '<strong>Informe cerrado</strong> por %1$s en:',
	'NOTIFICATION_TOPIC'				=> '<strong>Nuevo tema</strong> por %1$s:',
	'NOTIFICATION_TOPIC_APPROVED'		=> '<strong>Tema aprobado</strong>:',
	'NOTIFICATION_TOPIC_DISAPPROVED'	=> '<strong>Tema no aprobado</strong>:',
	'NOTIFICATION_TOPIC_IN_QUEUE'		=> '<strong>Aprobación del tema</strong> requerida por %1$s:',
	'NOTIFICATION_TYPE_NOT_EXIST'		=> 'El tipo de notificación "%s" no se encuentra en el sistema de archivos.',
	'NOTIFICATION_ADMIN_ACTIVATE_USER'	=> '<strong>Activación requerida</strong> para nuevo usuario registrado: “%1$s”',
	// Used in conjuction with NOTIFICATION_BOOKMARK and NOTIFICATION_POST.
    'NOTIFICATION_MANY_OTHERS'			=> 'otros',
	'NOTIFICATION_X_OTHERS'				=> array(
		2	=> 'otros %d',
	),
	'NOTIFY_ADMIN'	=> 'Por favor notifica a La Administración del Sitio o webmaster.',
	'NOTIFY_ADMIN_EMAIL'	=> 'Por favor notifica a La Administración del Sitio o webmaster: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'No te está permitido acceder a ese archivo.',
	'NO_ACTION'	=> 'No se especificó ninguna acción.',
	'NO_ADMINISTRATORS'	=> 'No hay administradores.',
	'NO_AUTH_ADMIN'	=> 'No tienes permisos administrativos y por lo tanto no se te permite acceder al Panel de Administración (ACP).',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'No puedes reidentificarte como un usuario distinto.',
	'NO_AUTH_OPERATION'	=> 'No tienes los permisos necesarios para completar la operación.',
	'NO_AVATARS'				=> 'No hay avatares disponibles',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'No se puede conectar al servidor smtp: %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'No hay cumpleaños hoy.',
	'NO_EMAIL_MESSAGE'			=> 'El mensaje de email estaba en blanco.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'No se puede obtener los códigos de respuesta del servidor de email.',
	'NO_EMAIL_SUBJECT'			=> 'Email sin asunto.',
	'NO_FORUM'	=> 'El Foro que seleccionaste no existe.',
	'NO_FORUMS'	=> 'Este Sitio no tiene Foros',
	'NO_GROUP'	=> 'El grupo solicitado no existe.',
	'NO_GROUP_MEMBERS'	=> 'Este grupo actualmente no tiene usuarios',
	'NO_IPS_DEFINED'	=> 'No se definieron direcciones IP o nombres de servidor',
	'NO_MEMBERS'	=> 'No se encontraron usuarios para este criterio de búsqueda',
	'NO_MESSAGES'	=> 'No hay mensajes',
	'NO_MODE'	=> 'No se especificó el modo.',
	'NO_MODERATORS'	=> 'No hay moderadores.',
	'NO_NEW_MESSAGES'	=> 'No hay nuevos mensajes',
	'NO_NEW_POSTS'	=> 'No hay nuevos mensajes',   // No usado más
	'NO_ONLINE_USERS'	=> 'No hay usuarios registrados visitando el Foro',
	'NO_POSTS'	=> 'No hay mensajes',
	'NO_POSTS_TIME_FRAME'	=> 'No existen mensajes en este tema dentro del intervalo de tiempo seleccionado.',
	'NO_FEED_ENABLED'	=> 'Los Feeds no están disponibles en este Sitio.',
	'NO_FEED'	=> 'El Feed pedido no está disponible.',
	'NO_STYLE_DATA'				=> 'No se pudo obtener datos de estilo',
	'NO_SUBJECT'	=> 'No se ha especificado el asunto',       // Se utiliza para los mensajes que no tienen objeto definido, pero que aparece en las páginas de administración.
	'NO_SUCH_SEARCH_MODULE'	=> 'El módulo de búsqueda especificado no existe',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Métodos de autentificación no soportados',
	'NO_TOPIC'	=> 'El tema requerido no existe.',
	'NO_TOPIC_FORUM'			=> 'El tema o foro ya no existe.',
	'NO_TOPICS'	=> 'No hay temas o mensajes en este foro.',
	'NO_TOPICS_TIME_FRAME'	=> 'No existen temas en este foro dentro del intervalo de tiempo seleccionado.',
	'NO_UNREAD_POSTS'         => 'No hay mensajes sin leer',
	'NO_UPLOAD_FORM_FOUND'	=> 'Subida iniciada, pero no se encontró un formulario de subida válido.',
	'NO_USER'	=> 'El Usuario requerido no existe.',
	'NO_USERS'	=> 'Los Usuarios requeridos no existen.',
	'NO_USER_SPECIFIED'	=> 'No se especificó un nombre de usuario',

	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_ATTACHMENTS'		=> array(
		1	=> '%d adjunto',
		2	=> '%d adjuntos',
	),
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'Sin mensajes en espera',		// 0
		1			=> '1 mensaje en espera',		// 1
		2			=> '%d mensajes en espera',		// 2+
	),

	'OCCUPATION'	=> 'Ocupación',
	'OFFLINE'	=> 'Desconectado',
	'ONLINE'	=> 'Conectado',
	'ONLINE_BUDDIES'	=> 'Amigos conectados',
	// "... :: x registered and y hidden"
	'ONLINE_USERS_TOTAL'		=> array(
		1	=> 'En total hay <strong>%1$d</strong> usuario conectado :: %2$s y %3$s',
		2	=> 'En total hay <strong>%1$d</strong> usuarios conectados :: %2$s y %3$s',
	),
	// "... :: x registered, y hidden and z guests"
	'ONLINE_USERS_TOTAL_GUESTS'	=> array(
		1	=> 'En total hay <strong>%1$d</strong> usuario conectado :: %2$s, %3$s y %4$s',
		2	=> 'En total hay <strong>%1$d</strong> usuarios conectados :: %2$s, %3$s y %4$s',
	),
	'OPTIONS'					=> 'Opciones',

	'PAGE_OF'				=> 'Página <strong>%1$d</strong> de <strong>%2$d</strong>',
	'PAGE_TITLE_NUMBER'		=> 'Página %s',
	'PASSWORD'				=> 'Contraseña',
	'PIXEL'					=> 'px',
	'PIXELS'				=> array(
		1	=> '%d pixel',
		2	=> '%d píxeles',
	),
	'PLAY_QUICKTIME_FILE'	=> 'Reproducir archivo Quicktime',
	'PLEASE_WAIT'			=> 'Por favor espera.',
	'PM'					=> 'MP',
	'PM_REPORTED'			=> 'Haz clic para ver el informe',
	'POSTING_MESSAGE'		=> 'Enviando mensaje en %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Escribiendo mensaje privado',
	'POST'					=> 'Nota',
	'POST_ANNOUNCEMENT'		=> 'Anuncio',
	'POST_STICKY'			=> 'Fijo',
	'POSTED'				=> 'Publicado',
	'POSTED_IN_FORUM'		=> 'en',
	'POSTED_ON_DATE'		=> 'el',
	'POSTS'					=> 'Mensajes',
	'POSTS_UNAPPROVED'		=> 'Al menos un mensaje en este tema no ha sido aprobado',
	'POSTS_UNAPPROVED_FORUM'=> 'Al menos un mensaje en este foro no ha sido aprobado.',
	'POST_BY_AUTHOR'		=> 'por',
	'POST_BY_FOE'			=> '<strong>%1$s</strong>, que actualmente está en su lista de ignorados, creo este mensaje.',
	'POST_DISPLAY'			=> '%1$sMostrar este mensaje%2$s.',
	'POST_DAY'				=> '%.2f mensajes por día',
    'POST_DELETED_ACTION'	=> 'Mensaje borrado:',
    'POST_DELETED'			=> 'Este mensaje ha sido borrado.',
	'POST_DELETED_BY'		=> '<strong>%2$s</strong> mensaje borrado por <strong>%1$s</strong> en %3$s.',
	'POST_DELETED_BY_REASON'=> '<strong>%2$s</strong> mensaje borrado por <strong>%1$s</strong> en %3$s por la siguiente razón: %4$s',	
	'POST_DETAILS'			=> 'Detalles del mensaje',
	'POST_NEW_TOPIC'		=> 'Nuevo tema',
	'POST_PCT'				=> '%.2f%% de todos los mensajes',
	'POST_PCT_ACTIVE'		=> '%.2f%% de mensajes de usuarios',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% de sus mensajes',
	'POST_REPLY'			=> 'Publicar una respuesta',
	'POST_REPORTED'			=> 'Clic para ver informe',
	'POST_SUBJECT'			=> 'Asunto',
	'POST_TIME'				=> 'Fecha publicación',
	'POST_TOPIC'			=> 'Publicar un nuevo tema',
    'POST_UNAPPROVED_ACTION'	=> 'Mensaje esperando aprobación:',
    'POST_UNAPPROVED'		=> 'Este mensaje no ha sido aprobado.',
	'POWERED_BY'			=> 'Desarrollado por %s',
	'PREVIEW'				=> 'Vista previa',
	'PREVIOUS'				=> 'Anterior',
	'PREVIOUS_STEP'			=> 'Anterior',
	'PRIVACY'				=> 'Política de privacidad',
	'PRIVATE_MESSAGE'		=> 'Mensaje privado',
	'PRIVATE_MESSAGES'		=> 'Mensajes privados',
	'PRIVATE_MESSAGING'		=> 'Mensajería privada',
	'PROFILE'				=> 'Panel de Control del Usuario',

	'QUICK_LINKS'			=> 'Enlaces rápidos',

	'RANK'					=> 'Rango',
	'READING_FORUM'	=> 'Viendo temas en %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Leyendo anuncios globales',
	'READING_LINK'	=> 'Siguiendo enlace-forum %s',
	'READING_TOPIC'	=> 'Leyendo tema en %s',
	'READ_PROFILE'	=> 'Perfil',
	'REASON'	=> 'Razón',
	'RECORD_ONLINE_USERS'	=> 'La mayor cantidad de usuarios identificados fue <strong>%1$s</strong> el %2$s',
	'REDIRECT'	=> 'Redirección',
	'REDIRECTS'	=> 'Total redirecciones',
	'REGISTER'	=> 'Registrate',
	'REGISTERED_USERS'	=> 'Usuarios registrados:',
	// "... and 2 hidden users online"
	'REG_USERS_ONLINE'			=> array(
		1	=> 'Hay %1$d usuario registrado y %2$s conectado',
		2	=> 'Hay %1$d usuarios registrados y %2$s conectados',
	),
	'REG_USERS_TOTAL'			=> array(
		1	=> '%d registrado',
		2	=> '%d registrados',
	),
	'REMOVE'	=> 'Eliminar',
	'REMOVE_INSTALL'	=> 'Por favor borre, mueve o renombra la carpeta <strong>install</strong> antes de usar tu foro. Si este directorio aún está presente solo será accesible el Panel de Administración (ACP).',
	'REPLIES'	=> 'Respuestas',
	'REPLY_WITH_QUOTE'	=> 'Responder citando',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Respondiendo anuncio global',
	'REPLYING_MESSAGE'	=> 'Respondiendo mensaje en %s',
	'REPORT_BY'	=> 'Reportado por',
	'REPORT_POST'	=> 'Reporta este mensaje',
	'REPORTING_POST'	=> 'Reportando mensaje',
	'RESEND_ACTIVATION'	=> 'Reenviar email de activación',
	'RESET'	=> 'Limpiar',
	'RESTORE_PERMISSIONS'	=> 'Restaurar permisos',
	'RETURN_INDEX'	=> '%sVolver a la página principal%s',
	'RETURN_FORUM'	=> '%sVolver al último foro visitado%s',
	'RETURN_PAGE'	=> '%sVolver a la página anterior%s',
	'RETURN_TOPIC'	=> '%sVolver al último tema visitado%s',
	'RETURN_TO'	=> 'Volver a  “%s”',
	'RETURN_TO_INDEX'			=> 'Volver a Índice general',
	'FEED'						=> 'Feed',
	'FEED_NEWS'					=> 'Noticias',
	'FEED_TOPICS_ACTIVE'		=> 'Temas Activos',
	'FEED_TOPICS_NEW'			=> 'Nuevos Temas',
	'RULES_ATTACH_CAN'	=> '<strong>Puedes</strong> enviar adjuntos en este Foro',
	'RULES_ATTACH_CANNOT'	=> '<strong>No puedes</strong> enviar adjuntos en este Foro',
	'RULES_DELETE_CAN'	=> '<strong>Puedes</strong> borrar tus mensajes en este Foro',
	'RULES_DELETE_CANNOT'	=> '<strong>No puedes</strong> borrar tus mensajes en este Foro',
	'RULES_DOWNLOAD_CAN'	=> '<strong>Puedes</strong> descargar adjuntos en este Foro',
	'RULES_DOWNLOAD_CANNOT'	=> '<strong>No puedes</strong> descargar adjuntos en este Foro',
	'RULES_EDIT_CAN'	=> '<strong>Puedes</strong> editar tus mensajes en este Foro',
	'RULES_EDIT_CANNOT'	=> '<strong>No puedes</strong> editar tus mensajes en este Foro',
	'RULES_LOCK_CAN'	=> '<strong>Puedes</strong> bloquear tus temas en este Foro',
	'RULES_LOCK_CANNOT'	=> '<strong>No puedes</strong> bloquear tus temas en este Foro',
	'RULES_POST_CAN'	=> '<strong>Puedes</strong> abrir nuevos temas en este Foro',
	'RULES_POST_CANNOT'	=> '<strong>No puedes</strong> abrir nuevos temas en este Foro',
	'RULES_REPLY_CAN'	=> '<strong>Puedes</strong> responder a temas en este Foro',
	'RULES_REPLY_CANNOT'	=> '<strong>No puedes</strong> responder a temas en este Foro',
	'RULES_VOTE_CAN'	=> '<strong>Puedes</strong> votar en encuestas de este Foro',
	'RULES_VOTE_CANNOT'	=> '<strong>No puedes</strong> votar en encuestas de este Foro',

	'SEARCH'	=> 'Buscar',
	'SEARCH_MINI'	=> 'Buscar…',
	'SEARCH_ADV'	=> 'Búsqueda avanzada',
	'SEARCH_ADV_EXPLAIN'	=> 'Ver opciones de búsqueda avanzada',
	'SEARCH_KEYWORDS'	=> 'Buscar palabras clave',
	'SEARCHING_FORUMS'	=> 'Buscando Foros',
	'SEARCH_ACTIVE_TOPICS'	=> 'Ver temas activos',
	'SEARCH_FOR'	=> 'Buscar',
	'SEARCH_FORUM'	=> 'Buscar en este Foro…',
	'SEARCH_NEW'	=> 'Buscar mensajes nuevos',
	'SEARCH_POSTS_BY'	=> 'Buscar mensajes por',
	'SEARCH_SELF'	=> 'Buscar tus mensajes',
	'SEARCH_TOPIC'	=> 'Buscar este tema…',
	'SEARCH_UNANSWERED'	=> 'Buscar temas sin respuesta',
	'SEARCH_UNREAD'				=> 'Ver mensajes no leídos',
	'SEARCH_USER_POSTS'			=> 'Buscar mensajes del usuario',
	'SECONDS'					=> 'Segundos',
	'SEE_ALL'					=> 'Ver todas',
	'SELECT'					=> 'Seleccione',
	'SELECT_ALL_CODE'			=> 'Seleccionar todo',
	'SELECT_DESTINATION_FORUM'	=> 'Por favor seleccione un Foro de destino',
	'SELECT_FORUM'				=> 'Seleccione un Foro',
	'SEND_EMAIL'				=> 'Enviar email',				// Used for submit buttons
 	'SEND_EMAIL_USER'			=> 'Enviar email a %s',
	'SEND_PRIVATE_MESSAGE'		=> 'Enviar mensaje privado',
	'SETTINGS'	=> 'Preferencias',
	'SIGNATURE'	=> 'Firma',
	'SKIP'	=> 'Obviar',
	'SKYPE'						=> 'Skype',
	'SMTP_NO_AUTH_SUPPORT'	=> 'El Servidor SMTP no soporta autentificación',
	'SORRY_AUTH_READ'	=> 'No estás autorizado a leer este foro',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'No estás autorizado a descargar este adjunto',
	'SORT_BY'	=> 'Ordenar por',
	'SORT_JOINED'	=> 'Fecha de ingreso',
	'SORT_LOCATION'	=> 'Ubicación',	
	'SORT_RANK'	=> 'Rango',
	'SORT_POSTS'	=> 'Mensajes',
	'SORT_TOPIC_TITLE'	=> 'Título del Tema',
	'SORT_USERNAME'	=> 'Nombre de Usuario',
	'SPLIT_TOPIC'	=> 'Dividir tema',
	'SQL_ERROR_OCCURRED'	=> 'Ocurrió un error SQL mientras recuperaba esta página. Por favor contacta a %sLa Administración del Sitio%s si el problema persiste.',
	'STATISTICS'	=> 'Estadísticas',
	'START_WATCHING_FORUM'	=> 'Suscribir Foro',
	'START_WATCHING_TOPIC'	=> 'Suscribir Tema',
	'STOP_WATCHING_FORUM'	=> 'Cancelar suscripción al Foro',
	'STOP_WATCHING_TOPIC'	=> 'No seguir Tema',
	'STRING_LIST_MULTI'			=> '%1$s, y %2$s',
	'STRING_LIST_SIMPLE'		=> '%1$s y %2$s',
	'SUBFORUM'	=> 'Subforo',
	'SUBFORUMS'	=> 'Subforos',
	'SUBJECT'	=> 'Asunto',
	'SUBMIT'	=> 'Enviar',

	'TB'				=> 'TB',
	'TERMS_USE'			=> 'Condiciones de uso',
	'TEST_CONNECTION'	=> 'Probar conexión',
	'THE_TEAM'			=> 'El Equipo',
	'TIB'				=> 'TiB',
	'TIME'				=> 'Hora',
	'TIMEOUT_PROCESSING_REQ'			=> 'Tiempo de espera agotado.',

	'TOO_LARGE'			=> 'El valor que has introducido es demasiado grande.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'El valor de la configuración de <strong>Número máximo de destinatarios permitidos por mensaje privado</strong> que has introducido es demasiado grande.',

	'TOO_LONG'		=> 'El valor que introdujiste es demasiado largo.',

	'TOO_LONG_CONFIRM_CODE'			=> 'El código de confirmación que introdujo es muy largo.',
	'TOO_LONG_DATEFORMAT'			=> 'El formato de fecha que introdujo es demasiado largo.',
	'TOO_LONG_JABBER'				=> 'La cuenta Jabber que introdujo es muy larga.',
	'TOO_LONG_NEW_PASSWORD'			=> 'La nueva contraseña que introdujo es muy larga.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'La confirmación de contraseña que introdujo es muy larga.',
	'TOO_LONG_USER_PASSWORD'		=> 'La contraseña que introdujo es muy larga.',
	'TOO_LONG_USERNAME'				=> 'El nombre de usuario que introdujo es muy largo.',
	'TOO_LONG_EMAIL'				=> 'La dirección de email que introdujo es muy larga.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Ha tratado de votar demasiadas opciones.',

	'TOO_SHORT'						=> 'El valor que introdujo es demasiado corto.',

	'TOO_SHORT_CONFIRM_CODE'		=> 'El Código de confirmación que introdujo es muy corto.',
	'TOO_SHORT_DATEFORMAT'			=> 'El formato de fecha que introdujo es demasiado corto.',
	'TOO_SHORT_JABBER'				=> 'La cuenta Jabber que introdujo es muy corta.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'La nueva contraseña que introdujo es muy corta.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'La confirmación de contraseña que introdujo es muy corta.',
	'TOO_SHORT_USER_PASSWORD'		=> 'La contraseña que introdujo es muy corta.',
	'TOO_SHORT_USERNAME'			=> 'El nombre de usuario que introdujo es muy corto.',
	'TOO_SHORT_EMAIL'				=> 'La dirección de email que introdujo es muy corta.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'La dirección de email de confirmación que introdujo es muy corta.',
	'TOO_SMALL'						=> 'El valor que ha introducido es demasiado pequeño.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'El valor de la configuración de <strong>Número máximo de destinatarios permitidos por mensaje privado</strong> que ha introducido es demasiado pequeño.',

	'TOPIC'	=> 'Tema',
	'TOPICS'	=> 'Temas',
	'TOPICS_UNAPPROVED'	=> 'Al menos un tema en este foro no ha sido aprobado.',
	'TOPIC_ICON'	=> 'Icono del tema',
	'TOPIC_LOCKED'	=> 'Este tema está cerrado, no puedes editar mensajes o enviar nuevas respuestas',
	'TOPIC_LOCKED_SHORT'=> 'Tema cerrado',
	'TOPIC_MOVED'	=> 'Tema movido',
	'TOPIC_REVIEW'	=> 'Revisión de tema',
	'TOPIC_TITLE'	=> 'Título del tema',
	'TOPIC_UNAPPROVED'	=> 'Este tema no ha sido aprobado.',
    'TOPIC_DELETED'		=> 'Este tema ha sido borrado.',
	'TOTAL_ATTACHMENTS'	=> 'Adjunto(s)',
	'TOTAL_LOGS'		=> array(
		1	=> '%d registro',
		2	=> '%d registros',
	),
	'TOTAL_PMS'		=> array(
		1	=> '%d mensaje privado en total',
		2	=> '%d mensajes privados en total',
	),
    'TOPIC_POLL'		=> 'Este tema tiene una encuesta.',
	'TOTAL_POSTS'		=> 'Mensajes totales',
	'TOTAL_POSTS_COUNT'	=> array(
		2	=> 'Mensajes totales <strong>%d</strong>',
	),
	'TOPIC_REPORTED'	=> 'Este tema ha sido reportado',
	'TOTAL_TOPICS'		=> array(
		2	=> 'Temas totales <strong>%d</strong>',
	),
	'TOTAL_USERS'		=> array(
		2	=> 'Usuarios totales <strong>%d</strong>',
	),
	'TRACKED_PHP_ERROR'	=> 'Tracked PHP errors: %s',
	'TWITTER'			=> 'Twitter',

	'UNABLE_GET_IMAGE_SIZE'	=> 'No fue posible determinar las dimensiones de la imagen. Por favor verifique que la URL que ha introducido es correcta.',
	'UNABLE_TO_DELIVER_FILE'=> 'Imposible enviar archivo.',
	'UNKNOWN_BROWSER'		=> 'Navegador desconocido',
	'UNMARK_ALL'			=> 'Desmarcar todos',
	'UNREAD_MESSAGES'		=> 'Mensajes sin leer',
	'UNREAD_POST'		=> 'Mensaje sin leer',
	'UNREAD_POSTS'		=> 'Mensajes sin leer',
	'UNWATCH_FORUM_CONFIRM'		=> '¿Seguro que deseas cancelar tu suscripción de este foro?',
	'UNWATCH_FORUM_DETAILED'	=> '¿Seguro que deseas cancelar tu suscripción del foro “%s”?',
	'UNWATCH_TOPIC_CONFIRM'		=> '¿Seguro que deseas cancelar tu suscripción de este tema?',
	'UNWATCH_TOPIC_DETAILED'	=> '¿Seguro que deseas cancelar tu suscripción del tema “%s”?',
	'UNWATCHED_FORUMS'	=> 'Ya no estás suscrito a los Foros seleccionados.',
	'UNWATCHED_TOPICS'	=> 'Ya no estás suscrito a los Temas seleccionados.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Ya no estás suscrito a las entradas seleccionadas.',
	'UPDATE'	=> 'Actualizar',
	'UPLOAD_IN_PROGRESS'	=> 'Subida en curso',
	'URL_REDIRECT'	=> 'Si tu navegador no soporta meta redirección, por favor haz clic %sAQUI%s para ser redirigido.',
	'USERGROUPS'	=> 'Grupos',
	'USERNAME'	=> 'Nombre de Usuario',
	'USERNAMES'	=> 'Nombres de Usuario',
	'USER_AVATAR'	=> 'Avatar de Usuario',
	'USER_CANNOT_READ'	=> 'No puedes leer mensajes en este Foro',
	'USER_POSTS'			=> array(
		1	=> '%d mensaje',
		2	=> '%d mensajes',
	),
	'USERS'	=> 'Usuarios',
	'USE_PERMISSIONS'	=> 'Transferirme los permisos del Usuario',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Lo sentimos pero no está autorizado a usar esta opción. Puede que se haya registrado hace poco aquí y necesite participar más para poder hacer uso de esta opción.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'Visto',
	'VIEWED_COUNTS'		=> array(
		0	=> 'No visto aún',
		1	=> 'Visto %d vez',
		2	=> 'Visto %d veces',
	),
	'VIEWING_CONTACT_ADMIN'		=> 'Viendo página de contacto',
	'VIEWING_FAQ'	=> 'Viendo FAQ',
	'VIEWING_MEMBERS'	=> 'Viendo detalles de los Usuarios',
	'VIEWING_ONLINE'	=> 'Viendo quién está conectado',
	'VIEWING_MCP'	=> 'Viendo el Panel de Control de Moderador',
	'VIEWING_MEMBER_PROFILE'	=> 'Viendo perfil de Usuario',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Viendo mensajes privados',
	'VIEWING_REGISTER'	=> 'Registrando cuenta',
	'VIEWING_UCP'	=> 'Viendo Panel de Control de Usuario',
	'VIEWS'	=> 'Vistas',
	'VIEW_BOOKMARKS'	=> 'Ver Favoritos',
	'VIEW_FORUM_LOGS'	=> 'Ver registros de Foro',
	'VIEW_LATEST_POST'	=> 'Ver último mensaje',
	'VIEW_NEWEST_POST'	=> 'Ver último mensaje sin leer',
	'VIEW_NOTES'	=> 'Ver notas del usuario',
	'VIEW_ONLINE_TIMES'			=> array(
		1	=> 'basados en usuarios activos en el último %d minuto',
		2	=> 'basados en usuarios activos en los últimos %d minutos',
	),
	'VIEW_TOPIC'	=> 'Ver Tema',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Anuncio: ',
	'VIEW_TOPIC_GLOBAL'	=> 'Anuncio Global: ',
	'VIEW_TOPIC_LOCKED'	=> 'cerrado: ',
	'VIEW_TOPIC_LOGS'	=> 'Ver registros de tema',
	'VIEW_TOPIC_MOVED'	=> 'Movido: ',
	'VIEW_TOPIC_POLL'	=> 'Encuesta: ',
	'VIEW_TOPIC_STICKY'	=> 'Fijo: ',
	'VISIT_WEBSITE'	=> 'Visitar sitio web',

	'WARNINGS'	=> 'Advertencias',
	'WARN_USER'	=> 'Advertencia',
	'WATCH_FORUM_CONFIRM'	=> '¿Seguro que deseas suscribirte a este foro?',
	'WATCH_FORUM_DETAILED'	=> '¿Seguro que deseas suscribirte al foro “%s”?',
	'WATCH_TOPIC_CONFIRM'	=> '¿Seguro que deseas suscribirte a este tema?',
	'WATCH_TOPIC_DETAILED'	=> '¿Seguro que deseas suscribirte al tema “%s”?',
	'WELCOME_SUBJECT'	=> 'Bienvenido a los foros %s',
	'WEBSITE'	=> 'Sitio web',
	'WHOIS'	=> '¿Quién es?',
	'WHO_IS_ONLINE'	=> '¿Quién está conectado?',
	'WLM'				=> 'WLM',
	'WRONG_PASSWORD'	=> 'Introdujiste una contraseña incorrecta.',

	'WRONG_DATA_COLOUR'			=> 'El valor del color introducido no es válido.',
	'WRONG_DATA_JABBER'	=> 'El nombre que introdujo no es un nombre de cuenta Jabber válido.',
	'WRONG_DATA_LANG'	=> 'El idioma que especificó no es válido.',
	'WRONG_DATA_POST_SD'		=> 'La dirección de ordenación de mensaje especificada no es válida.',
	'WRONG_DATA_POST_SK'		=> 'La opción de ordenación del mensaje especificada no es válida.',
	'WRONG_DATA_TOPIC_SD'		=> 'La dirección de ordenación de tema especificada no es válida.',
	'WRONG_DATA_TOPIC_SK'		=> 'La opción de ordenación del mensaje especificada no es válida.',
	'WROTE'						=> 'escribió',

	'YAHOO'				=> 'Yahoo Messenger',
	'YOUTUBE'			=> 'YouTube',
	'YEAR'	=> 'Año',
	'YEAR_MONTH_DAY' => '(YYYY-MM-DD)',
	'YES'	=> 'Sí',
	'YOU_LAST_VISIT'	=> 'Tu última visita fue: %s',

	'datetime'	=> array(
		'TODAY'	=> 'Hoy',
		'TOMORROW'	=> 'Mañana',
		'YESTERDAY'	=> 'Ayer',
		'AGO'		=> array(
			0		=> 'hace menos de un minuto',
			1		=> 'hace %d minuto',
			2		=> 'hace %d minutos',
		),

		'Sunday'	=> 'Domingo',
		'Monday'	=> 'Lunes',
		'Tuesday'	=> 'Martes',
		'Wednesday'	=> 'Miércoles',
		'Thursday'	=> 'Jueves',
		'Friday'	=> 'Viernes',
		'Saturday'	=> 'Sábado',

		'Sun'	=> 'Dom',
		'Mon'	=> 'Lun',
		'Tue'	=> 'Mar',
		'Wed'	=> 'Mié',
		'Thu'	=> 'Jue',
		'Fri'	=> 'Vie',
		'Sat'	=> 'Sab',

		'January'	=> 'Enero',
		'February'	=> 'Febrero',
		'March'		=> 'Marzo',
		'April'		=> 'Abril',
		'May'		=> 'Mayo',
		'June'		=> 'Junio',
		'July'		=> 'Julio',
		'August'	=> 'Agosto',
		'September'	=> 'Septiembre',
		'October'	=> 'Octubre',
		'November'	=> 'Noviembre',
		'December'	=> 'Diciembre',

		'Jan'		=> 'Ene',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Abr',
		'May_short'	=> 'May',
		'Jun'		=> 'Jun',
		'Jul'		=> 'Jul',
		'Aug'		=> 'Ago',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dic',
	),

	// Timezones can be translated. We use this for the Etc/GMT timezones here,
	// because they are named invers to their offset.
	'timezones'		=> array(
		'UTC'					=> 'UTC',
























		'UTC_OFFSET'			=> 'UTC%1$s',
		'UTC_OFFSET_CURRENT'	=> 'UTC%1$s - %2$s',





















































		'Etc/GMT-12'	=> 'UTC+12',
		'Etc/GMT-11'	=> 'UTC+11',
		'Etc/GMT-10'	=> 'UTC+10',
		'Etc/GMT-9'		=> 'UTC+9',
		'Etc/GMT-8'		=> 'UTC+8',
		'Etc/GMT-7'		=> 'UTC+7',
		'Etc/GMT-6'		=> 'UTC+6',
		'Etc/GMT-5'		=> 'UTC+5',
		'Etc/GMT-4'		=> 'UTC+4',
		'Etc/GMT-3'		=> 'UTC+3',
		'Etc/GMT-2'		=> 'UTC+2',
		'Etc/GMT-1'		=> 'UTC+1',
		'Etc/GMT+1'		=> 'UTC-1',
		'Etc/GMT+2'		=> 'UTC-2',
		'Etc/GMT+3'		=> 'UTC-3',
		'Etc/GMT+4'		=> 'UTC-4',
		'Etc/GMT+5'		=> 'UTC-5',
		'Etc/GMT+6'		=> 'UTC-6',
		'Etc/GMT+7'		=> 'UTC-7',
		'Etc/GMT+8'		=> 'UTC-8',
		'Etc/GMT+9'		=> 'UTC-9',
		'Etc/GMT+10'	=> 'UTC-10',
		'Etc/GMT+11'	=> 'UTC-11',
		'Etc/GMT+12'	=> 'UTC-12',






		'Africa/Abidjan'	=> 'África/Abidjan',
		'Africa/Accra'		=> 'África/Accra',
		'Africa/Addis_Ababa'	=> 'África/Addis Ababa',
		'Africa/Algiers'	=> 'África/Algiers',
		'Africa/Asmara'		=> 'África/Asmara',
		'Africa/Bamako'		=> 'África/Bamako',
		'Africa/Bangui'		=> 'África/Bangui',
		'Africa/Banjul'		=> 'África/Banjul',
		'Africa/Bissau'		=> 'África/Bissau',
		'Africa/Blantyre'	=> 'África/Blantyre',
		'Africa/Brazzaville'	=> 'África/Brazzaville',
		'Africa/Bujumbura'	=> 'África/Bujumbura',
		'Africa/Cairo'		=> 'África/Cairo',
		'Africa/Casablanca'	=> 'África/Casablanca',
		'Africa/Ceuta'		=> 'África/Ceuta',
		'Africa/Conakry'	=> 'África/Conakry',
		'Africa/Dakar'		=> 'África/Dakar',
		'Africa/Dar_es_Salaam'	=> 'África/Dar es Salaam',
		'Africa/Djibouti'	=> 'África/Djibouti',
		'Africa/Douala'		=> 'África/Douala',
		'Africa/El_Aaiun'	=> 'África/El Aaiun',
		'Africa/Freetown'	=> 'África/Freetown',
		'Africa/Gaborone'	=> 'África/Gaborone',
		'Africa/Harare'		=> 'África/Harare',
		'Africa/Johannesburg'	=> 'África/Johannesburg',
		'Africa/Juba'		=> 'África/Juba',
		'Africa/Kampala'	=> 'África/Kampala',
		'Africa/Khartoum'	=> 'África/Khartoum',
		'Africa/Kigali'		=> 'África/Kigali',
		'Africa/Kinshasa'	=> 'África/Kinshasa',
		'Africa/Lagos'		=> 'África/Lagos',
		'Africa/Libreville'	=> 'África/Libreville',
		'Africa/Lome'		=> 'África/Lome',
		'Africa/Luanda'		=> 'África/Luanda',
		'Africa/Lubumbashi'	=> 'África/Lubumbashi',
		'Africa/Lusaka'		=> 'África/Lusaka',
		'Africa/Malabo'		=> 'África/Malabo',
		'Africa/Maputo'		=> 'África/Maputo',
		'Africa/Maseru'		=> 'África/Maseru',
		'Africa/Mbabane'	=> 'África/Mbabane',
		'Africa/Mogadishu'	=> 'África/Mogadishu',
		'Africa/Monrovia'	=> 'África/Monrovia',
		'Africa/Nairobi'	=> 'África/Nairobi',
		'Africa/Ndjamena'	=> 'África/Ndjamena',
		'Africa/Niamey'		=> 'África/Niamey',
		'Africa/Nouakchott'	=> 'África/Nouakchott',
		'Africa/Ouagadougou'	=> 'África/Ouagadougou',
		'Africa/Porto-Novo'	=> 'África/Porto-Novo',
		'Africa/Sao_Tome'	=> 'África/Sao Tome',
		'Africa/Tripoli'	=> 'África/Tripoli',
		'Africa/Tunis'		=> 'África/Tunis',
		'Africa/Windhoek'	=> 'África/Windhoek',













		'America/Adak'		=> 'América/Adak',
		'America/Anchorage'	=> 'América/Anchorage',
		'America/Anguilla'	=> 'América/Anguilla',
		'America/Antigua'	=> 'América/Antigua',
		'America/Araguaina'	=> 'América/Araguaina',




































































































































		'America/Argentina/Buenos_Aires'	=> 'América/Argentina/Buenos Aires',
		'America/Argentina/Catamarca'	=> 'América/Argentina/Catamarca',
		'America/Argentina/Cordoba'		=> 'América/Argentina/Cordoba',
		'America/Argentina/Jujuy'		=> 'América/Argentina/Jujuy',
		'America/Argentina/La_Rioja'	=> 'América/Argentina/La Rioja',
		'America/Argentina/Mendoza'		=> 'América/Argentina/Mendoza',
		'America/Argentina/Rio_Gallegos'	=> 'América/Argentina/Rio Gallegos',
		'America/Argentina/Salta'		=> 'América/Argentina/Salta',
		'America/Argentina/San_Juan'	=> 'América/Argentina/San Juan',
		'America/Argentina/San_Luis'	=> 'América/Argentina/San Luis',
		'America/Argentina/Tucuman'		=> 'América/Argentina/Tucuman',
		'America/Argentina/Ushuaia'		=> 'América/Argentina/Ushuaia',












		'America/Aruba'			=> 'América/Aruba',
		'America/Asuncion'		=> 'América/Asuncion',
		'America/Atikokan'		=> 'América/Atikokan',
		'America/Bahia'			=> 'América/Bahia',
		'America/Bahia_Banderas'	=> 'América/Bahia Banderas',
		'America/Barbados'		=> 'América/Barbados',
		'America/Belem'			=> 'América/Belem',
		'America/Belize'		=> 'América/Belize',
		'America/Blanc-Sablon'	=> 'América/Blanc-Sablon',
		'America/Boa_Vista'		=> 'América/Boa Vista',
		'America/Bogota'		=> 'América/Bogota',
		'America/Boise'			=> 'América/Boise',
		'America/Cambridge_Bay'	=> 'América/Cambridge Bay',
		'America/Campo_Grande'	=> 'América/Campo Grande',
		'America/Cancun'		=> 'América/Cancun',
		'America/Caracas'		=> 'América/Caracas',
		'America/Cayenne'		=> 'América/Cayenne',
		'America/Cayman'		=> 'América/Cayman',
		'America/Chicago'		=> 'América/Chicago',
		'America/Chihuahua'		=> 'América/Chihuahua',
		'America/Costa_Rica'	=> 'América/Costa Rica',
		'America/Creston'		=> 'América/Creston',
		'America/Cuiaba'		=> 'América/Cuiaba',
		'America/Curacao'		=> 'América/Curacao',
		'America/Danmarkshavn'	=> 'América/Danmarkshavn',
		'America/Dawson'		=> 'América/Dawson',
		'America/Dawson_Creek'	=> 'América/Dawson Creek',
		'America/Denver'		=> 'América/Denver',
		'America/Detroit'		=> 'América/Detroit',
		'America/Dominica'		=> 'América/Dominica',
		'America/Edmonton'		=> 'América/Edmonton',
		'America/Eirunepe'		=> 'América/Eirunepe',
		'America/El_Salvador'	=> 'América/El Salvador',
		'America/Fortaleza'		=> 'América/Fortaleza',
		'America/Glace_Bay'		=> 'América/Glace Bay',
		'America/Godthab'		=> 'América/Godthab',
		'America/Goose_Bay'		=> 'América/Goose Bay',
		'America/Grand_Turk'	=> 'América/Grand Turk',
		'America/Grenada'		=> 'América/Grenada',
		'America/Guadeloupe'	=> 'América/Guadeloupe',
		'America/Guatemala'		=> 'América/Guatemala',
		'America/Guayaquil'		=> 'América/Guayaquil',
		'America/Guyana'		=> 'América/Guyana',
		'America/Halifax'		=> 'América/Halifax',
		'America/Havana'		=> 'América/Havana',
		'America/Hermosillo'		=> 'América/Hermosillo',
		'America/Indiana/Indianapolis'	=> 'América/Indiana/Indianapolis',
		'America/Indiana/Knox'		=> 'América/Indiana/Knox',
		'America/Indiana/Marengo'	=> 'América/Indiana/Marengo',
		'America/Indiana/Petersburg'	=> 'América/Indiana/Petersburg',
		'America/Indiana/Tell_City'	=> 'América/Indiana/Tell City',
		'America/Indiana/Vevay'		=> 'América/Indiana/Vevay',
		'America/Indiana/Vincennes'	=> 'América/Indiana/Vincennes',
		'America/Indiana/Winamac'	=> 'América/Indiana/Winamac',
		'America/Inuvik'		=> 'América/Inuvik',
		'America/Iqaluit'		=> 'América/Iqaluit',
		'America/Jamaica'		=> 'América/Jamaica',
		'America/Juneau'		=> 'América/Juneau',
		'America/Kentucky/Louisville'	=> 'América/Kentucky/Louisville',
		'America/Kentucky/Monticello'	=> 'América/Kentucky/Monticello',
		'America/Kralendijk'	=> 'América/Kralendijk',
		'America/La_Paz'		=> 'América/La Paz',
		'America/Lima'			=> 'América/Lima',
		'America/Los_Angeles'	=> 'América/Los Angeles',
		'America/Lower_Princes'	=> 'América/Lower Princes',
		'America/Maceio'		=> 'América/Maceio',
		'America/Managua'		=> 'América/Managua',
		'America/Manaus'		=> 'América/Manaus',
		'America/Marigot'		=> 'América/Marigot',
		'America/Martinique'	=> 'América/Martinique',
		'America/Matamoros'		=> 'América/Matamoros',
		'America/Mazatlan'		=> 'América/Mazatlan',
		'America/Menominee'		=> 'América/Menominee',
		'America/Merida'		=> 'América/Merida',
		'America/Metlakatla'	=> 'América/Metlakatla',
		'America/Mexico_City'	=> 'América/Mexico City',
		'America/Miquelon'		=> 'América/Miquelon',
		'America/Moncton'		=> 'América/Moncton',
		'America/Monterrey'		=> 'América/Monterrey',
		'America/Montevideo'	=> 'América/Montevideo',
		'America/Montreal'		=> 'América/Montreal',
		'America/Montserrat'	=> 'América/Montserrat',
		'America/Nassau'		=> 'América/Nassau',
		'America/New_York'		=> 'América/New York',
		'America/Nipigon'		=> 'América/Nipigon',
		'America/Nome'			=> 'América/Nome',
		'America/Noronha'		=> 'América/Noronha',
		'America/North_Dakota/Beulah'		=> 'América/North Dakota/Beulah',
		'America/North_Dakota/Center'		=> 'América/North Dakota/Center',
		'America/North_Dakota/New_Salem'	=> 'América/North Dakota/New Salem',
		'America/Ojinaga'		=> 'América/Ojinaga',
		'America/Panama'		=> 'América/Panama',
		'America/Pangnirtung'	=> 'América/Pangnirtung',
		'America/Paramaribo'	=> 'América/Paramaribo',
		'America/Phoenix'		=> 'América/Phoenix',
		'America/Port-au-Prince'	=> 'América/Port-au-Prince',
		'America/Port_of_Spain'	=> 'América/Port of Spain',
		'America/Porto_Velho'	=> 'América/Porto Velho',
		'America/Puerto_Rico'	=> 'América/Puerto Rico',
		'America/Rainy_River'	=> 'América/Rainy River',
		'America/Rankin_Inlet'	=> 'América/Rankin Inlet',
		'America/Recife'		=> 'América/Recife',
		'America/Regina'		=> 'América/Regina',
		'America/Resolute'		=> 'América/Resolute',
		'America/Rio_Branco'	=> 'América/Rio Branco',
		'America/Santa_Isabel'	=> 'América/Santa Isabel',
		'America/Santarem'		=> 'América/Santarem',
		'America/Santiago'		=> 'América/Santiago',
		'America/Santo_Domingo'	=> 'América/Santo Domingo',
		'America/Sao_Paulo'		=> 'América/Sao Paulo',
		'America/Scoresbysund'	=> 'América/Scoresbysund',
		'America/Shiprock'		=> 'América/Shiprock',
		'America/Sitka'			=> 'América/Sitka',
		'America/St_Barthelemy'	=> 'América/St. Barthelemy',
		'America/St_Johns'		=> 'América/St. Johns',
		'America/St_Kitts'		=> 'América/St. Kitts',
		'America/St_Lucia'		=> 'América/St. Lucia',
		'America/St_Thomas'		=> 'América/St. Thomas',
		'America/St_Vincent'	=> 'América/St. Vincent',
		'America/Swift_Current'	=> 'América/Swift Current',
		'America/Tegucigalpa'	=> 'América/Tegucigalpa',
		'America/Thule'			=> 'América/Thule',
		'America/Thunder_Bay'	=> 'América/Thunder Bay',
		'America/Tijuana'		=> 'América/Tijuana',
		'America/Toronto'		=> 'América/Toronto',
		'America/Tortola'		=> 'América/Tortola',
		'America/Vancouver'		=> 'América/Vancouver',
		'America/Whitehorse'	=> 'América/Whitehorse',
		'America/Winnipeg'		=> 'América/Winnipeg',
		'America/Yakutat'		=> 'América/Yakutat',
		'America/Yellowknife'	=> 'América/Yellowknife',

		'Antarctica/Casey'		=> 'Antártida/Casey',
		'Antarctica/Davis'		=> 'Antártida/Davis',
		'Antarctica/DumontDUrville'	=> 'Antártida/DumontDUrville',
		'Antarctica/Macquarie'	=> 'Antártida/Macquarie',
		'Antarctica/Mawson'		=> 'Antártida/Mawson',
		'Antarctica/McMurdo'	=> 'Antártida/McMurdo',
		'Antarctica/Palmer'		=> 'Antártida/Palmer',
		'Antarctica/Rothera'	=> 'Antártida/Rothera',
		'Antarctica/South_Pole'	=> 'Antártida/South Pole',
		'Antarctica/Syowa'		=> 'Antártida/Syowa',
		'Antarctica/Vostok'		=> 'Antártida/Vostok',

		'Arctic/Longyearbyen'	=> 'Ártico/Longyearbyen',

		'Asia/Aden'			=> 'Asia/Aden',
		'Asia/Almaty'		=> 'Asia/Almaty',
		'Asia/Amman'		=> 'Asia/Amman',
		'Asia/Anadyr'		=> 'Asia/Anadyr',
		'Asia/Aqtau'		=> 'Asia/Aqtau',
		'Asia/Aqtobe'		=> 'Asia/Aqtobe',
		'Asia/Ashgabat'		=> 'Asia/Ashgabat',
		'Asia/Baghdad'		=> 'Asia/Baghdad',
		'Asia/Bahrain'		=> 'Asia/Bahrain',
		'Asia/Baku'			=> 'Asia/Baku',
		'Asia/Bangkok'		=> 'Asia/Bangkok',
		'Asia/Beirut'		=> 'Asia/Beirut',
		'Asia/Bishkek'		=> 'Asia/Bishkek',
		'Asia/Brunei'		=> 'Asia/Brunei',
		'Asia/Choibalsan'	=> 'Asia/Choibalsan',
		'Asia/Chongqing'	=> 'Asia/Chongqing',
		'Asia/Colombo'		=> 'Asia/Colombo',
		'Asia/Damascus'		=> 'Asia/Damascus',
		'Asia/Dhaka'		=> 'Asia/Dhaka',
		'Asia/Dili'			=> 'Asia/Dili',
		'Asia/Dubai'		=> 'Asia/Dubai',
		'Asia/Dushanbe'		=> 'Asia/Dushanbe',
		'Asia/Gaza'			=> 'Asia/Gaza',
		'Asia/Harbin'		=> 'Asia/Harbin',
		'Asia/Hebron'		=> 'Asia/Hebron',
		'Asia/Ho_Chi_Minh'	=> 'Asia/Ho Chi Minh',
		'Asia/Hong_Kong'	=> 'Asia/Hong Kong',
		'Asia/Hovd'			=> 'Asia/Hovd',
		'Asia/Irkutsk'		=> 'Asia/Irkutsk',
		'Asia/Jakarta'		=> 'Asia/Jakarta',
		'Asia/Jayapura'		=> 'Asia/Jayapura',
		'Asia/Jerusalem'	=> 'Asia/Jerusalem',
		'Asia/Kabul'		=> 'Asia/Kabul',
		'Asia/Kamchatka'	=> 'Asia/Kamchatka',
		'Asia/Karachi'		=> 'Asia/Karachi',
		'Asia/Kashgar'		=> 'Asia/Kashgar',
		'Asia/Kathmandu'	=> 'Asia/Kathmandu',
		'Asia/Khandyga'		=> 'Asia/Khandyga',
		'Asia/Kolkata'		=> 'Asia/Kolkata',
		'Asia/Krasnoyarsk'	=> 'Asia/Krasnoyarsk',
		'Asia/Kuala_Lumpur'	=> 'Asia/Kuala Lumpur',
		'Asia/Kuching'		=> 'Asia/Kuching',
		'Asia/Kuwait'		=> 'Asia/Kuwait',
		'Asia/Macau'		=> 'Asia/Macau',
		'Asia/Magadan'		=> 'Asia/Magadan',
		'Asia/Makassar'		=> 'Asia/Makassar',
		'Asia/Manila'		=> 'Asia/Manila',
		'Asia/Muscat'		=> 'Asia/Muscat',
		'Asia/Nicosia'		=> 'Asia/Nicosia',
		'Asia/Novokuznetsk'	=> 'Asia/Novokuznetsk',
		'Asia/Novosibirsk'	=> 'Asia/Novosibirsk',
		'Asia/Omsk'			=> 'Asia/Omsk',
		'Asia/Oral'			=> 'Asia/Oral',
		'Asia/Phnom_Penh'	=> 'Asia/Phnom Penh',
		'Asia/Pontianak'	=> 'Asia/Pontianak',
		'Asia/Pyongyang'	=> 'Asia/Pyongyang',
		'Asia/Qatar'		=> 'Asia/Qatar',
		'Asia/Qyzylorda'	=> 'Asia/Qyzylorda',
		'Asia/Rangoon'		=> 'Asia/Rangoon',
		'Asia/Riyadh'		=> 'Asia/Riyadh',
		'Asia/Sakhalin'		=> 'Asia/Sakhalin',
		'Asia/Samarkand'	=> 'Asia/Samarkand',
		'Asia/Seoul'		=> 'Asia/Seoul',
		'Asia/Shanghai'		=> 'Asia/Shanghai',
		'Asia/Singapore'	=> 'Asia/Singapore',
		'Asia/Taipei'		=> 'Asia/Taipei',
		'Asia/Tashkent'		=> 'Asia/Tashkent',
		'Asia/Tbilisi'		=> 'Asia/Tbilisi',
		'Asia/Tehran'		=> 'Asia/Tehran',
		'Asia/Thimphu'		=> 'Asia/Thimphu',
		'Asia/Tokyo'		=> 'Asia/Tokyo',
		'Asia/Ulaanbaatar'	=> 'Asia/Ulaanbaatar',
		'Asia/Urumqi'		=> 'Asia/Urumqi',
		'Asia/Ust-Nera'		=> 'Asia/Ust-Nera',
		'Asia/Vientiane'	=> 'Asia/Vientiane',
		'Asia/Vladivostok'	=> 'Asia/Vladivostok',
		'Asia/Yakutsk'		=> 'Asia/Yakutsk',
		'Asia/Yekaterinburg'	=> 'Asia/Yekaterinburg',
		'Asia/Yerevan'		=> 'Asia/Yerevan',

		'Atlantic/Azores'		=> 'Atlántico/Azores',
		'Atlantic/Bermuda'		=> 'Atlántico/Bermuda',
		'Atlantic/Canary'		=> 'Atlántico/Canary',
		'Atlantic/Cape_Verde'	=> 'Atlántico/Cape Verde',
		'Atlantic/Faroe'		=> 'Atlántico/Faroe',
		'Atlantic/Madeira'		=> 'Atlántico/Madeira',
		'Atlantic/Reykjavik'	=> 'Atlántico/Reykjavik',
		'Atlantic/South_Georgia'	=> 'Atlántico/South Georgia',
		'Atlantic/St_Helena'	=> 'Atlántico/St. Helena',
		'Atlantic/Stanley'		=> 'Atlántico/Stanley',

		'Australia/Adelaide'	=> 'Australia/Adelaide',
		'Australia/Brisbane'	=> 'Australia/Brisbane',
		'Australia/Broken_Hill'	=> 'Australia/Broken Hill',
		'Australia/Currie'		=> 'Australia/Currie',
		'Australia/Darwin'		=> 'Australia/Darwin',
		'Australia/Eucla'		=> 'Australia/Eucla',
		'Australia/Hobart'		=> 'Australia/Hobart',
		'Australia/Lindeman'	=> 'Australia/Lindeman',
		'Australia/Lord_Howe'	=> 'Australia/Lord Howe',
		'Australia/Melbourne'	=> 'Australia/Melbourne',
		'Australia/Perth'		=> 'Australia/Perth',
		'Australia/Sydney'		=> 'Australia/Sydney',

		'Europe/Amsterdam'	=> 'Europa/Amsterdam',
		'Europe/Andorra'	=> 'Europa/Andorra',
		'Europe/Athens'		=> 'Europa/Athens',
		'Europe/Belgrade'	=> 'Europa/Belgrade',
		'Europe/Berlin'		=> 'Europa/Berlin',
		'Europe/Bratislava'	=> 'Europa/Bratislava',
		'Europe/Brussels'	=> 'Europa/Brussels',
		'Europe/Bucharest'	=> 'Europa/Bucharest',
		'Europe/Budapest'	=> 'Europa/Budapest',
		'Europe/Busingen'	=> 'Europa/Busingen',
		'Europe/Chisinau'	=> 'Europa/Chisinau',
		'Europe/Copenhagen'	=> 'Europa/Copenhagen',
		'Europe/Dublin'		=> 'Europa/Dublin',
		'Europe/Gibraltar'	=> 'Europa/Gibraltar',
		'Europe/Guernsey'	=> 'Europa/Guernsey',
		'Europe/Helsinki'	=> 'Europa/Helsinki',
		'Europe/Isle_of_Man'	=> 'Europa/Isle of Man',
		'Europe/Istanbul'	=> 'Europa/Istanbul',
		'Europe/Jersey'		=> 'Europa/Jersey',
		'Europe/Kaliningrad'	=> 'Europa/Kaliningrad',
		'Europe/Kiev'		=> 'Europa/Kiev',
		'Europe/Lisbon'		=> 'Europa/Lisbon',
		'Europe/Ljubljana'	=> 'Europa/Ljubljana',
		'Europe/London'		=> 'Europa/London',
		'Europe/Luxembourg'	=> 'Europa/Luxembourg',
		'Europe/Madrid'		=> 'Europa/Madrid',
		'Europe/Malta'		=> 'Europa/Malta',
		'Europe/Mariehamn'	=> 'Europa/Mariehamn',
		'Europe/Minsk'		=> 'Europa/Minsk',
		'Europe/Monaco'		=> 'Europa/Monaco',
		'Europe/Moscow'		=> 'Europa/Moscow',
		'Europe/Oslo'		=> 'Europa/Oslo',
		'Europe/Paris'		=> 'Europa/Paris',
		'Europe/Podgorica'	=> 'Europa/Podgorica',
		'Europe/Prague'		=> 'Europa/Prague',
		'Europe/Riga'		=> 'Europa/Riga',
		'Europe/Rome'		=> 'Europa/Rome',
		'Europe/Samara'		=> 'Europa/Samara',
		'Europe/San_Marino'	=> 'Europa/San Marino',
		'Europe/Sarajevo'	=> 'Europa/Sarajevo',
		'Europe/Simferopol'	=> 'Europa/Simferopol',
		'Europe/Skopje'		=> 'Europa/Skopje',
		'Europe/Sofia'		=> 'Europa/Sofia',
		'Europe/Stockholm'	=> 'Europa/Stockholm',
		'Europe/Tallinn'	=> 'Europa/Tallinn',
		'Europe/Tirane'		=> 'Europa/Tirane',
		'Europe/Uzhgorod'	=> 'Europa/Uzhgorod',
		'Europe/Vaduz'		=> 'Europa/Vaduz',
		'Europe/Vatican'	=> 'Europa/Vatican',
		'Europe/Vienna'		=> 'Europa/Vienna',
		'Europe/Vilnius'	=> 'Europa/Vilnius',
		'Europe/Volgograd'	=> 'Europa/Volgograd',
		'Europe/Warsaw'		=> 'Europa/Warsaw',
		'Europe/Zagreb'		=> 'Europa/Zagreb',
		'Europe/Zaporozhye'	=> 'Europa/Zaporozhye',
		'Europe/Zurich'		=> 'Europa/Zurich',

		'Indian/Antananarivo'	=> 'Índico/Antananarivo',
		'Indian/Chagos'		=> 'Índico/Chagos',
		'Indian/Christmas'	=> 'Índico/Christmas',
		'Indian/Cocos'		=> 'Índico/Cocos',
		'Indian/Comoro'		=> 'Índico/Comoro',
		'Indian/Kerguelen'	=> 'Índico/Kerguelen',
		'Indian/Mahe'		=> 'Índico/Mahe',
		'Indian/Maldives'	=> 'Índico/Maldives',
		'Indian/Mauritius'	=> 'Índico/Mauritius',
		'Indian/Mayotte'	=> 'Índico/Mayotte',
		'Indian/Reunion'	=> 'Índico/Reunion',

		'Pacific/Apia'		=> 'Pacífico/Apia',
		'Pacific/Auckland'	=> 'Pacífico/Auckland',
		'Pacific/Chatham'	=> 'Pacífico/Chatham',
		'Pacific/Chuuk'		=> 'Pacífico/Chuuk',
		'Pacific/Easter'	=> 'Pacífico/Easter',
		'Pacific/Efate'		=> 'Pacífico/Efate',
		'Pacific/Enderbury'	=> 'Pacífico/Enderbury',
		'Pacific/Fakaofo'	=> 'Pacífico/Fakaofo',
		'Pacific/Fiji'		=> 'Pacífico/Fiji',
		'Pacific/Funafuti'	=> 'Pacífico/Funafuti',
		'Pacific/Galapagos'	=> 'Pacífico/Galapagos',
		'Pacific/Gambier'	=> 'Pacífico/Gambier',
		'Pacific/Guadalcanal'	=> 'Pacífico/Guadalcanal',
		'Pacific/Guam'		=> 'Pacífico/Guam',
		'Pacific/Honolulu'	=> 'Pacífico/Honolulu',
		'Pacific/Johnston'	=> 'Pacífico/Johnston',
		'Pacific/Kiritimati'	=> 'Pacífico/Kiritimati',
		'Pacific/Kosrae'	=> 'Pacífico/Kosrae',
		'Pacific/Kwajalein'	=> 'Pacífico/Kwajalein',
		'Pacific/Majuro'	=> 'Pacífico/Majuro',
		'Pacific/Marquesas'	=> 'Pacífico/Marquesas',
		'Pacific/Midway'	=> 'Pacífico/Midway',
		'Pacific/Nauru'		=> 'Pacífico/Nauru',
		'Pacific/Niue'		=> 'Pacífico/Niue',
		'Pacific/Norfolk'	=> 'Pacífico/Norfolk',
		'Pacific/Noumea'	=> 'Pacífico/Noumea',
		'Pacific/Pago_Pago'	=> 'Pacífico/Pago Pago',
		'Pacific/Palau'		=> 'Pacífico/Palau',
		'Pacific/Pitcairn'	=> 'Pacífico/Pitcairn',
		'Pacific/Pohnpei'	=> 'Pacífico/Pohnpei',
		'Pacific/Port_Moresby'	=> 'Pacífico/Port Moresby',
		'Pacific/Rarotonga'	=> 'Pacífico/Rarotonga',
		'Pacific/Saipan'	=> 'Pacífico/Saipan',
		'Pacific/Tahiti'	=> 'Pacífico/Tahiti',
		'Pacific/Tarawa'	=> 'Pacífico/Tarawa',
		'Pacific/Tongatapu'	=> 'Pacífico/Tongatapu',
		'Pacific/Wake'		=> 'Pacífico/Wake',
		'Pacific/Wallis'	=> 'Pacífico/Wallis',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'd M Y H:i'			=> '01 Ene 2007 13:37',
		'd M Y, H:i'		=> '01 Ene 2007, 13:37',
		'M jS, y, H:i'		=> 'Ene 1ro, 07, 13:37',
		'D M d, Y g:i a'	=> 'Lun Ene 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'Enero 1ro, 2007, 1:37 pm',
		'|d M Y|, H:i'		=> 'Hoy, 13:37 / 01 Ene 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'Hoy, 1:37 pm / 1ro de Enero, 2007, 1:37 pm',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D, d M Y, H:i', // Mié, 10 Mar 2010, 23:26

));
