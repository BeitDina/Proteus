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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0	=> '--',
		1	=> 'Problemas sobre la identificación y el registro',
	),
	array(
		0	=> '¿Por qué no puedo identificarme?',
		1	=> 'Existen varias razones por lo cuál esto puede suceder. Primero, asegúrate de que tu nombre de usuario y contraseña se encuentren escritos correctamente. Si lo están, comunícate con La Administración para asegurarse de que no ha sido excluído. También es posible que el foro esté mal configurado por su dueño y/o tenga fallos en la programación, por lo que necesitaría ser reparado.',
	),
	array(
		0	=> '¿Por qué me tengo que registrar?',
		1	=> 'No estás obligado a hacerlo, la decisión la toman los administradores y moderadores. En algunos casos necesitarás registrarte para publicar temas y respuestas. Sin embargo, estar registrado te dará acceso a contenidos adicionales y/o ventajas que como usuario invitado no difrutarías, como tener tu imagen personalizada (avatar), mensajes privados, suscripción a grupos de usuarios, etc. Tan solo te tomará unos segundos. Es muy recomendable.',
	),
	array(
		0	=> '¿Por qué mi sesión de usuario expira automáticamente?',
		1	=> 'Si no activas la casilla <em>Entrar automáticamente</em> cuando ingresas al foro, tus datos se guardan en una cookie segura, que se elimina al salir de la página o en cierto tiempo. Esto previene que tu cuenta pueda ser usada por otra persona. Para que el sistema te reconozca automáticamente solo marca la casilla al ingresar. No es recomendable si accedes al foro desde un PC compartido, e.j. bibliotecas, cyber-cafés, PC\'s de universidades o colegios, etc. Si no ves la casilla, significa que la administración del foro ha deshabilitado la opción.',
	),
	array(
		0	=> '¿Cómo evito que mi nombre de usuario aparezca en las listas de usuarios identificados?',
		1	=> 'Dentro del Panel de Control de Usuario, en "Preferencias de Foros", encontrarás la opción <em>Ocultar mi estado de conexión</em>. Habilita la opción con <em>SI</em> y solamente serás visto por administradores, moderadores y tu mismo. Serás contado como un usuario oculto.',
	),
	array(
		0	=> '¡Perdí mi contraseña!',
		1	=> 'No te asustes, ¡calma! Si tu contraseña no puede ser recuperada puedes desactivarla o cambiarla. Visita la página de ingreso (login) y haz clic en <em>Olvidé mi contraseña</em>. Sigue las instrucciones y estarás identificado nuevamente en muy poco tiempo.',
	),
	array(
		0	=> 'Me registré ¡y no me puedo identificar!',
		1	=> 'Primero, verifica tu nombre de usuario y contraseña. Si todo está correcto, hay dos posibles razones. Si el Sistema de Protección Infantil (COPPA) está activado y cuando te registraste elegiste la opción <em>Soy menor de 13 años</em> entonces tendrás que seguir algunas instrucciones que se te darán para activar la cuenta. Algunos foros disponen que las cuentas deben ser activadas, ya sea por ti o por La Administración, antes de que puedas identificarte; esta información se te brindará al finalizar el proceso de registro. Si se te envió un email, sigue las instrucciones. Si no recibiste ningún email, seguramente la dirección de correo electrónico que proporcionaste no es correcta o tal vez haya sido capturada por un filtro de spam. Si estás seguro de que la dirección de email que proporcionaste es correcta, envía un mensaje a La Administración.',
	),
	array(
		0	=> 'Hace un tiempo me registré, ¡pero ahora no puedo conectarme!',
		1   => 'Es posible que la administración haya desactivado o borrado tu cuenta por alguna razón. También, algunos foros periódicamente remueven sus usuarios que no publicaron mensajes por cierto periodo de tiempo para reducir el peso de la base de datos. Si es así, registrate de nuevo y participa de las discuciones.',
	),
	array(
		0	=> '¿Qué es COPPA?',
		1	=> 'COPPA, o Acta de Privacidad y Protección de Niños menores de 13 años del año 1998, es una ley de los Estados Unidos (por eso se mantiene en inglés) donde se solicita a los sitios de Internet, los cuales son potenciales recolectores de información, que el registro de niños sea escrito y ratificado con el concentimiento de los padres o con algún otro método de reconocimiento de guardia legal, que permita recolectar información personal identificable de un menor de edad.',
	),
	array(
		0	=> '¿Por qué no puedo registrarme?',
		1	=> 'Es posible que la administración del foro haya baneado tu dirección IP o deshabilitara el nombre de usuario con el cual estás intentando registrarte. También pudo haber deshabilitado el registro de nuevos usuarios. Contacta a La Administración del Foro.',
	),
	array(
		0	=> '¿Cuál es la función de "Borrar todas las cookies del Foro"?',
		1	=> '"Borrar todas las cookies del Foro" borra las cookies creadas por phpBB, las cuales te mantienen autorizado para acceder a determinados recursos del foro y estar identificado al mismo. También proveen funciones como leer el seguimiento de la navegación del foro por el usuario si la administración ha habilitado la opción. Si estás teniendo problemas con el ingreso o salida del foro, borrar las cookies seguramente ayudará.',
	),
	array(
		0	=> '--',
		1	=> 'Preferencias de usuario y configuraciones',
	),
	array(
		0	=> '¿Cómo se puede cambiar mi configuración?',
		1	=> 'Si eres un usuario registrado, todos tus datos y configuraciones están archivados en nuestra base de datos. Para modificarlos, visita el Panel de Control de Usuario; el enlace se encuentra en la parte superior de las páginas del foro. Este sistema te permitirá cambiar tus datos y preferencias.',
	),
	array(
		0	=> '¡La hora en los foros no es correcta!',
		1	=> 'La hora no es correcta, es posible que estés viendo la hora correspondiente a otra zona horaria. Si este es el caso, visita el Panel de Control de Usuario y define tu zona horaria de acuerdo a tu ubicación, e.j. Londres, Buenos Aires, París, Nueva York, Sydney, etc. Recuerda que para cambiar la zona horaria, como las demás preferencias, debes estar registrado. Si no lo estás, este es un buen momento para hacerlo.',
	),
	array(
		0	=> 'Cambié la zona horaria en mi perfil, ¡pero el tiempo sigue siendo incorrecto!',
		1	=> 'Si estás seguro de que de la zona horaria es correcta al igual que el horario de verano establecido, y la hora sigue siendo incorrecta, entonces la hora almacenada en el servidor es incorrecta. Por favor comunícate con La Administración para corregir el problema.',
	),
	array(
		0	=> '¡Mi idioma no está en la lista!',
		1	=> 'Esto se puede deber a que la administración no ha instalado el paquete de tu idioma para el foro o nadie ha creado una traducción. Preguntale al administrador si puede instalar el paquete del idioma que necesitas. Si el paquete no existe, puedes hacer una traducción. Puedes encontrar más información en el foro de phpBB (ver el enlace al final de la página).',
	),
	array(
		0	=> '¿Cómo se puede poner una imagen debajo de mi nombre de usuario?',
		1	=> 'Hay dos imagenes que pueden aparecer debajo de tu nombre de usuario cuando estés viendo los mensajes. Dependiendo de la plantilla que utilices el foro, la primera imagen está asociada a la posición (rango) del usuario, generalmente en forma de estrellas, bloques o puntos, indicando la cantidad de mensajes que publicaste o el status dentro del foro. La segunda, usualmente una imagen más grande, es conocida como avatar y generalmete es única o personal para cada usuario. Es la administración quien decide si se pueden usar o no y en que tamaño y peso pueden ser publicados. En caso de que no este disponible la opción de avatar, comunícate con La Administración y pide que sea activada.',
	),
	array(
		0	=> '¿Cómo se puede cambiar mi rango?',
		1	=> 'Rangos, los cuales aparecen debajo del nombre de usuario, indican la cantidad de publicaciones realizadas por el usuario o la posición del mismo dentro del foro, e.j. moderadores y administradores. En general, no puedes cambiar tu rango directamente ya que está determinado por la administración. Por favor, no abuses de el publicar mensajes innecesariamente solo para incrementar tu rango. La mayoría de los foros no toleran esta acción y moderadores o administradores reducirán el número de publicaciones realizadas, hasta incluso pueden banearte.',
	),
	array(
		0	=> 'Cuando hago clic sobre el enlace de email de un usuario, ¡me pide que me registre!',
		1	=> 'Solo usuarios registrados pueden enviar un email a otros usuarios a través del foro, si la administración habilita la opción. Esto es para prevenir el uso malicioso del sistema de email por usuarios anónimos.',
	),
	array(
		0	=> '--',
		1	=> 'Publicación de mensajes',
	),
	array(
		0	=> '¿Cómo se puede publicar un mensaje en el foro?',
		1	=> 'Para publicar un nuevo tema en el foro regístrate como miembro, haciendo clic en el enlace de registro, generalmente arriba de cada página. Seguramente necesitaras registrarte antes de poder publicar y reponder. Abajo de cada foro encontrarás una lista de acciones permitidas. Ejemplo: Puedes publicar nuevos temas, Puedes votar en las encuestas, etc.',
	),
	array(
		0	=> '¿Cómo se puede editar o borrar un mensaje?',
		1	=> 'A menos que seas administrador o moderador, solo puedes borrar o editar tus propios mensajes. Para editarlos debes hacer clic en el botón <em>editar</em>, a veces esta opción solo es válida durante un cierto periodo de tiempo. Si alguien respondió tu tema, encontrarás un pequeño texto en la parte de abajo del tema mostrando cuantas veces los has modificado así como la hora y la fecha en la que lo hiciste. Esto no aparece a menos que alguien responda a tu tema, si fue un moderador o la administración quién lo editó, no aparecerá nada a menos que ellos quieran dejar un mensaje. Los usuarios normales no podrán borrar sus temas después de que alguien haya respondido al mismo.',
	),
	array(
		0	=> '¿Cómo se puede añadir una firma a mi mensaje?',
		1	=> 'Para añadir una firma a sus mensajes debe crearla en el Panel de Control de Usuario. Una vez creada, active la opción <em>Añadir firma</em> cuando publique un mensaje. Puedes asignar una firma por defecto a todos sus mensajes activando la casilla correcta en tu perfil. Para dejar de añadirla en los mensajes, debes desactivar la opción <em>Añadir firma</em> dentro del perfil.',
	),
	array(
		0	=> '¿Cómo creo una encuesta?',
		1	=> 'Cuando inicia un nuevo tema o editas el primer mensaje del mismo, debe hacer clic en la etiqueta "Agregar Encuesta" debajo del formulario de publicación; si no la visualizas, significa que no posees los permisos apropiados para crear encuestas. Inserta un título y al menos dos opciones en el campo apropiado, asegurandote de que cada opción se encuentre en la correspondiente línea del formulario. También puedes elegir el número de opciones que el usuario puede seleccionar en la etiqueta "Opciones por usuario", el tiempo límite en días para la encuesta (0 para duración infinita) y por último la opción de permitir a lo usuarios cambiar sus votos.',
	),
	array(
		0	=> '¿Por qué no se puede añadir más opciones a la encuesta?',
		1	=> 'El límite para opciones de una encuesta es fijado por la administración. Si crees que necesitas añadir más opciones de las permitidas a la encuesta, comunícate con La Administración del foro.',
	),
	array(
		0	=> '¿Cómo edito o borro una encuesta?',
		1	=> 'Como en los mensajes, las encuestas solo pueden ser modifiacadas por su creador original, un moderador o la administración. Para editar una encuesta, haz clic para editar el primer mensaje del tema; este siempre esta asociado a la encuesta. Si nadie ha votado, los usuarios pueden borrar la encuesta o editar las opciones. Sin embargo, si algún miembro ha votado, solo moderadores o administradordes pueden editar o borrar la encuesta. Esto evita que las encuestas sean cambiadas a mitad de la votación.',
	),
	array(
		0	=> '¿Por qué no se puede acceder a algún foro?',
		1	=> 'Algunos foros pueden estar limitados para ciertos usuarios o grupos y para visualizar, leer, publicar o llevar a cabo otra acción allí necesita una autorización especial. Comunícate con un moderador o administrdor del foro para que se te conceda el acceso.',
	),
	array(
		0	=> '¿Por qué no se pueden añadir archivos adjuntos?',
		1	=> 'Los permisos para adjuntar archivos son individuales para cada foro, grupo, usuario y son concedidos por la administración. Tal vez la administración no permite adjuntar archivos en el foro en el que te encuentras ó solo ciertos grupos pueden hacerlo. Comunícate con La Administración si no estás seguro de por qué no puedes adjuntar archivos.',
	),
	array(
		0	=> '¿Por qué recibí una advertencia?',
		1	=> 'Los administradores de cada foro tienen su propio conjunto de reglas para su foro. Si has quebrantado alguna regla puedes recibir una advertencia. Por favor recuerda que esta es una decisión de la administración del foro, y el phpBB Group no tiene nada que ver con las advertencias dadas en este foro. Comunícate con La Administración del foro si no estás seguro del porqué fuiste advertido.',
	),
	array(
		0	=> '¿Cómo se puede reportar un mensaje a un moderador?',
		1	=> 'Si la administración lo permite, deberías ver un botón para reportar mensajes cerca del mismo. Haciendo clic sobre este botón, el foro te llevará y guiará a través de ciertos pasos necesarios para reportar el mensaje.',
	),
	array(
		0	=> '¿Para qué sirve el botón "Guardar" en la publicación de temas?',
		1	=> 'Esto te permitirá guardar borradores que serán completados y enviados más tarde. Para recargar un borrador guardado, visita el Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Por qué mis mensajes necesitan ser aprobados?',
		1	=> 'La administración del foro tal vez ha decidido que los mensajes publicados en el foro, en el que estas publicando, necesiten ser revisados antes de aprobarlos. También es posible que la administración te haya ubicado en un grupo de usuarios cuyos mensajes necesitan ser revisados antes de aprobarlos. Por favor comunícate con el adminsitrador para más información al respecto.',
	),
	array(
		0	=> '¿Cómo hago para reactivar un tema?',
		1	=> 'Puede hacerlo haciendo clic sobre el enlace que dice "Reactivar tema" cuando estés viendo el mismo, puedes "reactivar" el tema al principio de la primer página. Sin embargo, si no lo visualizas, entonces el tema reactivado ha sido deshabilitado o el tiempo para poder reactivarlo no ha sido alcanzado aún. También es posible reactivar un tema respondiendo al mismo, sin embargo lee las reglas del foro antes de hacerlo.',
	),
	array(
		0	=> '--',
		1	=> 'Formatos y tipos de temas',
	),
	array(
		0	=> '¿Qué es el código BBCode?',
		1	=> 'BBcode es una implementación especial de HTML, ofrece un gran control de formato de los objetos particulares de las publicaciones. El uso de BBCode debe ser habilitado por la administración, pero también puede ser deshabilitado del cuadro de edición del Tema. BBCode a si mismo es similar en estilo al HTML, pero los tags se encuentran encerrados entre corchetes [ y ] en lugar de &lt; y &gt;. Para más información puedes ver el manual de BBCode. El enlace aparece cada vez que vas a publicar un mensaje.',
	),
	array(
		0	=> '¿Puedo usar HTML?',
		1	=> 'No. No es posibte publicar en HTML. Muchos de los formatos y acciones que se pueden ejecutar utilizando HTML pueden ser aplicados utilizando BBCodes.',
	),
	array(
		0	=> '¿Qué son los emoticones?',
		1	=> 'Los emoticones son pequeñas imagenes que pueden ser utilizadas para expresar un sentimiento con un pequeño código, e.j. :) denota felicidad, mientras que :( denota tristeza. La lista completa de emoticones pueden verse en el formulario de publicación. Tratá de no abusar del uso de emoticones, pues pueden hacer que un mensaje se vuelva muy díficil de leer y un moderador remueva el tema o los emoticones del mensaje. La administración puede fijar un límite para el número de emoticones a utilizarse en un mensaje.',
	),
	array(
		0	=> '¿Puedo publicar imágenes?',
		1	=> 'Sí, las imágenes se pueden mostrar en tus mensajes. Si la administración permite adjuntar archivos, puedes subir la imagen directamente al foro. De otra manera, debes guardar primero tu imagen en un servidor de acceso público, e.j. http://www.ejemplo.com/mi-imagen.gif. No puedes publicar imagenes que se encuentren en tu PC (a menos que sea un servidor de acceso público) ni tampoco las que se encuentren guardadas bajo mecánismos de autentificación, e.j. hotmail o yahoo correo, sitios protegidos por contraseñas, etc. Para exhibir imágenes utiliza el BBCode cuya etiqueta es [img].',
	),
	array(
		0	=> '¿Qué son los anuncios globales?',
		1	=> 'Los anuncios globales contienen información importante y deberías leerlos cada vez que sea posible. Éstos aparecerán al principio de cada foro y en el Panel de Control de Usuario. Los permisos para anuncios globales son otorgados por la administración.',
	),
	array(
		0	=> '¿Qué son los anuncios?',
		1	=> 'Los anuncios muchas veces contienen información importante sobre el foro que te encuentras leyendo y deberías leerlos cada vez que te sea posible. Los anuncios aparecen al principio de cada página en el foro donde se publicaron. Como en los anuncios globales, los permisos para anuncios son otorgados por la administración.',
	),
	array(
		0	=> '¿Qué son los temas fijos?',
		1	=> 'Los temas fijos aparecen en el foro por debajo de los anuncios y solo en la primer página. Muchas veces son importantes por lo que deberías leerlos cada vez que te sea posible. Como en los anuncios globales y anuncios, los permisos para fijar un tema son otorgados por La Administración.',
	),
	array(
		0	=> '¿Qué son los temas cerrados?',
		1	=> 'Los temas cerrados son temas donde los usuarios ya no pueden responder y las encuestas allí contenidas terminaron automáticamente. Los temas pueden ser cerrados por muchas razones. Esta decisión es tomada por la administración o un moderador. Tal vez puedas cerrar tus propios temas dependiendo de los permisos que te hayan concedido los administradores.',
	),
	array(
		0	=> '¿Qué son los iconos para los temas?',
		1	=> 'Son imagenes elegidas por el autor del tema para indicar el contenido del mismo. La posibilidad de usar iconos en los mensajes depende de los permisos otorgados por La Administración.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Niveles de usuario y grupos',
	),
	array(
		0	=> '¿Qué son los Administradores?',
		1	=> 'Los Administradores son los usuarios asignados con el mayor nivel de control sobre el foro. Estos usuarios pueden controlar todas las acciones y configuraciones del foro, incluyendo configuraciones de permisos, banneo de usuarios, creación de grupos usuarios y moderadores, etc. Dependen del fundador del foro y de los permisos que éste les ha dado. Ellos también tienen todas las capacidades de moderación en cada uno de los foros, dependiendo de las configuraciones realizadas por el fundador del Foro.',
	),
	array(
		0	=> '¿Qué son los Moderadores?',
		1	=> 'Los Moderadores son individuos (o grupos de individuos) que cuidan el foro día a día. Tienen la autoridad para editar o borrar mensajes, cerrarlos, abrirlos, moverlos, borrar y separar temas en el foro que moderan. Generalmente, los moderadores están presentes para evitar que los usuarios se salgan del tema tratado o publiquen spam y/o contenido malicioso.',
	),
	array(
		0	=> '¿Qué son los Grupos de Usuarios?',
		1	=> 'Los Grupos de Usuarios son conjuntos de usuarios que dividen a la comunidad en sectores manejables con los cuales pueden trabajar los administradores del foro. Cada usuario puede pertenecer a varios grupos y cada grupo puede tener diferentes permisos. Esto provee de una fácil manera, a los administradores, de cambiar los permisos para muchos usuarios a la vez, tales como cambiar permisos de moderador o garantizar el acceso a foros privados a los usuarios.',
	),
	array(
		0	=> '¿Dónde están los Grupos de Usuarios y cómo me puede unir a ellos?',
		1	=> 'Puedes ver todos los Grupos de usuarios a través del enlace "Grupos de Usuarios". Si deseas unirte a algún grupo, puedes proceder haciendo clic en el botón apropiado. No todos los grupos tienen libre acceso. Sin embargo, algunos requieren aprobación para poder unirse, otros están cerrados y algunos son ocultos. Si el grupo se encuentra abierto, puede unirte haciendo clic en el botón correspondiente. Si el grupo requiere de aprobación para unirse, puede solicitar la membresía haciendo clic en el botón correspondiente. El responsable del grupo deberá aprobar su solicitud y seguramente te preguntará por qué desea hacerlo. Por favor no molestes continuamente al Responsable de Grupo si rechaza su solicitud; seguramente tenga sus razones.',
	),
	array(
		0	=> '¿Cómo me convierto en Responsable del Grupo?',
		1	=> 'El Responsable de un grupo es asignado por la administración al crear el grupo. Si estás interesado en crear un grupo de usuarios, tu primer punto de contacto debe ser la administración; prueba enviandole un mensaje privado.',
	),
	array(
		0	=> '¿Por qué algunos Grupos de Usuarios aparecen en diferentes colores?',
		1	=> 'La administración del foro tiene la posibilidad de asignar un color a los usuarios de un grupo para hacer más fácil su identificación.',
	),
	array(
		0	=> '¿Qué es un "Grupo de Usuarios predeterminado"?',
		1	=> ' Si eres miembro de más de un grupo, tu grupo por defecto se usará para determinar que color y rango se mostrará por omision. La administración del Foro debe darte permisos para cambiar tu grupo por defecto mediante tu Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Qué es el enlace "El equipo"?',
		1	=> 'Esta página te provee la lista completa de los usuarios del grupo, incluyendo los administradores y moderadores del foro y otros detalles, como los foros que se encargan de moderar cada uno.',
	),
	array(
		0	=> '--',
		1	=> 'Mensajería privada',
	),
	array(
		0	=> '¡No se puede enviar un mensaje privado!',
		1	=> 'Hay tres razones posibles; no estás registrado y/o no identificado, la administración del foro ha desabilitado la opción de mensajes privados para todos los usuarios, o la administración ha deshabilidato para ti la opción de enviar mensajes. Comunícate con La Administración para más información.',
	),
	array(
		0	=> '¡Sigo recibiendo mensajes privados no deseados!',
		1	=> 'Puedes bloquear a un usuario para que no te pueda enviar mensajes dentro de las opciones del Panel de Control de Usuario. Si estás recibiendo mensajes maliciosos u ofensivos de un usuario en particular comunícate con la administración, es ella quien tiene el poder para evitar que un usuario no pueda enviar mensajes privados a todos los demás.',
	),
	array(
		0	=> '¡Recibí spam o correos maliciosos de alguien en este foro!',
		1	=> 'Lamentamos oir eso. Como característica el formulario de email incluye protectores para controlar quién ha enviado tales mensajes, por lo tanto, puedes enviarle por email a la administración del foro una copia completa del mensaje que recibiste. Es muy importante que incluyas la cabecera porque contiene los datos del usuario que envió el email. La administración puede tomar acciones.',
	),
	array(
		0	=> '--',
		1	=> 'Amigos e Ignorados',
	),
	array(
		0	=> '¿Qué es la lista de Mis Amigos e Ignorados?',
		1	=> 'Puedes utilizar la lista para organizar otros usuarios del foro. Los usuarios añadidos a tu lista de Amigos podrán verse en el Panel de Control de Usuario para un rápido acceso a ver si están identificados y poder así enviarles un mensaje privado. Según la plantilla que utilice el foro, los mensajes de estos usuarios pueden visualizarse resaltados. Si añades un usuario a tu lista de Ignorados, todos tus mensajes serán ocultados.',
	),
	array(
		0	=> '¿Cómo se pueden añadir ó borrar usuarios de mi lista de Amigos e Ignorados?',
		1	=> 'Puedes añadir usuarios a tu lista de dos maneras. En cada perfil de usuario hay un enlace para añadirlo a tu lista de Amigos y/o Ignorados. Otra alternativa es desde el Panel de Control de Usuario, añadiendo un usuario directamente ingresando su nombre. También puedes eliminar usuarios de tu lista desde esta misma página.',
	),
	array(
		0	=> '--',
		1	=> 'Búsqueda en los foros',
	),
	array(
		0	=> '¿Cómo se puede buscar en uno o varios foros?',
		1	=> 'Ingresando un término de búsqueda en el campo correspondiente del buscardor del index, foro ó en los temas. Puede acceder a búsquedas avanzadas haciendo clic en el enlace "Busqueda Avanzada" que está disponible en todas las páginas del foro. La manera de acceder a la búsqueda depende del estilo utilizado.',
	),
	array(
		0	=> '¿Por qué mi búsqueda no me devuelve un resultado?',
		1	=> 'Probablemente tu búsqueda fue muy general e incluye muchos términos comunes que no son indexados por phpBB3. Se más específico y utiliza las opciones disponibles en la búsqueda avanzada.',
	),
	array(
		0	=> '¿Por qué mi búsqueda me devuelve una página en blanco?',
		1	=> 'La búsqueda devolvió muchos resultados para ser procesados por el servidor. Utiliza "Busqueda Avanzada" y se más específico en los términos y foros a buscar.',
	),
	array(
		0	=> '¿Cómo busco usuarios?',
		1	=> 'Haz clic sobre el enlace "Usuarios" y luego en el enlace "Buscar un usuario".',
	),
	array(
		0	=> '¿Cómo se puede encontrar mis propios mensajes y temas?',
		1	=> 'Puedes encontrar tus mensajes haciendo clic en  "Mostrar mis mensajes" en el Panel de Control de Usuario o a través de tu propio perfil. Para buscar tus temas, utiliza la página de búsqueda avanzada y completa las opciones apropiadas.',
	),
	array(
		0	=> '--',
		1	=> 'Suscripción y Añadido de temas a Favoritos',
	),
	array(
		0	=> '¿Cuál es la diferencia entre añadir como Favorito y suscribirme a un tema?',
		1	=> 'Añadir un tema como Favorito en phpBB3 es como Añadir un sitio como Favorito en tu navegador. No se te avisa cuando hay una actualización o respuesta, pero puedes seguir visitando el tema para ver las modificaciones más tarde. Al suscribirte, a diferencia de añadir a Favoritos, se te avisará de diversos métodos de actualizaciones en los temas y foros que hayas seleccionado.',
	),
	array(
		0	=> '¿Cómo me suscribo a un foro o tema específico?',
		1	=> 'Para suscribirte a un foro en especial, debes hacer clic en el enlace "Suscribir Foro". Para suscribirte a un tema, debes activar la casilla "Subscribir" cuando envías una respuesta al mismo o hacer clic sobre el enlace "Subscribir tema".',
	),
	array(
		0	=> '¿Cómo borro mis suscripciones?',
		1	=> 'Para eliminar tus suscripciones, debes entrar en el Panel de Control de Usuario y hacer clic en la etiqueta "Organizar suscripciones".',
	),
	array(
		0	=> '--',
		1	=> 'Archivos Adjuntos',
	),
	array(
		0	=> '¿Qué archivos adjuntos son permitidos en este foro?',
		1	=> 'Cada foro puede permitir o no ciertos tipos de archivos adjuntos. Si no estás seguro de que tipos de archivos se pueden cargar comunícate con La Administración para obtener más información.',
	),
	array(
		0	=> '¿Cómo encuentro todos mis archivos adjuntos?',
		1	=> 'Para encontrar la lista de tus archivos adjuntos, debes entrar en el Panel de Control de Usuario y hacer clic en la etiqueta "Organizar adjuntos".',
	),
	array(
		0	=> '--',
		1	=> 'Acerca de phpBB3',
	),
	array(
		0	=> '¿Quién programó este foro?',
		1	=> 'Esta aplicación (en su forma original) es desarrollada, publicada y contiene derechos de autor pertenecientes a <a href="https://www.phpbb.com/">phpBB Group</a>. Está hecho bajo la GNU (Licencia Pública General) y es de libre distribución. Visita el enlace para más detalles.',
	),
	array(
		0	=> '¿Por qué este foro no tiene tal cosa?',
		1	=> 'Este foro fue escrito y licenciado a través de phpBB Group. Si crees que debería tener alguna otra opción o característica, por favor visita el <a href="https://www.phpbb.com/ideas/">Centro de Ideas phpBB</a>, donde puedes  	
quedar de acuerdo con ideas existentes o sugerir nuevas características.',
	),
	array(
		0	=> '¿Con quién se puede contactar acerca de abusos o usos ilegales relacionados con este foro?',
		1	=> 'Cada uno de los administradores que figuran en la lista del grupo donde dice "El Equipo" es un contacto apropiado para enviar tus quejas. Si así no obtienes respuesta deberías tratar de contactar con el dueño del dominio (efectua una <a href="http://www.google.com/search?q=whois">búsqueda whois</a>) o, si este foro tiene correo sobre un dominio gratuito (Yahoo!, gmail.com, hotmail.com, etc.), al departamento o administración de abusos de ese servicio. Por favor, ten en cuenta que el Grupo phpBB <strong>carece de cualquier tipo de control</strong> y no puede ser de ninguna manera responsable sobre cómo, dónde o por quién es usado este sistema de foros. No tiene ningún sentido contactar a el Grupo phpBB en relación a asuntos legales (difamación, responsabilidad, deformación de comentarios, etc.) que no sean con respecto al sitio phpbb.com o la discreción misma del software phpBB. Si envias un correo al Grupo phpBB <strong>respecto del uso de terceras partes</strong> de este software, debes estar dispuesto a recibir una respuesta cortante o directamente no recibir respuesta alguna.',
	),
	array(
		0 => '¿Cómo puedo ponerme en contacto con un Administrador?',
		1 => 'Todos los usuarios del foro pueden usar el formulario “Contáctenos”, si está opción ha sido habilitada por el Administrador del foro.<br />Los miembros del foro también pueden usar el enlace "El equipo".',
	),
);
